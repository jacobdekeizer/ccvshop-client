<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Services\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Categories implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Services\Resource\Servicecategories[] Array with collection items
     */
    private $collection;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Services\Resource\Servicecategories[] Array with collection items
     */
    public function getCollection(): array
    {
        return $this->collection;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Services\Resource\Servicecategories[] $collection Array with collection items
     * @return self
     */
    public function setCollection(array $collection): self
    {
        $this->collection = $collection;
        $this->propertyFilled('collection');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'collection') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Services\Resource\Servicecategories::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
