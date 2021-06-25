<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class CategoryproductlayoutsEndpoint extends BaseEndpoint
{
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Resource\Categoryproductlayouts
    {
        $result = $this->doRequest(
            self::GET,
            'categoryproductlayouts/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Resource\Categoryproductlayouts::fromArray($result);
    }
    
    public function all(): \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Collection\Categoryproductlayouts
    {
        $result = $this->doRequest(
            self::GET,
            'categoryproductlayouts/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Collection\Categoryproductlayouts::fromArray($result);
    }
}
