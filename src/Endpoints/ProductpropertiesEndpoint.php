<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductpropertiesEndpoint extends BaseEndpoint
{
    /**
     * Delete a product attachment. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productproperties/' . $id . '/',
        );
    }
    
    /**
     * Get all product properties that belongs too this product property group. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProductpropertygroups(int $id): \JacobDeKeizer\Ccv\Models\Productproperties\Collection\Productproperties
    {
        $result = $this->doRequest(
            self::GET,
            'productpropertygroups/' . $id . '/productproperties/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productproperties\Collection\Productproperties::fromArray($result);
    }
    
    /**
     * Get one product property. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productproperties\Resource\Productproperties
    {
        $result = $this->doRequest(
            self::GET,
            'productproperties/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productproperties\Resource\Productproperties::fromArray($result);
    }
    
    /**
     * Patch a product Product property group. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Productproperties\Productproperties\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productproperties/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Create a new product property that belongs too a product property group. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromProductpropertygroups(int $id, \JacobDeKeizer\Ccv\Models\Productproperties\Productproperties\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Productproperties\Resource\Productproperties
    {
        $result = $this->doRequest(
            self::POST,
            'productpropertygroups/' . $id . '/productproperties/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Productproperties\Resource\Productproperties::fromArray($result);
    }
}
