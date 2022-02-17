<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class ProductkeywordsEndpoint extends BaseEndpoint
{
    /**
     * Delete all keywords from this product. 100 per minute
     *
     * @throws CcvShopException
     */
    public function deleteForProduct(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'products/' . $id . '/productkeywords/',
        );
    }

    /**
     * Get all keywords for this product. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromProduct(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Productkeywords\Productkeywords
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/productkeywords/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Productkeywords\Productkeywords::fromArray($result);
    }

    /**
     * Post a product keyword. 100 per minute
     *
     * @throws CcvShopException
     */
    public function createForProduct(int $id, \JacobDeKeizer\Ccv\Models\Internal\Resource\Productkeywords\Post\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Internal\Resource\Productkeywords\Resource\Post
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/productkeywords/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Internal\Resource\Productkeywords\Resource\Post::fromArray($result);
    }
}
