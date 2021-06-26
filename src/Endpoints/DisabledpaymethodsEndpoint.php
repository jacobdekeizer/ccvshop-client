<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class DisabledpaymethodsEndpoint extends BaseEndpoint
{
    /**
     * Get all disabled paymethods for this user group. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromUsergroups(int $id): \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Collection\Disabledpaymethods
    {
        $result = $this->doRequest(
            self::GET,
            'usergroups/' . $id . '/disabledpaymethods/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Collection\Disabledpaymethods::fromArray($result);
    }
    
    /**
     * Get all disabled paymethods for this user. The result will be empty if the user belongs to a group. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromUsers(int $id): \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Collection\Disabledpaymethods
    {
        $result = $this->doRequest(
            self::GET,
            'users/' . $id . '/disabledpaymethods/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Collection\Disabledpaymethods::fromArray($result);
    }
    
    /**
     * Change the disabled paymethods for an user group. Paymethods that are enabled in the webshop but are omitted here are visible for the user during the checkout. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function updateFromUsergroups(int $id, \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Disabledpaymethods\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'usergroups/' . $id . '/disabledpaymethods/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Change the disabled paymethods for an user. Paymethods that are enabled in the webshop but are omitted here are visible for the user during the checkout. Gives an exception if the user belongs to a group. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function updateFromUsers(int $id, \JacobDeKeizer\Ccv\Models\Disabledpaymethods\Disabledpaymethods\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'users/' . $id . '/disabledpaymethods/',
            $model->toArray($onlyFilled)
        );
    }
}
