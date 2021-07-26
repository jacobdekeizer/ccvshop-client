<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProducttocategoriesEndpoint extends BaseEndpoint
{
    /**
     * Delete a product xref. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'producttocategories/' . $id . '/',
        );
    }
    
    /**
     * Get all products of this category. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromCategories(int $id): \JacobDeKeizer\Ccv\Models\Producttocategories\Collection\Producttocategories
    {
        $result = $this->doRequest(
            self::GET,
            'categories/' . $id . '/producttocategories/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttocategories\Collection\Producttocategories::fromArray($result);
    }
    
    /**
     * Get one product xref. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Producttocategories\Resource\Producttocategories
    {
        $result = $this->doRequest(
            self::GET,
            'producttocategories/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttocategories\Resource\Producttocategories::fromArray($result);
    }
    
    /**
     * Get all photos of this product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Producttocategories\Collection\Producttocategories
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/producttocategories/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttocategories\Collection\Producttocategories::fromArray($result);
    }
    
    /**
     * Patch a product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'producttocategories/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Producttocategories\Resource\Producttocategories
    {
        $result = $this->doRequest(
            self::POST,
            'producttocategories/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttocategories\Resource\Producttocategories::fromArray($result);
    }
}
