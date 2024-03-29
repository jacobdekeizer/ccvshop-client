<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class WebshopsEndpoint extends BaseEndpoint
{
    /**
     * Get all webshop resources to which this product is connect. If the product is not a multishop product, this will be empty. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromProduct(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Webshops\Webshops
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/webshops/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Webshops\Webshops::fromArray($result);
    }

    /**
     * Get one webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webshops\Webshops
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webshops\Webshops::fromArray($result);
    }

    /**
     * Get all webshops. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Webshops\Webshops
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Webshops\Webshops::fromArray($result);
    }

    /**
     * Get all users that belong to this usergroup. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromWebshop(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Webshops\Webshops
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/webshops/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Webshops\Webshops::fromArray($result);
    }

    /**
     * Connects this product to target webshop. This is only available if this API is a multishop system. 100 per minute
     *
     * @throws CcvShopException
     */
    public function createForProduct(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Webhshops\Post\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webshops\Webshops
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/webshops/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Webshops\Webshops::fromArray($result);
    }

    /**
     * Replaces all connection of this product to webshops. Use an empty collection to remove all connections. This is only available if this API is a multishop system. 100 per minute
     *
     * @throws CcvShopException
     */
    public function updateForProduct(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Webhshops\Put\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'products/' . $id . '/webshops/',
            $model->toArray($onlyFilled)
        );
    }
}
