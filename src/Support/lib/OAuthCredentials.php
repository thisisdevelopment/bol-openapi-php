<?php

declare(strict_types=1);

namespace ThisIsDevelopment\OpenApi\Bol\Support;

class OAuthCredentials
{
    public function __construct(
        public string $clientId,
        public string $clientSecret
    ) {
    }
}
