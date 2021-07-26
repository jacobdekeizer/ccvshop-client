<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class CredentialsEndpoint extends BaseEndpoint
{
    /**
     * Deletes current API credential. No futher calls are permitted after this. This is an unreversable action. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'credentials/' . $id . '/',
        );
    }

    /**
     * Returns a collection of credentials. This will always be zero or one results. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Credentials\Collection\Credentials
    {
        $result = $this->doRequest(
            self::GET,
            'credentials/'
        );

        return \JacobDeKeizer\Ccv\Models\Credentials\Collection\Credentials::fromArray($result);
    }

    /**
     * Returns the current API credential with the resource id. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Credentials\Resource\Credentials
    {
        $result = $this->doRequest(
            self::GET,
            'credentials/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Credentials\Resource\Credentials::fromArray($result);
    }
}
