<?php

namespace JacobDeKeizer\Ccv\Models\Verto\Webshop\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Discountcoupon implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Unique coupon code. Valid characters are: A-Z, a-z, 0-9 and # - $ & _ *
     */
     private $code;

    /**
     * @var float The amount of discount this coupon gives. Depending on the type it can be a percentage or a fixed discount.
     */
     private $discount;

    /**
     * @var string|null Discount type
     */
     private $type;

    /**
     * @var string|null End date coupon validity, UTC
     */
     private $enddate;

    /**
     * @var bool One time use. After usage this coupon will be removed.
     */
     private $onetimeuse;

    /**
     * @var bool This coupon gives free shipping costs.
     */
     private $givesfreeshipping;

    /**
     * @var float Minimum price of the order before this coupon can be used.
     */
     private $minimumprice;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Unique coupon code. Valid characters are: A-Z, a-z, 0-9 and # - $ & _ *
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return float The amount of discount this coupon gives. Depending on the type it can be a percentage or a fixed discount.
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @return string|null Discount type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null End date coupon validity, UTC
     */
    public function getEnddate(): ?string
    {
        return $this->enddate;
    }

    /**
     * @return bool One time use. After usage this coupon will be removed.
     */
    public function getOnetimeuse(): bool
    {
        return $this->onetimeuse;
    }

    /**
     * @return bool This coupon gives free shipping costs.
     */
    public function getGivesfreeshipping(): bool
    {
        return $this->givesfreeshipping;
    }

    /**
     * @return float Minimum price of the order before this coupon can be used.
     */
    public function getMinimumprice(): float
    {
        return $this->minimumprice;
    }

    /**
     * @param string Unique coupon code. Valid characters are: A-Z, a-z, 0-9 and # - $ & _ *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;
        $this->propertyFilled('code');
        return $this;
    }

    /**
     * @param float The amount of discount this coupon gives. Depending on the type it can be a percentage or a fixed discount.
     * @return self
     */
    public function setDiscount(float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }

    /**
     * @param string|null Discount type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param string|null End date coupon validity, UTC
     * @return self
     */
    public function setEnddate(?string $enddate): self
    {
        $this->enddate = $enddate;
        $this->propertyFilled('enddate');
        return $this;
    }

    /**
     * @param bool One time use. After usage this coupon will be removed.
     * @return self
     */
    public function setOnetimeuse(bool $onetimeuse): self
    {
        $this->onetimeuse = $onetimeuse;
        $this->propertyFilled('onetimeuse');
        return $this;
    }

    /**
     * @param bool This coupon gives free shipping costs.
     * @return self
     */
    public function setGivesfreeshipping(bool $givesfreeshipping): self
    {
        $this->givesfreeshipping = $givesfreeshipping;
        $this->propertyFilled('givesfreeshipping');
        return $this;
    }

    /**
     * @param float Minimum price of the order before this coupon can be used.
     * @return self
     */
    public function setMinimumprice(float $minimumprice): self
    {
        $this->minimumprice = $minimumprice;
        $this->propertyFilled('minimumprice');
        return $this;
    }
}
