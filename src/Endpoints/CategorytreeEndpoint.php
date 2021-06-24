<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class CategorytreeEndpoint extends BaseEndpoint
{
    public function all(): \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytree
    {
        $result = $this->doRequest(
            self::GET,
            'categorytree/'
        );

        return \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytree::fromArray($result);
    }
}
