<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class AttributesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'attributes/' . $id . '/'
        );
    }

    public function allFromAttributecombinations(int $id): \JacobDeKeizer\Ccv\Models\Attributes\Collection\Attributes
    {
        $result = $this->doRequest(
            self::GET,
            'attributecombinations/' . $id . '/attributes/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributes\Collection\Attributes::fromArray($result);
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Attributes\Collection\Attributes
    {
        $result = $this->doRequest(
            self::GET,
            'attributes/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributes\Collection\Attributes::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Attributes\Resource\Attributes
    {
        $result = $this->doRequest(
            self::GET,
            'attributes/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributes\Resource\Attributes::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Attributes\Attributes\Input
    {
        $result = $this->doRequest(
            self::PATCH,
            'attributes/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributes\Attributes\Input::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Attributes\Attributes\Input
    {
        $result = $this->doRequest(
            self::POST,
            'attributes/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributes\Attributes\Input::fromArray($result);
    }
}
