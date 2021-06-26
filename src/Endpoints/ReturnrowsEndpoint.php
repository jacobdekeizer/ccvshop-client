<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ReturnrowsEndpoint extends BaseEndpoint
{
    /**
     * Get all return rows of this return. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromReturns(int $id, \JacobDeKeizer\Ccv\Parameters\Returnrows\AllFromReturns $parameter = null): \JacobDeKeizer\Ccv\Models\Returnrows\Collection\Returnrows
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Returnrows\AllFromReturns();
        }
        
        $result = $this->doRequest(
            self::GET,
            'returns/' . $id . '/returnrows/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Returnrows\Collection\Returnrows::fromArray($result);
    }
    
    /**
     * Get one return row. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Returnrows\Resource\Returnrows
    {
        $result = $this->doRequest(
            self::GET,
            'returnrows/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Returnrows\Resource\Returnrows::fromArray($result);
    }
}
