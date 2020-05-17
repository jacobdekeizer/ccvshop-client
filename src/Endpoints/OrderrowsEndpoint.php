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
            'GET',
            sprintf('orders/%s/orderrows%s', $orderId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Orderrows::fromArray($result);
    }

    public function get(int $id): Models\Resource\Orderrows
    {
        $result = $this->doRequest('GET', 'orderrows/' . $id);

        return Models\Resource\Orderrows::fromArray($result);
    }
}
