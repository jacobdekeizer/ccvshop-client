<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class MerchantEndpoint extends BaseEndpoint
{
    /**
     * Get merchant data associated with this webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromWebshops(int $id): \JacobDeKeizer\Ccv\Models\Merchant\Entity\Merchant
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/merchant/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Merchant\Entity\Merchant::fromArray($result);
    }
}
