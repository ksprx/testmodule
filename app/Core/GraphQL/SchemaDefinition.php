<?php

namespace App\Core\GraphQL;

use GraphQL\Type\Definition\Type;

class SchemaDefinition
{
    protected string $name;
    protected Type $type;
    protected array $args = [];
    protected array $middleware = [];
    protected array $validators = [];
    protected $resolve;

    /**
     * Constructor to initialize SchemaDefinition
     *
     * @param string $name
     * @param callable $resolver
     * @param array|null $group
     */
    public function __construct(string $name, $resolver, array $group = null)
    {
        $this->resolve = $resolver;

        if ($group) {
            $prefix = $group['prefix'] ?? '';
            $this->name = $prefix ? strtolower($prefix) . $name : $name;
            $this->middlewares($group['middleware'] ?? []);
        } else {
            $this->name = $name;
        }
    }

    /**
     * Set the return type for the schema field
     *
     * @param Type $returnType
     * @return $this
     */
    public function type(Type $returnType): self
    {
        $this->type = $returnType;
        return $this;
    }

    /**
     * Add an argument to the schema field
     *
     * @param string $name
     * @param Type $type
     * @param string|array $validate
     * @return $this
     */
    public function argument(string $name, Type $type, string|array $validate = []): self
    {
        $this->args[$name] = $type;
        if ($validate) {
            $this->validators[$name] = $validate;
        }
        return $this;
    }

    /**
     * Add middlewares to the schema field
     *
     * @param array $middleware
     * @return $this
     */
    public function middlewares(array $middleware): self
    {
        $this->middleware = array_merge($this->middleware, $middleware);
        return $this;
    }

    /**
     * Set validation rules for the schema field
     *
     * @param string|array $rules
     * @return $this
     */
    public function validates(string|array $rules): self
    {
        $this->validators = $rules;
        return $this;
    }

    /**
     * Convert schema definition to array format for GraphQL
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'type' => $this->type,
            'args' => $this->args,
            'middleware' => $this->middleware,
            'validators' => $this->validators,
            'resolve' => $this->resolve,
        ];
    }
}
