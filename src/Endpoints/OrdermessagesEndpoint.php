<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class OrdermessagesEndpoint extends BaseEndpoint
{
    /**
     * Delete one specific message. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'ordermessages/' . $id . '/',
        );
    }
    
    /**
     * Get all messages from this order. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromOrders(int $id, \JacobDeKeizer\Ccv\Parameters\Ordermessages\AllFromOrders $parameter = null): \JacobDeKeizer\Ccv\Models\Ordermessages\Collection\Ordermessages
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Ordermessages\AllFromOrders();
        }
        
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/ordermessages/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordermessages\Collection\Ordermessages::fromArray($result);
    }
    
    /**
     * Get one specific message. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Ordermessages\Resource\Ordermessages
    {
        $result = $this->doRequest(
            self::GET,
            'ordermessages/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordermessages\Resource\Ordermessages::fromArray($result);
    }
    
    /**
     * Create a new order message. This message will also be emailed to the customer. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromOrders(int $id, \JacobDeKeizer\Ccv\Models\Ordermessages\Ordermessages\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Ordermessages\Resource\Ordermessages
    {
        $result = $this->doRequest(
            self::POST,
            'orders/' . $id . '/ordermessages/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordermessages\Resource\Ordermessages::fromArray($result);
    }
}
