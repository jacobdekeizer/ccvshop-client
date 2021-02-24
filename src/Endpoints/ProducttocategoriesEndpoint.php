<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Producttocategories as Models;
use JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Post;

class ProducttocategoriesEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function allForCategory(int $categoryId): Models\Collection\Producttocategories
    {
        $result = $this->doRequest(self::GET, 'categories/' . $categoryId . '/producttocategories/');

        return Models\Collection\Producttocategories::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function allForProduct(int $productId): Models\Collection\Producttocategories
    {
        $result = $this->doRequest(self::GET, 'products/' . $productId . '/producttocategories/');

        return Models\Collection\Producttocategories::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Producttocategories
    {
        $result = $this->doRequest(self::GET, 'producttocategories/' . $id);

        return Models\Resource\Producttocategories::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(
        int $id,
        Models\Producttocategories\Patch $producttocategories,
        bool $onlyFilledProperties = true
    ): void {
        $this->doRequest(
            self::PATCH,
            'producttocategories/' . $id,
            $producttocategories->toArray($onlyFilledProperties)
        );
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        Post $producttocategories,
        bool $onlyFilledProperties = true
    ): Models\Resource\Producttocategories {
        $response = $this->doRequest(
            self::POST,
            'producttocategories/',
            $producttocategories->toArray($onlyFilledProperties)
        );

        return Models\Resource\Producttocategories::fromArray($response);
    }

    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, 'producttocategories/' . $id);
    }
}
