<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models;
use JacobDeKeizer\Ccv\Parameters\Orders\All;

class OrdersEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function all(?All $payload = null): Models\Webshop\Resource\Collection\Orders
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest('GET', 'orders' . $payload->toBuilder()->toQueryString());

        return Models\Webshop\Resource\Collection\Orders::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Verto\Webshop\Resource\Orders
    {
        $result = $this->doRequest('GET', 'orders/' . $id);

        return Models\Verto\Webshop\Resource\Orders::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(
        int $id,
        Models\Internal\Resource\Orders\Patch $order,
        bool $onlyFilledProperties = true
    ): void {
        $this->doRequest('PATCH', 'orders/' . $id, $order->toArray($onlyFilledProperties));
    }

    /**
     * @throws CcvShopException
     */
    public function create(Models\Internal\Resource\Orders\Post $order, bool $onlyFilledProperties = true): void
    {
        $this->doRequest('POST', 'orders', $order->toArray($onlyFilledProperties));
    }
}
