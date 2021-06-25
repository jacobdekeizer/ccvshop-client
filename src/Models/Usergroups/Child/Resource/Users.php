<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Usergroups\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Users implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to group users
     */
    private $href;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string|null Link to group users
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @param string|null $href Link to group users
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
