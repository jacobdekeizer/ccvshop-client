<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductattributevaluesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productattributevalues/' . $id . '/'
        );
    }
    
    public function allFromProducts(int $id, ?\JacobDeKeizer\Ccv\Parameters\Productattributevalues\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productattributevalues\Collection\Productattributevalues
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Productattributevalues\AllFromProducts();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productattributevalues/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Productattributevalues\Collection\Productattributevalues::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productattributevalues\Resource\Productattributevalues
    {
        $result = $this->doRequest(
            self::GET,
            'productattributevalues/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productattributevalues\Resource\Productattributevalues::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productattributevalues\Productattributevalues\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'productattributevalues/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productattributevalues\Productattributevalues\Patch::fromArray($result);
    }
    
    public function createFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productattributevalues\Productattributevalues\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productattributevalues/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productattributevalues\Productattributevalues\Post::fromArray($result);
    }
}
