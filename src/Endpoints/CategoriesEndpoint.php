<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Categories\Categories\Patch;
use JacobDeKeizer\Ccv\Models\Categories\Categories\Post;
use JacobDeKeizer\Ccv\Models\Categories\Collection\Categories;
use JacobDeKeizer\Ccv\Models\Categories\Resource\Categories as Category;
use JacobDeKeizer\Ccv\Parameters\Categories\All;

class CategoriesEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, sprintf('/categories/%d/', $id));
    }

    /**
     * @throws CcvShopException
     */
    public function allForCategory(int $id, ?All $payload = null): Categories
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            self::GET,
            sprintf('/categories/%d/categories/%s', $id, $payload->toBuilder()->toQueryString())
        );

        return Categories::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function all(?All $payload = null): Categories
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(self::GET, sprintf('/categories/%s', $payload->toBuilder()->toQueryString()));

        return Categories::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Category
    {
        $result = $this->doRequest(self::GET, sprintf('/categories/%d', $id));

        return Category::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Patch $category, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PATCH, sprintf('/categories/%d/', $id), $category->toArray($onlyFilled));
    }

    /**
     * @throws CcvShopException
     */
    public function create(Post $category, bool $onlyFilled = true): Category
    {
        $result = $this->doRequest(self::POST, '/categories/', $category->toArray($onlyFilled));

        return Category::fromArray($result);
    }
}
