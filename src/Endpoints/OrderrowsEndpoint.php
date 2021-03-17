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
        $result = $this->doRequest(self::GET, sprintf('orderrows/%d', $id));

        return Models\Resource\Orderrows::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Models\Orderrows\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PATCH, sprintf('orderrows/%d', $id), $model->toArray($onlyFilled));
    }

    /**
     * @throws CcvShopException
     */
    public function replace(int $orderId, Models\Orderrows\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PUT, sprintf('orders/%d/orderrows', $orderId), $model->toArray($onlyFilled));
    }
}
