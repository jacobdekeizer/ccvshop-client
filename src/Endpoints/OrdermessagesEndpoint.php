<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class OrdermessagesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'ordermessages/' . $id . '/'
        );
    }
    
    public function allFromOrders(int $id, ?\JacobDeKeizer\Ccv\Parameters\Ordermessages\AllFromOrders $parameter = null): \JacobDeKeizer\Ccv\Models\Ordermessages\Collection\Ordermessages
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Ordermessages\AllFromOrders();
        }
        
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/ordermessages/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordermessages\Collection\Ordermessages::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Ordermessages\Resource\Ordermessages
    {
        $result = $this->doRequest(
            self::GET,
            'ordermessages/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordermessages\Resource\Ordermessages::fromArray($result);
    }
    
    public function createFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Ordermessages\Ordermessages\Post
    {
        $result = $this->doRequest(
            self::POST,
            'orders/' . $id . '/ordermessages/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordermessages\Ordermessages\Post::fromArray($result);
    }
}
