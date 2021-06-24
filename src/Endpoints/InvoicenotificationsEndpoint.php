<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class InvoicenotificationsEndpoint extends BaseEndpoint
{
    public function allFromInvoices(int $id): \JacobDeKeizer\Ccv\Models\Invoicenotifications\Collection\Invoicenotifications
    {
        $result = $this->doRequest(
            self::GET,
            'invoices/' . $id . '/invoicenotifications/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoicenotifications\Collection\Invoicenotifications::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Invoicenotifications\Resource\Invoicenotifications
    {
        $result = $this->doRequest(
            self::GET,
            'invoicenotifications/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoicenotifications\Resource\Invoicenotifications::fromArray($result);
    }

    public function createFromInvoices(int $id): \JacobDeKeizer\Ccv\Models\Invoicenotifications\Invoicenotifications\Input
    {
        $result = $this->doRequest(
            self::POST,
            'invoices/' . $id . '/invoicenotifications/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoicenotifications\Invoicenotifications\Input::fromArray($result);
    }
}
