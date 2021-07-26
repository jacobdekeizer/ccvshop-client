<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int|null Unique product position.
     */
    private $position;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int|null Unique product position.
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @param int|null $position Unique product position.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
}
