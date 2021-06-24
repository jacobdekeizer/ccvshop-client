<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ColorsEndpoint extends BaseEndpoint
{
    public function all(?\JacobDeKeizer\Ccv\Parameters\Colors\All $parameter = null): \JacobDeKeizer\Ccv\Models\Colors\Collection\Colors
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Colors\All();
        }

        $result = $this->doRequest(
            self::GET,
            'colors/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Colors\Collection\Colors::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Colors\Resource\Colors
    {
        $result = $this->doRequest(
            self::GET,
            'colors/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Colors\Resource\Colors::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Colors\Colors\Post
    {
        $result = $this->doRequest(
            self::POST,
            'colors/'
        );

        return \JacobDeKeizer\Ccv\Models\Colors\Colors\Post::fromArray($result);
    }
}
