<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductpropertygroupsEndpoint extends BaseEndpoint
{
    /**
     * Delete a product property group. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productpropertygroups/' . $id . '/',
        );
    }

    /**
     * Get one product property group. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productpropertygroups\Resource\Productpropertygroups
    {
        $result = $this->doRequest(
            self::GET,
            'productpropertygroups/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productpropertygroups\Resource\Productpropertygroups::fromArray($result);
    }

    /**
     * Get all product product property groups. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Productpropertygroups\Collection\Productpropertygroups
    {
        $result = $this->doRequest(
            self::GET,
            'productpropertygroups/'
        );

        return \JacobDeKeizer\Ccv\Models\Productpropertygroups\Collection\Productpropertygroups::fromArray($result);
    }

    /**
     * Patch a product Product property group. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Productpropertygroups\Productpropertygroups\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productpropertygroups/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Post a new product property group. 100 per minute
     *
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Productpropertygroups\Productpropertygroups\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Productpropertygroups\Resource\Productpropertygroups
    {
        $result = $this->doRequest(
            self::POST,
            'productpropertygroups/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Productpropertygroups\Resource\Productpropertygroups::fromArray($result);
    }
}
