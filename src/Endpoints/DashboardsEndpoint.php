<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class DashboardsEndpoint extends BaseEndpoint
{
    /**
     * Get all dashboards for this user. Each dashboard has a different name (ie location) with different blocks. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Dashboards\Collection\Dashboards
    {
        $result = $this->doRequest(
            self::GET,
            'dashboards/'
        );

        return \JacobDeKeizer\Ccv\Models\Dashboards\Collection\Dashboards::fromArray($result);
    }

    /**
     * Get one dashboard. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Dashboards\Resource\Dashboards
    {
        $result = $this->doRequest(
            self::GET,
            'dashboards/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Dashboards\Resource\Dashboards::fromArray($result);
    }
}
