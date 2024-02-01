<?php

declare(strict_types=1);

namespace ThisIsDevelopment\OpenApi\Bol\Shared\Providers;

use ThisIsDevelopment\OpenApi\Bol\Support\Providers\AbstractServiceProvider;
use ThisIsDevelopment\OpenApi\Bol\Shared\Api;

class ServiceProvider extends AbstractServiceProvider
{
    private const API_CLASSES = [
        Api\ProcessStatusApi::class,
    ];

    public function register()
    {
        $this->registerGuzzleClientForApiClasses(self::API_CLASSES);
    }
}
