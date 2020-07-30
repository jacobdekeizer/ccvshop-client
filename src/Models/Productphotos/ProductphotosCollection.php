<?php declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productphotos;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Models\Products\Resource\Productphotos;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class ProductphotosCollection implements Model
{
    use FromArray, ToArray;

    /**
     * @var Productphotos[] Array with collection items
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
     * @return Productphotos[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Productphotos[] Array with collection items
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        $this->propertyFilled('items');
        return $this;
    }

    protected function convertFromData(string $key, $value)
    {
        if ($key === 'items') {
            $items = [];

            foreach ($value as $item) {
                $items[] = Productphotos::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
