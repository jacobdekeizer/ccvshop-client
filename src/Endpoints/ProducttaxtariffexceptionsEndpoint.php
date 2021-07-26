<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ProducttaxtariffexceptionsEndpoint extends BaseEndpoint
{
    /**
     * Delete a product tax tariff exception. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'producttaxtariffexceptions/' . $id . '/',
        );
    }

    /**
     * Get all tax tariff exceptions for this product. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromProduct(int $id): \JacobDeKeizer\Ccv\Models\Producttaxtariffexceptions\Collection\Producttaxtariffexceptions
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/producttaxtariffexceptions/'
        );

        return \JacobDeKeizer\Ccv\Models\Producttaxtariffexceptions\Collection\Producttaxtariffexceptions::fromArray($result);
    }

    /**
     * Get one tax tariff exception. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Producttaxtariffexceptions\Resource\Producttaxtariffexceptions
    {
        $result = $this->doRequest(
            self::GET,
            'producttaxtariffexceptions/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Producttaxtariffexceptions\Resource\Producttaxtariffexceptions::fromArray($result);
    }

    /**
     * Patch a product tax tariff exception. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Producttaxtariffexceptions\Producttaxtariffexceptions\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'producttaxtariffexceptions/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Add a tax tariff exception to this product. 100 per minute
     *
     * @throws CcvShopException
     */
    public function createForProduct(int $id, \JacobDeKeizer\Ccv\Models\Producttaxtariffexceptions\Producttaxtariffexceptions\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Producttaxtariffexceptions\Resource\Producttaxtariffexceptions
    {
        $result = $this->doRequest(
            self::POST,
            'products/' . $id . '/producttaxtariffexceptions/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Producttaxtariffexceptions\Resource\Producttaxtariffexceptions::fromArray($result);
    }
}
