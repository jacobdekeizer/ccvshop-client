<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class TakeoutslotsEndpoint extends BaseEndpoint
{
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Takeoutslots\Resource\Takeoutslots
    {
        $result = $this->doRequest(
            self::GET,
            'takeoutslots/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Takeoutslots\Resource\Takeoutslots::fromArray($result);
    }

    public function all(?\JacobDeKeizer\Ccv\Parameters\Takeoutslots\All $parameter = null): \JacobDeKeizer\Ccv\Models\Takeoutslots\Collection\Takeoutslots
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Takeoutslots\All();
        }

        $result = $this->doRequest(
            self::GET,
            'takeoutslots/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Takeoutslots\Collection\Takeoutslots::fromArray($result);
    }
}
