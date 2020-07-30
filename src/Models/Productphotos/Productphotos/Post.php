<?php declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productphotos\Productphotos;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /** @var string|null Photo extension */
    private $fileType;

    /** @var string|null Photo alt text */
    private $alttext;

    /** @var string|null Base64 encode image source. Do not include the base64 metadata. Example: remove: 'data:image/png;base64,' from the string */
    private $source;

    /** @var bool|null Product photo marked as mainphoto. Products without a mainphoto will not show a photo in categories. */
    private $isMainphoto;

    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    public function getFileType(): ?string
    {
        return $this->fileType;
    }

    public function getAlttext(): ?string
    {
        return $this->alttext;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function getIsMainphoto(): ?bool
    {
        return $this->isMainphoto;
    }

    /** @param $fileType string Photo extension (gif,jpg,jpeg,png) */
    public function setFileType(string $fileType): self
    {
        $this->fileType = $fileType;
        $this->propertyFilled('fileType');
        return $this;
    }

    public function setAlttext(string $alttext): self
    {
        $this->alttext = $alttext;
        $this->propertyFilled('alttext');
        return $this;
    }


    public function setSource(string $source): self
    {
        $this->source = $source;
        $this->propertyFilled('source');
        return $this;
    }

    public function setIsMainphoto(bool $isMainphoto): self
    {
        $this->isMainphoto = $isMainphoto;
        $this->propertyFilled('isMainphoto');
        return $this;
    }
}