<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class OrderrowattributevaluesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'orderrowattributevalues/' . $id . '/'
        );
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Resource\Orderrowattributevalues
    {
        $result = $this->doRequest(
            self::GET,
            'orderrowattributevalues/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Resource\Orderrowattributevalues::fromArray($result);
    }
    
    public function createFromOrderrows(int $id): \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues\Post
    {
        $result = $this->doRequest(
            self::POST,
            'orderrows/' . $id . '/orderrowattributevalues/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues\Post::fromArray($result);
    }
    
    public function updateFromOrderrows(int $id): \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'orderrows/' . $id . '/orderrowattributevalues/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues\Put::fromArray($result);
    }
}
