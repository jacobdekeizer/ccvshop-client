<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class OrdernotesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'ordernotes/' . $id . '/'
        );
    }

    public function allFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Ordernotes\Collection\Ordernotes
    {
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/ordernotes/'
        );

        return \JacobDeKeizer\Ccv\Models\Ordernotes\Collection\Ordernotes::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Ordernotes\Resource\Ordernotes
    {
        $result = $this->doRequest(
            self::GET,
            'ordernotes/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Ordernotes\Resource\Ordernotes::fromArray($result);
    }

    public function createFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Ordernotes\Ordernotes\Post
    {
        $result = $this->doRequest(
            self::POST,
            'orders/' . $id . '/ordernotes/'
        );

        return \JacobDeKeizer\Ccv\Models\Ordernotes\Ordernotes\Post::fromArray($result);
    }
}
