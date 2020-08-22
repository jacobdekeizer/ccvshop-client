<?php declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Attributes as Models;

class AttributesEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, 'attributes/' . $id);
    }

    /**
     * @throws CcvShopException
     */
    public function allCombinationsFor(int $attributeId): Models\Collection\Attributes
    {
        $result = $this->doRequest(self::GET, 'attributecombinations/' . $attributeId . '/attributes/');

        return Models\Collection\Attributes::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function all(): Models\Collection\Attributes
    {
        $result = $this->doRequest(self::GET, 'attributes/');

        return Models\Collection\Attributes::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Attributes
    {
        $result = $this->doRequest(self::GET, 'attributes/' . $id);

        return Models\Resource\Attributes::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(
        int $id,
        Models\Attributes\Input $attribute,
        bool $onlyFilledProperties = true
    ): void {
        $this->doRequest(
            self::PATCH,
            'attributes/' . $id,
            $attribute->toArray($onlyFilledProperties)
        );
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        Models\Attributes\Input $productattributevalues,
        bool $onlyFilledProperties = true
    ): Models\Resource\Attributes {
        $response = $this->doRequest(
            self::POST,
            'attributes/',
            $productattributevalues->toArray($onlyFilledProperties)
        );

        return Models\Resource\Attributes::fromArray($response);
    }
}
