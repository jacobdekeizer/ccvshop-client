<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class InvoicesEndpoint extends BaseEndpoint
{
    public function all(?\JacobDeKeizer\Ccv\Parameters\Invoices\All $parameter = null): \JacobDeKeizer\Ccv\Models\Invoices\Collection\Invoices
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Invoices\All();
        }

        $result = $this->doRequest(
            self::GET,
            'invoices/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Invoices\Collection\Invoices::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Invoices\Resource\Invoices
    {
        $result = $this->doRequest(
            self::GET,
            'invoices/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoices\Resource\Invoices::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Invoices\Invoices\Input
    {
        $result = $this->doRequest(
            self::PATCH,
            'invoices/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoices\Invoices\Input::fromArray($result);
    }

    public function createFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Invoices\Invoices\Input
    {
        $result = $this->doRequest(
            self::POST,
            'orders/' . $id . '/invoices/'
        );

        return \JacobDeKeizer\Ccv\Models\Invoices\Invoices\Input::fromArray($result);
    }
}
