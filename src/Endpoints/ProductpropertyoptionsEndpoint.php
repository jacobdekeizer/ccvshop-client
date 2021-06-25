<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductpropertyoptionsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'productpropertyoptions/' . $id . '/'
        );
    }
    
    public function allFromProductproperties(int $id): \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Collection\Productpropertyoptions
    {
        $result = $this->doRequest(
            self::GET,
            'productproperties/' . $id . '/productpropertyoptions/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Collection\Productpropertyoptions::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Resource\Productpropertyoptions
    {
        $result = $this->doRequest(
            self::GET,
            'productpropertyoptions/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Resource\Productpropertyoptions::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Productpropertyoptions\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'productpropertyoptions/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Productpropertyoptions\Patch::fromArray($result);
    }
    
    public function createFromProductproperties(int $id): \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Productpropertyoptions\Post
    {
        $result = $this->doRequest(
            self::POST,
            'productproperties/' . $id . '/productpropertyoptions/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productpropertyoptions\Productpropertyoptions\Post::fromArray($result);
    }
}
