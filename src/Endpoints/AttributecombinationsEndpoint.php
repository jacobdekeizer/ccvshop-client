<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class AttributecombinationsEndpoint extends BaseEndpoint
{
    /**
     * Get all attribute combinations of this product. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromProduct(int $id, \JacobDeKeizer\Ccv\Parameters\Attributecombinations\AllFromProduct $parameter = null): \JacobDeKeizer\Ccv\Models\Attributecombinations\Collection\Attributecombinations
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Attributecombinations\AllFromProduct();
        }

        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/attributecombinations/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Attributecombinations\Collection\Attributecombinations::fromArray($result);
    }

    /**
     * Gets one attribute combination. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id, \JacobDeKeizer\Ccv\Parameters\Attributecombinations\Get $parameter = null): \JacobDeKeizer\Ccv\Models\Attributecombinations\Resource\Attributecombinations
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Attributecombinations\Get();
        }

        $result = $this->doRequest(
            self::GET,
            'attributecombinations/' . $id . '/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Attributecombinations\Resource\Attributecombinations::fromArray($result);
    }

    /**
     * Patch a AttributeCombination. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Attributecombinations\Attributecombinations\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'attributecombinations/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
}
