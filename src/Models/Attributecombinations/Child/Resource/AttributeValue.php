<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Attributecombinations\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class AttributeValue implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int Id of the attribute value.
     */
    private $id;

    /**
     * @var string Name of the attribute value.
     */
    private $name;

    /**
     * @var string Link of the attribute value.
     */
    private $href;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int Id of the attribute value.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string Name of the attribute value.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string Link of the attribute value.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param int $id Id of the attribute value.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $name Name of the attribute value.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string $href Link of the attribute value.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
