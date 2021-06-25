<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProductlabelsEndpoint extends BaseEndpoint
{
    public function allFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productlabels\Collection\Productlabels
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productlabels/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productlabels\Collection\Productlabels::fromArray($result);
    }
    
    public function updateFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Productlabels\Productlabels\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'products/' . $id . '/productlabels/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Productlabels\Productlabels\Put::fromArray($result);
    }
}
