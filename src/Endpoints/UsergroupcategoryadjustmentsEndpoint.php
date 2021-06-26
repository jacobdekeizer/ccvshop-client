<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class UsergroupcategoryadjustmentsEndpoint extends BaseEndpoint
{
    /**
     * Deleting an adjustment. Prices and visibility will be reverted to default for this user group. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'usergroupcategoryadjustments/' . $id . '/',
        );
    }
    
    /**
     * Get all adjustments. This can only be done by either usergroup_id or category_id or both. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Usergroupcategoryadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Collection\Usergroupcategoryadjustments
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Usergroupcategoryadjustments\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'usergroupcategoryadjustments/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Collection\Usergroupcategoryadjustments::fromArray($result);
    }
    
    /**
     * Get one adjustment by id. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Resource\Usergroupcategoryadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'usergroupcategoryadjustments/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Resource\Usergroupcategoryadjustments::fromArray($result);
    }
    
    /**
     * Update an existing adjustment. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Usergroupcategoryadjustments\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'usergroupcategoryadjustments/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Create a new adjustment for an user group. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Usergroupcategoryadjustments\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'usergroupcategoryadjustments/',
            $model->toArray($onlyFilled)
        );
    }
}
