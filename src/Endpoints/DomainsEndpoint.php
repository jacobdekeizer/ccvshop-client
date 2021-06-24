<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class DomainsEndpoint extends BaseEndpoint
{
    public function allFromWebshops(int $id): \JacobDeKeizer\Ccv\Models\Domains\Collection\Domains
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/domains/'
        );

        return \JacobDeKeizer\Ccv\Models\Domains\Collection\Domains::fromArray($result);
    }
}
