<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class OrdernotesEndpoint extends BaseEndpoint
{
    /**
     * Delete one notes of an order. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'ordernotes/' . $id . '/',
        );
    }

    /**
     * Get all notes of this order. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromOrder(int $id): \JacobDeKeizer\Ccv\Models\Ordernotes\Collection\Ordernotes
    {
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/ordernotes/'
        );

        return \JacobDeKeizer\Ccv\Models\Ordernotes\Collection\Ordernotes::fromArray($result);
    }

    /**
     * Get one notes of an order. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Ordernotes\Resource\Ordernotes
    {
        $result = $this->doRequest(
            self::GET,
            'ordernotes/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Ordernotes\Resource\Ordernotes::fromArray($result);
    }

    /**
     * Creates an internal note on one order. 100 per minute
     *
     * @throws CcvShopException
     */
    public function createForOrder(int $id, \JacobDeKeizer\Ccv\Models\Ordernotes\Ordernotes\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Ordernotes\Resource\Ordernotes
    {
        $result = $this->doRequest(
            self::POST,
            'orders/' . $id . '/ordernotes/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Ordernotes\Resource\Ordernotes::fromArray($result);
    }
}
