<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class OrdersEndpoint extends BaseEndpoint
{
    /**
     * Get all orders of this webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Orders\All $parameter = null): \JacobDeKeizer\Ccv\Models\Orders\Collection\Orders
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Orders\All();
        }

        $result = $this->doRequest(
            self::GET,
            'orders/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Orders\Collection\Orders::fromArray($result);
    }

    /**
     * Get one order of this webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Orders\Resource\Orders
    {
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Orders\Resource\Orders::fromArray($result);
    }

    /**
     * Patch an existing order. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Orders\Orders\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'orders/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Post a new order. 100 per minute
     *
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Orders\Orders\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Orders\Resource\Orders
    {
        $result = $this->doRequest(
            self::POST,
            'orders/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Orders\Resource\Orders::fromArray($result);
    }
}
