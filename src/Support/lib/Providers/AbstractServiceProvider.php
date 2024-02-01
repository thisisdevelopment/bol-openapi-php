<?php

declare(strict_types=1);

namespace ThisIsDevelopment\OpenApi\Bol\Support\Providers;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Utils;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use GuzzleHttp\Middleware as GuzzleHttpMiddleware;
use Psr\Http\Message\RequestInterface;
use ThisIsDevelopment\OpenApi\Bol\Support\Middleware\BolDemoApiMiddleware;
use ThisIsDevelopment\OpenApi\Bol\Support\Middleware\BolOAuthMiddleware;

abstract class AbstractServiceProvider extends IlluminateServiceProvider
{
    protected function registerGuzzleClientForApiClasses(array $apiClasses)
    {
        $client = $this->makeClient();

        $this->app->when($apiClasses)
                  ->needs(ClientInterface::class)
                  ->give(fn() => $client);
    }

    private function makeClient(): Client
    {
        $stack = new HandlerStack();
        $stack->setHandler(Utils::chooseHandler());

        if (!app()->environment('production')) {
            $stack->push(GuzzleHttpMiddleware::mapRequest(
                app()->make(BolDemoApiMiddleware::class)
            ));
        }

        $stack->push(GuzzleHttpMiddleware::mapRequest(
            app()->make(BolOAuthMiddleware::class)
        ));

        // todo there must be a better way, but the generated api sends multiple content-types,
        // ... because bol indicates it supports multiple content-types :facepalm:
        $stack->push(GuzzleHttpMiddleware::mapRequest(
            function(RequestInterface $r) {
                return $r->withHeader(
                    'Content-Type',
                    explode(',', $r->getHeader('Content-Type')[0])[0]
                );
            }
        ));

        return new Client([
            'handler' => $stack,
        ]);
    }
}
