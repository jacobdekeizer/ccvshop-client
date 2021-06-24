<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class OrdersEndpoint extends BaseEndpoint
{
    public function all(?\JacobDeKeizer\Ccv\Parameters\Orders\All $parameter = null): \JacobDeKeizer\Ccv\Models\Orders\Collection\Orders
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Orders\All();
        }

        $result = $this->doRequest(
            self::GET,
            'orders/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Orders\Collection\Orders::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Orders\Resource\Orders
    {
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Orders\Resource\Orders::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Orders\Orders\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'orders/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Orders\Orders\Patch::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Orders\Orders\Post
    {
        $result = $this->doRequest(
            self::POST,
            'orders/'
        );

        return \JacobDeKeizer\Ccv\Models\Orders\Orders\Post::fromArray($result);
    }
}
