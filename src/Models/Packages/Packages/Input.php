<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Packages\Packages;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Input implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Package name. Used in the merchant's backend as display name. This does not support translations.
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
     * @return string Package name. Used in the merchant's backend as display name. This does not support translations.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name Package name. Used in the merchant's backend as display name. This does not support translations.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
}
