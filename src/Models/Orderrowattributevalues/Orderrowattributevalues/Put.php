<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Put implements Model
{
    use FromArray, ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues\Post[] Replaces all attributes at this row.
     */
    private $attributes;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues\Post[] Replaces all attributes at this row.
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues\Post[] $attributes Replaces all attributes at this row.
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
        $this->propertyFilled('attributes');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'attributes') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Orderrowattributevalues\Orderrowattributevalues\Post::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
