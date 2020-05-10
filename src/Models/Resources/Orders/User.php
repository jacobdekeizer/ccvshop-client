<?php

namespace JacobDeKeizer\Ccv\Models\Resources\Orders;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class User implements Model
{
    use FromArray, ToArray;

    private $id;
    private $discountPercentage;
    private $href;

    /**
     * @return User
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiscountPercentage(): ?float
    {
        return $this->discountPercentage;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setDiscountPercentage(?float $discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }

    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }
}
