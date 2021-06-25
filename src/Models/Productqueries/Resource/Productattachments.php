<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productqueries\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productattachments implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Link to self
     */
    private $href;
    
    /**
     * @var int Attachment id
     */
    private $id;
    
    /**
     * @var string File name
     */
    private $filename;
    
    /**
     * @var string Display name of the file.
     */
    private $displayname;
    
    /**
     * @var int Position compared to other product attachments. Starting at 1.
     */
    private $position;
    
    /**
     * @var string Deeplink to the file. This link will result in a file which can be downloaded.
     */
    private $deeplink;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    private $parent;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }
    
    /**
     * @return int Attachment id
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @return string File name
     */
    public function getFilename(): string
    {
        return $this->filename;
    }
    
    /**
     * @return string Display name of the file.
     */
    public function getDisplayname(): string
    {
        return $this->displayname;
    }
    
    /**
     * @return int Position compared to other product attachments. Starting at 1.
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    
    /**
     * @return string Deeplink to the file. This link will result in a file which can be downloaded.
     */
    public function getDeeplink(): string
    {
        return $this->deeplink;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem
    {
        return $this->parent;
    }
    
    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
    
    /**
     * @param int $id Attachment id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param string $filename File name
     * @return self
     */
    public function setFilename(string $filename): self
    {
        $this->filename = $filename;
        $this->propertyFilled('filename');
        return $this;
    }
    
    /**
     * @param string $displayname Display name of the file.
     * @return self
     */
    public function setDisplayname(string $displayname): self
    {
        $this->displayname = $displayname;
        $this->propertyFilled('displayname');
        return $this;
    }
    
    /**
     * @param int $position Position compared to other product attachments. Starting at 1.
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
    
    /**
     * @param string $deeplink Deeplink to the file. This link will result in a file which can be downloaded.
     * @return self
     */
    public function setDeeplink(string $deeplink): self
    {
        $this->deeplink = $deeplink;
        $this->propertyFilled('deeplink');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
