<?php declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Productphotos as Models;
use JacobDeKeizer\Ccv\Models\Products\Resource\Productphotos;
use JacobDeKeizer\Ccv\Parameters\Productphotos\All;

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
    public function allForProduct(int $productId, ?All $payload = null): Models\Collection\Productphotos
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(
            'GET',
            sprintf('products/%s/productphotos%s', $productId, $payload->toBuilder()->toQueryString())
        );

        return Models\Collection\Productphotos::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        int $productId,
        Models\Productphotos\Post $productphoto,
        bool $onlyFilledProperties = true
    ): Models\Resource\Productphotos {
        $response = $this->doRequest(
            'POST',
            'products/' . $productId . '/productphotos',
            $productphoto->toArray($onlyFilledProperties)
        );

        return Models\Resource\Productphotos::fromArray($response);
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
    public function replace(
        int $productId,
        Models\Productphotos\Put $productphotos,
        bool $onlyFilledProperties = true
    ): void {
        $this->doRequest(
            'PUT',
            'products/' . $productId . '/productphotos',
            $productphotos->toArray($onlyFilledProperties)
        );
    }
}
