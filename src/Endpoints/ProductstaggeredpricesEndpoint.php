<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductstaggeredpricesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productstaggeredprices/' . $id . '/'
        );
    }

    public function allFromProducts(int $id, ?\JacobDeKeizer\Ccv\Parameters\Productstaggeredprices\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Collection\Productstaggeredprices
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Productstaggeredprices\AllFromProducts();
        }

        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productstaggeredprices/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Collection\Productstaggeredprices::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productstaggeredprices
    {
        $result = $this->doRequest(
            self::GET,
            'productstaggeredprices/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productstaggeredprices::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Productstaggeredprices\Input
    {
        $result = $this->doRequest(
            self::PATCH,
            'productstaggeredprices/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Productstaggeredprices\Input::fromArray($result);
    }

    public function createFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Productstaggeredprices\Input
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productstaggeredprices/'
        );

        return \JacobDeKeizer\Ccv\Models\Productstaggeredprices\Productstaggeredprices\Input::fromArray($result);
    }
}
