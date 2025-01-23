<?php

namespace App\Core\Request;

use App\Core\Validation\Validator;

class Request
{
    protected ?string $graphqlQuery = null;
    protected array $graphqlVariables = [];

    protected array $query = [];
    protected array $data = [];
    protected array $headers;
    protected string $method;
    protected string $path;
    protected Validator $validator;

    private static ?self $instance = null;

    private function __construct()
    {
        $input = $this->getJsonInput();
        $this->graphqlQuery = $input['query'] ?? null;
        $this->graphqlVariables = $input['variables'] ?? [];

        $data = $input ? array_merge($_POST, $input) : $_POST;
        $this->data = $data;
        $this->query = $_GET ?? [];

        $this->headers = getallheaders();
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $this->validator = $this->makeValidator();
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function capture(): self
    {
        return self::getInstance();
    }

    private function getJsonInput(): array
    {
        $input = file_get_contents('php://input');
        if (empty($input)) {
            return [];
        }

        $data = json_decode($input, true);
        return is_array($data) ? $data : [];
    }

    public function isGraphQLRequest(): bool
    {
        return !empty($this->graphqlQuery);
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
        if (!$this->isGraphQLRequest()) {
            return $default;
        }

        return $this->graphqlVariables[$key] ?? $default;
    }

    public function header(string $key, $default = null)
    {
        $key = strtolower($key);
        $headers = array_change_key_case($this->headers, CASE_LOWER);
        return $headers[$key] ?? $default;
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
        if ($this->isGraphQLRequest()) {
            $args = $this->graphqlVariables;
        } else {
            $args = array_merge($_GET, $_POST);
        }

        if ($key === null) {
            return $args;
        }

        return $args[$key] ?? $default;
    }

    public function query($key, $default = null)
    {
        return $this->query[$key] ?? $default;
    }


    protected function makeValidator(): Validator
    {
        return new Validator($this);
    }

    public function validate(array $rules): bool
    {
        return $this->validator->validate($rules);
    }

    public function getValidatetor(): Validator
    {
        return $this->validator;
    }
}