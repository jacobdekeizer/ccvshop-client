<?php

namespace JacobDeKeizer\Ccv\Models\Orderrows\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Uploads implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Description of the kind of upload
     */
    private $uploadDescription;

    /**
     * @var string File name of the uploaded file.
     */
    private $fileName;

    /**
     * @var string Deeplink to the file.
     */
    private $deeplink;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Description of the kind of upload
     */
    public function getUploadDescription(): string
    {
        return $this->uploadDescription;
    }

    /**
     * @return string File name of the uploaded file.
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @return string Deeplink to the file.
     */
    public function getDeeplink(): string
    {
        return $this->deeplink;
    }

    /**
     * @param string $uploadDescription Description of the kind of upload
     * @return self
     */
    public function setUploadDescription(string $uploadDescription): self
    {
        $this->uploadDescription = $uploadDescription;
        $this->propertyFilled('uploadDescription');
        return $this;
    }

    /**
     * @param string $fileName File name of the uploaded file.
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;
        $this->propertyFilled('fileName');
        return $this;
    }

    /**
     * @param string $deeplink Deeplink to the file.
     * @return self
     */
    public function setDeeplink(string $deeplink): self
    {
        $this->deeplink = $deeplink;
        $this->propertyFilled('deeplink');
        return $this;
    }
}
