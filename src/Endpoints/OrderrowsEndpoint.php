<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models;
use JacobDeKeizer\Ccv\Parameters\OrderRows\All;

class OrderrowsEndpoint extends BaseEndpoint
{
//    /**
//     * @throws CcvShopException
//     */
//    public function all(int $orderId, ?All $payload = null): Models\Webshop\Resource\Collection\Orderrows
//    {
//        if ($payload === null) {
//            $payload = new All();
//        }
//
//        $result = $this->doRequest(
//            'GET',
//            sprintf('orders/%s/orderrows%s', $orderId, $payload->toBuilder()->toQueryString())
//        );
//
//        return Models\Webshop\Resource\Collection\Orderrows::fromArray($result);
//    }
}
