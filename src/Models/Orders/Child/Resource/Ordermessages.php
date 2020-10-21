<?php

namespace JacobDeKeizer\Ccv\Models\Orders\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Ordermessages implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to Messages sent to the customer
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
     * @return string Link to Messages sent to the customer
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string Link to Messages sent to the customer
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
