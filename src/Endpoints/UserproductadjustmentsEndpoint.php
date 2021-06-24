<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class UserproductadjustmentsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'userproductadjustments/' . $id . '/'
        );
    }

    public function all(?\JacobDeKeizer\Ccv\Parameters\Userproductadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Userproductadjustments\Collection\Userproductadjustments
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Userproductadjustments\All();
        }

        $result = $this->doRequest(
            self::GET,
            'userproductadjustments/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Userproductadjustments\Collection\Userproductadjustments::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Userproductadjustments\Resource\Userproductadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'userproductadjustments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Userproductadjustments\Resource\Userproductadjustments::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Userproductadjustments\Userproductadjustments\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'userproductadjustments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Userproductadjustments\Userproductadjustments\Patch::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Userproductadjustments\Userproductadjustments\Post
    {
        $result = $this->doRequest(
            self::POST,
            'userproductadjustments/'
        );

        return \JacobDeKeizer\Ccv\Models\Userproductadjustments\Userproductadjustments\Post::fromArray($result);
    }
}
