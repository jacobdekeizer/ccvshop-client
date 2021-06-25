<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class OrdernotificationsEndpoint extends BaseEndpoint
{
    public function allFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Ordernotifications\Collection\Ordernotifications
    {
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/ordernotifications/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordernotifications\Collection\Ordernotifications::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Ordernotifications\Resource\Ordernotifications
    {
        $result = $this->doRequest(
            self::GET,
            'ordernotifications/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordernotifications\Resource\Ordernotifications::fromArray($result);
    }
    
    public function createFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Ordernotifications\Ordernotifications\Input
    {
        $result = $this->doRequest(
            self::POST,
            'orders/' . $id . '/ordernotifications/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordernotifications\Ordernotifications\Input::fromArray($result);
    }
}
