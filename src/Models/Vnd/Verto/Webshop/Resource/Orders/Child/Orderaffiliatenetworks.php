<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orders\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Orderaffiliatenetworks implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to affiliate of order
     */
    private ?string $href;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string|null Link to affiliate of order
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @param string|null $href Link to affiliate of order
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }
}
