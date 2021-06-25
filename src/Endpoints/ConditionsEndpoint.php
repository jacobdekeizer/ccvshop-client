<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ConditionsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'conditions/' . $id . '/'
        );
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Conditions\Resource\Conditions
    {
        $result = $this->doRequest(
            self::GET,
            'conditions/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Conditions\Resource\Conditions::fromArray($result);
    }
    
    public function all(): \JacobDeKeizer\Ccv\Models\Conditions\Collection\Conditions
    {
        $result = $this->doRequest(
            self::GET,
            'conditions/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Conditions\Collection\Conditions::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Conditions\Conditions\Input
    {
        $result = $this->doRequest(
            self::PATCH,
            'conditions/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Conditions\Conditions\Input::fromArray($result);
    }
    
    public function create(): \JacobDeKeizer\Ccv\Models\Conditions\Conditions\Input
    {
        $result = $this->doRequest(
            self::POST,
            'conditions/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Conditions\Conditions\Input::fromArray($result);
    }
}
