<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ApppsppaymethodsEndpoint extends BaseEndpoint
{
    /**
     * Deletes a paymethod from the app psp. Order's payment status with this paymethod will no longer be updated. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'apppsppaymethods/' . $id . '/',
        );
    }
    
    /**
     * Gets all paymethods of this App Payment Service Provider. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromApppsp(int $id): \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethods
    {
        $result = $this->doRequest(
            self::GET,
            'apppsp/' . $id . '/apppsppaymethods/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethods::fromArray($result);
    }
    
    /**
     * Gets a single paymethod by resource id. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethod
    {
        $result = $this->doRequest(
            self::GET,
            'apppsppaymethods/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethod::fromArray($result);
    }
    
    /**
     * Patches a paymethod. Suitable for updating Issuer collections, new icons or name changes. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Paymethods\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'apppsppaymethods/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Creates a new paymethod within the App Payment Service Provider. This paymethod will be available for the merchant to activate in the webshop's backend. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromApppsp(int $id, \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethod $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethod
    {
        $result = $this->doRequest(
            self::POST,
            'apppsp/' . $id . '/apppsppaymethods/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethod::fromArray($result);
    }
}
