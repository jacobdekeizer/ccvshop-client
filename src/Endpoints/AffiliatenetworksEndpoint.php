<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class AffiliatenetworksEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'affiliatenetworks/' . $id . '/'
        );
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Resource\Affiliatenetworks
    {
        $result = $this->doRequest(
            self::GET,
            'affiliatenetworks/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Resource\Affiliatenetworks::fromArray($result);
    }
    
    public function all(): \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Collection\Affiliatenetworks
    {
        $result = $this->doRequest(
            self::GET,
            'affiliatenetworks/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Collection\Affiliatenetworks::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Affiliatenetworks\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'affiliatenetworks/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Affiliatenetworks\Patch::fromArray($result);
    }
    
    public function create(): \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Affiliatenetworks\Post
    {
        $result = $this->doRequest(
            self::POST,
            'affiliatenetworks/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Affiliatenetworks\Post::fromArray($result);
    }
}
