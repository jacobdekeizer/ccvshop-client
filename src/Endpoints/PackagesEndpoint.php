<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class PackagesEndpoint extends BaseEndpoint
{
    /**
     * Get one package. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Packages\Resource\Packages
    {
        $result = $this->doRequest(
            self::GET,
            'packages/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Packages\Resource\Packages::fromArray($result);
    }
    
    /**
     * Get all packages of this webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Packages\Collection\Packages
    {
        $result = $this->doRequest(
            self::GET,
            'packages/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Packages\Collection\Packages::fromArray($result);
    }
    
    /**
     * Patches an existing product package. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Packages\Packages\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'packages/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Creates a new product package. Sent price calculation can be change in merchant's backend. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Packages\Packages\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'packages/',
            $model->toArray($onlyFilled)
        );
    }
}
