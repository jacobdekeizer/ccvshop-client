<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class CategoriesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'categories/' . $id . '/'
        );
    }
    
    public function get(int $id, ?\JacobDeKeizer\Ccv\Parameters\Categories\Get $parameter = null): \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Categories\Get();
        }
        
        $result = $this->doRequest(
            self::GET,
            'categories/' . $id . '/categories/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories::fromArray($result);
    }
    
    public function all(?\JacobDeKeizer\Ccv\Parameters\Categories\All $parameter = null): \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Categories\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'categories/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Categories\Resource\Categories
    {
        $result = $this->doRequest(
            self::GET,
            'categories/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Categories\Resource\Categories::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Categories\Categories\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'categories/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Categories\Categories\Patch::fromArray($result);
    }
    
    public function create(): \JacobDeKeizer\Ccv\Models\Categories\Categories\Post
    {
        $result = $this->doRequest(
            self::POST,
            'categories/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Categories\Categories\Post::fromArray($result);
    }
}
