<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class OrderlabelsEndpoint extends BaseEndpoint
{
    public function allFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Orderlabels\Collection\Orderlabels
    {
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/orderlabels/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderlabels\Collection\Orderlabels::fromArray($result);
    }
    
    public function updateFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Orderlabels\Orderlabels\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'orders/' . $id . '/orderlabels/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderlabels\Orderlabels\Put::fromArray($result);
    }
}
