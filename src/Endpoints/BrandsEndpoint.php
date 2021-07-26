<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class BrandsEndpoint extends BaseEndpoint
{
    /**
     * Delete a Brand. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'brands/' . $id . '/',
        );
    }
    
    /**
     * Get one brand. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Brands\Resource\Brands
    {
        $result = $this->doRequest(
            self::GET,
            'brands/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Brands\Resource\Brands::fromArray($result);
    }
    
    /**
     * Get all brands of this webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Brands\Collection\Brands
    {
        $result = $this->doRequest(
            self::GET,
            'brands/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Brands\Collection\Brands::fromArray($result);
    }
    
    /**
     * Patch a Brand. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Brands\Brands\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'brands/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a brand. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Brands\Brands\Input $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Brands\Resource\Brands
    {
        $result = $this->doRequest(
            self::POST,
            'brands/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Brands\Resource\Brands::fromArray($result);
    }
}
