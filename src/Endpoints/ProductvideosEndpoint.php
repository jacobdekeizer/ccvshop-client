<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductvideosEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productvideos/' . $id . '/'
        );
    }

    public function allFromProducts(int $id, ?\JacobDeKeizer\Ccv\Parameters\Productvideos\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productvideos\Collection\Productvideos
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Productvideos\AllFromProducts();
        }

        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productvideos/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productvideos\Collection\Productvideos::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productvideos
    {
        $result = $this->doRequest(
            self::GET,
            'productvideos/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productvideos::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productvideos\Productvideos\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'productvideos/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productvideos\Productvideos\Patch::fromArray($result);
    }

    public function createFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productvideos\Productvideos\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productvideos/'
        );

        return \JacobDeKeizer\Ccv\Models\Productvideos\Productvideos\Post::fromArray($result);
    }
}
