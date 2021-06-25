<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class DashboardsEndpoint extends BaseEndpoint
{
    public function all(): \JacobDeKeizer\Ccv\Models\Dashboards\Collection\Dashboards
    {
        $result = $this->doRequest(
            self::GET,
            'dashboards/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Dashboards\Collection\Dashboards::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Dashboards\Resource\Dashboards
    {
        $result = $this->doRequest(
            self::GET,
            'dashboards/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Dashboards\Resource\Dashboards::fromArray($result);
    }
}
