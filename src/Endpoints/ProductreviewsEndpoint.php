<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProductreviewsEndpoint extends BaseEndpoint
{
    /**
     * Get all reviews of this product. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromProduct(int $id, \JacobDeKeizer\Ccv\Parameters\Productreviews\AllFromProduct $parameter = null): \JacobDeKeizer\Ccv\Models\Productreviews\Collection\Productreviews
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Productreviews\AllFromProduct();
        }

        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productreviews/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productreviews\Collection\Productreviews::fromArray($result);
    }

    /**
     * Get one review. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Productreviews\Resource\Productreviews
    {
        $result = $this->doRequest(
            self::GET,
            'productreviews/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Productreviews\Resource\Productreviews::fromArray($result);
    }

    /**
     * Get all reviews place on the webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Productreviews\All $parameter = null): \JacobDeKeizer\Ccv\Models\Productreviews\Collection\Productreviews
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Productreviews\All();
        }

        $result = $this->doRequest(
            self::GET,
            'productreviews/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Productreviews\Collection\Productreviews::fromArray($result);
    }

    /**
     * Patches an existing ProductReview. Depending on the webshop's settings review might need to be approved. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Productreviews\Productreviews\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productreviews/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Post a review for this product. 100 per minute
     *
     * @throws CcvShopException
     */
    public function createForProduct(int $id, \JacobDeKeizer\Ccv\Models\Productreviews\Productreviews\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Productreviews\Resource\Productreviews
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productreviews/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Productreviews\Resource\Productreviews::fromArray($result);
    }
}
