<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class AttributevaluesEndpoint extends BaseEndpoint
{
    /**
     * Delete an attribute value. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'attributevalues/' . $id . '/',
        );
    }
    
    /**
     * Gets all values for the attribute. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromAttributecombinations(int $id): \JacobDeKeizer\Ccv\Models\Attributevalues\Collection\Attributevalues
    {
        $result = $this->doRequest(
            self::GET,
            'attributecombinations/' . $id . '/attributevalues/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributevalues\Collection\Attributevalues::fromArray($result);
    }
    
    /**
     * Gets on value of an attribute. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Attributevalues\Resource\Attributevalues
    {
        $result = $this->doRequest(
            self::GET,
            'attributevalues/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributevalues\Resource\Attributevalues::fromArray($result);
    }
    
    /**
     * Gets all values for the attribute. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromAttributes(int $id): \JacobDeKeizer\Ccv\Models\Attributevalues\Collection\Attributevalues
    {
        $result = $this->doRequest(
            self::GET,
            'attributes/' . $id . '/attributevalues/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Attributevalues\Collection\Attributevalues::fromArray($result);
    }
    
    /**
     * Patch an attribute value. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Attributevalues\Attributevalues\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'attributevalues/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post an attribute value. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromAttributes(int $id, \JacobDeKeizer\Ccv\Models\Attributevalues\Attributevalues\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'attributes/' . $id . '/attributevalues/',
            $model->toArray($onlyFilled)
        );
    }
}
