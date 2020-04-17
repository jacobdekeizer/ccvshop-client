<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Resources\Orders\Order;
use JacobDeKeizer\Ccv\Models\Resources\Orders\OrdersList;
use JacobDeKeizer\Ccv\Parameters\Orders\All;

class OrdersEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function all(?All $payload = null): OrdersList
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest('GET', 'orders' . $payload->toBuilder()->toQueryString());

        return OrdersList::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id)
    {
        $result = $this->doRequest('GET', 'orders/' . $id);

        return Order::fromArray($result);
    }

    public function update()
    {
        // todo
    }

    public function create()
    {
        // todo
    }
}
