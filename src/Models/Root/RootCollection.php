<?php

namespace JacobDeKeizer\Ccv\Models\Root;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class RootCollection implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var RootItem[] Array with collection items
     */
    private $items;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return RootItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param RootItem[] Array with collection items
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        $this->propertyFilled('items');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'items') {
            $items = [];

            foreach ($value as $item) {
                $items[] = RootItem::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
