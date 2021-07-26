<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductsEndpoint extends BaseEndpoint
{
    /**
     * Delete a product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'products/' . $id . '/',
        );
    }
    
    /**
     * Retrieve all products of the webshop in the parent category. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromBrand(int $id, \JacobDeKeizer\Ccv\Parameters\Products\AllFromBrand $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromBrand();
        }
        
        $result = $this->doRequest(
            self::GET,
            'brands/' . $id . '/products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    /**
     * Retrieve all products of the webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromWebshop(int $id, \JacobDeKeizer\Ccv\Parameters\Products\AllFromWebshop $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromWebshop();
        }
        
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    /**
     * Retrieve all products of the webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Products\All $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    /**
     * Get one product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id, \JacobDeKeizer\Ccv\Parameters\Products\Get $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Resource\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\Get();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Resource\Products::fromArray($result);
    }
    
    /**
     * Retrieve all products of the webshop in the parent category. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromCategory(int $id, \JacobDeKeizer\Ccv\Parameters\Products\AllFromCategory $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromCategory();
        }
        
        $result = $this->doRequest(
            self::GET,
            'categories/' . $id . '/products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    /**
     * Retrieve all products of the webshop in the parent category. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromCondition(int $id, \JacobDeKeizer\Ccv\Parameters\Products\AllFromCondition $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromCondition();
        }
        
        $result = $this->doRequest(
            self::GET,
            'conditions/' . $id . '/products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    /**
     * Retrieve all products of the webshop in the parent category. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromSupplier(int $id, \JacobDeKeizer\Ccv\Parameters\Products\AllFromSupplier $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromSupplier();
        }
        
        $result = $this->doRequest(
            self::GET,
            'suppliers/' . $id . '/products/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Collection\Products::fromArray($result);
    }
    
    /**
     * Patch a product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Products\Products\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'products/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Products\Products\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Products\Resource\Products
    {
        $result = $this->doRequest(
            self::POST,
            'products/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Products\Resource\Products::fromArray($result);
    }
}
