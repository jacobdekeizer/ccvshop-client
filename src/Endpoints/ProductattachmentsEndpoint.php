<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class ProductattachmentsEndpoint extends BaseEndpoint
{
    /**
     * Delete a product attachment. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'productattachments/' . $id . '/',
        );
    }

    /**
     * Get all attachments of this product. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromProduct(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Productattachments\Productattachments
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productattachments/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Productattachments\Productattachments::fromArray($result);
    }

    /**
     * Get one product attachment. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productattachments\Productattachments
    {
        $result = $this->doRequest(
            self::GET,
            'productattachments/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productattachments\Productattachments::fromArray($result);
    }

    /**
     * Patch a product attachment. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Productattachments\Patch\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'productattachments/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Add an attachment to this product. 100 per minute
     *
     * @throws CcvShopException
     */
    public function createForProduct(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Productattachments\Post\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productattachments\Productattachments
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productattachments/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productattachments\Productattachments::fromArray($result);
    }
}
