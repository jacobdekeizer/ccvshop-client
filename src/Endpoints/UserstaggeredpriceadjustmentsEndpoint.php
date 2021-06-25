<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class UserstaggeredpriceadjustmentsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'userstaggeredpriceadjustments/' . $id . '/'
        );
    }
    
    public function all(?\JacobDeKeizer\Ccv\Parameters\Userstaggeredpriceadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Collection\Userstaggeredpriceadjustments
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Userstaggeredpriceadjustments\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'userstaggeredpriceadjustments/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Collection\Userstaggeredpriceadjustments::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Resource\Userstaggeredpriceadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'userstaggeredpriceadjustments/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Resource\Userstaggeredpriceadjustments::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Userstaggeredpriceadjustments\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'userstaggeredpriceadjustments/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Userstaggeredpriceadjustments\Patch::fromArray($result);
    }
    
    public function create(): \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Userstaggeredpriceadjustments\Post
    {
        $result = $this->doRequest(
            self::POST,
            'userstaggeredpriceadjustments/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Userstaggeredpriceadjustments\Userstaggeredpriceadjustments\Post::fromArray($result);
    }
}
