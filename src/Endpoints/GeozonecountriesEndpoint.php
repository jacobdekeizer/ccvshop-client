<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class GeozonecountriesEndpoint extends BaseEndpoint
{
    /**
     * Retrieve all countries of the webshop's geozones. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromWebshop(int $id): \JacobDeKeizer\Ccv\Models\Geozonecountries\Collection\Geozonecountries
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/geozonecountries/'
        );

        return \JacobDeKeizer\Ccv\Models\Geozonecountries\Collection\Geozonecountries::fromArray($result);
    }
}
