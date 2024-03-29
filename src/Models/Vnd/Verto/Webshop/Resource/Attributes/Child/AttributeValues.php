<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributes\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class AttributeValues implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to the values of this attribute
     */
    private string $href;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string Link to the values of this attribute
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href Link to the values of this attribute
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }
}
