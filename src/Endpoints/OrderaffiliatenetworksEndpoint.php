<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class OrderaffiliatenetworksEndpoint extends BaseEndpoint
{
    public function allFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Collection\Orderaffiliatenetworks
    {
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/orderaffiliatenetworks/'
        );

        return \JacobDeKeizer\Ccv\Models\Orderaffiliatenetworks\Collection\Orderaffiliatenetworks::fromArray($result);
    }
}
