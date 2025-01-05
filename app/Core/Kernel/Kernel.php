<?php

namespace App\Core\Kernel;


use App\Core\GraphQL\GraphQLHandler;
use App\Core\Pipeline\Pipeline;
use App\Core\Request\Request;
use App\Core\Response\Response;

class Kernel
{
    protected array $globalMiddlewares = [];
    protected array $hooks = [];

    public function __construct()
    {
        $this->loadGlobalMiddlewares();
    }

    protected function loadGlobalMiddlewares(): void
    {
        $this->globalMiddlewares = include AMADAY_PATH . '/config/middlewares.php';
    }

    public function handle(Request $request): Response
    {
        if ($request->isGraphQLRequest()) {
            $pipeline = new Pipeline();
            $response = $pipeline->send($request)
                ->through($this->globalMiddlewares)
                ->then(function ($request) {
                    return $this->handleGraphQL($request);
                });

            return $this->makeResponse($response);
        }

        return $this->defaultResponse();
    }

    protected function handleGraphQL(Request $request): Response
    {
        $graphqlHandler = new GraphQLHandler($request);
        $result = $graphqlHandler->handle($request->graphqlQuery(), $request->graphqlVariables());
        return $this->makeResponse($result);
    }

    protected function makeResponse($content, $code = Response::HTTP_OK): Response
    {
        if ($content instanceof Response) {
            return $content;
        }
        return new Response($content, $code, [
            'Content-Type' => 'application/json'
        ]);
    }

    protected function defaultResponse(): Response
    {
        // اگر درخواست گراف‌کیوال نبود، پیام خطا برمی‌گردانیم
        return new Response(['error' => 'Only GraphQL requests are supported.'], 400);
    }
}
