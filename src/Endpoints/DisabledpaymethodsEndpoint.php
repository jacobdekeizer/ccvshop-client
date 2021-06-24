<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class DisabledpaymethodsEndpoint extends BaseEndpoint
{
    public function allFromUsergroups(int $id): \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Collection\Disabledpaymethods
    {
        $result = $this->doRequest(
            self::GET,
            'usergroups/' . $id . '/disabledpaymethods/'
        );

        return \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Collection\Disabledpaymethods::fromArray($result);
    }

    public function allFromUsers(int $id): \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Collection\Disabledpaymethods
    {
        $result = $this->doRequest(
            self::GET,
            'users/' . $id . '/disabledpaymethods/'
        );

        return \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Collection\Disabledpaymethods::fromArray($result);
    }

    public function updateFromUsergroups(int $id): \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Disabledpaymethods\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'usergroups/' . $id . '/disabledpaymethods/'
        );

        return \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Disabledpaymethods\Put::fromArray($result);
    }

    public function updateFromUsers(int $id): \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Disabledpaymethods\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'users/' . $id . '/disabledpaymethods/'
        );

        return \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Disabledpaymethods\Put::fromArray($result);
    }
}
