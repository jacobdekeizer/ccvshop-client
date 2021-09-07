<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Geozonecountries\Geozonecountries;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Tariff implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Tax tariff type.
     */
    private $type;

    /**
     * @var float Tax percentage.
     */
    private $percentage;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Tax tariff type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return float Tax percentage.
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    /**
     * @param string $type Tax tariff type.
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param float $percentage Tax percentage.
     * @return self
     */
    public function setPercentage(float $percentage): self
    {
        $this->percentage = $percentage;
        $this->propertyFilled('percentage');
        return $this;
    }
}
