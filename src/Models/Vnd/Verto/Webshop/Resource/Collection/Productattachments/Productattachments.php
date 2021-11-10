<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Productattachments;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Productattachments implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productattachments\Productattachments[] Array with collection items
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
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productattachments\Productattachments[] Array with collection items
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
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productattachments\Productattachments ...$items $items Array with collection items
     * @return self
     */
    public function setItems(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Productattachments\Productattachments ...$items): self
    {
        $this->items = $items;
        return $this;
    }
}
