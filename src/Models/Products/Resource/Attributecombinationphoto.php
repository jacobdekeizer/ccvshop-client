<?php

namespace JacobDeKeizer\Ccv\Models\Products\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Attributecombinationphoto implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Combination photo id
     */
    private $id;

    /**
     * @var string|null Product photo alttext
     */
    private $alt;

    /**
     * @var bool Combination photo marked as mainphoto
     */
    private $isMainphoto;

    /**
     * @var string Combination photo deeplink
     */
    private $deeplink;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    private $parent;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
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
     * @return int Combination photo id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null Product photo alttext
     */
    public function getAlt(): ?string
    {
        return $this->alt;
    }

    /**
     * @return bool Combination photo marked as mainphoto
     */
    public function getIsMainphoto(): bool
    {
        return $this->isMainphoto;
    }

    /**
     * @return string Combination photo deeplink
     */
    public function getDeeplink(): string
    {
        return $this->deeplink;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int Combination photo id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null Product photo alttext
     * @return self
     */
    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;
        $this->propertyFilled('alt');
        return $this;
    }

    /**
     * @param bool Combination photo marked as mainphoto
     * @return self
     */
    public function setIsMainphoto(bool $isMainphoto): self
    {
        $this->isMainphoto = $isMainphoto;
        $this->propertyFilled('isMainphoto');
        return $this;
    }

    /**
     * @param string Combination photo deeplink
     * @return self
     */
    public function setDeeplink(string $deeplink): self
    {
        $this->deeplink = $deeplink;
        $this->propertyFilled('deeplink');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem|null Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Products\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
