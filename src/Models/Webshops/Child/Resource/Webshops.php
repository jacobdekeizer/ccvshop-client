<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Webshops\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Webshops implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to collection of webshops that are linked to this multishop system. If this resource is not a multishop system, this collection will be empty.
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
     * @return string|null Link to collection of webshops that are linked to this multishop system. If this resource is not a multishop system, this collection will be empty.
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @param string|null $href Link to collection of webshops that are linked to this multishop system. If this resource is not a multishop system, this collection will be empty.
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
