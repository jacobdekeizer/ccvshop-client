<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class CredentialsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'credentials/' . $id . '/'
        );
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Credentials\Collection\Credentials
    {
        $result = $this->doRequest(
            self::GET,
            'credentials/'
        );

        return \JacobDeKeizer\Ccv\Models\Credentials\Collection\Credentials::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Credentials\Resource\Credentials
    {
        $result = $this->doRequest(
            self::GET,
            'credentials/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Credentials\Resource\Credentials::fromArray($result);
    }
}
