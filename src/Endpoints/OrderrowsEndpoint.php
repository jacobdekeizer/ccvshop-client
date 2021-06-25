<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class OrderrowsEndpoint extends BaseEndpoint
{
    public function allFromOrders(int $id, ?\JacobDeKeizer\Ccv\Parameters\Orderrows\AllFromOrders $parameter = null): \JacobDeKeizer\Ccv\Models\Orderrows\Collection\Orderrows
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Orderrows\AllFromOrders();
        }
        
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/orderrows/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderrows\Collection\Orderrows::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Orderrows\Resource\Orderrows
    {
        $result = $this->doRequest(
            self::GET,
            'orderrows/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderrows\Resource\Orderrows::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Orderrows\Orderrows\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'orderrows/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderrows\Orderrows\Patch::fromArray($result);
    }
    
    public function updateFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Orderrows\Orderrows\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'orders/' . $id . '/orderrows/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderrows\Orderrows\Put::fromArray($result);
    }
}
