<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductpropertyvaluesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productpropertyvalues/' . $id . '/'
        );
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Resource\Productpropertyvalues
    {
        $result = $this->doRequest(
            self::GET,
            'productpropertyvalues/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Resource\Productpropertyvalues::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Productpropertyvalues\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'productpropertyvalues/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Productpropertyvalues\Patch::fromArray($result);
    }
    
    public function create(): \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Productpropertyvalues\Post
    {
        $result = $this->doRequest(
            self::POST,
            'productpropertyvalues/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyvalues\Productpropertyvalues\Post::fromArray($result);
    }
}
