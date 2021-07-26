<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productvideos\Productvideos;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Productvideo name
     */
    private $name;

    /**
     * @var int|null Productvideo position. When the position isn't filled the highest position will be used.
     */
    private $position;

    /**
     * @var string Productvideo embedcode
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
     * @return string Productvideo name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int|null Productvideo position. When the position isn't filled the highest position will be used.
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return string Productvideo embedcode
     */
    public function getEmbedcode(): string
    {
        return $this->embedcode;
    }

    /**
     * @param string $name Productvideo name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param int|null $position Productvideo position. When the position isn't filled the highest position will be used.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }

    /**
     * @param string $embedcode Productvideo embedcode
     * @return self
     */
    public function setEmbedcode(string $embedcode): self
    {
        $this->embedcode = $embedcode;
        $this->propertyFilled('embedcode');
        return $this;
    }
}
