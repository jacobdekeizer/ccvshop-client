<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class CategoryproductlayoutsEndpoint extends BaseEndpoint
{
    /**
     * Get one layout for products in a category. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Resource\Categoryproductlayouts
    {
        $result = $this->doRequest(
            self::GET,
            'categoryproductlayouts/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Resource\Categoryproductlayouts::fromArray($result);
    }

    /**
     * Get all layout for products in a category. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Collection\Categoryproductlayouts
    {
        $result = $this->doRequest(
            self::GET,
            'categoryproductlayouts/'
        );

        return \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Collection\Categoryproductlayouts::fromArray($result);
    }
}
