<?php

namespace App\Core\Pipeline;

use App\Core\Request\Request;

class Pipeline
{
    protected array $middleware = [];
    protected int $index = 0;

    protected Request $request;

    public function send($request): Pipeline
    {
        $this->request = $request;
        return $this;
    }

    public function through(array $middleware): Pipeline
    {
        $this->middleware = $middleware;
        return $this;
    }

    public function then(callable $callback)
    {
        return $this->handle($this->request, $callback);
    }

    protected function handle($request, callable $callback)
    {
        if ($this->index === count($this->middleware)) {
            return $callback($request);
        }

        $middleware = $this->middleware[$this->index++];

        return (new $middleware)->handle($request, function ($request) use ($callback) {
            return $this->handle($request, $callback);
        });
    }
}
