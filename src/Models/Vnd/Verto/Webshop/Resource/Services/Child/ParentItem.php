<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Services\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class ParentItem implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to services collection
     */
    private string $href;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string Link to services collection
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href Link to services collection
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }
}
