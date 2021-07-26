<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ServicesEndpoint extends BaseEndpoint
{
    /**
     * Get all apps associated by this categorie id. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromServicecategory(int $id, \JacobDeKeizer\Ccv\Parameters\Services\AllFromServicecategory $parameter = null): \JacobDeKeizer\Ccv\Models\Services\Collection\Services
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Services\AllFromServicecategory();
        }
        
        $result = $this->doRequest(
            self::GET,
            'servicecategories/' . $id . '/services/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Services\Collection\Services::fromArray($result);
    }
    
    /**
     * Gets one service associated with this apikey. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id, \JacobDeKeizer\Ccv\Parameters\Services\Get $parameter = null): \JacobDeKeizer\Ccv\Models\Services\Resource\Services
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Services\Get();
        }
        
        $result = $this->doRequest(
            self::GET,
            'services/' . $id . '/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Services\Resource\Services::fromArray($result);
    }
    
    /**
     * Gets all apps associated with this apikey. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Services\All $parameter = null): \JacobDeKeizer\Ccv\Models\Services\Collection\Services
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Services\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'services/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Services\Collection\Services::fromArray($result);
    }
    
    /**
     * Updates an existing app. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Services\Services\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'services/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
}
