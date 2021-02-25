<?php declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Productattributevalues as Models;

class ProductattributevaluesEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, sprintf('productattributevalues/%d', $id));
    }

    /**
     * @throws CcvShopException
     */
    public function allForProduct(int $productId): Models\Collection\Productattributevalues
    {
        $result = $this->doRequest(self::GET, sprintf('products/%d/productattributevalues/', $productId));

        return Models\Collection\Productattributevalues::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Productattributevalues
    {
        $result = $this->doRequest(self::GET, sprintf('productattributevalues/%d', $id));

        return Models\Resource\Productattributevalues::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Models\Productattributevalues\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PATCH, sprintf('productattributevalues/%d', $id), $model->toArray($onlyFilled));
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        int $productId,
        Models\Productattributevalues\Post $model,
        bool $onlyFilled = true
    ): Models\Resource\Productattributevalues {
        $response = $this->doRequest(
            self::POST,
            sprintf('products/%d/productattributevalues', $productId),
            $model->toArray($onlyFilled)
        );

        return Models\Resource\Productattributevalues::fromArray($response);
    }
}
