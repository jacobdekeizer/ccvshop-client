<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Orderrow implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to orderrow
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
     * @return string Link to orderrow
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href Link to orderrow
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
