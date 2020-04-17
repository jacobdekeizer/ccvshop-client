<?php

namespace JacobDeKeizer\Ccv;

use GuzzleHttp\Client as HttpClient;
use JacobDeKeizer\Ccv\Endpoints;

class Client
{
    public const API_VERSION = 'v1';
    public const API_ENDPOINT = '/api/rest/';

    /** @var string */
    private $baseUrl;

    /** @var string */
    private $publicKey;

    /** @var string */
    private $privateKey;

    /** @var HttpClient */
    private $client;

    /** @var Endpoints\OrdersEndpoint */
    private $ordersEndpoint;

    public function __construct()
    {
        $this->ordersEndpoint = new Endpoints\OrdersEndpoint($this);
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): Client
    {
        $this->baseUrl = $baseUrl;
        $this->setClient(new HttpClient([
            'base_uri' => $baseUrl,
        ]));
        return $this;
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function setPublicKey(string $publicKey): Client
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }

    public function setPrivateKey(string $privateKey): Client
    {
        $this->privateKey = $privateKey;
        return $this;
    }

    public function getClient(): HttpClient
    {
        return $this->client;
    }

    public function setClient(HttpClient $client): Client
    {
        $this->client = $client;
        return $this;
    }

    public function orders(): Endpoints\OrdersEndpoint
    {
        return $this->ordersEndpoint;
    }
}
