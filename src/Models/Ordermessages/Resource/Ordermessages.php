<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Ordermessages\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Ordermessages implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Order message id
     */
    private $id;

    /**
     * @var string The content of the message.
     */
    private $message;

    /**
     * @var string The create date of the note in UTC.
     */
    private $createDate;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Ordermessages\Child\Resource\ParentItem Contains link to parent resource.
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
     * @return int Order message id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string The content of the message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string The create date of the note in UTC.
     */
    public function getCreateDate(): string
    {
        return $this->createDate;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Ordermessages\Child\Resource\ParentItem Contains link to parent resource.
     */
    public function getParent(): \JacobDeKeizer\Ccv\Models\Ordermessages\Child\Resource\ParentItem
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
     * @param int $id Order message id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $message The content of the message.
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        $this->propertyFilled('message');
        return $this;
    }

    /**
     * @param string $createDate The create date of the note in UTC.
     * @return self
     */
    public function setCreateDate(string $createDate): self
    {
        $this->createDate = $createDate;
        $this->propertyFilled('createDate');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Ordermessages\Child\Resource\ParentItem $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(\JacobDeKeizer\Ccv\Models\Ordermessages\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
