<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class InvoicelabelsEndpoint extends BaseEndpoint
{
    public function allFromInvoices(int $id): \JacobDeKeizer\Ccv\Models\Invoicelabels\Collection\Invoicelabels
    {
        $result = $this->doRequest(
            self::GET,
            'invoices/' . $id . '/invoicelabels/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoicelabels\Collection\Invoicelabels::fromArray($result);
    }

    public function updateFromInvoices(int $id): \JacobDeKeizer\Ccv\Models\Invoicelabels\Invoicelabels\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'invoices/' . $id . '/invoicelabels/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoicelabels\Invoicelabels\Put::fromArray($result);
    }
}
