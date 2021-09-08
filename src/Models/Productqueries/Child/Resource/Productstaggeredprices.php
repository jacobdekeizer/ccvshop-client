<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productstaggeredprices implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to collection of staggered prices
     */
    private $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productstaggeredprices[] Array with collection items
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
     * @return string Link to collection of staggered prices
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productstaggeredprices[] Array with collection items
     */
    public function getCollection(): array
    {
        return $this->collection;
    }

    /**
     * @param string $href Link to collection of staggered prices
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productstaggeredprices[] $collection Array with collection items
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
                $items[] = \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productstaggeredprices::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
