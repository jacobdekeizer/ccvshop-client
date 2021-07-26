<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductpropertyvaluesEndpoint extends BaseEndpoint
{
    /**
     * Delete a product property value. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productpropertyvalues/' . $id . '/',
        );
    }
    
    /**
     * Get one product property value. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Resource\Productpropertyvalues
    {
        $result = $this->doRequest(
            self::GET,
            'productpropertyvalues/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Resource\Productpropertyvalues::fromArray($result);
    }
    
    /**
     * Patch a product Product property value. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Productpropertyvalues\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productpropertyvalues/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a product property value. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Productpropertyvalues\Productpropertyvalues\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Resource\Productpropertyvalues
    {
        $result = $this->doRequest(
            self::POST,
            'productpropertyvalues/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Resource\Productpropertyvalues::fromArray($result);
    }
}
