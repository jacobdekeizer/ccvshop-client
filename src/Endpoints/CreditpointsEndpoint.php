<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class CreditpointsEndpoint extends BaseEndpoint
{
    public function allFromUsers(int $id): \JacobDeKeizer\Ccv\Models\Creditpoints\Resource\Creditpoints
    {
        $result = $this->doRequest(
            self::GET,
            'users/' . $id . '/creditpoints/'
        );

        return \JacobDeKeizer\Ccv\Models\Creditpoints\Resource\Creditpoints::fromArray($result);
    }

    public function updateFromUsers(int $id): \JacobDeKeizer\Ccv\Models\Creditpoints\Creditpoints\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'users/' . $id . '/creditpoints/'
        );

        return \JacobDeKeizer\Ccv\Models\Creditpoints\Creditpoints\Put::fromArray($result);
    }
}
