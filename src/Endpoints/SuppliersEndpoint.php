<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Suppliers\Collection\Suppliers;
use JacobDeKeizer\Ccv\Models\Suppliers\Resource\Suppliers as Supplier;
use JacobDeKeizer\Ccv\Models\Suppliers\Suppliers\Input;

class SuppliersEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, sprintf('/suppliers/%d/', $id));
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Supplier
    {
        $result = $this->doRequest(self::GET, sprintf('/suppliers/%d/', $id));

        return Supplier::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function all(): Suppliers
    {
        $result = $this->doRequest(self::GET, '/suppliers/');

        return Suppliers::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Input $supplier, bool $onlyFilledProperties = true): void
    {
        $this->doRequest(
            self::PATCH,
            sprintf('/suppliers/%d/', $id),
            $supplier->toArray($onlyFilledProperties)
        );
    }

    /**
     * @throws CcvShopException
     */
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
