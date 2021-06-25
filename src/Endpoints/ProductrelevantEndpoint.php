<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductrelevantEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productrelevant/' . $id . '/'
        );
    }
    
    public function allFromProducts(int $id, ?\JacobDeKeizer\Ccv\Parameters\Productrelevant\AllFromProducts $parameter = null): \JacobDeKeizer\Ccv\Models\Productrelevant\Collection\Productrelevant
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Productrelevant\AllFromProducts();
        }
        
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productrelevant/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Productrelevant\Collection\Productrelevant::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productrelevant\Resource\Productrelevant
    {
        $result = $this->doRequest(
            self::GET,
            'productrelevant/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productrelevant\Resource\Productrelevant::fromArray($result);
    }
    
    public function createFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productrelevant\Productrelevant\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productrelevant/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productrelevant\Productrelevant\Post::fromArray($result);
    }
}
