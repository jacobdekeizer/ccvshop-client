<?php declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Productphotos as Models;
use JacobDeKeizer\Ccv\Models\Products\Resource\Productphotos;

class ProductphotosEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function get(int $id): Productphotos
    {
        $result = $this->doRequest('GET', 'productphotos/' . $id);

        return Productphotos::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest('DELETE', 'productphotos/' . $id);
    }

    /**
     * @throws CcvShopException
     */
    public function getAllForProduct(int $productId): Models\Collection\Productphotos
    {
        $result = $this->doRequest('GET', 'products/' . $productId . '/productphotos');

        return Models\Collection\Productphotos::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function create(int $productId, Models\Productphotos\Post $productphoto, bool $onlyFilledProperties = true): void
    {
        $this->doRequest('POST', 'products/' . $productId . '/productphotos',
            $productphoto->toArray($onlyFilledProperties));
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Models\Productphotos\Patch $productphoto, bool $onlyFilledProperties = true): void
    {
        $this->doRequest('PATCH', 'productphotos/' . $id, $productphoto->toArray($onlyFilledProperties));
    }

    /**
     * Replace a product photo collection of an existing product.
     * All existing photos will be deleted. With an empty collection you can achieve a DELETE ALL product photos.
     *
     * @throws CcvShopException
     */
    public function replaceCollection(
        int $productId,
        Models\Collection\Productphotos $productphotosCollection,
        bool $onlyFilledProperties = true
    ): void {
        $productphotos = array_map(function (Models\Productphotos\Post $productphotos) use ($onlyFilledProperties) {
            return $productphotos->toArray($onlyFilledProperties);
        }, $productphotosCollection->getItems());

        $this->doRequest('PUT', 'products/' . $productId . '/productphotos', ['productphotos' => $productphotos]);
    }
}