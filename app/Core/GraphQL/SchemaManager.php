<?php

namespace App\Core\GraphQL;

use App\Core\Application\Application;
use App\Core\Exceptions\GraphqlError;
use App\Core\Facades\Graphql;
use App\Core\Pipeline\Pipeline;
use App\Core\Request\Request;
use App\Core\Validation\Validator;
use App\Http\Services\DependencyResolver;
use GraphQL\Type\Definition\ObjectType;

class SchemaManager
{
    protected static string $mainSchemaFile = APP_PATH . '/app/Http/GraphQL/Schema.php';
    protected static array $schemaTypes = ['query', 'mutation', 'type'];
    protected static ?SchemaManager $instance = null;
    protected DependencyResolver $resolver;
    protected Request $request;

    public function __construct(DependencyResolver $resolver)
    {
        $this->resolver = $resolver;
    }

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            $resolver = Application::getInstance()->resolve(DependencyResolver::class);
            self::$instance = new self($resolver);
        }
        return self::$instance;
    }

    public function loadSchemas(Request $request): array
    {
        $this->request = $request;
        $requestedModules = array_map('strtolower', $this->extractModulesFromQuery());
        $schemas = $this->findModuleSchemas($requestedModules);
        return $this->buildObjectTypes($schemas);
    }

    protected function findModuleSchemas(array $requestedModules): array
    {
        foreach ($requestedModules as $moduleName) {
            $schemaFile = MODULE_PATH . "/$moduleName/GraphQL/Schema.php";
            $this->includeSchema($schemaFile, $moduleName);
        }
        return Graphql::build();
    }

    protected function includeSchema(string $schemaFile, string $moduleName): void
    {
        if (file_exists($schemaFile)) {
            Graphql::group(["prefix" => $moduleName . "_"], function () use ($schemaFile) {
                require_once $schemaFile;
            });
        } else {
            require_once self::$mainSchemaFile;
        }
    }

    protected function buildObjectTypes(array $schemas): array
    {
        $objectTypes = [];
        foreach (self::$schemaTypes as $type) {
            if (!empty($schemas[$type])) {
                $objectTypes[$type] = new ObjectType([
                    'name' => ucfirst($type),
                    'fields' => ($type != 'type') ? $this->buildFields($schemas[$type]) : $schemas[$type],
                ]);
            }
        }
        return $objectTypes;
    }

    protected function buildFields(array $fieldsData): array
    {
        $fields = [];
        foreach ($fieldsData as $fieldData) {
            $fieldData["resolve"] = fn($root, $args, $context, $info) => $this->handleResolve($fieldData, $root, $args, $context, $info);
            $fields[$fieldData['name']] = $fieldData;
        }
        return $fields;
    }

    protected function handleResolve(array $fieldConfig, $root, $args, $context, $info)
    {
        $middlewares = $fieldConfig['middleware'] ?? [];
        $pipeline = new Pipeline();
        return $pipeline->send($this->request)
            ->through($middlewares)
            ->then(fn($request) => $this->afterMiddleware($fieldConfig, [
                'root' => $root,
                'args' => $args,
                'context' => $context,
                'info' => $info
            ]));
    }

    protected function afterMiddleware(array $fieldConfig, array $params)
    {
        if ($fieldConfig['validators'] ?? false) {
            $this->validate($fieldConfig['validators']);
        }

        $finalResolver = $fieldConfig['resolve'] ?? null;
        return $this->resolveAction($finalResolver, $params);
    }

    protected function validate(array $validators): void
    {
        $validationRules = $this->prepareValidationRules($validators);
        $validator = new Validator($this->request);
        if (!$validator->validate($validationRules)) {
            throw new GraphqlError("Validation Error", $validator->errors());
        }
    }

    protected function resolveAction($finalResolver, array $params)
    {
        if ($finalResolver instanceof \Closure) {
            return $this->invokeCallable($finalResolver, $params);
        }

        if (is_array($finalResolver)) {
            return $this->invokeControllerAction($finalResolver, $params);
        }

        throw new GraphqlError("Resolver Have Problem");
    }


    protected function invokeControllerAction(array $action, array $params)
    {
        [$controller, $method] = $action;
        $this->validateControllerMethod($controller, $method);
        $controllerInstance = $this->resolver->resolve($controller);
        return $this->invokeCallable([$controllerInstance, $method], $params);
    }

    protected function invokeCallable($callable, array $params)
    {
        if (is_array($callable)) {
            $reflection = new \ReflectionMethod($callable[0], $callable[1]);
            $object = is_object($callable[0]) ? $callable[0] : null;
            $dependencies = $this->resolveDependencies($reflection, $params);
            return $reflection->invokeArgs($object, $dependencies);
        }
        $reflection = new \ReflectionFunction($callable);
        $dependencies = $this->resolveDependencies($reflection, $params);
        return $reflection->invokeArgs($dependencies);
    }

    protected function resolveDependencies(\ReflectionFunctionAbstract $reflection, array $params): array
    {
        return array_map(fn($param) => $param->getType() && !$param->getType()->isBuiltin()
            ? $this->resolver->resolve($param->getType()->getName())
            : $params[$param->getName()] ?? null,
            $reflection->getParameters());
    }

    protected function validateControllerMethod(string $controller, string $method): void
    {
        if (!class_exists($controller) || !method_exists($controller, $method)) {
            throw new GraphqlError("Controller or method not found", ["controller" => "$controller@$method"]);
        }
    }

    protected function prepareValidationRules(array $validators): array
    {
        return array_filter($validators, fn($rule) => is_string($rule) || is_array($rule));
    }

    protected function extractModulesFromQuery(): array
    {
        preg_match_all('/\b([a-zA-Z0-9_]+?)_/', $this->request->graphqlQuery(), $matches);
        return array_unique($matches[1] ?? []);
    }
}
