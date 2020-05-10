<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Resource\Collection;
use JacobDeKeizer\Ccv\Models\Webshop\Resource;
use JacobDeKeizer\Ccv\Parameters\Orders\All;

class OrdersEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function all(?All $payload = null): Collection\Orders
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest('GET', 'orders' . $payload->toBuilder()->toQueryString());

        return Collection\Orders::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Resource\Orders
    {
        $result = $this->doRequest('GET', 'orders/' . $id);

        return Resource\Orders::fromArray($result);
    }

//    public function update(int $id, Resource\Orders $order, bool $includeNullValues = false)
//    {
//        var_dump(json_encode($order->toArray($includeNullValues)));
//
//        $result = $this->doRequest('PATCH', 'orders/' . $id, $order->toArray($includeNullValues));
//
//        var_dump($result);
//    }
//
//    public function create(Resource\Orders $order)
//    {
//        // todo
//    }
}
