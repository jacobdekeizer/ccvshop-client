<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class AffiliatenetworksEndpoint extends BaseEndpoint
{
    /**
     * Delete a affiliate network. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'affiliatenetworks/' . $id . '/',
        );
    }

    /**
     * Get one affiliate network. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Resource\Affiliatenetworks
    {
        $result = $this->doRequest(
            self::GET,
            'affiliatenetworks/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Resource\Affiliatenetworks::fromArray($result);
    }

    /**
     * Get all affiliate networks of this webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Collection\Affiliatenetworks
    {
        $result = $this->doRequest(
            self::GET,
            'affiliatenetworks/'
        );

        return \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Collection\Affiliatenetworks::fromArray($result);
    }

    /**
     * Patch a affiliate network. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Affiliatenetworks\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'affiliatenetworks/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Post a affiliate network. 100 per minute
     *
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Affiliatenetworks\Affiliatenetworks\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Resource\Affiliatenetworks
    {
        $result = $this->doRequest(
            self::POST,
            'affiliatenetworks/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Affiliatenetworks\Resource\Affiliatenetworks::fromArray($result);
    }
}
