<?php

namespace JacobDeKeizer\Ccv\Models\Productphotos\Productphotos;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Photo alt text
     */
    private $alttext;

    /**
     * @var bool|null Product photo marked as mainphoto
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
     * @return string|null Photo alt text
     */
    public function getAlttext(): ?string
    {
        return $this->alttext;
    }

    /**
     * @return bool|null Product photo marked as mainphoto
     */
    public function getIsMainphoto(): ?bool
    {
        return $this->isMainphoto;
    }

    /**
     * @param string|null $alttext Photo alt text
     * @return self
     */
    public function setAlttext(?string $alttext): self
    {
        $this->alttext = $alttext;
        $this->propertyFilled('alttext');
        return $this;
    }

    /**
     * @param bool|null $isMainphoto Product photo marked as mainphoto
     * @return self
     */
    public function setIsMainphoto(?bool $isMainphoto): self
    {
        $this->isMainphoto = $isMainphoto;
        $this->propertyFilled('isMainphoto');
        return $this;
    }
}
