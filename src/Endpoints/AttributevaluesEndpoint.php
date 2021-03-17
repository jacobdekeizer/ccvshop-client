<?php

declare(strict_types=1);

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
        $this->doRequest(self::DELETE, sprintf('attributevalues/%d', $id));
    }

    /**
     * @throws CcvShopException
     */
    public function allForCombination(int $attributeCombinationId): Models\Collection\Attributevalues
    {
        $result = $this->doRequest(
            self::GET,
            sprintf('attributecombinations/%d/attributevalues/', $attributeCombinationId)
        );

        return Models\Collection\Attributevalues::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Attributevalues
    {
        $result = $this->doRequest(self::GET, sprintf('attributevalues/%d', $id));

        return Models\Resource\Attributevalues::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function allForAttribute(int $attributeId): Models\Collection\Attributevalues
    {
        $result = $this->doRequest(self::GET, sprintf('attributes/%d/attributevalues/', $attributeId));

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
    public function update(int $id, Models\Attributevalues\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PATCH, sprintf('attributevalues/%d', $id), $model->toArray($onlyFilled));
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        int $attributeId,
        Models\Attributevalues\Post $model,
        bool $onlyFilled = true
    ): Models\Resource\Attributevalues {
        $response = $this->doRequest(
            self::POST,
            sprintf('attributes/%d/attributevalues', $attributeId),
            $model->toArray($onlyFilled)
        );

        return Models\Resource\Attributevalues::fromArray($response);
    }
}
