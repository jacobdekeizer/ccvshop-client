<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productvideos\Productvideos;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Productvideo name
     */
    private $name;

    /**
     * @var int|null Productvideo position.
     */
    private $position;

    /**
     * @var string|null Productvideo embedcode
     */
    private $embedcode;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null Productvideo name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null Productvideo position.
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return string|null Productvideo embedcode
     */
    public function getEmbedcode(): ?string
    {
        return $this->embedcode;
    }

    /**
     * @param string|null $name Productvideo name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param int|null $position Productvideo position.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }

    /**
     * @param string|null $embedcode Productvideo embedcode
     * @return self
     */
    public function setEmbedcode(?string $embedcode): self
    {
        $this->embedcode = $embedcode;
        $this->propertyFilled('embedcode');
        return $this;
    }
}
