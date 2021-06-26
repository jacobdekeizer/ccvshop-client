<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class ContextDetails implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string An internal name describing the context.
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
     * @return string An internal name describing the context.
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @param string $name An internal name describing the context.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
}
