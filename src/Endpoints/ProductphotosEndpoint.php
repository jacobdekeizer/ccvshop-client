<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductphotosEndpoint extends BaseEndpoint
{
    /**
     * Delete a product photo. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productphotos/' . $id . '/',
        );
    }
    
    /**
     * Get all photos of this product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProducts(int $id, \JacobDeKeizer\Ccv\Parameters\Productphotos\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productphotos\Collection\Productphotos
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Productphotos\AllFromProducts();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productphotos/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Productphotos\Collection\Productphotos::fromArray($result);
    }
    
    /**
     * Get one product photo. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productphotos\Resource\Productphotos
    {
        $result = $this->doRequest(
            self::GET,
            'productphotos/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productphotos\Resource\Productphotos::fromArray($result);
    }
    
    /**
     * Patch a product photo. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productphotos/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Add a photo to this product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromProducts(int $id, \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'products/' . $id . '/productphotos/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Replace a product photo collection of an existing product. All existing photos will be deleted. With an empty collection you can achieve a DELETE ALL product photos. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function updateFromProducts(int $id, \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'products/' . $id . '/productphotos/',
            $model->toArray($onlyFilled)
        );
    }
}
