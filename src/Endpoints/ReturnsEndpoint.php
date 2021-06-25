<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ReturnsEndpoint extends BaseEndpoint
{
    public function all(?\JacobDeKeizer\Ccv\Parameters\Returns\All $parameter = null): \JacobDeKeizer\Ccv\Models\Returns\Collection\Returns
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Returns\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'returns/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Returns\Collection\Returns::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Returns\Resource\Returns
    {
        $result = $this->doRequest(
            self::GET,
            'returns/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Returns\Resource\Returns::fromArray($result);
    }
}
