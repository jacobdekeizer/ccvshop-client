<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class UserproductadjustmentsEndpoint extends BaseEndpoint
{
    /**
     * Deleting an adjustment. Prices and visibility will be reverted to default for this user. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'userproductadjustments/' . $id . '/',
        );
    }

    /**
     * Get all adjustments. This can only be done by either user_id or product_id or both. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Userproductadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Userproductadjustments\Collection\Userproductadjustments
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Userproductadjustments\All();
        }

        $result = $this->doRequest(
            self::GET,
            'userproductadjustments/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Userproductadjustments\Collection\Userproductadjustments::fromArray($result);
    }

    /**
     * Get one adjustment by id. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Userproductadjustments\Resource\Userproductadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'userproductadjustments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Userproductadjustments\Resource\Userproductadjustments::fromArray($result);
    }

    /**
     * Update an existing adjustment. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Userproductadjustments\Userproductadjustments\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'userproductadjustments/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Create a new adjustment for an user for a product. 100 per minute
     *
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Userproductadjustments\Userproductadjustments\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Userproductadjustments\Resource\Userproductadjustments
    {
        $result = $this->doRequest(
            self::POST,
            'userproductadjustments/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Userproductadjustments\Resource\Userproductadjustments::fromArray($result);
    }
}
