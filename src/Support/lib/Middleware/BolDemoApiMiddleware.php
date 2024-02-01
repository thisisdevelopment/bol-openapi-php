<?php

declare (strict_types=1);

namespace ThisIsDevelopment\OpenApi\Bol\Support\Middleware;

use Psr\Http\Message\RequestInterface;
use RuntimeException;

class BolDemoApiMiddleware
{
    public function __invoke(RequestInterface $request)
    {
        $request = $request->withUri(
            $request->getUri()->withPath(
                preg_replace(
                    '/^\/([^\/]+)\//',
                    '/$1-demo/',
                    $request->getUri()->getPath()
                )
            )
        );

        // A little safety net
        if (false === strpos($request->getUri()->getPath(), '-demo') ) {
            throw new RuntimeException('expected "-demo" in path somewhere: ' . $request->getUri()->getPath());
        }

        return $request;
    }
}
