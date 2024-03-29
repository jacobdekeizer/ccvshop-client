<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Mailinglists\Input;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Input implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Name of mailinglist
     */
    private string $name;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
        return $this;
    }
}
