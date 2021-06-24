<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productvariations\Productvariations;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var bool Inactive variation are hidden in the webshop.
     */
    private $active;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return bool Inactive variation are hidden in the webshop.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active Inactive variation are hidden in the webshop.
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        $this->propertyFilled('active');
        return $this;
    }
}
