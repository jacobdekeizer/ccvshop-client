<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Dashboardblocks\Collection;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Dashboardblocks implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Dashboardblocks\Resource\Dashboardblocks[] Array with dashboard blocks
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
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Dashboardblocks\Resource\Dashboardblocks[] Array with dashboard blocks
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Dashboardblocks\Resource\Dashboardblocks[] $items Array with dashboard blocks
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
                $items[] = \JacobDeKeizer\Ccv\Models\Dashboardblocks\Resource\Dashboardblocks::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
