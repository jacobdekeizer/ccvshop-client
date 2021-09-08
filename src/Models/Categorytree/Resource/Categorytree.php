<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Categorytree\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Categorytree implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytreenode[] Array with root categories.
     */
    private $rootCategories;

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
     * @return \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytreenode[] Array with root categories.
     */
    public function getRootCategories(): array
    {
        return $this->rootCategories;
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
     * @param \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytreenode[] $rootCategories Array with root categories.
     * @return self
     */
    public function setRootCategories(array $rootCategories): self
    {
        $this->rootCategories = $rootCategories;
        $this->propertyFilled('rootCategories');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'root_categories') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytreenode::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
