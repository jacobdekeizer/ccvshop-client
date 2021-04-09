<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Ordernotes as Models;

class OrdernotesEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function all(int $orderId): Models\Collection\Ordernotes
    {
        $result = $this->doRequest(self::GET, sprintf('/orders/%d/ordernotes/', $orderId));

        return Models\Collection\Ordernotes::fromArray($result);
    }

    public function get(int $id): Models\Resource\Ordernotes
    {
        $result = $this->doRequest(self::GET, sprintf('/ordernotes/%d/', $id));

        return Models\Resource\Ordernotes::fromArray($result);
    }

    public function create(
        int $orderId,
        Models\Ordernotes\Post $model,
        bool $onlyFilled = true
    ): Models\Resource\Ordernotes {
        $result = $this->doRequest(
            self::POST,
            sprintf('/orders/%d/ordernotes/', $orderId),
            $model->toArray($onlyFilled)
        );

        return Models\Resource\Ordernotes::fromArray($result);
    }

    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, sprintf('/ordernotes/%d/', $id));
    }
}
