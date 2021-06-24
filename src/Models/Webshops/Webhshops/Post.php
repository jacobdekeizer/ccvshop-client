<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Webshops\Webhshops;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var int The unique ID of this webshop. Note that this webshop needs to be connected to the multishop system to work.
     */
    private $webshopId;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int The unique ID of this webshop. Note that this webshop needs to be connected to the multishop system to work.
     */
    public function getWebshopId(): int
    {
        return $this->webshopId;
    }

    /**
     * @param int $webshopId The unique ID of this webshop. Note that this webshop needs to be connected to the multishop system to work.
     * @return self
     */
    public function setWebshopId(int $webshopId): self
    {
        $this->webshopId = $webshopId;
        $this->propertyFilled('webshopId');
        return $this;
    }
}
