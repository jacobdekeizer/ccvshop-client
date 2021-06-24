<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class UsergroupstaggeredpriceadjustmentsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'usergroupstaggeredpriceadjustments/' . $id . '/'
        );
    }

    public function all(?\JacobDeKeizer\Ccv\Parameters\Usergroupstaggeredpriceadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Collection\Usergroupstaggeredpriceadjustments
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Usergroupstaggeredpriceadjustments\All();
        }

        $result = $this->doRequest(
            self::GET,
            'usergroupstaggeredpriceadjustments/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Collection\Usergroupstaggeredpriceadjustments::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Resource\Usergroupstaggeredpriceadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'usergroupstaggeredpriceadjustments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Resource\Usergroupstaggeredpriceadjustments::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Usergroupstaggeredpriceadjustments\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'usergroupstaggeredpriceadjustments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Usergroupstaggeredpriceadjustments\Patch::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Usergroupstaggeredpriceadjustments\Post
    {
        $result = $this->doRequest(
            self::POST,
            'usergroupstaggeredpriceadjustments/'
        );

        return \JacobDeKeizer\Ccv\Models\Usergroupstaggeredpriceadjustments\Usergroupstaggeredpriceadjustments\Post::fromArray($result);
    }
}
