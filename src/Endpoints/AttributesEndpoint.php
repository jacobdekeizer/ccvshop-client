<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class AttributesEndpoint extends BaseEndpoint
{
    /**
     * Delete an attribute. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'attributes/' . $id . '/',
        );
    }

    /**
     * Gets all values for the attribute. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromAttributecombination(int $id): \JacobDeKeizer\Ccv\Models\Attributes\Collection\Attributes
    {
        $result = $this->doRequest(
            self::GET,
            'attributecombinations/' . $id . '/attributes/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributes\Collection\Attributes::fromArray($result);
    }

    /**
     * Gets all attributes of this webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Attributes\Collection\Attributes
    {
        $result = $this->doRequest(
            self::GET,
            'attributes/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributes\Collection\Attributes::fromArray($result);
    }

    /**
     * Gets one attribute. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Attributes\Resource\Attributes
    {
        $result = $this->doRequest(
            self::GET,
            'attributes/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributes\Resource\Attributes::fromArray($result);
    }

    /**
     * Patch an attribute. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Attributes\Attributes\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'attributes/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Post an attribute. 100 per minute
     *
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Attributes\Attributes\Input $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Attributes\Resource\Attributes
    {
        $result = $this->doRequest(
            self::POST,
            'attributes/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Attributes\Resource\Attributes::fromArray($result);
    }
}
