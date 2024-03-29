<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class OrderrowsEndpoint extends BaseEndpoint
{
    /**
     * Get all order rows of this order. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromOrder(int $id, \JacobDeKeizer\Ccv\Parameters\Orderrows\AllFromOrder $parameter = null): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Orderrows\Orderrows
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Orderrows\AllFromOrder();
        }

        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/orderrows/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Orderrows\Orderrows::fromArray($result);
    }

    /**
     * Get one order row. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orderrows\Orderrows
    {
        $result = $this->doRequest(
            self::GET,
            'orderrows/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orderrows\Orderrows::fromArray($result);
    }

    /**
     * This gives the option to change orderrow's count and prices of non-completed orders. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Orderrows\Patch\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'orderrows/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Replace an order row collection of an existing order. 100 per minute
     *
     * @throws CcvShopException
     */
    public function updateForOrder(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Orderrows\Put\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'orders/' . $id . '/orderrows/',
            $model->toArray($onlyFilled)
        );
    }
}
