<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productpropertyvalues\Post;

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
     * @var int Unique product id
     */
    private int $productId;

    /**
     * @var int Unique property id
     */
    private int $productPropertyId;

    /**
     * @var string The value, an boolean when checkbox, an optionid when property type is option, string when else
     */
    private string $value;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return int Unique product id
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return int Unique property id
     */
    public function getProductPropertyId(): int
    {
        return $this->productPropertyId;
    }

    /**
     * @return string The value, an boolean when checkbox, an optionid when property type is option, string when else
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param int $productId Unique product id
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @param int $productPropertyId Unique property id
     * @return self
     */
    public function setProductPropertyId(int $productPropertyId): self
    {
        $this->productPropertyId = $productPropertyId;
        return $this;
    }

    /**
     * @param string $value The value, an boolean when checkbox, an optionid when property type is option, string when else
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
