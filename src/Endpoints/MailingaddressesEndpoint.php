<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class MailingaddressesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'mailingaddresses/' . $id . '/'
        );
    }
    
    public function allFromMailinglists(int $id, ?\JacobDeKeizer\Ccv\Parameters\Mailingaddresses\AllFromMailinglists $parameter = null): \JacobDeKeizer\Ccv\Models\Mailingaddresses\Collection\Mailingaddresses
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Mailingaddresses\AllFromMailinglists();
        }
        
        $result = $this->doRequest(
            self::GET,
            'mailinglists/' . $id . '/mailingaddresses/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Mailingaddresses\Collection\Mailingaddresses::fromArray($result);
    }
    
    public function all(?\JacobDeKeizer\Ccv\Parameters\Mailingaddresses\All $parameter = null): \JacobDeKeizer\Ccv\Models\Mailingaddresses\Collection\Mailingaddresses
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Mailingaddresses\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'mailingaddresses/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Mailingaddresses\Collection\Mailingaddresses::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Mailingaddresses\Resource\Mailingaddresses
    {
        $result = $this->doRequest(
            self::GET,
            'mailingaddresses/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Mailingaddresses\Resource\Mailingaddresses::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Mailingaddresses\Mailingaddresses\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'mailingaddresses/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Mailingaddresses\Mailingaddresses\Patch::fromArray($result);
    }
    
    public function createFromMailinglists(int $id): \JacobDeKeizer\Ccv\Models\Mailingaddresses\Mailingaddresses\Post
    {
        $result = $this->doRequest(
            self::POST,
            'mailinglists/' . $id . '/mailingaddresses/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Mailingaddresses\Mailingaddresses\Post::fromArray($result);
    }
}
