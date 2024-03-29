<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Creditpointmutations;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Creditpointmutations implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self
     */
    private ?string $href;

    /**
     * @var int|null Unique id of the resource
     */
    private ?int $id;

    /**
     * @var int|null The mutation amount of creditpoints
     */
    private ?int $amount;

    /**
     * @var string|null Contains the date of the last mutation
     */
    private ?string $createDate;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Creditpointmutations\Child\ParentItem|null Contains link to parent resource.
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Creditpointmutations\Child\ParentItem $parent;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null The mutation amount of creditpoints
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @return string|null Contains the date of the last mutation
     */
    public function getCreateDate(): ?string
    {
        return $this->createDate;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Creditpointmutations\Child\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Creditpointmutations\Child\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int|null $amount The mutation amount of creditpoints
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param string|null $createDate Contains the date of the last mutation
     * @return self
     */
    public function setCreateDate(?string $createDate): self
    {
        $this->createDate = $createDate;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Creditpointmutations\Child\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Creditpointmutations\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
