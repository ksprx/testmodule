<?php

namespace App\Core\Response;

class Response
{
    protected mixed $content;
    protected int $status;
    protected array $headers = [];

    const HTTP_OK = 200;
    const HTTP_NOT_FOUND = 404;
    const HTTP_INTERNAL_SERVER_ERROR = 500;
    const HTTP_FORBIDDEN = 403;
    const HTTP_UNPROCESSABLE_ENTITY = 422;

    const HTTP_BAD_REQUEST = 400;

    public function __construct(mixed $content = '', int $status = self::HTTP_OK, array $headers = [])
    {
        header("Content-Type: application/json");
        header("Accept: application/json");
        $this->setContent($content);
        $this->setStatus($status);
        $this->setHeaders($headers);
    }

    public function setContent($content): Response
    {
        $this->content = $content;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setStatus($status): Response
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setHeaders($headers): Response
    {
        foreach ($this->headers as $name => $value) {
            $this->setHeader($name, $value);
        }
        return $this;
    }

    public function setHeader($name, $value): Response
    {
        $this->headers[$name] = $value;
        return $this;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     *
     * @param int $status
     * @param string|array $message
     *
     * @return Response
     */
    public static function abort(int $status = self::HTTP_BAD_REQUEST, string|array $message = 'Bad Request'): Response
    {
        if (is_string($message)) {
            $message = [
                'error' => $message
            ];
        }
        return new self($message, $status);
    }

    public function send(): void
    {
        foreach ($this->headers as $name => $value) {
            header("{$name}: {$value}");
        }
        http_response_code($this->status);
        echo json_encode($this->content);
    }
}
