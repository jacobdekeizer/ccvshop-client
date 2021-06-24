<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProducttopropertygroupsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'producttopropertygroups/' . $id . '/'
        );
    }

    public function allFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Collection\Producttopropertygroups
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/producttopropertygroups/'
        );

        return \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Collection\Producttopropertygroups::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Resource\Producttopropertygroups
    {
        $result = $this->doRequest(
            self::GET,
            'producttopropertygroups/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Resource\Producttopropertygroups::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Producttopropertygroups\Post
    {
        $result = $this->doRequest(
            self::POST,
            'producttopropertygroups/'
        );

        return \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Producttopropertygroups\Post::fromArray($result);
    }
}
