<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class QuotationrowsEndpoint extends BaseEndpoint
{
    public function allFromQuotations(int $id, ?\JacobDeKeizer\Ccv\Parameters\Quotationrows\AllFromQuotations $parameter = null): \JacobDeKeizer\Ccv\Models\Quotationrows\Collection\Quotationrows
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Quotationrows\AllFromQuotations();
        }

        $result = $this->doRequest(
            self::GET,
            'quotations/' . $id . '/quotationrows/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Quotationrows\Collection\Quotationrows::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Quotationrows\Resource\Quotationrows
    {
        $result = $this->doRequest(
            self::GET,
            'quotationrows/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Quotationrows\Resource\Quotationrows::fromArray($result);
    }
}
