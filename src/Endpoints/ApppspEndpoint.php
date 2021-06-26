<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ApppspEndpoint extends BaseEndpoint
{
    /**
     * Delete an App Payment Service Provider. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'apppsp/' . $id . '/',
        );
    }
    
    /**
     * Gets a collection of all (but always one) App Payment Service Provider. Combination of webshop:id and App:id is unique. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromApps(int $id): \JacobDeKeizer\Ccv\Models\Apppsp\Collection\Apppsp
    {
        $result = $this->doRequest(
            self::GET,
            'apps/' . $id . '/apppsp/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsp\Collection\Apppsp::fromArray($result);
    }
    
    /**
     * Gets on App Payment Service Provider by Resource ID. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Apppsp\Resource\Apppsp
    {
        $result = $this->doRequest(
            self::GET,
            'apppsp/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsp\Resource\Apppsp::fromArray($result);
    }
    
    /**
     * Gets a collection of all (but always one) App Payment Service Provider. Combination of webshop:id and App:id is unique. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Apppsp\Collection\Apppsp
    {
        $result = $this->doRequest(
            self::GET,
            'apppsp/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Apppsp\Collection\Apppsp::fromArray($result);
    }
    
    /**
     * Patches an existing App PSP. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'apppsp/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Creates a code block associated with an App. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromApps(int $id, \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'apps/' . $id . '/apppsp/',
            $model->toArray($onlyFilled)
        );
    }
}
