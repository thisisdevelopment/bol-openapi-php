<?php

declare(strict_types=1);

namespace ThisIsDevelopment\OpenApi\Bol\Retailer\Providers;

use ThisIsDevelopment\OpenApi\Bol\Support\Providers\AbstractServiceProvider;
use ThisIsDevelopment\OpenApi\Bol\Retailer\Api;

class ServiceProvider extends AbstractServiceProvider
{
    private const API_CLASSES = [
        Api\CommissionsApi::class,
        Api\InsightsApi::class,
        Api\InventoryApi::class,
        Api\InvoicesApi::class,
        Api\OffersApi::class,
        Api\OrdersApi::class,
        Api\ProductContentApi::class,
        Api\PromotionsApi::class,
        Api\ReplenishmentsApi::class,
        Api\ReturnsApi::class,
        Api\ShipmentsApi::class,
        Api\ShippingLabelsApi::class,
        Api\SubscriptionsApi::class,
        Api\TransportsApi::class,
    ];

    public function register()
    {
        $this->registerGuzzleClientForApiClasses(self::API_CLASSES);
    }
}
