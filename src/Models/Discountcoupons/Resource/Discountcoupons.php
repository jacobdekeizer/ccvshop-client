<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Discountcoupons\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Discountcoupons implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Link to self
     */
    private $href;

    /**
     * @var int|null Unique ID of Resource
     */
    private $id;

    /**
     * @var string|null Unique coupon code. Valid characters are: A-Z, a-z, 0-9 and # - $ & _ *
     */
    private $code;

    /**
     * @var float|null The amount of discount this coupon gives. Depending on the type it can be a percentage or a fixed discount.
     */
    private $discount;

    /**
     * @var string|null Discount type
     */
    private $type;

    /**
     * @var string|null Begin date coupon validity, UTC
     */
    private $begindate;

    /**
     * @var string|null End date coupon validity, UTC
     */
    private $enddate;

    /**
     * @var bool|null One time use. After usage this coupon will be removed.
     */
    private $onetimeuse;

    /**
     * @var bool|null This coupon gives free shipping costs.
     */
    private $givesfreeshipping;

    /**
     * @var float|null Minimum price of the order before this coupon can be used.
     */
    private $minimumprice;

    /**
     * @var bool|null Product white list. If true, the discount will only used for selected products. If false, the discount is used for all products, excepts the selected ones.
     */
    private $productwhitelist;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Discountcoupons\Child\Resource\Products[]|null Array with product items
     */
    private $products;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int|null Unique ID of Resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null Unique coupon code. Valid characters are: A-Z, a-z, 0-9 and # - $ & _ *
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @return float|null The amount of discount this coupon gives. Depending on the type it can be a percentage or a fixed discount.
     */
    public function getDiscount(): ?float
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
     * @return string|null Begin date coupon validity, UTC
     */
    public function getBegindate(): ?string
    {
        return $this->begindate;
    }

    /**
     * @return string|null End date coupon validity, UTC
     */
    public function getEnddate(): ?string
    {
        return $this->enddate;
    }

    /**
     * @return bool|null One time use. After usage this coupon will be removed.
     */
    public function getOnetimeuse(): ?bool
    {
        return $this->onetimeuse;
    }

    /**
     * @return bool|null This coupon gives free shipping costs.
     */
    public function getGivesfreeshipping(): ?bool
    {
        return $this->givesfreeshipping;
    }

    /**
     * @return float|null Minimum price of the order before this coupon can be used.
     */
    public function getMinimumprice(): ?float
    {
        return $this->minimumprice;
    }

    /**
     * @return bool|null Product white list. If true, the discount will only used for selected products. If false, the discount is used for all products, excepts the selected ones.
     */
    public function getProductwhitelist(): ?bool
    {
        return $this->productwhitelist;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Discountcoupons\Child\Resource\Products[]|null Array with product items
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int|null $id Unique ID of Resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $code Unique coupon code. Valid characters are: A-Z, a-z, 0-9 and # - $ & _ *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        $this->propertyFilled('code');
        return $this;
    }

    /**
     * @param float|null $discount The amount of discount this coupon gives. Depending on the type it can be a percentage or a fixed discount.
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }

    /**
     * @param string|null $type Discount type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param string|null $begindate Begin date coupon validity, UTC
     * @return self
     */
    public function setBegindate(?string $begindate): self
    {
        $this->begindate = $begindate;
        $this->propertyFilled('begindate');
        return $this;
    }

    /**
     * @param string|null $enddate End date coupon validity, UTC
     * @return self
     */
    public function setEnddate(?string $enddate): self
    {
        $this->enddate = $enddate;
        $this->propertyFilled('enddate');
        return $this;
    }

    /**
     * @param bool|null $onetimeuse One time use. After usage this coupon will be removed.
     * @return self
     */
    public function setOnetimeuse(?bool $onetimeuse): self
    {
        $this->onetimeuse = $onetimeuse;
        $this->propertyFilled('onetimeuse');
        return $this;
    }

    /**
     * @param bool|null $givesfreeshipping This coupon gives free shipping costs.
     * @return self
     */
    public function setGivesfreeshipping(?bool $givesfreeshipping): self
    {
        $this->givesfreeshipping = $givesfreeshipping;
        $this->propertyFilled('givesfreeshipping');
        return $this;
    }

    /**
     * @param float|null $minimumprice Minimum price of the order before this coupon can be used.
     * @return self
     */
    public function setMinimumprice(?float $minimumprice): self
    {
        $this->minimumprice = $minimumprice;
        $this->propertyFilled('minimumprice');
        return $this;
    }

    /**
     * @param bool|null $productwhitelist Product white list. If true, the discount will only used for selected products. If false, the discount is used for all products, excepts the selected ones.
     * @return self
     */
    public function setProductwhitelist(?bool $productwhitelist): self
    {
        $this->productwhitelist = $productwhitelist;
        $this->propertyFilled('productwhitelist');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Discountcoupons\Child\Resource\Products[]|null $products Array with product items
     * @return self
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;
        $this->propertyFilled('products');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'products') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Discountcoupons\Child\Resource\Products::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
