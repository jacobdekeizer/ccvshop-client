<?php declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Attributevalues as Models;

class AttributevaluesEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, 'attributevalues/' . $id);
    }

    /**
     * @throws CcvShopException
     */
    public function allForCombination(int $attributeconbinationId): Models\Collection\Attributevalues
    {
        $result = $this->doRequest(self::GET, 'attributecombinations/' . $attributeconbinationId . '/attributevalues/');

        return Models\Collection\Attributevalues::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Attributevalues
    {
        $result = $this->doRequest(self::GET, 'attributevalues/' . $id);

        return Models\Resource\Attributevalues::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function allForAttribute(int $attributeId): Models\Collection\Attributevalues
    {
        $result = $this->doRequest(self::GET, 'attributes/' . $attributeId . '/attributevalues/');

        return Models\Collection\Attributevalues::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function all(): Models\Collection\Attributevalues
    {
        $result = $this->doRequest(self::GET, 'attributes/');

        return Models\Collection\Attributevalues::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(
        int $attributevalueId,
        Models\Attributevalues\Patch $attributevalues,
        bool $onlyFilledProperties = true
    ): void {
        $this->doRequest(
            self::PATCH,
            'attributevalues/' . $attributevalueId,
            $attributevalues->toArray($onlyFilledProperties)
        );
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        int $attributeId,
        Models\Attributevalues\Post $attributevalues,
        bool $onlyFilledProperties = true
    ): Models\Resource\Attributevalues {
        $response = $this->doRequest(
            self::POST,
            'attributes/' . $attributeId . '/attributevalues',
            $attributevalues->toArray($onlyFilledProperties)
        );

        return Models\Resource\Attributevalues::fromArray($response);
    }
}
