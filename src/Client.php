<?php

namespace JacobDeKeizer\Ccv;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\ClientInterface;
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

    /** @var ClientInterface */
    private $client;

    public function __construct()
    {
        $this->client = new HttpClient();
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): Client
    {
        $this->baseUrl = $baseUrl;
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

    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    public function setClient(ClientInterface $client): Client
    {
        $this->client = $client;
        return $this;
    }

    public function root(): Endpoints\RootEndpoint
    {
        return new Endpoints\RootEndpoint($this);
    }

    public function apps(): Endpoints\AppsEndpoint
    {
        return new Endpoints\AppsEndpoint($this);
    }

    public function categories(): Endpoints\CategoriesEndpoint
    {
        return new Endpoints\CategoriesEndpoint($this);
    }

    public function orders(): Endpoints\OrdersEndpoint
    {
        return new Endpoints\OrdersEndpoint($this);
    }

    public function orderrows(): Endpoints\OrderrowsEndpoint
    {
        return new Endpoints\OrderrowsEndpoint($this);
    }

    public function products(): Endpoints\ProductsEndpoint
    {
        return new Endpoints\ProductsEndpoint($this);
    }

    public function productphotos(): Endpoints\ProductphotosEndpoint
    {
        return new Endpoints\ProductphotosEndpoint($this);
    }

    public function producttocategories(): Endpoints\ProducttocategoriesEndpoint
    {
        return new Endpoints\ProducttocategoriesEndpoint($this);
    }

    public function attributes(): Endpoints\AttributesEndpoint
    {
        return new Endpoints\AttributesEndpoint($this);
    }

    public function attributevalues(): Endpoints\AttributevaluesEndpoint
    {
        return new Endpoints\AttributevaluesEndpoint($this);
    }

    public function productattributevalues(): Endpoints\ProductattributevaluesEndpoint
    {
        return new Endpoints\ProductattributevaluesEndpoint($this);
    }

    public function invoices(): Endpoints\InvoicesEndpoint
    {
        return new Endpoints\InvoicesEndpoint($this);
    }

    public function ordernotifications(): Endpoints\OrdernotificationsEndpoint
    {
        return new Endpoints\OrdernotificationsEndpoint($this);
    }

    public function suppliers(): Endpoints\SuppliersEndpoint
    {
        return new Endpoints\SuppliersEndpoint($this);
    }

    public function packages(): Endpoints\PackagesEndpoint
    {
        return new Endpoints\PackagesEndpoint($this);
    }

    public function webhooks(): Endpoints\WebhooksEndpoint
    {
        return new Endpoints\WebhooksEndpoint($this);
    }
}
