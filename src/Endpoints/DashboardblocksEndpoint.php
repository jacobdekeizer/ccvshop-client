<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class DashboardblocksEndpoint extends BaseEndpoint
{
    public function allFromDashboards(int $id): \JacobDeKeizer\Ccv\Models\Dashboardblocks\Collection\Dashboardblocks
    {
        $result = $this->doRequest(
            self::GET,
            'dashboards/' . $id . '/dashboardblocks/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Dashboardblocks\Collection\Dashboardblocks::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Dashboardblocks\Resource\Dashboardblocks
    {
        $result = $this->doRequest(
            self::GET,
            'dashboardblocks/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Dashboardblocks\Resource\Dashboardblocks::fromArray($result);
    }
}
