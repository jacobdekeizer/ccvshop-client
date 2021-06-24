<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductshippingcostsEndpoint extends BaseEndpoint
{
    public function allFromProducts(int $id, ?\JacobDeKeizer\Ccv\Parameters\Productshippingcosts\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productshippingcosts\Collection\Productshippingcosts
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Productshippingcosts\AllFromProducts();
        }

        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productshippingcosts/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productshippingcosts\Collection\Productshippingcosts::fromArray($result);
    }
}
