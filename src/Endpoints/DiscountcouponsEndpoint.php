<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class DiscountcouponsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'discountcoupons/' . $id . '/'
        );
    }
    
    public function all(?\JacobDeKeizer\Ccv\Parameters\Discountcoupons\All $parameter = null): \JacobDeKeizer\Ccv\Models\Discountcoupons\Collection\Discountcoupons
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Discountcoupons\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'discountcoupons/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Discountcoupons\Collection\Discountcoupons::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Discountcoupons\Resource\Discountcoupons
    {
        $result = $this->doRequest(
            self::GET,
            'discountcoupons/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Discountcoupons\Resource\Discountcoupons::fromArray($result);
    }
    
    public function create(): \JacobDeKeizer\Ccv\Models\Discountcoupons\Discountcoupons\Post
    {
        $result = $this->doRequest(
            self::POST,
            'discountcoupons/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Discountcoupons\Discountcoupons\Post::fromArray($result);
    }
}
