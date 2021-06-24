<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class UsersEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'users/' . $id . '/'
        );
    }

    public function allFromUsergroups(int $id, ?\JacobDeKeizer\Ccv\Parameters\Users\AllFromUsergroups $parameter = null): \JacobDeKeizer\Ccv\Models\Users\Collection\Users
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Users\AllFromUsergroups();
        }

        $result = $this->doRequest(
            self::GET,
            'usergroups/' . $id . '/users/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Users\Collection\Users::fromArray($result);
    }

    public function all(?\JacobDeKeizer\Ccv\Parameters\Users\All $parameter = null): \JacobDeKeizer\Ccv\Models\Users\Collection\Users
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Users\All();
        }

        $result = $this->doRequest(
            self::GET,
            'users/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Users\Collection\Users::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Users\Resource\Users
    {
        $result = $this->doRequest(
            self::GET,
            'users/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Users\Resource\Users::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Users\Users\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'users/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Users\Users\Patch::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Users\Users\Post
    {
        $result = $this->doRequest(
            self::POST,
            'users/'
        );

        return \JacobDeKeizer\Ccv\Models\Users\Users\Post::fromArray($result);
    }
}
