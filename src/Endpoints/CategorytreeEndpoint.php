<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class CategorytreeEndpoint extends BaseEndpoint
{
    /**
     * Get the complete tree. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytree
    {
        $result = $this->doRequest(
            self::GET,
            'categorytree/'
        );

        return \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytree::fromArray($result);
    }
}
