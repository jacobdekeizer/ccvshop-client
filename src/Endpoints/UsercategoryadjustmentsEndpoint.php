<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class UsercategoryadjustmentsEndpoint extends BaseEndpoint
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
            'usercategoryadjustments/' . $id . '/',
        );
    }

    /**
     * Get all adjustments. This can only be done by either user_id or category_id or both. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Usercategoryadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Collection\Usercategoryadjustments
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Usercategoryadjustments\All();
        }

        $result = $this->doRequest(
            self::GET,
            'usercategoryadjustments/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Collection\Usercategoryadjustments::fromArray($result);
    }

    /**
     * Get one adjustment by id. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Resource\Usercategoryadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'usercategoryadjustments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Resource\Usercategoryadjustments::fromArray($result);
    }

    /**
     * Update an existing adjustment. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Usercategoryadjustments\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'usercategoryadjustments/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Create a new adjustment for an user. 100 per minute
     *
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Usercategoryadjustments\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Resource\Usercategoryadjustments
    {
        $result = $this->doRequest(
            self::POST,
            'usercategoryadjustments/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Resource\Usercategoryadjustments::fromArray($result);
    }
}
