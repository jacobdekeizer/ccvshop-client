<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class AppcodeblocksEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'appcodeblocks/' . $id . '/'
        );
    }
    
    public function allFromApps(int $id): \JacobDeKeizer\Ccv\Models\Appcodeblocks\Collection\Appcodeblocks
    {
        $result = $this->doRequest(
            self::GET,
            'apps/' . $id . '/appcodeblocks/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Appcodeblocks\Collection\Appcodeblocks::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Appcodeblocks\Resource\Appcodeblocks
    {
        $result = $this->doRequest(
            self::GET,
            'appcodeblocks/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Appcodeblocks\Resource\Appcodeblocks::fromArray($result);
    }
    
    public function createFromApps(int $id): \JacobDeKeizer\Ccv\Models\Appcodeblocks\Appcodeblocks\Post
    {
        $result = $this->doRequest(
            self::POST,
            'apps/' . $id . '/appcodeblocks/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Appcodeblocks\Appcodeblocks\Post::fromArray($result);
    }
}
