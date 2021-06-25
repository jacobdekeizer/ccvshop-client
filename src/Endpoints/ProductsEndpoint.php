<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'products/' . $id . '/'
        );
    }
    
    public function allFromBrands(int $id, ?\JacobDeKeizer\Ccv\Parameters\Products\AllFromBrands $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromBrands();
        }
        
        $result = $this->doRequest(
            self::GET,
            'brands/' . $id . '/products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    public function allFromWebshops(int $id, ?\JacobDeKeizer\Ccv\Parameters\Products\AllFromWebshops $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromWebshops();
        }
        
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    public function all(?\JacobDeKeizer\Ccv\Parameters\Products\All $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Products\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    public function get(int $id, ?\JacobDeKeizer\Ccv\Parameters\Products\Get $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Resource\Products
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Products\Get();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Resource\Products::fromArray($result);
    }
    
    public function allFromCategories(int $id, ?\JacobDeKeizer\Ccv\Parameters\Products\AllFromCategories $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromCategories();
        }
        
        $result = $this->doRequest(
            self::GET,
            'categories/' . $id . '/products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    public function allFromConditions(int $id, ?\JacobDeKeizer\Ccv\Parameters\Products\AllFromConditions $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromConditions();
        }
        
        $result = $this->doRequest(
            self::GET,
            'conditions/' . $id . '/products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    public function allFromSuppliers(int $id, ?\JacobDeKeizer\Ccv\Parameters\Products\AllFromSuppliers $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromSuppliers();
        }
        
        $result = $this->doRequest(
            self::GET,
            'suppliers/' . $id . '/products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Products\Products\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'products/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Products\Patch::fromArray($result);
    }
    
    public function create(): \JacobDeKeizer\Ccv\Models\Products\Products\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Products\Post::fromArray($result);
    }
}
