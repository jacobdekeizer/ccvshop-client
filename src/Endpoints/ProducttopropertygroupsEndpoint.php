<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProducttopropertygroupsEndpoint extends BaseEndpoint
{
    /**
     * Delete a product to product property group link. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'producttopropertygroups/' . $id . '/',
        );
    }
    
    /**
     * Get all product property groups of this product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProduct(int $id): \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Collection\Producttopropertygroups
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/producttopropertygroups/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Collection\Producttopropertygroups::fromArray($result);
    }
    
    /**
     * Get a product to product property group link. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Resource\Producttopropertygroups
    {
        $result = $this->doRequest(
            self::GET,
            'producttopropertygroups/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Resource\Producttopropertygroups::fromArray($result);
    }
    
    /**
     * Create a new product to product property group link. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Producttopropertygroups\Producttopropertygroups\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Resource\Producttopropertygroups
    {
        $result = $this->doRequest(
            self::POST,
            'producttopropertygroups/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Resource\Producttopropertygroups::fromArray($result);
    }
}
