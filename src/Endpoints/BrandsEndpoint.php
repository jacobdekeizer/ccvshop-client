<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class BrandsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'brands/' . $id . '/'
        );
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Brands\Resource\Brands
    {
        $result = $this->doRequest(
            self::GET,
            'brands/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Brands\Resource\Brands::fromArray($result);
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Brands\Collection\Brands
    {
        $result = $this->doRequest(
            self::GET,
            'brands/'
        );

        return \JacobDeKeizer\Ccv\Models\Brands\Collection\Brands::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Brands\Brands\Input
    {
        $result = $this->doRequest(
            self::PATCH,
            'brands/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Brands\Brands\Input::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Brands\Brands\Input
    {
        $result = $this->doRequest(
            self::POST,
            'brands/'
        );

        return \JacobDeKeizer\Ccv\Models\Brands\Brands\Input::fromArray($result);
    }
}
