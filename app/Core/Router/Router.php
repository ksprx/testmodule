<?php

namespace App\Core\Router;

use App\Core\Exceptions\Exception;
use App\Core\Handler\ErrorHandler;
use App\Core\Middleware\MiddlewareHandler;
use App\Core\Request\Request;
use App\Core\Response\Response;
use App\Http\Services\DependencyResolver;

class Router
{
    protected ErrorHandler $errorHandler;
    protected MiddlewareHandler $middleware;
    protected DependencyResolver $resolver;
    protected RadixNode $routes;
    protected ?array $currentRoute = null;
    protected array $groupSettings = [];
    protected array $matches = [];

    public function __construct(DependencyResolver $resolver)
    {
        $this->errorHandler = new ErrorHandler();
        $this->middleware = new MiddlewareHandler();
        $this->resolver = $resolver;
        $this->routes = new RadixNode();
    }

    public function addRoute(string $method, string $path, $callback, array $middlewares = []): void
    {
        $middlewares = array_merge($this->groupSettings['middlewares'] ?? [], $middlewares);
        $prefix = $this->groupSettings['prefix'] ?? '';
        if ($prefix) {
            $path = $prefix . $path;
        }
        $suffix = $this->groupSettings['suffix'] ?? '';
        if ($suffix) {
            $path = $path . $suffix;
        }
        $this->routes->insert($method . ':' . $path, $path, $callback, $middlewares);
    }

    public function get(string $path, $callback)
    {
        $this->addRoute('GET', $path, $callback);
        return $this;
    }

    public function post(string $path, $callback)
    {
        $this->addRoute('POST', $path, $callback);
        return $this;
    }

    public function put(string $path, $callback)
    {
        $this->addRoute('PUT', $path, $callback);
        return $this;
    }

    public function patch(string $path, $callback)
    {
        $this->addRoute('PATCH', $path, $callback);
        return $this;
    }

    public function delete(string $path, $callback)
    {
        $this->addRoute('DELETE', $path, $callback);
        return $this;
    }

    public function options(string $path, $callback)
    {
        $this->addRoute('OPTIONS', $path, $callback);
        return $this;
    }

    public function head(string $path, $callback)
    {
        $this->addRoute('HEAD', $path, $callback);
        return $this;
    }

    public function middleware(array $middlewares)
    {
        $this->groupSettings['middlewares'] = array_merge($this->groupSettings['middlewares'] ?? [], $middlewares);
        return $this;
    }

    public function prefix(string $prefix)
    {
        $this->groupSettings['prefix'] = str_starts_with($prefix, '/') ? $prefix : '/' . $prefix;
        return $this;
    }

    public function suffix(string $suffix)
    {
        $this->groupSettings['suffix'] = str_starts_with($suffix, '/') ? $suffix : '/' . $suffix;
        return $this;
    }

    public function group(array $settings, callable $callback)
    {
        if (isset($settings['prefix'])) {
            $settings['prefix'] = str_starts_with($settings['prefix'], '/') ? $settings['prefix'] : '/' . $settings['prefix'];
        }
        if (isset($settings['suffix'])) {
            $settings['suffix'] = str_starts_with($settings['suffix'], '/') ? $settings['suffix'] : '/' . $settings['suffix'];
        }
        $previousSettings = $this->groupSettings;
        $this->groupSettings = array_merge($this->groupSettings, $settings);
        $callback($this);
        $this->groupSettings = $previousSettings;
        return $this;
    }

    /**
     * @throws Exception
     * @throws \ReflectionException
     */
    public function dispatch(Request $request)
    {
        $method = strtoupper($request->method());
        $path = $request->path();
        $routeKey = $method . ':' . $path;

        $route = $this->routes->search($routeKey, $path);

        if ($route) {
            $this->currentRoute = $route;
            $params = $this->extractRouteParameters();
            $action = $route['callback'];

            foreach ($route['middlewares'] as $middleware) {
                $middlewareInstance = $this->resolver->resolve($middleware);
                $response = $middlewareInstance->handle($request, function (Request $request) use ($action, $params) {
                    if ($action instanceof \Closure) {
                        return $this->invokeAction($action, $params);
                    }

                    return $this->invokeControllerAction($action, $params);
                });

                if ($response instanceof Response) {
                    return $response;
                }
            }

            if ($action instanceof \Closure) {
                return $this->invokeAction($action, $params);
            }

            if (is_array($action)) {
                return $this->invokeControllerAction($action, $params);
            }
        }

        return new Response(['error' => 'Route not found', 'status' => 404]);
    }

    protected function extractRouteParameters(): array
    {
        return array_filter($this->matches, fn($key) => !is_int($key), ARRAY_FILTER_USE_KEY);
    }

    public function findCurrentRoute(Request $request)
    {
        $method = strtoupper($request->method());
        $path = rtrim($request->path(), '/');
        $routeKey = $method . ':' . $path;
        return $this->routes->search($routeKey, $path);
    }

    public function getCurrentRoute(): ?array
    {
        return $this->currentRoute;
    }

    public function getMiddlewares(): array
    {
        return $this->currentRoute['middlewares'] ?? [];
    }

    protected function invokeAction($action, array $params)
    {
        $reflectionFunction = new \ReflectionFunction($action);
        $dependencies = [];

        foreach ($reflectionFunction->getParameters() as $parameter) {
            $type = $parameter->getType();
            if ($type && !$type->isBuiltin()) {
                $dependencies[] = $this->resolver->resolve($type->getName());
            } else {
                $dependencies[] = $params[$parameter->getName()] ?? null;
            }
        }

        return $reflectionFunction->invokeArgs($dependencies);

    }

    protected function invokeControllerAction(array $action, array $params)
    {
        [$controller, $method] = $action;

        if (!class_exists($controller) || !method_exists($controller, $method)) {
            throw new Exception("Controller or method not found: $controller@$method");
        }

        $controllerInstance = $this->resolver->resolve($controller);

        $reflectionMethod = new \ReflectionMethod($controllerInstance, $method);
        $dependencies = [];

        foreach ($reflectionMethod->getParameters() as $parameter) {
            $type = $parameter->getType();
            if ($type && !$type->isBuiltin()) {
                $dependencies[] = $this->resolver->resolve($type->getName());
            } else {
                $dependencies[] = $params[$parameter->getName()] ?? null;
            }
        }

        return $reflectionMethod->invokeArgs($controllerInstance, $dependencies);
    }

    public function getAllRoutes(): array
    {
        $routes = [];
        $this->collectRoutes($this->routes, $routes);
        return $routes;
    }

    protected function collectRoutes(RadixNode $node, array &$routes): void
    {
        foreach ($node->children as $child) {
            if (!empty($child->methods)) {
                foreach ($child->methods as $method => $data) {
                    $routes[] = [
                        'method' => $method,
                        'path' => implode('/', array_filter([$child->pathSegment])),
                        'callback' => $data['callback'],
                    ];
                }
            }

            $this->collectRoutes($child, $routes);
        }
    }

}
