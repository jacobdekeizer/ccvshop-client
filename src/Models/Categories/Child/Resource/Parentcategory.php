<?php

namespace JacobDeKeizer\Ccv\Models\Categories\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Parentcategory implements Model
{
    use FromArray, ToArray;

    /**
     * @var int|null Parent category Id
     */
    private $id;

    /**
     * @var string|null Link to parent category
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
     * @return int|null Parent category Id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null Link to parent category
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @param int|null $id Parent category Id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string|null $href Link to parent category
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
