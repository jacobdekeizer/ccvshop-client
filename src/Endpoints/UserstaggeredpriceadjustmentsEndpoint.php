<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class UserstaggeredpriceadjustmentsEndpoint extends BaseEndpoint
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
            'userstaggeredpriceadjustments/' . $id . '/',
        );
    }
    
    /**
     * Get all adjustments. This can only be done by either user_id, product_id, staggeredprice_id or a combination of them. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Userstaggeredpriceadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Collection\Userstaggeredpriceadjustments
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Userstaggeredpriceadjustments\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'userstaggeredpriceadjustments/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Collection\Userstaggeredpriceadjustments::fromArray($result);
    }
    
    /**
     * Get one adjustment by id. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Resource\Userstaggeredpriceadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'userstaggeredpriceadjustments/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Resource\Userstaggeredpriceadjustments::fromArray($result);
    }
    
    /**
     * Update an existing adjustment. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Userstaggeredpriceadjustments\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'userstaggeredpriceadjustments/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Create a new adjustment for an user for a product staggered price. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Userstaggeredpriceadjustments\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'userstaggeredpriceadjustments/',
            $model->toArray($onlyFilled)
        );
    }
}
