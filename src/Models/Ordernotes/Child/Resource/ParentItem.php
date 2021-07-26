<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Ordernotes\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class ParentItem implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to order
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
     * @return string|null Link to order
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @param string|null $href Link to order
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
