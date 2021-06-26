<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductstaggeredpricesEndpoint extends BaseEndpoint
{
    /**
     * Delete a staggered price row. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productstaggeredprices/' . $id . '/',
        );
    }
    
    /**
     * Get all straggered price rows of a product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProducts(int $id, \JacobDeKeizer\Ccv\Parameters\Productstaggeredprices\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Collection\Productstaggeredprices
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Productstaggeredprices\AllFromProducts();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productstaggeredprices/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Collection\Productstaggeredprices::fromArray($result);
    }
    
    /**
     * Get one staggered price row. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Resource\Productstaggeredprices
    {
        $result = $this->doRequest(
            self::GET,
            'productstaggeredprices/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Resource\Productstaggeredprices::fromArray($result);
    }
    
    /**
     * Patch a staggered price row. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Productstaggeredprices\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productstaggeredprices/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a staggered price row for this product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromProducts(int $id, \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Productstaggeredprices\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'products/' . $id . '/productstaggeredprices/',
            $model->toArray($onlyFilled)
        );
    }
}
