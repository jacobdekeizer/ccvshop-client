<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class OrderrowattributevaluesEndpoint extends BaseEndpoint
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
            'orderrowattributevalues/' . $id . '/',
        );
    }
    
    /**
     * Gets on value of an attribute. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Resource\Orderrowattributevalues
    {
        $result = $this->doRequest(
            self::GET,
            'orderrowattributevalues/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Resource\Orderrowattributevalues::fromArray($result);
    }
    
    /**
     * Patch an attribute value. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createForOrderrow(int $id, \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Resource\Orderrowattributevalues
    {
        $result = $this->doRequest(
            self::POST,
            'orderrows/' . $id . '/orderrowattributevalues/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Resource\Orderrowattributevalues::fromArray($result);
    }
    
    /**
     * Patch an attribute value. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function updateForOrderrow(int $id, \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'orderrows/' . $id . '/orderrowattributevalues/',
            $model->toArray($onlyFilled)
        );
    }
}
