<?php declare(strict_types=1);

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
        $result = $this->doRequest(self::GET, sprintf('ordernotifications/%d', $id));

        return Models\Resource\Ordernotifications::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        int $orderId,
        Models\Ordernotifications\Input $model,
        bool $onlyFilled = true
    ): Models\Resource\Ordernotifications {
        $response = $this->doRequest(
            self::POST,
            sprintf('orders/%d/ordernotifications', $orderId),
            $model->toArray($onlyFilled)
        );

        return Models\Resource\Ordernotifications::fromArray($response);
    }
}
