<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productattachments\Productattachments;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Product photo attachment display name
     */
    private $displayname;

    /**
     * @var string Attachment full name (ie. picture.png)
     */
    private $filename;

    /**
     * @var string Attachment source base 64 encoded
     */
    private $source;

    /**
     * @var int|null Attachment position. When the position isn't filled the highest position will be used.
     */
    private $position;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Product photo attachment display name
     */
    public function getDisplayname(): string
    {
        return $this->displayname;
    }

    /**
     * @return string Attachment full name (ie. picture.png)
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @return string Attachment source base 64 encoded
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return int|null Attachment position. When the position isn't filled the highest position will be used.
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @param string $displayname Product photo attachment display name
     * @return self
     */
    public function setDisplayname(string $displayname): self
    {
        $this->displayname = $displayname;
        $this->propertyFilled('displayname');
        return $this;
    }

    /**
     * @param string $filename Attachment full name (ie. picture.png)
     * @return self
     */
    public function setFilename(string $filename): self
    {
        $this->filename = $filename;
        $this->propertyFilled('filename');
        return $this;
    }

    /**
     * @param string $source Attachment source base 64 encoded
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->source = $source;
        $this->propertyFilled('source');
        return $this;
    }

    /**
     * @param int|null $position Attachment position. When the position isn't filled the highest position will be used.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
}