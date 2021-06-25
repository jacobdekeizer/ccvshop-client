<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class UsercategoryadjustmentsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'usercategoryadjustments/' . $id . '/'
        );
    }
    
    public function all(?\JacobDeKeizer\Ccv\Parameters\Usercategoryadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Collection\Usercategoryadjustments
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Usercategoryadjustments\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'usercategoryadjustments/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Collection\Usercategoryadjustments::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Resource\Usercategoryadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'usercategoryadjustments/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Resource\Usercategoryadjustments::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Usercategoryadjustments\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'usercategoryadjustments/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Usercategoryadjustments\Patch::fromArray($result);
    }
    
    public function create(): \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Usercategoryadjustments\Post
    {
        $result = $this->doRequest(
            self::POST,
            'usercategoryadjustments/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Usercategoryadjustments\Usercategoryadjustments\Post::fromArray($result);
    }
}
