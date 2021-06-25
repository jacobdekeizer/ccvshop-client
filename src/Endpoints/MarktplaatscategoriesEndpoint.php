<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class MarktplaatscategoriesEndpoint extends BaseEndpoint
{
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Resource\Marktplaatscategories
    {
        $result = $this->doRequest(
            self::GET,
            'marktplaatscategories/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Resource\Marktplaatscategories::fromArray($result);
    }
    
    public function all(?\JacobDeKeizer\Ccv\Parameters\Marktplaatscategories\All $parameter = null): \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Collection\Marktplaatscategories
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Marktplaatscategories\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'marktplaatscategories/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Collection\Marktplaatscategories::fromArray($result);
    }
}
