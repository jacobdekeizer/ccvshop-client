<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class SuppliersEndpoint extends BaseEndpoint
{
    /**
     * Delete a Supplier. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'suppliers/' . $id . '/',
        );
    }
    
    /**
     * Get one supplier. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Suppliers\Resource\Suppliers
    {
        $result = $this->doRequest(
            self::GET,
            'suppliers/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Suppliers\Resource\Suppliers::fromArray($result);
    }
    
    /**
     * Get all suppliers of this webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Suppliers\Collection\Suppliers
    {
        $result = $this->doRequest(
            self::GET,
            'suppliers/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Suppliers\Collection\Suppliers::fromArray($result);
    }
    
    /**
     * Patch a Supplier. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Suppliers\Suppliers\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'suppliers/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Post a supplier. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Suppliers\Suppliers\Input $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Suppliers\Resource\Suppliers
    {
        $result = $this->doRequest(
            self::POST,
            'suppliers/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Suppliers\Resource\Suppliers::fromArray($result);
    }
}
