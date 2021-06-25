<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Products;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\ExpandableFields;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class AllFromConditions extends PaginatedList implements Parameter
{
    use FromArray;
    use ExpandableFields;
    use SortableFields;

    /**
     * @var string|null Number of the product.
     */
    private $productnumber;

    /**
     * @var string|null EAN (European Article Numbering) of the product.
     */
    private $eannumber;

    /**
     * @var string|null MPN (Manufacturer Part Number) of the product.
     */
    private $mpnnumber;

    /**
     * @var string|null Specific part (min 3 char.) of productname with a LIKE matching method. Encode according to RFC 3986.
     */
    private $productname;

    /**
     * @var float|null Minimal price of the products in the result.
     */
    private $minprice;

    /**
     * @var float|null Maximal price of the products in the result.
     */
    private $maxprice;

    /**
     * @var float|null Minimal discount of the products in the result.
     */
    private $mindiscount;

    /**
     * @var float|null Maximal discount of the products in the result.
     */
    private $maxdiscount;

    /**
     * @var float|null Minimal sell price (price - discount) of the products in the result.
     */
    private $minsellprice;

    /**
     * @var float|null Maximal sell price (price - discount) of the products in the result.
     */
    private $maxsellprice;

    /**
     * @var int|null Specific stock of the products in the result.
     */
    private $stock;

    /**
     * @var float|null Minimal stock of the products in the result.
     */
    private $minstock;

    /**
     * @var float|null Maximal stock of the products in the result.
     */
    private $maxstock;

    /**
     * @var float|null Quantity used to calculate shipping costs.
     */
    private $quantity;

    /**
     * @var string|null A hex code, multicolor, transparent or null to filter products with that color. NULL will filter products without a color.
     */
    private $color;

    /**
     * @var bool|null When true show only active products. When false show inactive products. Omit to view both.
     */
    private $active;

    /**
     * @return self
     */
    public static function fromArray(array $data): self
    {
        return self::createFromArray($data);
    }

    /**
     * @return self
     */
    public static function fromUrl(?string $url): ?self
    {
        if ($url === null) {
            return null;
        }

        return self::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (parent::toBuilder())
            ->addOptionalParameter('productnumber', $this->productnumber)
            ->addOptionalParameter('eannumber', $this->eannumber)
            ->addOptionalParameter('mpnnumber', $this->mpnnumber)
            ->addOptionalParameter('productname', $this->productname)
            ->addOptionalParameter('minprice', $this->minprice)
            ->addOptionalParameter('maxprice', $this->maxprice)
            ->addOptionalParameter('mindiscount', $this->mindiscount)
            ->addOptionalParameter('maxdiscount', $this->maxdiscount)
            ->addOptionalParameter('minsellprice', $this->minsellprice)
            ->addOptionalParameter('maxsellprice', $this->maxsellprice)
            ->addOptionalParameter('stock', $this->stock)
            ->addOptionalParameter('minstock', $this->minstock)
            ->addOptionalParameter('maxstock', $this->maxstock)
            ->addOptionalParameter('quantity', $this->quantity)
            ->addOptionalParameter('color', $this->color)
            ->addOptionalParameter('active', $this->active)
            ->expandFields($this->getExpandedFields())
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return string|null Number of the product.
     */
    public function getProductnumber(): ?string
    {
        return $this->productnumber;
    }

    /**
     * @return string|null EAN (European Article Numbering) of the product.
     */
    public function getEannumber(): ?string
    {
        return $this->eannumber;
    }

    /**
     * @return string|null MPN (Manufacturer Part Number) of the product.
     */
    public function getMpnnumber(): ?string
    {
        return $this->mpnnumber;
    }

    /**
     * @return string|null Specific part (min 3 char.) of productname with a LIKE matching method. Encode according to RFC 3986.
     */
    public function getProductname(): ?string
    {
        return $this->productname;
    }

    /**
     * @return float|null Minimal price of the products in the result.
     */
    public function getMinprice(): ?float
    {
        return $this->minprice;
    }

    /**
     * @return float|null Maximal price of the products in the result.
     */
    public function getMaxprice(): ?float
    {
        return $this->maxprice;
    }

    /**
     * @return float|null Minimal discount of the products in the result.
     */
    public function getMindiscount(): ?float
    {
        return $this->mindiscount;
    }

    /**
     * @return float|null Maximal discount of the products in the result.
     */
    public function getMaxdiscount(): ?float
    {
        return $this->maxdiscount;
    }

    /**
     * @return float|null Minimal sell price (price - discount) of the products in the result.
     */
    public function getMinsellprice(): ?float
    {
        return $this->minsellprice;
    }

    /**
     * @return float|null Maximal sell price (price - discount) of the products in the result.
     */
    public function getMaxsellprice(): ?float
    {
        return $this->maxsellprice;
    }

    /**
     * @return int|null Specific stock of the products in the result.
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * @return float|null Minimal stock of the products in the result.
     */
    public function getMinstock(): ?float
    {
        return $this->minstock;
    }

    /**
     * @return float|null Maximal stock of the products in the result.
     */
    public function getMaxstock(): ?float
    {
        return $this->maxstock;
    }

    /**
     * @return float|null Quantity used to calculate shipping costs.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * @return string|null A hex code, multicolor, transparent or null to filter products with that color. NULL will filter products without a color.
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @return bool|null When true show only active products. When false show inactive products. Omit to view both.
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param string|null $productnumber Number of the product.
     * @return self
     */
    public function setProductnumber(?string $productnumber): self
    {
        $this->productnumber = $productnumber;
        return $this;
    }

    /**
     * @param string|null $eannumber EAN (European Article Numbering) of the product.
     * @return self
     */
    public function setEannumber(?string $eannumber): self
    {
        $this->eannumber = $eannumber;
        return $this;
    }

    /**
     * @param string|null $mpnnumber MPN (Manufacturer Part Number) of the product.
     * @return self
     */
    public function setMpnnumber(?string $mpnnumber): self
    {
        $this->mpnnumber = $mpnnumber;
        return $this;
    }

    /**
     * @param string|null $productname Specific part (min 3 char.) of productname with a LIKE matching method. Encode according to RFC 3986.
     * @return self
     */
    public function setProductname(?string $productname): self
    {
        $this->productname = $productname;
        return $this;
    }

    /**
     * @param float|null $minprice Minimal price of the products in the result.
     * @return self
     */
    public function setMinprice(?float $minprice): self
    {
        $this->minprice = $minprice;
        return $this;
    }

    /**
     * @param float|null $maxprice Maximal price of the products in the result.
     * @return self
     */
    public function setMaxprice(?float $maxprice): self
    {
        $this->maxprice = $maxprice;
        return $this;
    }

    /**
     * @param float|null $mindiscount Minimal discount of the products in the result.
     * @return self
     */
    public function setMindiscount(?float $mindiscount): self
    {
        $this->mindiscount = $mindiscount;
        return $this;
    }

    /**
     * @param float|null $maxdiscount Maximal discount of the products in the result.
     * @return self
     */
    public function setMaxdiscount(?float $maxdiscount): self
    {
        $this->maxdiscount = $maxdiscount;
        return $this;
    }

    /**
     * @param float|null $minsellprice Minimal sell price (price - discount) of the products in the result.
     * @return self
     */
    public function setMinsellprice(?float $minsellprice): self
    {
        $this->minsellprice = $minsellprice;
        return $this;
    }

    /**
     * @param float|null $maxsellprice Maximal sell price (price - discount) of the products in the result.
     * @return self
     */
    public function setMaxsellprice(?float $maxsellprice): self
    {
        $this->maxsellprice = $maxsellprice;
        return $this;
    }

    /**
     * @param int|null $stock Specific stock of the products in the result.
     * @return self
     */
    public function setStock(?int $stock): self
    {
        $this->stock = $stock;
        return $this;
    }

    /**
     * @param float|null $minstock Minimal stock of the products in the result.
     * @return self
     */
    public function setMinstock(?float $minstock): self
    {
        $this->minstock = $minstock;
        return $this;
    }

    /**
     * @param float|null $maxstock Maximal stock of the products in the result.
     * @return self
     */
    public function setMaxstock(?float $maxstock): self
    {
        $this->maxstock = $maxstock;
        return $this;
    }

    /**
     * @param float|null $quantity Quantity used to calculate shipping costs.
     * @return self
     */
    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param string|null $color A hex code, multicolor, transparent or null to filter products with that color. NULL will filter products without a color.
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @param bool|null $active When true show only active products. When false show inactive products. Omit to view both.
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    public function expandAttributecombinations(bool $expand = true): self
    {
        $this->expandField('attributecombinations', $expand);
        return $this;
    }

    public function expandProductattachments(bool $expand = true): self
    {
        $this->expandField('productattachments', $expand);
        return $this;
    }

    public function expandProductattributesets(bool $expand = true): self
    {
        $this->expandField('productattributesets', $expand);
        return $this;
    }

    public function expandProductkeywords(bool $expand = true): self
    {
        $this->expandField('productkeywords', $expand);
        return $this;
    }

    public function expandProductphotos(bool $expand = true): self
    {
        $this->expandField('productphotos', $expand);
        return $this;
    }

    public function expandProductrelevant(bool $expand = true): self
    {
        $this->expandField('productrelevant', $expand);
        return $this;
    }

    public function expandProductreviews(bool $expand = true): self
    {
        $this->expandField('productreviews', $expand);
        return $this;
    }

    public function expandProductshippingcosts(bool $expand = true): self
    {
        $this->expandField('productshippingcosts', $expand);
        return $this;
    }

    public function expandProductstaggeredprices(bool $expand = true): self
    {
        $this->expandField('productstaggeredprices', $expand);
        return $this;
    }

    public function expandProducttopropertygroups(bool $expand = true): self
    {
        $this->expandField('producttopropertygroups', $expand);
        return $this;
    }

    public function expandProducttocategories(bool $expand = true): self
    {
        $this->expandField('producttocategories', $expand);
        return $this;
    }

    public function expandProductvariants(bool $expand = true): self
    {
        $this->expandField('productvariants', $expand);
        return $this;
    }

    public function expandProductvideos(bool $expand = true): self
    {
        $this->expandField('productvideos', $expand);
        return $this;
    }

    public function orderByIdAsc(): self
    {
        $this->orderByField('id', true);
        return $this;
    }

    public function orderByIdDesc(): self
    {
        $this->orderByField('id', false);
        return $this;
    }

    public function orderByNameAsc(): self
    {
        $this->orderByField('name', true);
        return $this;
    }

    public function orderByNameDesc(): self
    {
        $this->orderByField('name', false);
        return $this;
    }

    public function orderByCreatedateAsc(): self
    {
        $this->orderByField('createdate', true);
        return $this;
    }

    public function orderByCreatedateDesc(): self
    {
        $this->orderByField('createdate', false);
        return $this;
    }

    public function orderByModifydateAsc(): self
    {
        $this->orderByField('modifydate', true);
        return $this;
    }

    public function orderByModifydateDesc(): self
    {
        $this->orderByField('modifydate', false);
        return $this;
    }
}