<?php declare(strict_types=1);

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
        $result = $this->doRequest(self::GET, sprintf('categories/%d/producttocategories/', $categoryId));

        return Models\Collection\Producttocategories::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function allForProduct(int $productId): Models\Collection\Producttocategories
    {
        $result = $this->doRequest(self::GET, sprintf('products/%d/producttocategories/', $productId));

        return Models\Collection\Producttocategories::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Producttocategories
    {
        $result = $this->doRequest(self::GET, sprintf('producttocategories/%d', $id));

        return Models\Resource\Producttocategories::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Models\Producttocategories\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PATCH, sprintf('producttocategories/%d', $id), $model->toArray($onlyFilled));
    }

    /**
     * @throws CcvShopException
     */
    public function create(Post $model, bool $onlyFilled = true): Models\Resource\Producttocategories
    {
        $response = $this->doRequest(self::POST, 'producttocategories/', $model->toArray($onlyFilled));

        return Models\Resource\Producttocategories::fromArray($response);
    }

    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, sprintf('producttocategories/%d', $id));
    }
}
