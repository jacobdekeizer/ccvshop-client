<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class CreditpointmutationsEndpoint extends BaseEndpoint
{
    /**
     * Gets the creditpoint mutation history of a user. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromUser(int $id, \JacobDeKeizer\Ccv\Parameters\Creditpointmutations\AllFromUser $parameter = null): \JacobDeKeizer\Ccv\Models\Creditpointmutations\Collection\Creditpointmutations
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Creditpointmutations\AllFromUser();
        }
        
        $result = $this->doRequest(
            self::GET,
            'users/' . $id . '/creditpointmutations/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Creditpointmutations\Collection\Creditpointmutations::fromArray($result);
    }
    
    /**
     * Get one creditpoint mutation. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Creditpointmutations\Resource\Creditpointmutations
    {
        $result = $this->doRequest(
            self::GET,
            'creditpointmutations/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Creditpointmutations\Resource\Creditpointmutations::fromArray($result);
    }
}
