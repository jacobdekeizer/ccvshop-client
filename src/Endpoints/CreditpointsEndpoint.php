<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class CreditpointsEndpoint extends BaseEndpoint
{
    /**
     * Gets a resource with creditpoints and a last mutation date. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromUser(int $id): \JacobDeKeizer\Ccv\Models\Creditpoints\Resource\Creditpoints
    {
        $result = $this->doRequest(
            self::GET,
            'users/' . $id . '/creditpoints/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Creditpoints\Resource\Creditpoints::fromArray($result);
    }
    
    /**
     * Put the creditpoints of a user as is. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function updateForUser(int $id, \JacobDeKeizer\Ccv\Models\Creditpoints\Creditpoints\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'users/' . $id . '/creditpoints/',
            $model->toArray($onlyFilled)
        );
    }
}
