<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productqueries\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Productreviews implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to collection of reviews.
     */
    private $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productreviews[]|null Array with review items
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
     * @return string|null Link to collection of reviews.
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productreviews[]|null Array with review items
     */
    public function getCollection(): ?array
    {
        return $this->collection;
    }

    /**
     * @param string|null $href Link to collection of reviews.
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productreviews[]|null $collection Array with review items
     * @return self
     */
    public function setCollection(?array $collection): self
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
                $items[] = \JacobDeKeizer\Ccv\Models\Productqueries\Resource\Productreviews::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
