<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductreviewsEndpoint extends BaseEndpoint
{
    public function allFromProducts(int $id, ?\JacobDeKeizer\Ccv\Parameters\Productreviews\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productreviews\Collection\Productreviews
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Productreviews\AllFromProducts();
        }

        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productreviews/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productreviews\Collection\Productreviews::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productreviews
    {
        $result = $this->doRequest(
            self::GET,
            'productreviews/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productreviews::fromArray($result);
    }

    public function all(?\JacobDeKeizer\Ccv\Parameters\Productreviews\All $parameter = null): \JacobDeKeizer\Ccv\Models\Productreviews\Collection\Productreviews
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Productreviews\All();
        }

        $result = $this->doRequest(
            self::GET,
            'productreviews/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productreviews\Collection\Productreviews::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productreviews\Productreviews\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'productreviews/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productreviews\Productreviews\Patch::fromArray($result);
    }

    public function createFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productreviews\Productreviews\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productreviews/'
        );

        return \JacobDeKeizer\Ccv\Models\Productreviews\Productreviews\Post::fromArray($result);
    }
}
