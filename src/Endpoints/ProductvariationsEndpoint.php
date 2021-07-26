<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductvariationsEndpoint extends BaseEndpoint
{
    /**
     * Delete a variation. Variations created based on product number are marked as auto_created and can't be deleted. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productvariations/' . $id . '/',
        );
    }
    
    /**
     * Get all variations from this product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productvariations\Collection\Productvariations
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productvariations/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productvariations\Collection\Productvariations::fromArray($result);
    }
    
    /**
     * Get a single variation. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productvariations\Resource\Productvariations
    {
        $result = $this->doRequest(
            self::GET,
            'productvariations/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productvariations\Resource\Productvariations::fromArray($result);
    }
    
    /**
     * Update an exisiting variation. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Productvariations\Productvariations\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productvariations/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Add a new variation to this product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromProducts(int $id, \JacobDeKeizer\Ccv\Models\Productvariations\Productvariations\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Productvariations\Resource\Productvariations
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productvariations/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Productvariations\Resource\Productvariations::fromArray($result);
    }
}
