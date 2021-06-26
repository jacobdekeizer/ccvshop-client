<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class UsergroupsEndpoint extends BaseEndpoint
{
    /**
     * Delete a user group. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'usergroups/' . $id . '/',
        );
    }
    
    /**
     * Get all user groups. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Usergroups\All $parameter = null): \JacobDeKeizer\Ccv\Models\Usergroups\Collection\Usergroups
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Usergroups\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'usergroups/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroups\Collection\Usergroups::fromArray($result);
    }
    
    /**
     * Get one user group. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Usergroups\Resource\Usergroups
    {
        $result = $this->doRequest(
            self::GET,
            'usergroups/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Usergroups\Resource\Usergroups::fromArray($result);
    }
    
    /**
     * Patch a user group. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Usergroups\Usergroups\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'usergroups/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a user group. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Usergroups\Usergroups\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'usergroups/',
            $model->toArray($onlyFilled)
        );
    }
}
