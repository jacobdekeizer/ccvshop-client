<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class UsergroupsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'usergroups/' . $id . '/'
        );
    }

    public function all(?\JacobDeKeizer\Ccv\Parameters\Usergroups\All $parameter = null): \JacobDeKeizer\Ccv\Models\Usergroups\Collection\Usergroups
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Usergroups\All();
        }

        $result = $this->doRequest(
            self::GET,
            'usergroups/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Usergroups\Collection\Usergroups::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Usergroups\Resource\Usergroups
    {
        $result = $this->doRequest(
            self::GET,
            'usergroups/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Usergroups\Resource\Usergroups::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Usergroups\Usergroups\Input
    {
        $result = $this->doRequest(
            self::PATCH,
            'usergroups/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Usergroups\Usergroups\Input::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Usergroups\Usergroups\Input
    {
        $result = $this->doRequest(
            self::POST,
            'usergroups/'
        );

        return \JacobDeKeizer\Ccv\Models\Usergroups\Usergroups\Input::fromArray($result);
    }
}
