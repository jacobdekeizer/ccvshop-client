<?php

namespace JacobDeKeizer\Ccv\Parameters\Products;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\Parameters\Products\Concerns\ExpandableProductFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All extends PaginatedList implements Parameter
{
    use FromArray;
    use ExpandableProductFields;
    use SortableFields;

    /**
     * @var string|null Number of the product.
     */
    private $productNumber;

    /**
     * @var string|null EAN (European Article Numbering) of the product.
     */
    private $eanNumber;

    /**
     * @var string|null MPN (Manufacturer Part Number) of the product.
     */
    private $mpnNumber;

    /**
     * @var string|null Specific part (min 3 char.) of productname with a LIKE matching method.
     *                  Encode according to RFC 3986.
     */
    private $productName;

    /**
     * @var int|null Specific stock of the products in the result.
     */
    private $stock;

    /**
     * @var float|null Minimal stock of the products in the result.
     */
    private $minStock;

    /**
     * @var float|null Maximal stock of the products in the result.
     */
    private $maxStock;

    /**
     * @var float|null Quantity used to calculate shipping costs.
     */
    private $quantity;

    /**
     * @return All
     */
    public static function fromArray(array $data): Parameter
    {
        return self::createFromArray($data);
    }

    public static function fromUrl(?string $url): ?All
    {
        if ($url === null) {
            return null;
        }

        return self::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (parent::toBuilder())
            ->addOptionalParameter('eannumber', $this->getEanNumber())
            ->addOptionalParameter('mpnnumber', $this->getMpnNumber())
            ->addOptionalParameter('productname', $this->getProductName())
            ->addOptionalParameter('stock', $this->getStock())
            ->addOptionalParameter('minstock', $this->getMinStock())
            ->addOptionalParameter('maxstock', $this->getMaxStock())
            ->addOptionalParameter('quantity', $this->getQuantity())
            ->expandFields($this->getExpandedFields())
            ->orderBy($this->getOrderBy());
    }

    /**
     * @param string|null $productNumber Number of the product.
     * @return All
     */
    public function setProductNumber(?string $productNumber): All
    {
        $this->productNumber = $productNumber;
        return $this;
    }

    /**
     * @return string|null Number of the product.
     */
    public function getProductNumber(): ?string
    {
        return $this->productNumber;
    }

    /**
     * @param string|null $eanNumber EAN (European Article Numbering) of the product.
     * @return All
     */
    public function setEanNumber(?string $eanNumber): All
    {
        $this->eanNumber = $eanNumber;
        return $this;
    }

    /**
     * @return string|null EAN (European Article Numbering) of the product.
     */
    public function getEanNumber(): ?string
    {
        return $this->eanNumber;
    }

    /**
     * @param string|null $mpnNumber MPN (Manufacturer Part Number) of the product.
     * @return All
     */
    public function setMpnNumber(?string $mpnNumber): All
    {
        $this->mpnNumber = $mpnNumber;
        return $this;
    }

    /**
     * @return string|null MPN (Manufacturer Part Number) of the product.
     */
    public function getMpnNumber(): ?string
    {
        return $this->mpnNumber;
    }

    /**
     * @param string|null $productName Specific part (min 3 char.) of productname with a LIKE matching method.
     *                                 Encode according to RFC 3986.
     * @return All
     */
    public function setProductName(?string $productName): All
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return string|null Specific part (min 3 char.) of productname with a LIKE matching method.
     *                     Encode according to RFC 3986.
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param int|null $stock Specific stock of the products in the result.
     * @return All
     */
    public function setStock(?int $stock): All
    {
        $this->stock = $stock;
        return $this;
    }

    /**
     * @return int|null Specific stock of the products in the result.
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * @param float|null $minStock Minimal stock of the products in the result.
     * @return All
     */
    public function setMinStock(?float $minStock): All
    {
        $this->minStock = $minStock;
        return $this;
    }

    /**
     * @return float|null Minimal stock of the products in the result.
     */
    public function getMinStock(): ?float
    {
        return $this->minStock;
    }

    /**
     * @param float|null $maxStock Maximal stock of the products in the result.
     * @return All
     */
    public function setMaxStock(?float $maxStock): All
    {
        $this->maxStock = $maxStock;
        return $this;
    }

    /**
     * @return float|null Maximal stock of the products in the result.
     */
    public function getMaxStock(): ?float
    {
        return $this->maxStock;
    }

    /**
     * @param float|null $quantity Quantity used to calculate shipping costs.
     * @return All
     */
    public function setQuantity(?float $quantity): All
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float|null Quantity used to calculate shipping costs.
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function orderByIdAsc(): All
    {
        $this->orderByField('id', true);
        return $this;
    }

    public function orderByIdDesc(): All
    {
        $this->orderByField('id', false);
        return $this;
    }

    public function orderByNameAsc(): All
    {
        $this->orderByField('name', true);
        return $this;
    }

    public function orderByNameDesc(): All
    {
        $this->orderByField('name', false);
        return $this;
    }

    public function orderByCreateDateAsc(): All
    {
        $this->orderByField('createdate', true);
        return $this;
    }

    public function orderByCreateDateDesc(): All
    {
        $this->orderByField('createdate', false);
        return $this;
    }

    public function orderByModifyDateAsc(): All
    {
        $this->orderByField('modifydate', true);
        return $this;
    }

    public function orderByModifyDateDesc(): All
    {
        $this->orderByField('modifydate', false);
        return $this;
    }
}
