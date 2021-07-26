<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class DiscountcouponsEndpoint extends BaseEndpoint
{
    /**
     * Delete a discount coupon. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'discountcoupons/' . $id . '/',
        );
    }
    
    /**
     * Get all discount coupons of this webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Discountcoupons\All $parameter = null): \JacobDeKeizer\Ccv\Models\Discountcoupons\Collection\Discountcoupons
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Discountcoupons\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'discountcoupons/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Discountcoupons\Collection\Discountcoupons::fromArray($result);
    }
    
    /**
     * Get one discount coupon. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Discountcoupons\Resource\Discountcoupons
    {
        $result = $this->doRequest(
            self::GET,
            'discountcoupons/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Discountcoupons\Resource\Discountcoupons::fromArray($result);
    }
    
    /**
     * Add a discount coupon. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Discountcoupons\Discountcoupons\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Discountcoupons\Resource\Discountcoupons
    {
        $result = $this->doRequest(
            self::POST,
            'discountcoupons/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Discountcoupons\Resource\Discountcoupons::fromArray($result);
    }
}
