<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Creditpoints\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Mutations implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to mutation collection
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
     * @return string Link to mutation collection
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href Link to mutation collection
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}