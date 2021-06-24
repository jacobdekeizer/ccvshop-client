<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductvariationsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productvariations/' . $id . '/'
        );
    }

    public function allFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productvariations\Collection\Productvariations
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productvariations/'
        );

        return \JacobDeKeizer\Ccv\Models\Productvariations\Collection\Productvariations::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productvariations
    {
        $result = $this->doRequest(
            self::GET,
            'productvariations/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productvariations::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productvariations\Productvariations\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'productvariations/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productvariations\Productvariations\Patch::fromArray($result);
    }

    public function createFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productvariations\Productvariations\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productvariations/'
        );

        return \JacobDeKeizer\Ccv\Models\Productvariations\Productvariations\Post::fromArray($result);
    }
}
