<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Redirects;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Redirects implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var int Unique id of the resource
     */
    private int $id;

    /**
     * @var string If a visitor reuqests this url it will be forwarded to target_url. This source_url will also be relative and must be unique.
     */
    private string $sourceUrl;

    /**
     * @var string Visitor will be forwarded to this url, which can be relative or absolute. It can also be a different domain.
     */
    private string $targetUrl;

    /**
     * @var bool Inactive redirects will be ignored.
     */
    private bool $active;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Redirects\Child\ParentItem|null Parent resource of this resource
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Redirects\Child\ParentItem $parent;

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
     * @return int Unique id of the resource
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string If a visitor reuqests this url it will be forwarded to target_url. This source_url will also be relative and must be unique.
     */
    public function getSourceUrl(): string
    {
        return $this->sourceUrl;
    }

    /**
     * @return string Visitor will be forwarded to this url, which can be relative or absolute. It can also be a different domain.
     */
    public function getTargetUrl(): string
    {
        return $this->targetUrl;
    }

    /**
     * @return bool Inactive redirects will be ignored.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Redirects\Child\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Redirects\Child\ParentItem
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
     * @param int $id Unique id of the resource
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $sourceUrl If a visitor reuqests this url it will be forwarded to target_url. This source_url will also be relative and must be unique.
     * @return self
     */
    public function setSourceUrl(string $sourceUrl): self
    {
        $this->sourceUrl = $sourceUrl;
        return $this;
    }

    /**
     * @param string $targetUrl Visitor will be forwarded to this url, which can be relative or absolute. It can also be a different domain.
     * @return self
     */
    public function setTargetUrl(string $targetUrl): self
    {
        $this->targetUrl = $targetUrl;
        return $this;
    }

    /**
     * @param bool $active Inactive redirects will be ignored.
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Redirects\Child\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Redirects\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
