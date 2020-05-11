<?php

namespace JacobDeKeizer\Ccv\Models\Orders\Webshop\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class TakeOutWindow implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Start datetime of the take out slot in UTC.
     */
     private $start;

    /**
     * @var string|null End datetime of the take out slot in UTC.
     */
     private $end;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
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
     * @param string|null Start datetime of the take out slot in UTC.
     * @return self
     */
    public function setStart(?string $start): self
    {
        $this->start = $start;
        $this->propertyFilled('start');
        return $this;
    }

    /**
     * @param string|null End datetime of the take out slot in UTC.
     * @return self
     */
    public function setEnd(?string $end): self
    {
        $this->end = $end;
        $this->propertyFilled('end');
        return $this;
    }
}
