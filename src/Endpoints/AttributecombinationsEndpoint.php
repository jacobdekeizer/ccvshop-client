<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class AttributecombinationsEndpoint extends BaseEndpoint
{
    public function allFromProducts(int $id, ?\JacobDeKeizer\Ccv\Parameters\Attributecombinations\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Attributecombinations\Collection\Attributecombinations
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Attributecombinations\AllFromProducts();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/attributecombinations/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributecombinations\Collection\Attributecombinations::fromArray($result);
    }
    
    public function get(int $id, ?\JacobDeKeizer\Ccv\Parameters\Attributecombinations\Get $parameter = null): \JacobDeKeizer\Ccv\Models\Attributecombinations\Resource\Attributecombinations
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Attributecombinations\Get();
        }
        
        $result = $this->doRequest(
            self::GET,
            'attributecombinations/' . $id . '/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributecombinations\Resource\Attributecombinations::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Attributecombinations\Attributecombinations\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'attributecombinations/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributecombinations\Attributecombinations\Patch::fromArray($result);
    }
}
