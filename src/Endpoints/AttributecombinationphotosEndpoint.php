<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class AttributecombinationphotosEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'attributecombinationphotos/' . $id . '/'
        );
    }
    
    public function allFromAttributecombinations(int $id): \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Collection\Attributecombinationphotos
    {
        $result = $this->doRequest(
            self::GET,
            'attributecombinations/' . $id . '/attributecombinationphotos/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Collection\Attributecombinationphotos::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Resource\Attributecombinationphoto
    {
        $result = $this->doRequest(
            self::GET,
            'attributecombinationphotos/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Resource\Attributecombinationphoto::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Attributecombinationphotos\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'attributecombinationphotos/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Attributecombinationphotos\Patch::fromArray($result);
    }
    
    public function createFromAttributecombinations(int $id): \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Attributecombinationphotos\Post
    {
        $result = $this->doRequest(
            self::POST,
            'attributecombinations/' . $id . '/attributecombinationphotos/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Attributecombinationphotos\Post::fromArray($result);
    }
}
