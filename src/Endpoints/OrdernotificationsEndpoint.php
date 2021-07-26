<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class OrdernotificationsEndpoint extends BaseEndpoint
{
    /**
     * Get all order notifications belonging to an order. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromOrder(int $id): \JacobDeKeizer\Ccv\Models\Ordernotifications\Collection\Ordernotifications
    {
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/ordernotifications/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordernotifications\Collection\Ordernotifications::fromArray($result);
    }
    
    /**
     * Get one order notification based on an Id. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Ordernotifications\Resource\Ordernotifications
    {
        $result = $this->doRequest(
            self::GET,
            'ordernotifications/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordernotifications\Resource\Ordernotifications::fromArray($result);
    }
    
    /**
     * Create a order notification of the given type. This will trigger an e-mail of the given type. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createForOrder(int $id, \JacobDeKeizer\Ccv\Models\Ordernotifications\Ordernotifications\Input $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Ordernotifications\Resource\Ordernotifications
    {
        $result = $this->doRequest(
            self::POST,
            'orders/' . $id . '/ordernotifications/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Ordernotifications\Resource\Ordernotifications::fromArray($result);
    }
}
