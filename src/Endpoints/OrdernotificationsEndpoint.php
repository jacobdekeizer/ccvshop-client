<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Ordernotifications as Models;

class OrdernotificationsEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function all(int $orderId): Models\Collection\Ordernotifications
    {
        $result = $this->doRequest(
            self::GET,
            sprintf('orders/%d/ordernotifications/', $orderId)
        );

        return Models\Collection\Ordernotifications::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Ordernotifications
    {
        $result = $this->doRequest(self::GET, 'ordernotifications/' . $id);

        return Models\Resource\Ordernotifications::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        int $orderId,
        Models\Ordernotifications\Input $ordernotification,
        bool $onlyFilledProperties = true
    ): Models\Resource\Ordernotifications {
        $response = $this->doRequest(
            self::POST,
            'orders/' . $orderId . '/ordernotifications',
            $ordernotification->toArray($onlyFilledProperties)
        );

        return Models\Resource\Ordernotifications::fromArray($response);
    }
}
