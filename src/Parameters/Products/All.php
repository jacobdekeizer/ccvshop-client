<?php

namespace JacobDeKeizer\Ccv\Parameters\Products;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\Parameters\Products\Concerns\ExpandableProductFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All extends PaginatedList implements Parameter
{
    use FromArray, ExpandableProductFields;

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
     * Encode according to RFC 3986.
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
            ->expandFields($this->getExpandedFields());
    }

    public function setProductNumber(?string $productNumber): All
    {
        $this->productNumber = $productNumber;
        return $this;
    }

    public function getProductNumber(): ?string
    {
        return $this->productNumber;
    }

    public function setEanNumber(?string $eanNumber): All
    {
        $this->eanNumber = $eanNumber;
        return $this;
    }

    public function getEanNumber(): ?string
    {
        return $this->eanNumber;
    }

    public function setMpnNumber(?string $mpnNumber): All
    {
        $this->mpnNumber = $mpnNumber;
        return $this;
    }

    public function getMpnNumber(): ?string
    {
        return $this->mpnNumber;
    }

    public function setProductName(?string $productName): All
    {
        $this->productName = $productName;
        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setStock(?int $stock): All
    {
        $this->stock = $stock;
        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setMinStock(?float $minStock): All
    {
        $this->minStock = $minStock;
        return $this;
    }

    public function getMinStock(): ?float
    {
        return $this->minStock;
    }

    public function setMaxStock(?float $maxStock): All
    {
        $this->maxStock = $maxStock;
        return $this;
    }

    public function getMaxStock(): ?float
    {
        return $this->maxStock;
    }

    public function setQuantity(?float $quantity): All
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }
}
