<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class DashboardblocksEndpoint extends BaseEndpoint
{
    /**
     * Get all dashboard blocks from a specific dashboard. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromDashboard(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Dashboardblocks\Dashboardblocks
    {
        $result = $this->doRequest(
            self::GET,
            'dashboards/' . $id . '/dashboardblocks/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Dashboardblocks\Dashboardblocks::fromArray($result);
    }

    /**
     * Get one dashboard block. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Dashboardblocks\Dashboardblocks
    {
        $result = $this->doRequest(
            self::GET,
            'dashboardblocks/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Dashboardblocks\Dashboardblocks::fromArray($result);
    }
}
