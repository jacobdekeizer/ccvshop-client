<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class InvoicesEndpoint extends BaseEndpoint
{
    /**
     * Get all invoices of this webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Invoices\All $parameter = null): \JacobDeKeizer\Ccv\Models\Invoices\Collection\Invoices
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Invoices\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'invoices/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Invoices\Collection\Invoices::fromArray($result);
    }
    
    /**
     * Get one invoices by id. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Invoices\Resource\Invoices
    {
        $result = $this->doRequest(
            self::GET,
            'invoices/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Invoices\Resource\Invoices::fromArray($result);
    }
    
    /**
     * Patch an invoice. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Invoices\Invoices\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'invoices/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Create an invoice for this order. With a post action an invoice is created based on the difference between the current order and the most recent invoice. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createForOrder(int $id, \JacobDeKeizer\Ccv\Models\Invoices\Invoices\Input $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Invoices\Resource\Invoices
    {
        $result = $this->doRequest(
            self::POST,
            'orders/' . $id . '/invoices/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Invoices\Resource\Invoices::fromArray($result);
    }
}
