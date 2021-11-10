<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Orderrows\Put;

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
     * @var \JacobDeKeizer\Ccv\Models\Internal\Entity\Orderrow\Input\Input[] Describes a collection of order rows. Replaces all old order rows with the new orders rows. This will result in a recalculation of the order. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     */
    private array $orderrows;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Internal\Entity\Orderrow\Input\Input[] Describes a collection of order rows. Replaces all old order rows with the new orders rows. This will result in a recalculation of the order. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     */
    public function getOrderrows(): array
    {
        return $this->orderrows;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Entity\Orderrow\Input\Input ...$orderrows $orderrows Describes a collection of order rows. Replaces all old order rows with the new orders rows. This will result in a recalculation of the order. If a product_id is provided the properties will be populated with product data. If you wish to overrule this data just add the property to the payload.
     * @return self
     */
    public function setOrderrows(\JacobDeKeizer\Ccv\Models\Internal\Entity\Orderrow\Input\Input ...$orderrows): self
    {
        $this->orderrows = $orderrows;
        return $this;
    }
}
