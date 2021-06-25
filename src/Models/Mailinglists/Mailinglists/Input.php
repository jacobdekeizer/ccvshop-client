<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Mailinglists\Mailinglists;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Input implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Name of mailinglist
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
     * @return string Name of mailinglist
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @param string $name Name of mailinglist
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
}
