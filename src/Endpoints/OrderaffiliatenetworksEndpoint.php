<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class OrderaffiliatenetworksEndpoint extends BaseEndpoint
{
    /**
     * Get all order rows of this order. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromOrders(int $id, \JacobDeKeizer\Ccv\Parameters\Orderaffiliatenetworks\AllFromOrders $parameter = null): \JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Collection\Orderaffiliatenetworks
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Orderaffiliatenetworks\AllFromOrders();
        }
        
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/orderaffiliatenetworks/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Collection\Orderaffiliatenetworks::fromArray($result);
    }
}
