<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class PaymethodsEndpoint extends BaseEndpoint
{
    public function all(): \JacobDeKeizer\Ccv\Models\Paymethods\Collection\Paymethods
    {
        $result = $this->doRequest(
            self::GET,
            'paymethods/'
        );

        return \JacobDeKeizer\Ccv\Models\Paymethods\Collection\Paymethods::fromArray($result);
    }
}
