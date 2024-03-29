<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Orders\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class TakeOutWindow implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Start datetime of the take out slot in UTC.
     */
    private ?string $start;

    /**
     * @var string|null End datetime of the take out slot in UTC.
     */
    private ?string $end;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string|null Start datetime of the take out slot in UTC.
     */
    public function getStart(): ?string
    {
        return $this->start;
    }

    /**
     * @return string|null End datetime of the take out slot in UTC.
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }

    /**
     * @param string|null $start Start datetime of the take out slot in UTC.
     * @return self
     */
    public function setStart(?string $start): self
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @param string|null $end End datetime of the take out slot in UTC.
     * @return self
     */
    public function setEnd(?string $end): self
    {
        $this->end = $end;
        return $this;
    }
}
