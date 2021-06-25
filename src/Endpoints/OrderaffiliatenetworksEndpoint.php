<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class OrderaffiliatenetworksEndpoint extends BaseEndpoint
{
    public function allFromOrders(int $id, ?\JacobDeKeizer\Ccv\Parameters\Orderaffiliatenetworks\AllFromOrders $parameter = null): \JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Collection\Orderaffiliatenetworks
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Orderaffiliatenetworks\AllFromOrders();
        }
        
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/orderaffiliatenetworks/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Collection\Orderaffiliatenetworks::fromArray($result);
    }
}
