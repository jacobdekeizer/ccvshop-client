<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductrelevantEndpoint extends BaseEndpoint
{
    /**
     * Delete one relevant product. Note: this will not delete the product itsself. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productrelevant/' . $id . '/',
        );
    }
    
    /**
     * Get all relevant products of this product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProducts(int $id, \JacobDeKeizer\Ccv\Parameters\Productrelevant\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productrelevant\Collection\Productrelevant
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Productrelevant\AllFromProducts();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productrelevant/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Productrelevant\Collection\Productrelevant::fromArray($result);
    }
    
    /**
     * Get one relevant product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productrelevant\Resource\Productrelevant
    {
        $result = $this->doRequest(
            self::GET,
            'productrelevant/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productrelevant\Resource\Productrelevant::fromArray($result);
    }
    
    /**
     * Create a relevant product. Note: This will not create a new product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromProducts(int $id, \JacobDeKeizer\Ccv\Models\Productrelevant\Productrelevant\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'products/' . $id . '/productrelevant/',
            $model->toArray($onlyFilled)
        );
    }
}
