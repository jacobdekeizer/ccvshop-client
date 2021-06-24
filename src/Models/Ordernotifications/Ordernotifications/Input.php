<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Ordernotifications\Ordernotifications;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Input implements Model
{
    use FromArray, ToArray;

    /**
     * @var string The prefix determines the destination (customer or merchant). The second part determines the document. These correspond with the backend option a merchant has.
     */
    private $type;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string The prefix determines the destination (customer or merchant). The second part determines the document. These correspond with the backend option a merchant has.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type The prefix determines the destination (customer or merchant). The second part determines the document. These correspond with the backend option a merchant has.
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }
}
