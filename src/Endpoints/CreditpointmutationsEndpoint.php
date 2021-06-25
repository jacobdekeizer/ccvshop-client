<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class CreditpointmutationsEndpoint extends BaseEndpoint
{
    public function allFromUsers(int $id, ?\JacobDeKeizer\Ccv\Parameters\Creditpointmutations\AllFromUsers $parameter = null): \JacobDeKeizer\Ccv\Models\Creditpointmutations\Collection\Creditpointmutations
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Creditpointmutations\AllFromUsers();
        }
        
        $result = $this->doRequest(
            self::GET,
            'users/' . $id . '/creditpointmutations/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Creditpointmutations\Collection\Creditpointmutations::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Creditpointmutations\Resource\Creditpointmutations
    {
        $result = $this->doRequest(
            self::GET,
            'creditpointmutations/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Creditpointmutations\Resource\Creditpointmutations::fromArray($result);
    }
}
