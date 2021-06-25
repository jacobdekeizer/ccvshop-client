<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class InvoicerowsEndpoint extends BaseEndpoint
{
    public function allFromInvoices(int $id, ?\JacobDeKeizer\Ccv\Parameters\Invoicerows\AllFromInvoices $parameter = null): \JacobDeKeizer\Ccv\Models\Invoicerows\Collection\Invoicerows
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Invoicerows\AllFromInvoices();
        }

        $result = $this->doRequest(
            self::GET,
            'invoices/' . $id . '/invoicerows/' . $parameter->toBuilder()->toQueryString()
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
