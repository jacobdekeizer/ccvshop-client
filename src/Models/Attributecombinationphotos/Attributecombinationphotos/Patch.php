<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Attributecombinationphotos\Attributecombinationphotos;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Alternative name
     */
    private $alt;

    /**
     * @var bool|null Picture is the main photo
     */
    private $isMainphoto;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null Alternative name
     */
    public function getAlt(): ?string
    {
        return $this->alt;
    }

    /**
     * @return bool|null Picture is the main photo
     */
    public function getIsMainphoto(): ?bool
    {
        return $this->isMainphoto;
    }

    /**
     * @param string|null $alt Alternative name
     * @return self
     */
    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;
        $this->propertyFilled('alt');
        return $this;
    }

    /**
     * @param bool|null $isMainphoto Picture is the main photo
     * @return self
     */
    public function setIsMainphoto(?bool $isMainphoto): self
    {
        $this->isMainphoto = $isMainphoto;
        $this->propertyFilled('isMainphoto');
        return $this;
    }
}
