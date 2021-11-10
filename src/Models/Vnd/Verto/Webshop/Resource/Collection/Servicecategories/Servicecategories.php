<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Servicecategories;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Servicecategories implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories\Servicecategories[] Array with collection items
     */
    private array $items;

    public static function fromArray(array $data): static
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
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories\Servicecategories[] Array with collection items
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
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories\Servicecategories ...$items $items Array with collection items
     * @return self
     */
    public function setItems(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Servicecategories\Servicecategories ...$items): self
    {
        $this->items = $items;
        return $this;
    }
}
