<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Attributevalues\Post;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Attribute value name
     */
    private string $name;

    /**
     * @var float Default price of this attribute value
     */
    private float $defaultPrice;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string Attribute value name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float Default price of this attribute value
     */
    public function getDefaultPrice(): float
    {
        return $this->defaultPrice;
    }

    /**
     * @param string $name Attribute value name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param float $defaultPrice Default price of this attribute value
     * @return self
     */
    public function setDefaultPrice(float $defaultPrice): self
    {
        $this->defaultPrice = $defaultPrice;
        return $this;
    }
}
