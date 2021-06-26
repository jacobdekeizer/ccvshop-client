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
    public function allFromBrands(int $id, \JacobDeKeizer\Ccv\Parameters\Products\AllFromBrands $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromBrands();
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
    public function allFromWebshops(int $id, \JacobDeKeizer\Ccv\Parameters\Products\AllFromWebshops $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromWebshops();
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
    public function allFromCategories(int $id, \JacobDeKeizer\Ccv\Parameters\Products\AllFromCategories $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromCategories();
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
    public function allFromConditions(int $id, \JacobDeKeizer\Ccv\Parameters\Products\AllFromConditions $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromConditions();
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
    public function allFromSuppliers(int $id, \JacobDeKeizer\Ccv\Parameters\Products\AllFromSuppliers $parameter = null): \JacobDeKeizer\Ccv\Models\Products\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Products\AllFromSuppliers();
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
    public function create(\JacobDeKeizer\Ccv\Models\Products\Products\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'products/',
            $model->toArray($onlyFilled)
        );
    }
}
