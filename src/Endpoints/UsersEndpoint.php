<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class UsersEndpoint extends BaseEndpoint
{
    /**
     * Delete a user. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'users/' . $id . '/',
        );
    }
    
    /**
     * Get all users that belong to this usergroup. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromUsergroups(int $id, \JacobDeKeizer\Ccv\Parameters\Users\AllFromUsergroups $parameter = null): \JacobDeKeizer\Ccv\Models\Users\Collection\Users
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Users\AllFromUsergroups();
        }
        
        $result = $this->doRequest(
            self::GET,
            'usergroups/' . $id . '/users/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Users\Collection\Users::fromArray($result);
    }
    
    /**
     * Get all users. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Users\All $parameter = null): \JacobDeKeizer\Ccv\Models\Users\Collection\Users
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Users\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'users/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Users\Collection\Users::fromArray($result);
    }
    
    /**
     * Get one user. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Users\Resource\Users
    {
        $result = $this->doRequest(
            self::GET,
            'users/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Users\Resource\Users::fromArray($result);
    }
    
    /**
     * Patch a user. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Users\Users\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'users/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a user. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Users\Users\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'users/',
            $model->toArray($onlyFilled)
        );
    }
}
