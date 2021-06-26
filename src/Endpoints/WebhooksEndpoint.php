<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class WebhooksEndpoint extends BaseEndpoint
{
    /**
     * Deletes an existing web hook. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'webhooks/' . $id . '/',
        );
    }
    
    /**
     * Gets one web hook. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Webhooks\Resource\Webhooks
    {
        $result = $this->doRequest(
            self::GET,
            'webhooks/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Webhooks\Resource\Webhooks::fromArray($result);
    }
    
    /**
     * Gets all webhooks. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Webhooks\All $parameter = null): \JacobDeKeizer\Ccv\Models\Webhooks\Collection\Webhooks
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Webhooks\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'webhooks/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Webhooks\Collection\Webhooks::fromArray($result);
    }
    
    /**
     * Updates an existing web hook. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Webhooks\Webhooks\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'webhooks/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Creates a web hook on given event. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Webhooks\Webhooks\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'webhooks/',
            $model->toArray($onlyFilled)
        );
    }
}
