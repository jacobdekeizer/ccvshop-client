<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class AppsEndpoint extends BaseEndpoint
{
    public function allFromAppstorecategories(int $id, ?\JacobDeKeizer\Ccv\Parameters\Apps\AllFromAppstorecategories $parameter = null): \JacobDeKeizer\Ccv\Models\Apps\Collection\Apps
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Apps\AllFromAppstorecategories();
        }

        $result = $this->doRequest(
            self::GET,
            'appstorecategories/' . $id . '/apps/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Apps\Collection\Apps::fromArray($result);
    }

    public function get(int $id, ?\JacobDeKeizer\Ccv\Parameters\Apps\Get $parameter = null): \JacobDeKeizer\Ccv\Models\Apps\Resource\Apps
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Apps\Get();
        }

        $result = $this->doRequest(
            self::GET,
            'apps/' . $id . '/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Apps\Resource\Apps::fromArray($result);
    }

    public function all(?\JacobDeKeizer\Ccv\Parameters\Apps\All $parameter = null): \JacobDeKeizer\Ccv\Models\Apps\Collection\Apps
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Apps\All();
        }

        $result = $this->doRequest(
            self::GET,
            'apps/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Apps\Collection\Apps::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Apps\Apps\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'apps/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Apps\Apps\Patch::fromArray($result);
    }
}
