<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Models\Apps as Models;

class AppsEndpoint extends BaseEndpoint
{
    public function allAppStoreConfigurationsFor(int $id): Models\Collection\Apps
    {
        $result = $this->doRequest(self::GET, "appstorecategories/{$id}/apps/");

        return Models\Collection\Apps::fromArray($result);
    }

    public function all(int $id): Models\Collection\Apps
    {
        $result = $this->doRequest(self::GET, "apps/{$id}/");

        return Models\Collection\Apps::fromArray($result);
    }

    public function get(int $id): Models\Resource\Apps
    {
        $result = $this->doRequest(self::GET, "apps/{$id}/");

        return Models\Resource\Apps::fromArray($result);
    }

    public function update(int $id, Models\Apps\Patch $app, bool $onlyFilledProperties = true): void
    {
        $this->doRequest(
            self::PATCH,
            "apps/{$id}/",
            $app->toArray($onlyFilledProperties)
        );
    }
}
