<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductshippingcostsEndpoint extends BaseEndpoint
{
    /**
     * Retrieve all shipping costs to the possible countries this product can be shipped to. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProduct(int $id, \JacobDeKeizer\Ccv\Parameters\Productshippingcosts\AllFromProduct $parameter = null): \JacobDeKeizer\Ccv\Models\Productshippingcosts\Collection\Productshippingcosts
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Productshippingcosts\AllFromProduct();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productshippingcosts/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Productshippingcosts\Collection\Productshippingcosts::fromArray($result);
    }
}
