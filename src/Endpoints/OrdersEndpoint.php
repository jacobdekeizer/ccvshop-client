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

        $result = $this->doRequest(self::GET, sprintf('orders%s', $payload->toBuilder()->toQueryString()));

        return Models\Collection\Orders::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Orders
    {
        $result = $this->doRequest(self::GET, sprintf('orders/%d', $id));

        return Models\Resource\Orders::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Models\Orders\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PATCH, sprintf('orders/%d', $id), $model->toArray($onlyFilled));
    }

    /**
     * @throws CcvShopException
     */
    public function create(Models\Orders\Post $model, bool $onlyFilled = true): Models\Resource\Orders
    {
        $result = $this->doRequest(self::POST, 'orders', $model->toArray($onlyFilled));

        return Models\Resource\Orders::fromArray($result);
    }
}
