<?php

namespace App\Http\Services;

use Exception;
use ReflectionException;

class ServiceContainer
{
    protected array $bindings = [];
    protected array $instances = [];

    /**
     * Bind Class or Interface to Container
     *
     * @param string $abstract
     * @param callable|string $concrete
     */
    public function bind(string $abstract, callable|string $concrete): void
    {
        $this->bindings[$abstract] = $concrete;
    }

    public function singleton(string $abstract, callable|string $concrete): void
    {
        if (!isset($this->instances[$abstract])) {
            $this->instances[$abstract] = is_callable($concrete) ? $concrete() : new $concrete();
        }
    }

    /**
     * Resolve Class or Interface from Container
     *
     * @param string $abstract
     * @return mixed
     * @throws Exception
     */
    public function resolve(string $abstract): mixed
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }
        if (isset($this->bindings[$abstract])) {
            $concrete = $this->bindings[$abstract];
            return is_callable($concrete) ? $concrete($this) : new $concrete;
        }

        if (class_exists($abstract)) {
            return $this->build($abstract);
        }

        throw new \Exception("No binding found for {$abstract}");
    }

    /**
     * @throws ReflectionException
     * @throws Exception
     */
    protected function build(string $concrete)
    {
        $reflectionClass = new \ReflectionClass($concrete);
        $constructor = $reflectionClass->getConstructor();

        if (is_null($constructor)) {
            return new $concrete;
        }

        $parameters = $constructor->getParameters();
        $dependencies = array_map(function ($parameter) {
            $type = $parameter->getType();
            if ($type && !$type->isBuiltin()) {
                $dependencyClassName = $type->getName();
                return $this->resolve($dependencyClassName);
            }
            return null;
        }, $parameters);

        return $reflectionClass->newInstanceArgs($dependencies);
    }
}
