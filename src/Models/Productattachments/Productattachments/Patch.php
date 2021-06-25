<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productattachments\Productattachments;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Attachment name
     */
    private $displayname;
    
    /**
     * @var int|null Attachment position
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
     * @return string|null Attachment name
     */
    public function getDisplayname(): ?string
    {
        return $this->displayname;
    }
    
    /**
     * @return int|null Attachment position
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    
    /**
     * @param string|null $displayname Attachment name
     * @return self
     */
    public function setDisplayname(?string $displayname): self
    {
        $this->displayname = $displayname;
        $this->propertyFilled('displayname');
        return $this;
    }
    
    /**
     * @param int|null $position Attachment position
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
}
