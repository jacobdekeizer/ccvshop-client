<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class WebshopsEndpoint extends BaseEndpoint
{
    public function allFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Webshops\Collection\Webshops
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/webshops/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Webshops\Collection\Webshops::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Webshops\Resource\Webshops
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Webshops\Resource\Webshops::fromArray($result);
    }
    
    public function all(): \JacobDeKeizer\Ccv\Models\Webshops\Collection\Webshops
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Webshops\Collection\Webshops::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Webshops\Collection\Webshops
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/webshops/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Webshops\Collection\Webshops::fromArray($result);
    }
    
    public function createFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Webshops\Webhshops\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/webshops/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Webshops\Webhshops\Post::fromArray($result);
    }
    
    public function updateFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Webshops\Webhshops\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'products/' . $id . '/webshops/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Webshops\Webhshops\Put::fromArray($result);
    }
}
