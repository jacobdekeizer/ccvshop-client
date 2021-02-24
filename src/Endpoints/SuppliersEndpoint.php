<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Models\Suppliers\Collection\Suppliers;
use JacobDeKeizer\Ccv\Models\Suppliers\Resource\Suppliers as Supplier;
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

    public function create(Input $supplier, bool $onlyFilledProperties = true): Supplier
    {
        $result = $this->doRequest(
            self::POST,
            '/suppliers/',
            $supplier->toArray($onlyFilledProperties)
        );

        return Supplier::fromArray($result);
    }
}
