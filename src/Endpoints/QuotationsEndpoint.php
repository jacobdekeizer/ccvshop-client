<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class QuotationsEndpoint extends BaseEndpoint
{
    public function all(?\JacobDeKeizer\Ccv\Parameters\Quotations\All $parameter = null): \JacobDeKeizer\Ccv\Models\Quotations\Collection\Quotations
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Quotations\All();
        }

        $result = $this->doRequest(
            self::GET,
            'quotations/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Quotations\Collection\Quotations::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Quotations\Resource\Quotations
    {
        $result = $this->doRequest(
            self::GET,
            'quotations/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Quotations\Resource\Quotations::fromArray($result);
    }
}
