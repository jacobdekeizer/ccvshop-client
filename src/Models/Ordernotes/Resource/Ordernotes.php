<?php

namespace JacobDeKeizer\Ccv\Models\Ordernotes\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Ordernotes implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int|null Order note id
     */
    private $id;

    /**
     * @var string|null The text of this note.
     */
    private $note;

    /**
     * @var string|null Type of this note. External notes are visible for customers too.
     */
    private $type;

    /**
     * @var string|null The create date of the note in UTC
     */
    private $createDate;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Ordernotes\Child\Resource\ParentItem|null Contains link to parent resource.
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
     * @return int|null Order note id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null The text of this note.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @return string|null Type of this note. External notes are visible for customers too.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null The create date of the note in UTC
     */
    public function getCreateDate(): ?string
    {
        return $this->createDate;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Ordernotes\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Ordernotes\Child\Resource\ParentItem
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
     * @param int|null $id Order note id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $note The text of this note.
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        $this->propertyFilled('note');
        return $this;
    }

    /**
     * @param string|null $type Type of this note. External notes are visible for customers too.
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }

    /**
     * @param string|null $createDate The create date of the note in UTC
     * @return self
     */
    public function setCreateDate(?string $createDate): self
    {
        $this->createDate = $createDate;
        $this->propertyFilled('createDate');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Ordernotes\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Ordernotes\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
