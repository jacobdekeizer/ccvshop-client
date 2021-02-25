<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Products as Models;
use JacobDeKeizer\Ccv\Parameters\Products\All;
use JacobDeKeizer\Ccv\Parameters\Products\Get;

class ProductsEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function all(?All $payload = null): Models\Collection\Products
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(self::GET, sprintf('products%s', $payload->toBuilder()->toQueryString()));

        return Models\Collection\Products::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function allFromBrand(int $brandId, ?All $payload = null): Models\Collection\Products
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('brands/%d/products%s', $brandId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Products::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function allFromWebshop(int $webshopId, ?All $payload = null): Models\Collection\Products
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('webshops/%d/products%s', $webshopId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Products::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function allFromCategory(int $categoryId, ?All $payload = null): Models\Collection\Products
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('categories/%d/products%s', $categoryId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Products::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function allFromCondition(int $conditionId, ?All $payload = null): Models\Collection\Products
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('conditions/%d/products%s', $conditionId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Products::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function allFromSupplier(int $supplierId, ?All $payload = null): Models\Collection\Products
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('suppliers/%d/products%s', $supplierId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Products::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id, ?Get $payload = null): Models\Resource\Products
    {
        if ($payload === null) {
            $payload = new Get();
        }

        $result = $this->doRequest(self::GET, sprintf('products/%d%s', $id, $payload->toBuilder()->toQueryString()));

        return Models\Resource\Products::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Models\Products\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PATCH, sprintf('products/%d', $id), $model->toArray($onlyFilled));
    }

    /**
     * @throws CcvShopException
     */
    public function create(Models\Products\Post $model, bool $onlyFilled = true): Models\Resource\Products
    {
        $response = $this->doRequest(self::POST, 'products', $model->toArray($onlyFilled));

        return Models\Resource\Products::fromArray($response);
    }

    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, sprintf('products/%d', $id));
    }
}
