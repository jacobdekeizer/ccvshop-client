<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class TranslationsEndpoint extends BaseEndpoint
{
    public function all(?\JacobDeKeizer\Ccv\Parameters\Translations\All $parameter = null): \JacobDeKeizer\Ccv\Models\Translations\Collection\Translations
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Translations\All();
        }
        
        $result = $this->doRequest(
            self::GET,
            'translations/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Translations\Collection\Translations::fromArray($result);
    }
    
    public function update(): \JacobDeKeizer\Ccv\Models\Translations\Translations\Input
    {
        $result = $this->doRequest(
            self::PUT,
            'translations/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Translations\Translations\Input::fromArray($result);
    }
}
