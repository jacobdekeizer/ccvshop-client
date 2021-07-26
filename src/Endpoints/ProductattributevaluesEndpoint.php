<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductattributevaluesEndpoint extends BaseEndpoint
{
    /**
     * Delete a product attribute value. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productattributevalues/' . $id . '/',
        );
    }
    
    /**
     * Get all attribute values of this product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProducts(int $id, \JacobDeKeizer\Ccv\Parameters\Productattributevalues\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productattributevalues\Collection\Productattributevalues
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Productattributevalues\AllFromProducts();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productattributevalues/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Productattributevalues\Collection\Productattributevalues::fromArray($result);
    }
    
    /**
     * Get one attribute value. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productattributevalues\Resource\Productattributevalues
    {
        $result = $this->doRequest(
            self::GET,
            'productattributevalues/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productattributevalues\Resource\Productattributevalues::fromArray($result);
    }
    
    /**
     * Patch a product attribute value. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Productattributevalues\Productattributevalues\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productattributevalues/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Create an attribute value for this product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromProducts(int $id, \JacobDeKeizer\Ccv\Models\Productattributevalues\Productattributevalues\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Productattributevalues\Resource\Productattributevalues
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productattributevalues/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Productattributevalues\Resource\Productattributevalues::fromArray($result);
    }
}
