<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class AppstorecategoriesEndpoint extends BaseEndpoint
{
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Appstorecategories\Resource\Appstorecategories
    {
        $result = $this->doRequest(
            self::GET,
            'appstorecategories/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Appstorecategories\Resource\Appstorecategories::fromArray($result);
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Appstorecategories\Collection\Appstorecategories
    {
        $result = $this->doRequest(
            self::GET,
            'appstorecategories/'
        );

        return \JacobDeKeizer\Ccv\Models\Appstorecategories\Collection\Appstorecategories::fromArray($result);
    }
}
