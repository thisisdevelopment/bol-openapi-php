<?php

declare(strict_types=1);

namespace ThisIsDevelopment\OpenApi\Bol\Support\Middleware;

use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\RequestInterface;
use RuntimeException;
use ThisIsDevelopment\OpenApi\Bol\Support\OAuthCredentials;

class BolOAuthMiddleware
{
    public const DEFAULT_AUTHENTICATION_URL = 'https://login.bol.com/token?grant_type=client_credentials';

    private string $authenticationUrl = self::DEFAULT_AUTHENTICATION_URL;

    private ?string $bearerToken = null;
    private ?DateTime $oAuthTokenExpiresAt = null;

    public function __construct(
        private Client $client,
        private OAuthCredentials $oAuthCredentials,
    ) {
    }

    public function __invoke(RequestInterface $request)
    {
        return $request->withAddedHeader(
            'Authorization',
            'Bearer ' . $this->getBearerToken()
        );
    }

    public function getBearerToken()
    {
        if (!$this->oAuthTokenValid()) {
            $this->refreshOAuthToken();
        }

        return $this->bearerToken;
    }


    private function oAuthTokenValid(): bool
    {
        if (!$this->bearerToken) {
            return false;
        }

        if ($this->oAuthTokenExpired()) {
            return false;
        }

        return true;
    }

    private function oAuthTokenExpired(): bool
    {
        if ($this->oAuthTokenExpiresAt === null) {
            return true;
        }

        if ($this->oAuthTokenExpiresAt < new DateTime('now')) {
            return true;
        }

        return false;
    }

    public function refreshOAuthToken(): void
    {
        try {
            $response = $this->client->post($this->authenticationUrl, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'auth' => [
                    $this->oAuthCredentials->clientId,
                    $this->oAuthCredentials->clientSecret,
                ]
            ]);
        } catch (RequestException $e) {
            throw new RuntimeException(
                "unable to login to bol.com with given credentials: {$e->getMessage()}",
                previous: $e
            );
        }

        $data = json_decode($response->getBody()->getContents());

        $this->bearerToken = $data->access_token;
        $this->oAuthTokenExpiresAt = new DateTime("now + {$data->expires_in} seconds");
    }
}
