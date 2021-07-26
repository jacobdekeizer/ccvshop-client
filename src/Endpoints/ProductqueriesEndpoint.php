<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductqueriesEndpoint extends BaseEndpoint
{
    /**
     * Retrieve all products and attribute combinations based on the parameters. At least one parameter is required to give results. Note: mpnnumber doesn't exist for attribute combinations and skunumber doesn't exist for products. 30 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Productqueries\All $parameter = null): \JacobDeKeizer\Ccv\Models\Productqueries\Collection\Products
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Productqueries\All();
        }

        $result = $this->doRequest(
            self::GET,
            'productqueries/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productqueries\Collection\Products::fromArray($result);
    }
}
