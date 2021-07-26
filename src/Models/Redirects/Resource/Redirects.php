<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Redirects\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Redirects implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Unique id of the resource
     */
    private $id;

    /**
     * @var string If a visitor reuqests this url it will be forwarded to target_url. This source_url will also be relative and must be unique.
     */
    private $sourceUrl;

    /**
     * @var string Visitor will be forwarded to this url, which can be relative or absolute. It can also be a different domain.
     */
    private $targetUrl;

    /**
     * @var bool Inactive redirects will be ignored.
     */
    private $active;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Redirects\Child\Resource\ParentItem|null Parent resource of this resource
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
     * @return \JacobDeKeizer\Ccv\Models\Redirects\Child\Resource\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Redirects\Child\Resource\ParentItem
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
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int $id Unique id of the resource
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $sourceUrl If a visitor reuqests this url it will be forwarded to target_url. This source_url will also be relative and must be unique.
     * @return self
     */
    public function setSourceUrl(string $sourceUrl): self
    {
        $this->sourceUrl = $sourceUrl;
        $this->propertyFilled('sourceUrl');
        return $this;
    }

    /**
     * @param string $targetUrl Visitor will be forwarded to this url, which can be relative or absolute. It can also be a different domain.
     * @return self
     */
    public function setTargetUrl(string $targetUrl): self
    {
        $this->targetUrl = $targetUrl;
        $this->propertyFilled('targetUrl');
        return $this;
    }

    /**
     * @param bool $active Inactive redirects will be ignored.
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        $this->propertyFilled('active');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Redirects\Child\Resource\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Redirects\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
