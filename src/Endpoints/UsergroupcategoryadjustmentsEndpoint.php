<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class UsergroupcategoryadjustmentsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'usergroupcategoryadjustments/' . $id . '/'
        );
    }
    
    public function all(?\JacobDeKeizer\Ccv\Parameters\Usergroupcategoryadjustments\All $parameter = null): \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Collection\Usergroupcategoryadjustments
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Usergroupcategoryadjustments\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'usergroupcategoryadjustments/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Collection\Usergroupcategoryadjustments::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Resource\Usergroupcategoryadjustments
    {
        $result = $this->doRequest(
            self::GET,
            'usergroupcategoryadjustments/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Resource\Usergroupcategoryadjustments::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Usergroupcategoryadjustments\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'usergroupcategoryadjustments/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Usergroupcategoryadjustments\Patch::fromArray($result);
    }
    
    public function create(): \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Usergroupcategoryadjustments\Post
    {
        $result = $this->doRequest(
            self::POST,
            'usergroupcategoryadjustments/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroupcategoryadjustments\Usergroupcategoryadjustments\Post::fromArray($result);
    }
}
