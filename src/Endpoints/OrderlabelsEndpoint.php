<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class OrderlabelsEndpoint extends BaseEndpoint
{
    /**
     * Get all labels linked to this order. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromOrders(int $id): \JacobDeKeizer\Ccv\Models\Orderlabels\Collection\Orderlabels
    {
        $result = $this->doRequest(
            self::GET,
            'orders/' . $id . '/orderlabels/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderlabels\Collection\Orderlabels::fromArray($result);
    }
    
    /**
     * Replaces all labels of this order with the new collection. An empty collection can be used to remove all labels. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function updateFromOrders(int $id, \JacobDeKeizer\Ccv\Models\Orderlabels\Orderlabels\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'orders/' . $id . '/orderlabels/',
            $model->toArray($onlyFilled)
        );
    }
}
