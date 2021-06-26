<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productpropertygroups\Productpropertygroups;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Name product property group.
     */
    private $name;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string Name product property group.
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @param string $name Name product property group.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
}
