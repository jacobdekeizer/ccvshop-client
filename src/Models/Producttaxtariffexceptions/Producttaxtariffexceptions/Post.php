<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Producttaxtariffexceptions\Producttaxtariffexceptions;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string ISO 2Code for the country of the tax tariff exception.
     */
    private $country;

    /**
     * @var string The tax tariff of the exception
     */
    private $taxtariff;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string ISO 2Code for the country of the tax tariff exception.
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string The tax tariff of the exception
     */
    public function getTaxtariff(): string
    {
        return $this->taxtariff;
    }

    /**
     * @param string $country ISO 2Code for the country of the tax tariff exception.
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        $this->propertyFilled('country');
        return $this;
    }

    /**
     * @param string $taxtariff The tax tariff of the exception
     * @return self
     */
    public function setTaxtariff(string $taxtariff): self
    {
        $this->taxtariff = $taxtariff;
        $this->propertyFilled('taxtariff');
        return $this;
    }
}