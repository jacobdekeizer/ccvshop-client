<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ApppspEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'apppsp/' . $id . '/'
        );
    }
    
    public function allFromApps(int $id): \JacobDeKeizer\Ccv\Models\Apppsp\Collection\Apppsp
    {
        $result = $this->doRequest(
            self::GET,
            'apps/' . $id . '/apppsp/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsp\Collection\Apppsp::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Apppsp\Resource\Apppsp
    {
        $result = $this->doRequest(
            self::GET,
            'apppsp/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsp\Resource\Apppsp::fromArray($result);
    }
    
    public function all(): \JacobDeKeizer\Ccv\Models\Apppsp\Collection\Apppsp
    {
        $result = $this->doRequest(
            self::GET,
            'apppsp/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsp\Collection\Apppsp::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'apppsp/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Patch::fromArray($result);
    }
    
    public function createFromApps(int $id): \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Post
    {
        $result = $this->doRequest(
            self::POST,
            'apps/' . $id . '/apppsp/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Post::fromArray($result);
    }
}
