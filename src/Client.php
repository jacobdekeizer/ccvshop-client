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

    /** @var Endpoints\RootEndpoint */
    private $rootEndpoint;

    /** @var Endpoints\CategoriesEndpoint */
    private $categoriesEndpoint;

    /** @var Endpoints\OrdersEndpoint */
    private $ordersEndpoint;

    /** @var Endpoints\OrderrowsEndpoint */
    private $orderrowsEndpoint;

    /** @var Endpoints\ProductsEndpoint */
    private $productsEndpoint;

    /** @var Endpoints\ProductphotosEndpoint */
    private $productphotosEndpoint;

    /** @var Endpoints\ProducttocategoriesEndpoint */
    private $producttocategoriesEndpoint;

    /** @var Endpoints\AttributesEndpoint */
    private $attributesEndpoint;

    /** @var Endpoints\AttributevaluesEndpoint */
    private $attributevaluesEndpoint;

    /** @var Endpoints\ProductattributevaluesEndpoint */
    private $productattributevaluesEndpoint;

    /** @var Endpoints\InvoicesEndpoint */
    private $invoicesEndpoint;

    /** @var Endpoints\OrdernotificationsEndpoint */
    private $ordernotificationsEndpoint;

    public function __construct()
    {
        $this->client = new HttpClient();
        $this->rootEndpoint = new Endpoints\RootEndpoint($this);
        $this->categoriesEndpoint = new Endpoints\CategoriesEndpoint($this);
        $this->ordersEndpoint = new Endpoints\OrdersEndpoint($this);
        $this->orderrowsEndpoint = new Endpoints\OrderrowsEndpoint($this);
        $this->productsEndpoint = new Endpoints\ProductsEndpoint($this);
        $this->productphotosEndpoint = new Endpoints\ProductphotosEndpoint($this);
        $this->producttocategoriesEndpoint = new Endpoints\ProducttocategoriesEndpoint($this);
        $this->attributesEndpoint = new Endpoints\AttributesEndpoint($this);
        $this->attributevaluesEndpoint = new Endpoints\AttributevaluesEndpoint($this);
        $this->productattributevaluesEndpoint = new Endpoints\ProductattributevaluesEndpoint($this);
        $this->invoicesEndpoint = new Endpoints\InvoicesEndpoint($this);
        $this->ordernotificationsEndpoint = new Endpoints\OrdernotificationsEndpoint($this);
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
        return $this->rootEndpoint;
    }

    public function categories(): Endpoints\CategoriesEndpoint
    {
        return $this->categoriesEndpoint;
    }

    public function orders(): Endpoints\OrdersEndpoint
    {
        return $this->ordersEndpoint;
    }

    public function orderrows(): Endpoints\OrderrowsEndpoint
    {
        return $this->orderrowsEndpoint;
    }

    public function products(): Endpoints\ProductsEndpoint
    {
        return $this->productsEndpoint;
    }

    public function productphotos(): Endpoints\ProductphotosEndpoint
    {
        return $this->productphotosEndpoint;
    }

    public function producttocategories(): Endpoints\ProducttocategoriesEndpoint
    {
        return $this->producttocategoriesEndpoint;
    }

    public function attributes(): Endpoints\AttributesEndpoint
    {
        return $this->attributesEndpoint;
    }

    public function attributevalues(): Endpoints\AttributevaluesEndpoint
    {
        return $this->attributevaluesEndpoint;
    }

    public function productattributevalues(): Endpoints\ProductattributevaluesEndpoint
    {
        return $this->productattributevaluesEndpoint;
    }

    public function invoices(): Endpoints\InvoicesEndpoint
    {
        return $this->invoicesEndpoint;
    }

    public function ordernotifications(): Endpoints\OrdernotificationsEndpoint
    {
        return $this->ordernotificationsEndpoint;
    }
}
