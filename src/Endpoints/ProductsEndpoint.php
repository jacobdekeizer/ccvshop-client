<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Products as Models;
use JacobDeKeizer\Ccv\Parameters\Products\All;

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

        $result = $this->doRequest('GET', 'products' . $payload->toBuilder()->toQueryString());

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
            'GET',
            sprintf('brands/%s/products%s', $brandId, $payload->toBuilder()->toQueryString())
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
            'GET',
            sprintf('webshops/%s/products%s', $webshopId, $payload->toBuilder()->toQueryString())
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
            'GET',
            sprintf('categories/%s/products%s', $categoryId, $payload->toBuilder()->toQueryString())
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
            'GET',
            sprintf('conditions/%s/products%s', $conditionId, $payload->toBuilder()->toQueryString())
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
            'GET',
            sprintf('suppliers/%s/products%s', $supplierId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Products::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Products
    {
        $result = $this->doRequest('GET', 'products/' . $id);

        return Models\Resource\Products::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Models\Products\Patch $product, bool $onlyFilledProperties = true): void
    {
        $this->doRequest('PATCH', 'products/' . $id, $product->toArray($onlyFilledProperties));
    }

    /**
     * @throws CcvShopException
     */
    public function create(Models\Products\Post $product, bool $onlyFilledProperties = true): Models\Resource\Products
    {
        $response = $this->doRequest('POST', 'products', $product->toArray($onlyFilledProperties));

        return Models\Resource\Products::fromArray($response);
    }

    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest('DELETE', 'products/' . $id);
    }
}
