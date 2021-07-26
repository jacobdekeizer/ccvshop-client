<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Invoicenotifications\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class ParentItem implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Collection of all invoice notifications of the invoice.
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
     * @return string Collection of all invoice notifications of the invoice.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href Collection of all invoice notifications of the invoice.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
