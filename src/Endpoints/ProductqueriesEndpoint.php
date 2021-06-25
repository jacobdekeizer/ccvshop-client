<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductqueriesEndpoint extends BaseEndpoint
{
    public function all(?\JacobDeKeizer\Ccv\Parameters\Productqueries\All $parameter = null): \JacobDeKeizer\Ccv\Models\Productqueries\Collection\Products
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Productqueries\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'productqueries/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Productqueries\Collection\Products::fromArray($result);
    }
}
