<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class CategoriesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'categories/' . $id . '/'
        );
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories
    {
        $result = $this->doRequest(
            self::GET,
            'categories/' . $id . '/categories/'
        );

        return \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories::fromArray($result);
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories
    {
        $result = $this->doRequest(
            self::GET,
            'categories/'
        );

        return \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Categories\Resource\Categories
    {
        $result = $this->doRequest(
            self::GET,
            'categories/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Categories\Resource\Categories::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Categories\Categories\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'categories/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Categories\Categories\Patch::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Categories\Categories\Post
    {
        $result = $this->doRequest(
            self::POST,
            'categories/'
        );

        return \JacobDeKeizer\Ccv\Models\Categories\Categories\Post::fromArray($result);
    }
}
