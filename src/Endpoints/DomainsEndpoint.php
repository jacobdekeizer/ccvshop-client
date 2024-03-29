<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class DomainsEndpoint extends BaseEndpoint
{
    /**
     * Get all domains for a specific webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromWebshop(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Domains\Domains
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/domains/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Domains\Domains::fromArray($result);
    }
}
