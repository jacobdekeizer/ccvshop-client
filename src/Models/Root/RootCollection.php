<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Root;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class RootCollection implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var RootItem[] Array with collection items
     */
    private array $items;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return RootItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param RootItem ...$items
     * @return $this
     */
    public function setItems(RootItem ...$items): self
    {
        $this->items = $items;
        return $this;
    }
}
