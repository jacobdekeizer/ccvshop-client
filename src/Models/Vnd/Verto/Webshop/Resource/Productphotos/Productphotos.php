<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productphotos;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Productphotos implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var int Product photo id
     */
    private int $id;

    /**
     * @var string Product photo filename
     */
    private string $filename;

    /**
     * @var string|null Product photo alttext
     */
    private ?string $alttext;

    /**
     * @var bool Product photo marked as mainphoto
     */
    private bool $isMainphoto;

    /**
     * @var string Product photo deeplink
     */
    private string $deeplink;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productphotos\Child\ParentItem|null Parent resource of this resource
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productphotos\Child\ParentItem $parent;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Product photo id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string Product photo filename
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @return string|null Product photo alttext
     */
    public function getAlttext(): ?string
    {
        return $this->alttext;
    }

    /**
     * @return bool Product photo marked as mainphoto
     */
    public function getIsMainphoto(): bool
    {
        return $this->isMainphoto;
    }

    /**
     * @return string Product photo deeplink
     */
    public function getDeeplink(): string
    {
        return $this->deeplink;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productphotos\Child\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productphotos\Child\ParentItem
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
     * @param int $id Product photo id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $filename Product photo filename
     * @return self
     */
    public function setFilename(string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @param string|null $alttext Product photo alttext
     * @return self
     */
    public function setAlttext(?string $alttext): self
    {
        $this->alttext = $alttext;
        return $this;
    }

    /**
     * @param bool $isMainphoto Product photo marked as mainphoto
     * @return self
     */
    public function setIsMainphoto(bool $isMainphoto): self
    {
        $this->isMainphoto = $isMainphoto;
        return $this;
    }

    /**
     * @param string $deeplink Product photo deeplink
     * @return self
     */
    public function setDeeplink(string $deeplink): self
    {
        $this->deeplink = $deeplink;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productphotos\Child\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productphotos\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
