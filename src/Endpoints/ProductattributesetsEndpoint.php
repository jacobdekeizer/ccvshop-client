<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductattributesetsEndpoint extends BaseEndpoint
{
    /**
     * Get all attribute sets of this product with the underlaying attribute values. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromProduct(int $id, \JacobDeKeizer\Ccv\Parameters\Productattributesets\AllFromProduct $parameter = null): \JacobDeKeizer\Ccv\Models\Productattributesets\Collection\Productattributesets
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Productattributesets\AllFromProduct();
        }

        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productattributesets/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productattributesets\Collection\Productattributesets::fromArray($result);
    }
}
