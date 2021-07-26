<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class DomainsEndpoint extends BaseEndpoint
{
    /**
     * Get all domains for a specific webshop. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromWebshop(int $id): \JacobDeKeizer\Ccv\Models\Domains\Collection\Domains
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/domains/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Domains\Collection\Domains::fromArray($result);
    }
}
