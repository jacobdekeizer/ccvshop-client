<?php

namespace JacobDeKeizer\Ccv\Models\Products\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productattributesets implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to collection of attribute sets
     */
    private $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productattributesets[] Array with collection items
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
     * @return string Link to collection of attribute sets
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productattributesets[] Array with collection items
     */
    public function getCollection(): array
    {
        return $this->collection;
    }

    /**
     * @param string Link to collection of attribute sets
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productattributesets[] Array with collection items
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
                $items[] = \JacobDeKeizer\Ccv\Models\Products\Resource\Productattributesets::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
