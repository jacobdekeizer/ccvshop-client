<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class AttributecombinationphotosEndpoint extends BaseEndpoint
{
    /**
     * Delete a AttributeCombinationPhoto. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'attributecombinationphotos/' . $id . '/',
        );
    }
    
    /**
     * Gets all values for the attribute. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromAttributecombinations(int $id): \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Collection\Attributecombinationphotos
    {
        $result = $this->doRequest(
            self::GET,
            'attributecombinations/' . $id . '/attributecombinationphotos/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Collection\Attributecombinationphotos::fromArray($result);
    }
    
    /**
     * Gets a single Attribute Combination Photo. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Resource\Attributecombinationphoto
    {
        $result = $this->doRequest(
            self::GET,
            'attributecombinationphotos/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Resource\Attributecombinationphoto::fromArray($result);
    }
    
    /**
     * Patch a AttributeCombinationPhoto. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Attributecombinationphotos\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'attributecombinationphotos/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a Attribute combination photo. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromAttributecombinations(int $id, \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Attributecombinationphotos\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Resource\Attributecombinationphoto
    {
        $result = $this->doRequest(
            self::POST,
            'attributecombinations/' . $id . '/attributecombinationphotos/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Resource\Attributecombinationphoto::fromArray($result);
    }
}
