<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductkeywordsEndpoint extends BaseEndpoint
{
    public function deleteFromProducts(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'products/' . $id . '/productkeywords/'
        );
    }

    public function allFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productkeywords\Collection\Productkeywords
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productkeywords/'
        );

        return \JacobDeKeizer\Ccv\Models\Productkeywords\Collection\Productkeywords::fromArray($result);
    }

    public function createFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productkeywords\Productkeywords\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productkeywords/'
        );

        return \JacobDeKeizer\Ccv\Models\Productkeywords\Productkeywords\Post::fromArray($result);
    }
}
