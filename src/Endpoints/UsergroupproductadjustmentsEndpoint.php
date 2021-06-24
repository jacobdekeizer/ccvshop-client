<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class UsergroupproductadjustmentsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'usergroupproductadjustments/' . $id . '/'
        );
    }

    public function all(?\JacobDeKeizer\Ccv\Parameters\Usergroupproductadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Usergroupproductadjustments\Collection\Usergroupproductadjustments
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Usergroupproductadjustments\All();
        }

        $result = $this->doRequest(
            self::GET,
            'usergroupproductadjustments/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Usergroupproductadjustments\Collection\Usergroupproductadjustments::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Usergroupproductadjustments\Resource\Usergroupproductadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'usergroupproductadjustments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Usergroupproductadjustments\Resource\Usergroupproductadjustments::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Usergroupproductadjustments\Usergroupproductadjustments\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'usergroupproductadjustments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Usergroupproductadjustments\Usergroupproductadjustments\Patch::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Usergroupproductadjustments\Usergroupproductadjustments\Post
    {
        $result = $this->doRequest(
            self::POST,
            'usergroupproductadjustments/'
        );

        return \JacobDeKeizer\Ccv\Models\Usergroupproductadjustments\Usergroupproductadjustments\Post::fromArray($result);
    }
}
