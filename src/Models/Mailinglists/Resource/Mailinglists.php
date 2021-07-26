<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Mailinglists\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Mailinglists implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int|null Unique id of the resource
     */
    private $id;

    /**
     * @var string|null Mailinglist name
     */
    private $name;

    /**
     * @var bool|null If mailinglist is deleteable
     */
    private $removeable;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Mailinglists\Child\Resource\Mailingaddresses|null List of the mailingaddresses
     */
    private $mailingaddresses;

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
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null Mailinglist name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return bool|null If mailinglist is deleteable
     */
    public function getRemoveable(): ?bool
    {
        return $this->removeable;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Mailinglists\Child\Resource\Mailingaddresses|null List of the mailingaddresses
     */
    public function getMailingaddresses(): ?\JacobDeKeizer\Ccv\Models\Mailinglists\Child\Resource\Mailingaddresses
    {
        return $this->mailingaddresses;
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
     * @param string|null $name Mailinglist name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param bool|null $removeable If mailinglist is deleteable
     * @return self
     */
    public function setRemoveable(?bool $removeable): self
    {
        $this->removeable = $removeable;
        $this->propertyFilled('removeable');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Mailinglists\Child\Resource\Mailingaddresses|null $mailingaddresses List of the mailingaddresses
     * @return self
     */
    public function setMailingaddresses(?\JacobDeKeizer\Ccv\Models\Mailinglists\Child\Resource\Mailingaddresses $mailingaddresses): self
    {
        $this->mailingaddresses = $mailingaddresses;
        $this->propertyFilled('mailingaddresses');
        return $this;
    }
}
