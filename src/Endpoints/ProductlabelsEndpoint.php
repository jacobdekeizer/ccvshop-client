<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductlabelsEndpoint extends BaseEndpoint
{
    /**
     * Get all labels linked to this product. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromProduct(int $id): \JacobDeKeizer\Ccv\Models\Productlabels\Collection\Productlabels
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productlabels/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productlabels\Collection\Productlabels::fromArray($result);
    }
    
    /**
     * Replaces all labels of this product with the new collection. An empty collection can be used to remove all labels. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function updateForProduct(int $id, \JacobDeKeizer\Ccv\Models\Productlabels\Productlabels\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'products/' . $id . '/productlabels/',
            $model->toArray($onlyFilled)
        );
    }
}
