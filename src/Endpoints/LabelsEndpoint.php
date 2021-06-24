<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class LabelsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'labels/' . $id . '/'
        );
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Labels\Collection\Labels
    {
        $result = $this->doRequest(
            self::GET,
            'labels/'
        );

        return \JacobDeKeizer\Ccv\Models\Labels\Collection\Labels::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Labels\Resource\Labels
    {
        $result = $this->doRequest(
            self::GET,
            'labels/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Labels\Resource\Labels::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Labels\Labels\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'labels/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Labels\Labels\Patch::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Labels\Labels\Post
    {
        $result = $this->doRequest(
            self::POST,
            'labels/'
        );

        return \JacobDeKeizer\Ccv\Models\Labels\Labels\Post::fromArray($result);
    }
}
