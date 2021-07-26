<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Creditpointmutations\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Creditpointmutations implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self
     */
    private $href;

    /**
     * @var int|null Unique id of the resource
     */
    private $id;

    /**
     * @var int|null The mutation amount of creditpoints
     */
    private $amount;

    /**
     * @var string|null Contains the date of the last mutation
     */
    private $createDate;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Creditpointmutations\Child\Resource\ParentItem|null Contains link to parent resource.
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
     * @return \JacobDeKeizer\Ccv\Models\Creditpointmutations\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Creditpointmutations\Child\Resource\ParentItem
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
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param int|null $amount The mutation amount of creditpoints
     * @return self
     */
    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;
        $this->propertyFilled('amount');
        return $this;
    }

    /**
     * @param string|null $createDate Contains the date of the last mutation
     * @return self
     */
    public function setCreateDate(?string $createDate): self
    {
        $this->createDate = $createDate;
        $this->propertyFilled('createDate');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Creditpointmutations\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Creditpointmutations\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
