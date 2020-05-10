<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Resources\Orders\OrderResponse;
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

        return OrderResponse::fromArray($result);
    }

    public function update(int $id, OrderResponse $order, bool $includeNullValues = false)
    {
        var_dump(json_encode($order->toArray($includeNullValues)));

        $result = $this->doRequest('PATCH', 'orders/' . $id, $order->toArray($includeNullValues));

        dd($result);
    }

    public function create(OrderResponse $order)
    {
        // todo
    }
}
