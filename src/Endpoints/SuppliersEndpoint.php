<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Models\Products\Child\Resource\Supplier;
use JacobDeKeizer\Ccv\Models\Suppliers\Collection\Suppliers;
use JacobDeKeizer\Ccv\Models\Suppliers\Suppliers\Input;

class SuppliersEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, '/suppliers/' . $id . '/');
    }

    public function get(int $id): Supplier
    {
        $result = $this->doRequest(self::GET, '/suppliers/' . $id . '/');

        return Supplier::fromArray($result);
    }

    public function all(): Suppliers
    {
        $result = $this->doRequest(self::GET, '/suppliers/');

        return Suppliers::fromArray($result);
    }

    public function update(int $id, Input $supplier, bool $onlyFilledProperties = true): void
    {
        $this->doRequest(
            self::PATCH,
            '/suppliers/' . $id . '/',
            $supplier->toArray($onlyFilledProperties)
        );
    }
}
