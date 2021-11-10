<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Webhshops\Put;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Put implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int[] A collection of webshop_ids to which this product will be linked.
     */
    private array $webshops;

    public static function fromArray(array $data): static
    {
        return self::createFromArray($data);
    }

    /**
     * @return int[] A collection of webshop_ids to which this product will be linked.
     */
    public function getWebshops(): array
    {
        return $this->webshops;
    }

    /**
     * @param int[] $webshops A collection of webshop_ids to which this product will be linked.
     * @return self
     */
    public function setWebshops(array $webshops): self
    {
        $this->webshops = $webshops;
        return $this;
    }
}
