<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class QuotationrowsEndpoint extends BaseEndpoint
{
    /**
     * Get all invoice rows of this invoice. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromQuotation(int $id, \JacobDeKeizer\Ccv\Parameters\Quotationrows\AllFromQuotation $parameter = null): \JacobDeKeizer\Ccv\Models\Quotationrows\Collection\Quotationrows
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Quotationrows\AllFromQuotation();
        }

        $result = $this->doRequest(
            self::GET,
            'quotations/' . $id . '/quotationrows/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Quotationrows\Collection\Quotationrows::fromArray($result);
    }

    /**
     * Get one QuotationRow. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Quotationrows\Resource\Quotationrows
    {
        $result = $this->doRequest(
            self::GET,
            'quotationrows/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Quotationrows\Resource\Quotationrows::fromArray($result);
    }
}
