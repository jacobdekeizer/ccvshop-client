<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Models\Apps as Models;
use JacobDeKeizer\Ccv\Parameters\Apps\All;
use JacobDeKeizer\Ccv\Parameters\Apps\Get;

class AppsEndpoint extends BaseEndpoint
{
    public function allForStoreCategory(int $storeCategoryId, ?All $payload = null): Models\Collection\Apps
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('appstorecategories/%d/apps/%s', $storeCategoryId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Apps::fromArray($result);
    }

    public function all(?All $payload = null): Models\Collection\Apps
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('apps/%s', $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Apps::fromArray($result);
    }

    public function get(int $id, ?Get $payload = null): Models\Resource\Apps
    {
        if ($payload === null) {
            $payload = new Get();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('apps/%d/%s', $id, $payload->toBuilder()->toQueryString())
        );

        return Models\Resource\Apps::fromArray($result);
    }

    public function update(int $id, Models\Apps\Patch $app, bool $onlyFilledProperties = true): void
    {
        $this->doRequest(
            self::PATCH,
            sprintf('apps/%d/', $id),
            $app->toArray($onlyFilledProperties)
        );
    }
}
