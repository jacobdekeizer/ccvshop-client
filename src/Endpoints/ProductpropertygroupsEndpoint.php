<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductpropertygroupsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productpropertygroups/' . $id . '/'
        );
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productpropertygroups\Resource\Productpropertygroups
    {
        $result = $this->doRequest(
            self::GET,
            'productpropertygroups/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productpropertygroups\Resource\Productpropertygroups::fromArray($result);
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Productpropertygroups\Collection\Productpropertygroups
    {
        $result = $this->doRequest(
            self::GET,
            'productpropertygroups/'
        );

        return \JacobDeKeizer\Ccv\Models\Productpropertygroups\Collection\Productpropertygroups::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productpropertygroups\Productpropertygroups\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'productpropertygroups/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productpropertygroups\Productpropertygroups\Patch::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Productpropertygroups\Productpropertygroups\Post
    {
        $result = $this->doRequest(
            self::POST,
            'productpropertygroups/'
        );

        return \JacobDeKeizer\Ccv\Models\Productpropertygroups\Productpropertygroups\Post::fromArray($result);
    }
}
