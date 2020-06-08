<?php

namespace JacobDeKeizer\Ccv\Models\Products\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Package implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to package resource
     */
    private $href;

    /**
     * @var int Package Id
     */
    private $id;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to package resource
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Package Id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param string Link to package resource
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int Package Id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
}
