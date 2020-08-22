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
        $this->doRequest(self::DELETE, 'productattributevalues/' . $id);
    }

    /**
     * @throws CcvShopException
     */
    public function allForProduct(int $productId): Models\Collection\Productattributevalues
    {
        $result = $this->doRequest(self::GET, 'products/' . $productId . '/productattributevalues/');

        return Models\Collection\Productattributevalues::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Productattributevalues
    {
        $result = $this->doRequest(self::GET, 'productattributevalues/' . $id);

        return Models\Resource\Productattributevalues::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(
        int $id,
        Models\Productattributevalues\Patch $productattributevalue,
        bool $onlyFilledProperties = true
    ): void {
        $this->doRequest(
            self::PATCH,
            'productattributevalues/' . $id,
            $productattributevalue->toArray($onlyFilledProperties)
        );
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        int $productId,
        Models\Productattributevalues\Post $productattributevalues,
        bool $onlyFilledProperties = true
    ): Models\Resource\Productattributevalues {
        $response = $this->doRequest(
            self::POST,
            'products/' . $productId . '/productattributevalues',
            $productattributevalues->toArray($onlyFilledProperties)
        );

        return Models\Resource\Productattributevalues::fromArray($response);
    }
}
