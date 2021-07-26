<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Creditpoints\Creditpoints;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Put implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int The current amount of creditpoints of a user
     */
    private $amount;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int The current amount of creditpoints of a user
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount The current amount of creditpoints of a user
     * @return self
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;
        $this->propertyFilled('amount');
        return $this;
    }
}
