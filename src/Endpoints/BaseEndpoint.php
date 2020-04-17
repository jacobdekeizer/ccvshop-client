<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Client;

class Base
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}