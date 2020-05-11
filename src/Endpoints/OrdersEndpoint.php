<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Orders as Models;
use JacobDeKeizer\Ccv\Parameters\Orders\All;

class OrdersEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function all(?All $payload = null): Models\Collection\Orders
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest('GET', 'orders' . $payload->toBuilder()->toQueryString());

        return Models\Collection\Orders::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Orders
    {
        $result = $this->doRequest('GET', 'orders/' . $id);

        return Models\Resource\Orders::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(
        int $id,
        Models\Orders\Patch $order,
        bool $onlyFilledProperties = true
    ): void {
        $this->doRequest('PATCH', 'orders/' . $id, $order->toArray($onlyFilledProperties));
    }

    /**
     * @throws CcvShopException
     */
    public function create(Models\Orders\Post $order, bool $onlyFilledProperties = true): void
    {
        $this->doRequest('POST', 'orders', $order->toArray($onlyFilledProperties));
    }
}
