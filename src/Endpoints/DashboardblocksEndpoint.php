<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class DashboardblocksEndpoint extends BaseEndpoint
{
    /**
     * Get all dashboard blocks from a specific dashboard. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromDashboards(int $id): \JacobDeKeizer\Ccv\Models\Dashboardblocks\Collection\Dashboardblocks
    {
        $result = $this->doRequest(
            self::GET,
            'dashboards/' . $id . '/dashboardblocks/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Dashboardblocks\Collection\Dashboardblocks::fromArray($result);
    }
    
    /**
     * Get one dashboard block. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Dashboardblocks\Resource\Dashboardblocks
    {
        $result = $this->doRequest(
            self::GET,
            'dashboardblocks/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Dashboardblocks\Resource\Dashboardblocks::fromArray($result);
    }
}
