<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class MailinglistsEndpoint extends BaseEndpoint
{
    /**
     * Delete a mailinglist. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'mailinglists/' . $id . '/',
        );
    }
    
    /**
     * Get one mailinglist. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Mailinglists\Resource\Mailinglists
    {
        $result = $this->doRequest(
            self::GET,
            'mailinglists/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Mailinglists\Resource\Mailinglists::fromArray($result);
    }
    
    /**
     * Get all mailinglists of this webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Mailinglists\Collection\Mailinglists
    {
        $result = $this->doRequest(
            self::GET,
            'mailinglists/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Mailinglists\Collection\Mailinglists::fromArray($result);
    }
    
    /**
     * Patch a mailinglist. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Mailinglists\Mailinglists\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'mailinglists/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a mailinglist. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Mailinglists\Mailinglists\Input $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Mailinglists\Resource\Mailinglists
    {
        $result = $this->doRequest(
            self::POST,
            'mailinglists/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Mailinglists\Resource\Mailinglists::fromArray($result);
    }
}
