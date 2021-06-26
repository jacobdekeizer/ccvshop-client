<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class AppsEndpoint extends BaseEndpoint
{
    /**
     * Get all apps associated by this categorie id. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromAppstorecategories(int $id, \JacobDeKeizer\Ccv\Parameters\Apps\AllFromAppstorecategories $parameter = null): \JacobDeKeizer\Ccv\Models\Apps\Collection\Apps
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Apps\AllFromAppstorecategories();
        }
        
        $result = $this->doRequest(
            self::GET,
            'appstorecategories/' . $id . '/apps/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Apps\Collection\Apps::fromArray($result);
    }
    
    /**
     * Gets one app associated with this apikey. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id, \JacobDeKeizer\Ccv\Parameters\Apps\Get $parameter = null): \JacobDeKeizer\Ccv\Models\Apps\Resource\Apps
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Apps\Get();
        }
        
        $result = $this->doRequest(
            self::GET,
            'apps/' . $id . '/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Apps\Resource\Apps::fromArray($result);
    }
    
    /**
     * Gets all apps associated with this apikey. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Apps\All $parameter = null): \JacobDeKeizer\Ccv\Models\Apps\Collection\Apps
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Apps\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'apps/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Apps\Collection\Apps::fromArray($result);
    }
    
    /**
     * Updates an existing app. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Apps\Apps\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'apps/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
}
