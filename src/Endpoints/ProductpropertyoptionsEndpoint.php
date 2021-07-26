<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductpropertyoptionsEndpoint extends BaseEndpoint
{
    /**
     * Delete a Product property option. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productpropertyoptions/' . $id . '/',
        );
    }
    
    /**
     * Get all product property options that belong to this property. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProductproperty(int $id): \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Collection\Productpropertyoptions
    {
        $result = $this->doRequest(
            self::GET,
            'productproperties/' . $id . '/productpropertyoptions/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Collection\Productpropertyoptions::fromArray($result);
    }
    
    /**
     * Get one Product property option. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Resource\Productpropertyoptions
    {
        $result = $this->doRequest(
            self::GET,
            'productpropertyoptions/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Resource\Productpropertyoptions::fromArray($result);
    }
    
    /**
     * Patch a product Product property option. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Productpropertyoptions\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productpropertyoptions/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a product property options that belong to this property. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createForProductproperty(int $id, \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Productpropertyoptions\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Resource\Productpropertyoptions
    {
        $result = $this->doRequest(
            self::POST,
            'productproperties/' . $id . '/productpropertyoptions/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Resource\Productpropertyoptions::fromArray($result);
    }
}
