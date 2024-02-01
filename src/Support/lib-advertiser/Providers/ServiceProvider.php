<?php

declare(strict_types=1);

namespace ThisIsDevelopment\OpenApi\Bol\Advertiser\Providers;

use ThisIsDevelopment\OpenApi\Bol\Support\Providers\AbstractServiceProvider;
use ThisIsDevelopment\OpenApi\Bol\Advertiser\Api;

class ServiceProvider extends AbstractServiceProvider
{
    private const API_CLASSES = [
        Api\ReportingApi::class,
    ];

    public function register()
    {
        $this->registerGuzzleClientForApiClasses(self::API_CLASSES);
    }
}
