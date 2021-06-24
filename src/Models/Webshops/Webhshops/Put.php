<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Webshops\Webhshops;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Put implements Model
{
    use FromArray, ToArray;

    /**
     * @var int[] A collection of webshop_ids to which this product will be linked.
     */
    private $webshops;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int[] A collection of webshop_ids to which this product will be linked.
     */
    public function getWebshops(): array
    {
        return $this->webshops;
    }

    /**
     * @param int[] $webshops A collection of webshop_ids to which this product will be linked.
     * @return self
     */
    public function setWebshops(array $webshops): self
    {
        $this->webshops = $webshops;
        $this->propertyFilled('webshops');
        return $this;
    }
}
