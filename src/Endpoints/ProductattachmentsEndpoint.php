<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductattachmentsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productattachments/' . $id . '/'
        );
    }

    public function allFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productattachments\Collection\Productattachments
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productattachments/'
        );

        return \JacobDeKeizer\Ccv\Models\Productattachments\Collection\Productattachments::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productattachments\Resource\Productattachments
    {
        $result = $this->doRequest(
            self::GET,
            'productattachments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productattachments\Resource\Productattachments::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productattachments\Productattachments\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'productattachments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productattachments\Productattachments\Patch::fromArray($result);
    }

    public function createFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productattachments\Productattachments\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productattachments/'
        );

        return \JacobDeKeizer\Ccv\Models\Productattachments\Productattachments\Post::fromArray($result);
    }
}
