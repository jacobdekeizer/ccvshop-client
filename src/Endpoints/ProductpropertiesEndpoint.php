<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductpropertiesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productproperties/' . $id . '/'
        );
    }

    public function allFromProductpropertygroups(int $id): \JacobDeKeizer\Ccv\Models\Productproperties\Collection\Productproperties
    {
        $result = $this->doRequest(
            self::GET,
            'productpropertygroups/' . $id . '/productproperties/'
        );

        return \JacobDeKeizer\Ccv\Models\Productproperties\Collection\Productproperties::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productproperties\Resource\Productproperties
    {
        $result = $this->doRequest(
            self::GET,
            'productproperties/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productproperties\Resource\Productproperties::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productproperties\Productproperties\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'productproperties/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productproperties\Productproperties\Patch::fromArray($result);
    }

    public function createFromProductpropertygroups(int $id): \JacobDeKeizer\Ccv\Models\Productproperties\Productproperties\Post
    {
        $result = $this->doRequest(
            self::POST,
            'productpropertygroups/' . $id . '/productproperties/'
        );

        return \JacobDeKeizer\Ccv\Models\Productproperties\Productproperties\Post::fromArray($result);
    }
}
