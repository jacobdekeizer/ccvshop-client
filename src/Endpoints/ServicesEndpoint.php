<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ServicesEndpoint extends BaseEndpoint
{
    public function allFromServicecategories(int $id, ?\JacobDeKeizer\Ccv\Parameters\Services\AllFromServicecategories $parameter = null): \JacobDeKeizer\Ccv\Models\Services\Collection\Services
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Services\AllFromServicecategories();
        }

        $result = $this->doRequest(
            self::GET,
            'servicecategories/' . $id . '/services/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Services\Collection\Services::fromArray($result);
    }

    public function get(int $id, ?\JacobDeKeizer\Ccv\Parameters\Services\Get $parameter = null): \JacobDeKeizer\Ccv\Models\Services\Resource\Services
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Services\Get();
        }

        $result = $this->doRequest(
            self::GET,
            'services/' . $id . '/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Services\Resource\Services::fromArray($result);
    }

    public function all(?\JacobDeKeizer\Ccv\Parameters\Services\All $parameter = null): \JacobDeKeizer\Ccv\Models\Services\Collection\Services
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Services\All();
        }

        $result = $this->doRequest(
            self::GET,
            'services/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Services\Collection\Services::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Services\Services\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'services/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Services\Services\Patch::fromArray($result);
    }
}
