<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class PackagesEndpoint extends BaseEndpoint
{
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Packages\Resource\Packages
    {
        $result = $this->doRequest(
            self::GET,
            'packages/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Packages\Resource\Packages::fromArray($result);
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Packages\Collection\Packages
    {
        $result = $this->doRequest(
            self::GET,
            'packages/'
        );

        return \JacobDeKeizer\Ccv\Models\Packages\Collection\Packages::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Packages\Packages\Input
    {
        $result = $this->doRequest(
            self::PATCH,
            'packages/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Packages\Packages\Input::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Packages\Packages\Input
    {
        $result = $this->doRequest(
            self::POST,
            'packages/'
        );

        return \JacobDeKeizer\Ccv\Models\Packages\Packages\Input::fromArray($result);
    }
}
