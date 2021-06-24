<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class InvoicerowsEndpoint extends BaseEndpoint
{
    public function allFromInvoices(int $id): \JacobDeKeizer\Ccv\Models\Invoicerows\Collection\Invoicerows
    {
        $result = $this->doRequest(
            self::GET,
            'invoices/' . $id . '/invoicerows/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoicerows\Collection\Invoicerows::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Invoicerows\Resource\Invoicerows
    {
        $result = $this->doRequest(
            self::GET,
            'invoicerows/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoicerows\Resource\Invoicerows::fromArray($result);
    }
}
