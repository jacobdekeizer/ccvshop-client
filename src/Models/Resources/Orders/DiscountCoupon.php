<?php

namespace JacobDeKeizer\Ccv\Models\Resources\Orders;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class DiscountCoupon implements Model
{
    use FromArray, ToArray;

    private $id;
    private $code;
    private $discount;
    private $type;
    private $enddate;
    private $onetimeuse;
    private $minimumprice;
    private $givesfreeshipping;

    /**
     * @return DiscountCoupon
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getDiscount(): string
    {
        return $this->discount;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getEnddate(): ?string
    {
        return $this->enddate;
    }

    public function getOnetimeuse(): bool
    {
        return $this->onetimeuse;
    }

    public function getMinimumprice(): ?float
    {
        return $this->minimumprice;
    }

    public function getGivesfreeshipping(): bool
    {
        return $this->givesfreeshipping;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setEnddate(?string $enddate): self
    {
        $this->enddate = $enddate;
        return $this;
    }

    public function setOnetimeuse(bool $onetimeuse): self
    {
        $this->onetimeuse = $onetimeuse;
        return $this;
    }

    public function setMinimumprice(string $minimumprice): self
    {
        $this->minimumprice = $minimumprice;
        return $this;
    }

    public function setGivesfreeshipping(bool $givesfreeshipping): self
    {
        $this->givesfreeshipping = $givesfreeshipping;
        return $this;
    }
}
