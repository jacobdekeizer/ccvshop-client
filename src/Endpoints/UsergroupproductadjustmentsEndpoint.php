<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class UsergroupproductadjustmentsEndpoint extends BaseEndpoint
{
    /**
     * Deleting an adjustment. Prices and visibility will be reverted to default for this user group. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'usergroupproductadjustments/' . $id . '/',
        );
    }

    /**
     * Get all adjustments. This can only be done by either usergroup_id or product_id or both. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Usergroupproductadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Usergroupproductadjustments\Usergroupproductadjustments
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Usergroupproductadjustments\All();
        }

        $result = $this->doRequest(
            self::GET,
            'usergroupproductadjustments/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Usergroupproductadjustments\Usergroupproductadjustments::fromArray($result);
    }

    /**
     * Get one adjustment by id. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Usergroupproductadjustments\Usergroupproductadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'usergroupproductadjustments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Usergroupproductadjustments\Usergroupproductadjustments::fromArray($result);
    }

    /**
     * Update an existing adjustment. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Usergroupproductadjustments\Patch\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'usergroupproductadjustments/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Create a new adjustment for an user group. 100 per minute
     *
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Internal\Resource\Usergroupproductadjustments\Post\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Usergroupproductadjustments\Usergroupproductadjustments
    {
        $result = $this->doRequest(
            self::POST,
            'usergroupproductadjustments/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Usergroupproductadjustments\Usergroupproductadjustments::fromArray($result);
    }
}
