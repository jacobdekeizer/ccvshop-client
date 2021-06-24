<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Services\Services;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var bool Marks if an service is installed in the webshop.
     */
    private $isInstalled;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return bool Marks if an service is installed in the webshop.
     */
    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    /**
     * @param bool $isInstalled Marks if an service is installed in the webshop.
     * @return self
     */
    public function setIsInstalled(bool $isInstalled): self
    {
        $this->isInstalled = $isInstalled;
        $this->propertyFilled('isInstalled');
        return $this;
    }
}
