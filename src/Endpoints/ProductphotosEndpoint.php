<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Productphotos as Models;
use JacobDeKeizer\Ccv\Models\Products\Resource\Productphotos;
use JacobDeKeizer\Ccv\Parameters\Productphotos\All;

class ProductphotosEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function get(int $id): Productphotos
    {
        $result = $this->doRequest(self::GET, sprintf('productphotos/%d', $id));

        return Productphotos::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, sprintf('productphotos/%d', $id));
    }

    /**
     * @throws CcvShopException
     */
    public function allForProduct(int $productId, ?All $payload = null): Models\Collection\Productphotos
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('products/%d/productphotos%s', $productId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Productphotos::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        int $productId,
        Models\Productphotos\Post $model,
        bool $onlyFilled = true
    ): Models\Resource\Productphotos {
        $response = $this->doRequest(
            self::POST,
            sprintf('products/%d/productphotos', $productId),
            $model->toArray($onlyFilled)
        );

        return Models\Resource\Productphotos::fromArray($response);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Models\Productphotos\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PATCH, sprintf('productphotos/%d', $id), $model->toArray($onlyFilled));
    }

    /**
     * Replace a product photo collection of an existing product.
     * All existing photos will be deleted. With an empty collection you can achieve a DELETE ALL product photos.
     *
     * @throws CcvShopException
     */
    public function replace(int $productId, Models\Productphotos\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PUT, sprintf('products/%d/productphotos', $productId), $model->toArray($onlyFilled));
    }
}
