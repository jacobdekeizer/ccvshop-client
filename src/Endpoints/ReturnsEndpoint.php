<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ReturnsEndpoint extends BaseEndpoint
{
    /**
     * Get all returns of this webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Returns\All $parameter = null): \JacobDeKeizer\Ccv\Models\Returns\Collection\Returns
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Returns\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'returns/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Returns\Collection\Returns::fromArray($result);
    }
    
    /**
     * Get one return object . 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Returns\Resource\Returns
    {
        $result = $this->doRequest(
            self::GET,
            'returns/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Returns\Resource\Returns::fromArray($result);
    }
}
