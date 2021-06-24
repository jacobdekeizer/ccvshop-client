<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductattributesetsEndpoint extends BaseEndpoint
{
    public function allFromProducts(int $id, ?\JacobDeKeizer\Ccv\Parameters\Productattributesets\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productattributesets\Collection\Productattributesets
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Productattributesets\AllFromProducts();
        }

        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productattributesets/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productattributesets\Collection\Productattributesets::fromArray($result);
    }
}
