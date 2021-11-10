<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Productvariations implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var int Product variation id
     */
    private int $id;

    /**
     * @var int Product Id that is linked as variation.
     */
    private int $productVariationId;

    /**
     * @var string Href to the product that is linked as variation.
     */
    private string $productVariationHref;

    /**
     * @var bool If variations are created on product number, then these are marked as 'auto_created'. These can't be deleted, only deactived.
     */
    private bool $autoCreated;

    /**
     * @var bool Inactive variation are hidden in the webshop.
     */
    private bool $active;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations\Child\ParentItem|null Contains link to parent product
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations\Child\ParentItem $parent;

    public static function fromArray(array $data): static
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Product variation id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int Product Id that is linked as variation.
     */
    public function getProductVariationId(): int
    {
        return $this->productVariationId;
    }

    /**
     * @return string Href to the product that is linked as variation.
     */
    public function getProductVariationHref(): string
    {
        return $this->productVariationHref;
    }

    /**
     * @return bool If variations are created on product number, then these are marked as 'auto_created'. These can't be deleted, only deactived.
     */
    public function getAutoCreated(): bool
    {
        return $this->autoCreated;
    }

    /**
     * @return bool Inactive variation are hidden in the webshop.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations\Child\ParentItem|null Contains link to parent product
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations\Child\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param int $id Product variation id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int $productVariationId Product Id that is linked as variation.
     * @return self
     */
    public function setProductVariationId(int $productVariationId): self
    {
        $this->productVariationId = $productVariationId;
        return $this;
    }

    /**
     * @param string $productVariationHref Href to the product that is linked as variation.
     * @return self
     */
    public function setProductVariationHref(string $productVariationHref): self
    {
        $this->productVariationHref = $productVariationHref;
        return $this;
    }

    /**
     * @param bool $autoCreated If variations are created on product number, then these are marked as 'auto_created'. These can't be deleted, only deactived.
     * @return self
     */
    public function setAutoCreated(bool $autoCreated): self
    {
        $this->autoCreated = $autoCreated;
        return $this;
    }

    /**
     * @param bool $active Inactive variation are hidden in the webshop.
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations\Child\ParentItem|null $parent Contains link to parent product
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productvariations\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
