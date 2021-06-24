<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class SuppliersEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'suppliers/' . $id . '/'
        );
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Suppliers\Resource\Suppliers
    {
        $result = $this->doRequest(
            self::GET,
            'suppliers/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Suppliers\Resource\Suppliers::fromArray($result);
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Suppliers\Collection\Suppliers
    {
        $result = $this->doRequest(
            self::GET,
            'suppliers/'
        );

        return \JacobDeKeizer\Ccv\Models\Suppliers\Collection\Suppliers::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Suppliers\Suppliers\Input
    {
        $result = $this->doRequest(
            self::PATCH,
            'suppliers/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Suppliers\Suppliers\Input::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Suppliers\Suppliers\Input
    {
        $result = $this->doRequest(
            self::POST,
            'suppliers/'
        );

        return \JacobDeKeizer\Ccv\Models\Suppliers\Suppliers\Input::fromArray($result);
    }
}
