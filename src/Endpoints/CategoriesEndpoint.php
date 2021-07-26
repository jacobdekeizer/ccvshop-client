<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class CategoriesEndpoint extends BaseEndpoint
{
    /**
     * Delete a product category. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'categories/' . $id . '/',
        );
    }

    /**
     * Get all categories from this category. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromCategory(int $id, \JacobDeKeizer\Ccv\Parameters\Categories\AllFromCategory $parameter = null): \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Categories\AllFromCategory();
        }

        $result = $this->doRequest(
            self::GET,
            'categories/' . $id . '/categories/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories::fromArray($result);
    }

    /**
     * Get a collection of product categories. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Categories\All $parameter = null): \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Categories\All();
        }

        $result = $this->doRequest(
            self::GET,
            'categories/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Categories\Collection\Categories::fromArray($result);
    }

    /**
     * Get one product category. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Categories\Resource\Categories
    {
        $result = $this->doRequest(
            self::GET,
            'categories/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Categories\Resource\Categories::fromArray($result);
    }

    /**
     * Patch a product category. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Categories\Categories\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'categories/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Post a product category. 100 per minute
     *
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Categories\Categories\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Categories\Resource\Categories
    {
        $result = $this->doRequest(
            self::POST,
            'categories/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Categories\Resource\Categories::fromArray($result);
    }
}
