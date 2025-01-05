<?php

namespace App\Core\Request;

use App\Core\Validation\Validator;

class Request
{
    protected ?string $graphqlQuery = null;
    protected array $graphqlVariables = [];
    protected array $headers;
    protected string $method;
    protected string $path;
    protected Validator $validator;

    public function __construct()
    {
        $input = $this->getJsonInput();
        $this->graphqlQuery = $input['query'] ?? null;
        $this->graphqlVariables = $input['variables'] ?? [];

        $this->headers = getallheaders();
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $this->validator = $this->makeValidator();
    }

    private function getJsonInput()
    {
        return json_decode(file_get_contents('php://input'), true);
    }

    public static function capture(): self
    {
        return new self();
    }

    public function isGraphQLRequest(): bool
    {
        return !is_null($this->graphqlQuery);
    }

    public function graphqlQuery(): ?string
    {
        return $this->graphqlQuery;
    }

    public function graphqlVariables(): array
    {
        return $this->graphqlVariables;
    }

    public function graphqlVariable(string $key, $default = null)
    {
        return $this->graphqlVariables[$key] ?? $default;
    }

    public function header(string $key, $default = null)
    {
        return $this->headers[$key] ?? $default;
    }

    public function method(): string
    {
        return $this->method;
    }

    public function path(): string
    {
        return $this->path;
    }

    public function input(string $key = null, $default = null)
    {
        if ($key === null) {
            return $this->graphqlVariables;
        }

        $args = $this->extractArgumentsFromQuery();
        return $args[$key] ?? $default;
    }

    protected function extractArgumentsFromQuery(): array
    {
        if ($this->isGraphQLRequest()) {
            preg_match_all('/(\w+)\s*:\s*([^,}]+)/', $this->graphqlQuery, $matches);
            return array_map('trim', array_combine($matches[1], $matches[2]));
        }

        return [];
    }


    protected function makeValidator(): Validator
    {
        return new Validator($this);
    }

    public function validate(): bool
    {
        return $this->validator->validate($this->rules());
    }
}
