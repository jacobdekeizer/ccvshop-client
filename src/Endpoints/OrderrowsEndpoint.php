<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Orderrows as Models;
use JacobDeKeizer\Ccv\Parameters\OrderRows\All;

class OrderrowsEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function all(int $orderId, ?All $payload = null): Models\Collection\Orderrows
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('orders/%s/orderrows%s', $orderId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Orderrows::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Orderrows
    {
        $result = $this->doRequest(self::GET, 'orderrows/' . $id);

        return Models\Resource\Orderrows::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Models\Orderrows\Patch $orderrow, bool $onlyFilledProperties = true): void
    {
        $this->doRequest(self::PATCH, 'orderrows/' . $id, $orderrow->toArray($onlyFilledProperties));
    }

    /**
     * @throws CcvShopException
     */
    public function replace(int $orderId, Models\Orderrows\Put $orderrows, bool $onlyFilledProperties = true): void
    {
        $this->doRequest(
            self::PUT,
            'orders/' . $orderId . '/orderrows',
            $orderrows->toArray($onlyFilledProperties)
        );
    }
}
