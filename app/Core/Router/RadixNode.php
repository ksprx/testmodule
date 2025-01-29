<?php

namespace App\Core\Router;

class RadixNode
{
    public array $children = [];
    public ?string $pathSegment = null;
    public array $methods = [];
    public $callback = null;
    public array $middlewares = [];
    public array $params = [];

    public function __construct(string $pathSegment = null)
    {
        $this->pathSegment = $pathSegment;
        $this->children = [];
        $this->methods = [];
        $this->callback = null;
        $this->middlewares = [];
        $this->params = [];
    }

    public function insert(string $method, string $path, $callback, array $middlewares = []): void
    {
        $path = rtrim($path, '/') ?: '/';
        $parts = explode(':', $method, 2);
        $method = $parts[0] . ':' . (isset($parts[1]) && $parts[1] === '/'
                ? '/'
                : rtrim(str_replace("//", "/", $parts[1] ?? ''), '/'));
        $segments = $this->splitPath($path);
        $currentNode = $this;

        foreach ($segments as $segment) {
            if (!isset($currentNode->children[$segment])) {
                $currentNode->children[$segment] = new RadixNode($segment);
            }
            $currentNode = $currentNode->children[$segment];
        }
        $currentNode->methods[$method] = [
            'callback' => $callback,
            'middlewares' => $middlewares,
        ];
    }

    public function search(string $method, string $path): ?array
    {
        $path = rtrim($path, '/') ?: '/';
        $segments = $this->splitPath($path);
        $currentNode = $this;
        $params = [];
        foreach ($segments as $segment) {
            if (isset($currentNode->children[$segment])) {
                $currentNode = $currentNode->children[$segment];
            } else {
                $paramNode = $this->matchDynamicSegment($currentNode->children, $segment);
                if ($paramNode) {
                    $currentNode = $paramNode;
                    $params[$this->extractParamName($paramNode->pathSegment)] = $segment;
                } else {
                    return null;
                }
            }
        }

        foreach ($currentNode->methods as $storedMethod => $data) {
            $storedPath = explode(':', $storedMethod, 2)[1] ?? '';
            $storedSegments = $this->splitPath($storedPath);

            if (count($segments) === count($storedSegments)) {
                $match = true;
                foreach ($storedSegments as $index => $storedSegment) {
                    if ($this->isDynamicSegment($storedSegment)) {
                        continue;
                    }
                    if ($storedSegment !== $segments[$index]) {
                        $match = false;
                        break;
                    }
                }

                if ($match) {
                    return [
                        'callback' => $data['callback'],
                        'middlewares' => $data['middlewares'],
                        'params' => $params,
                    ];
                }
            }
        }

        return null;
    }

    private function matchDynamicSegment(array $children, string $segment): ?RadixNode
    {
        foreach ($children as $child) {
            if ($this->isDynamicSegment($child->pathSegment)) {
                return $child;
            }
        }
        return null;
    }

    private function isDynamicSegment(?string $segment): bool
    {
        return $segment && strpos($segment, '{') === 0 && strpos($segment, '}') === strlen($segment) - 1;
    }

    private function extractParamName(string $segment): string
    {
        return trim($segment, '{}');
    }

    private function splitPath(string $path): array
    {
        return array_filter(explode('/', trim($path, '/')));
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares ?? [];
    }
}
