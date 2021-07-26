<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class MarktplaatscategoriesEndpoint extends BaseEndpoint
{
    /**
     * Get one Marktplaats category. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Resource\Marktplaatscategories
    {
        $result = $this->doRequest(
            self::GET,
            'marktplaatscategories/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Resource\Marktplaatscategories::fromArray($result);
    }

    /**
     * Get all Marktplaats categories. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Marktplaatscategories\All $parameter = null): \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Collection\Marktplaatscategories
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Marktplaatscategories\All();
        }

        $result = $this->doRequest(
            self::GET,
            'marktplaatscategories/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Marktplaatscategories\Collection\Marktplaatscategories::fromArray($result);
    }
}
