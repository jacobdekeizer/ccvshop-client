<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ServicecategoriesEndpoint extends BaseEndpoint
{
    /**
     * Gets one appstore categorie. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Servicecategories\Resource\Servicecategories
    {
        $result = $this->doRequest(
            self::GET,
            'servicecategories/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Servicecategories\Resource\Servicecategories::fromArray($result);
    }
    
    /**
     * Gets all appsstore categories. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Servicecategories\Collection\Servicecategories
    {
        $result = $this->doRequest(
            self::GET,
            'servicecategories/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Servicecategories\Collection\Servicecategories::fromArray($result);
    }
}
