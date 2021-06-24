<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ReturnrowsEndpoint extends BaseEndpoint
{
    public function allFromReturns(int $id): \JacobDeKeizer\Ccv\Models\Returnrows\Collection\Returnrows
    {
        $result = $this->doRequest(
            self::GET,
            'returns/' . $id . '/returnrows/'
        );

        return \JacobDeKeizer\Ccv\Models\Returnrows\Collection\Returnrows::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Returnrows\Resource\Returnrows
    {
        $result = $this->doRequest(
            self::GET,
            'returnrows/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Returnrows\Resource\Returnrows::fromArray($result);
    }
}
