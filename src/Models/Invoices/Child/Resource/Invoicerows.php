<?php

namespace JacobDeKeizer\Ccv\Models\Invoices\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Invoicerows implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to products that are included in this invoice.
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
     * @return string Link to products that are included in this invoice.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string Link to products that are included in this invoice.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
