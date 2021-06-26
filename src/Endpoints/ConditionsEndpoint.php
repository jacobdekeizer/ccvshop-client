<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ConditionsEndpoint extends BaseEndpoint
{
    /**
     * Delete a Condition. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'conditions/' . $id . '/',
        );
    }
    
    /**
     * Get one condition. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Conditions\Resource\Conditions
    {
        $result = $this->doRequest(
            self::GET,
            'conditions/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Conditions\Resource\Conditions::fromArray($result);
    }
    
    /**
     * Get all conditions of this webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Conditions\Collection\Conditions
    {
        $result = $this->doRequest(
            self::GET,
            'conditions/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Conditions\Collection\Conditions::fromArray($result);
    }
    
    /**
     * Patch a Condition. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Conditions\Conditions\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'conditions/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a condition. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Conditions\Conditions\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'conditions/',
            $model->toArray($onlyFilled)
        );
    }
}
