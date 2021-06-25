<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ServicecategoriesEndpoint extends BaseEndpoint
{
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Servicecategories\Resource\Servicecategories
    {
        $result = $this->doRequest(
            self::GET,
            'servicecategories/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Servicecategories\Resource\Servicecategories::fromArray($result);
    }
    
    public function all(): \JacobDeKeizer\Ccv\Models\Servicecategories\Collection\Servicecategories
    {
        $result = $this->doRequest(
            self::GET,
            'servicecategories/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Servicecategories\Collection\Servicecategories::fromArray($result);
    }
}
