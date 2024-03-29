<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinations\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Attributecombinationphotos implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to collection of attribute combination photo belonging to the combination
     */
    private string $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinationphoto\Attributecombinationphoto[] Array with collection items
     */
    private array $collection;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string Link to collection of attribute combination photo belonging to the combination
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinationphoto\Attributecombinationphoto[] Array with collection items
     */
    public function getCollection(): array
    {
        return $this->collection;
    }

    /**
     * @param string $href Link to collection of attribute combination photo belonging to the combination
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinationphoto\Attributecombinationphoto ...$collection $collection Array with collection items
     * @return self
     */
    public function setCollection(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Attributecombinationphoto\Attributecombinationphoto ...$collection): self
    {
        $this->collection = $collection;
        return $this;
    }
}
