<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Post;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Post implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Photo extension
     */
    private string $fileType;

    /**
     * @var string|null Photo alt text
     */
    private ?string $alttext;

    /**
     * @var string Base64 encode image source. Do not include the base64 metadata. Example: remove: 'data:image/png;base64,' from the string
     */
    private string $source;

    /**
     * @var bool|null Product photo marked as mainphoto. Products without a mainphoto will not show a photo in categories.
     */
    private ?bool $isMainphoto;

    public static function fromArray(array $data): static
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
        return $this;
    }

    /**
     * @param string|null $alttext Photo alt text
     * @return self
     */
    public function setAlttext(?string $alttext): self
    {
        $this->alttext = $alttext;
        return $this;
    }

    /**
     * @param string $source Base64 encode image source. Do not include the base64 metadata. Example: remove: 'data:image/png;base64,' from the string
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @param bool|null $isMainphoto Product photo marked as mainphoto. Products without a mainphoto will not show a photo in categories.
     * @return self
     */
    public function setIsMainphoto(?bool $isMainphoto): self
    {
        $this->isMainphoto = $isMainphoto;
        return $this;
    }
}
