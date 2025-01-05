<?php

namespace App\Http\Services;

use App\Core\Application\Application;
use ReflectionClass;
use ReflectionException;

class DependencyResolver
{
    /**
     * @throws ReflectionException
     */
    public function resolve(string $class)
    {
        $reflector = new ReflectionClass($class);

        if (!$constructor = $reflector->getConstructor()) {
            return new $class;
        }

        $parameters = $constructor->getParameters();

        $dependencies = array_map(function ($parameter) {
            $type = $parameter->getType();
            if ($type && !$type->isBuiltin()) {
                return Application::getInstance()->resolve($type->getName());
            }
            return $parameter->isDefaultValueAvailable() ? $parameter->getDefaultValue() : null;
        }, $parameters);

        return $reflector->newInstanceArgs($dependencies);
    }
}
