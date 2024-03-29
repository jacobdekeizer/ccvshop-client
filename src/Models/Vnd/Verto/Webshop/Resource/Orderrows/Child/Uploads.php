<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orderrows\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Uploads implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Description of the kind of upload
     */
    private string $uploadDescription;

    /**
     * @var string File name of the uploaded file.
     */
    private string $fileName;

    /**
     * @var string Deeplink to the file.
     */
    private string $deeplink;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
        return $this;
    }

    /**
     * @param string $fileName File name of the uploaded file.
     * @return self
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @param string $deeplink Deeplink to the file.
     * @return self
     */
    public function setDeeplink(string $deeplink): self
    {
        $this->deeplink = $deeplink;
        return $this;
    }
}
