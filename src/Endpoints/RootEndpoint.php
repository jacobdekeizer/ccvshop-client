<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Root\RootCollection;

class RootEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function all(): RootCollection
    {
        $result = $this->doRequest(self::GET, '');

        return RootCollection::fromArray($result);
    }
}
