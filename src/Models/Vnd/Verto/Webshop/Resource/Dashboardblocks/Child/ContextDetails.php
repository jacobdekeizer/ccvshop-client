<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Dashboardblocks\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class ContextDetails implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string An internal name describing the context.
     */
    private string $name;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
        return $this;
    }
}
