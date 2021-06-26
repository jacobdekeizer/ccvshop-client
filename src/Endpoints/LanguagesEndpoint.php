<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class LanguagesEndpoint extends BaseEndpoint
{
    /**
     * Get all available languages. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Languages\Collection\Languages
    {
        $result = $this->doRequest(
            self::GET,
            'languages/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Languages\Collection\Languages::fromArray($result);
    }
    
    /**
     * Creates a new languages based upon an existing one. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Languages\Languages\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'languages/',
            $model->toArray($onlyFilled)
        );
    }
}
