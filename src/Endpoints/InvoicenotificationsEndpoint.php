<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class InvoicenotificationsEndpoint extends BaseEndpoint
{
    /**
     * Get all order notifications belonging to an order. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromInvoice(int $id): \JacobDeKeizer\Ccv\Models\Invoicenotifications\Collection\Invoicenotifications
    {
        $result = $this->doRequest(
            self::GET,
            'invoices/' . $id . '/invoicenotifications/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoicenotifications\Collection\Invoicenotifications::fromArray($result);
    }

    /**
     * Get one order notification based on an Id. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Invoicenotifications\Resource\Invoicenotifications
    {
        $result = $this->doRequest(
            self::GET,
            'invoicenotifications/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoicenotifications\Resource\Invoicenotifications::fromArray($result);
    }

    /**
     * Create a order notification of the given type. This will trigger an e-mail of the given type. 100 per minute
     *
     * @throws CcvShopException
     */
    public function createForInvoice(int $id, \JacobDeKeizer\Ccv\Models\Invoicenotifications\Invoicenotifications\Input $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Invoicenotifications\Resource\Invoicenotifications
    {
        $result = $this->doRequest(
            self::POST,
            'invoices/' . $id . '/invoicenotifications/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Invoicenotifications\Resource\Invoicenotifications::fromArray($result);
    }
}
