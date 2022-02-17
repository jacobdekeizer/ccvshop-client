<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class ProductvariationsEndpoint extends BaseEndpoint
{
    /**
     * Delete a variation. Variations created based on product number are marked as auto_created and can't be deleted. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productvariations/' . $id . '/',
        );
    }

    /**
     * Get all variations from this product. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromProduct(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Productvariations\Productvariations
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productvariations/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Productvariations\Productvariations::fromArray($result);
    }

    /**
     * Get a single variation. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations\Productvariations
    {
        $result = $this->doRequest(
            self::GET,
            'productvariations/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations\Productvariations::fromArray($result);
    }

    /**
     * Update an exisiting variation. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Productvariations\Patch\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productvariations/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Add a new variation to this product. 100 per minute
     *
     * @throws CcvShopException
     */
    public function createForProduct(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Productvariations\Post\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations\Productvariations
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productvariations/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations\Productvariations::fromArray($result);
    }
}
