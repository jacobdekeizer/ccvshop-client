<?php

namespace JacobDeKeizer\Ccv\Models\Productphotos\Productphotos;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Photo extension
     */
    private $fileType;

    /**
     * @var string|null Photo alt text
     */
    private $alttext;

    /**
     * @var string Base64 encode image source. Do not include the base64 metadata. Example: remove: 'data:image/png;base64,' from the string
     */
    private $source;

    /**
     * @var bool|null Product photo marked as mainphoto. Products without a mainphoto will not show a photo in categories.
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
     * @return string Photo extension
     */
    public function getFileType(): string
    {
        return $this->fileType;
    }

    /**
     * @return string|null Photo alt text
     */
    public function getAlttext(): ?string
    {
        return $this->alttext;
    }

    /**
     * @return string Base64 encode image source. Do not include the base64 metadata. Example: remove: 'data:image/png;base64,' from the string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return bool|null Product photo marked as mainphoto. Products without a mainphoto will not show a photo in categories.
     */
    public function getIsMainphoto(): ?bool
    {
        return $this->isMainphoto;
    }

    /**
     * @param string $fileType Photo extension
     * @return self
     */
    public function setFileType(string $fileType): self
    {
        $this->fileType = $fileType;
        $this->propertyFilled('fileType');
        return $this;
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
     * @param string $source Base64 encode image source. Do not include the base64 metadata. Example: remove: 'data:image/png;base64,' from the string
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->source = $source;
        $this->propertyFilled('source');
        return $this;
    }

    /**
     * @param bool|null $isMainphoto Product photo marked as mainphoto. Products without a mainphoto will not show a photo in categories.
     * @return self
     */
    public function setIsMainphoto(?bool $isMainphoto): self
    {
        $this->isMainphoto = $isMainphoto;
        $this->propertyFilled('isMainphoto');
        return $this;
    }
}
