<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class UsergroupstaggeredpriceadjustmentsEndpoint extends BaseEndpoint
{
    /**
     * Deleting an adjustment. Prices and discounts will be reverted to default for this user. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'usergroupstaggeredpriceadjustments/' . $id . '/',
        );
    }
    
    /**
     * Get all adjustments. This can only be done by either usergroup_id, product_id, staggeredprice_id or a combination of them. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Usergroupstaggeredpriceadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Collection\Usergroupstaggeredpriceadjustments
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Usergroupstaggeredpriceadjustments\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'usergroupstaggeredpriceadjustments/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Collection\Usergroupstaggeredpriceadjustments::fromArray($result);
    }
    
    /**
     * Get one adjustment by id. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Resource\Usergroupstaggeredpriceadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'usergroupstaggeredpriceadjustments/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Resource\Usergroupstaggeredpriceadjustments::fromArray($result);
    }
    
    /**
     * Update an existing adjustment. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Usergroupstaggeredpriceadjustments\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'usergroupstaggeredpriceadjustments/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Create a new adjustment for an user for a product staggered price. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Usergroupstaggeredpriceadjustments\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Resource\Usergroupstaggeredpriceadjustments
    {
        $result = $this->doRequest(
            self::POST,
            'usergroupstaggeredpriceadjustments/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Resource\Usergroupstaggeredpriceadjustments::fromArray($result);
    }
}
