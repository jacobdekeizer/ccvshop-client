<?php

namespace JacobDeKeizer\Ccv\Models\Products\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Supplier implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Link to supplier resource
     */
    private $href;

    /**
     * @var int|null Supplier Id
     */
    private $id;

    /**
     * @var string|null Supplier name
     */
    private $name;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null Link to supplier resource
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int|null Supplier Id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null Supplier name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null Link to supplier resource
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int|null Supplier Id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null Supplier name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
}
