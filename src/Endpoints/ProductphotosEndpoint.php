<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductphotosEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productphotos/' . $id . '/'
        );
    }

    public function allFromProducts(int $id, ?\JacobDeKeizer\Ccv\Parameters\Productphotos\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productphotos\Collection\Productphotos
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Productphotos\AllFromProducts();
        }

        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productphotos/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productphotos\Collection\Productphotos::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productphotos\Resource\Productphotos
    {
        $result = $this->doRequest(
            self::GET,
            'productphotos/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productphotos\Resource\Productphotos::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'productphotos/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Patch::fromArray($result);
    }

    public function createFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productphotos/'
        );

        return \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Post::fromArray($result);
    }

    public function updateFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'products/' . $id . '/productphotos/'
        );

        return \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Put::fromArray($result);
    }
}
