<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class QuotationsEndpoint extends BaseEndpoint
{
    /**
     * Get all quotations of this webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Quotations\All $parameter = null): \JacobDeKeizer\Ccv\Models\Quotations\Collection\Quotations
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Quotations\All();
        }

        $result = $this->doRequest(
            self::GET,
            'quotations/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Quotations\Collection\Quotations::fromArray($result);
    }

    /**
     * Get one Quotation. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Quotations\Resource\Quotations
    {
        $result = $this->doRequest(
            self::GET,
            'quotations/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Quotations\Resource\Quotations::fromArray($result);
    }
}
