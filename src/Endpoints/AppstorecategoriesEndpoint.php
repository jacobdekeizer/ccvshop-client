<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class AppstorecategoriesEndpoint extends BaseEndpoint
{
    /**
     * Gets one appstore categorie. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Appstorecategories\Resource\Appstorecategories
    {
        $result = $this->doRequest(
            self::GET,
            'appstorecategories/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Appstorecategories\Resource\Appstorecategories::fromArray($result);
    }
    
    /**
     * Gets all appsstore categories. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Appstorecategories\Collection\Appstorecategories
    {
        $result = $this->doRequest(
            self::GET,
            'appstorecategories/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Appstorecategories\Collection\Appstorecategories::fromArray($result);
    }
}
