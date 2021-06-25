<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class MerchantEndpoint extends BaseEndpoint
{
    public function allFromWebshops(int $id): \JacobDeKeizer\Ccv\Models\Merchant\Entity\Merchant
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/merchant/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Merchant\Entity\Merchant::fromArray($result);
    }
}
