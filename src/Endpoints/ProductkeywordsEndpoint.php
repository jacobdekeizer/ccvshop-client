<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductkeywordsEndpoint extends BaseEndpoint
{
    /**
     * Delete all keywords from this product. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function deleteFromProducts(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'products/' . $id . '/productkeywords/',
        );
    }
    
    /**
     * Get all keywords for this product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productkeywords\Collection\Productkeywords
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productkeywords/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productkeywords\Collection\Productkeywords::fromArray($result);
    }
    
    /**
     * Post a product keyword. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createFromProducts(int $id, \JacobDeKeizer\Ccv\Models\Productkeywords\Productkeywords\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'products/' . $id . '/productkeywords/',
            $model->toArray($onlyFilled)
        );
    }
}
