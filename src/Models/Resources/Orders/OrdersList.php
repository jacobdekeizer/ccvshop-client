<?php

namespace JacobDeKeizer\Ccv\Models\Resources\Orders;

use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Models\PaginatedList;
use JacobDeKeizer\Ccv\Parameters\Orders\All;
use JacobDeKeizer\Ccv\Traits\FromArray;

class OrdersList extends PaginatedList
{
    use FromArray;

    public static function fromArray(array $data): OrdersList
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return self::createFromArray($data);
    }

    /**
     * @return Order[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function getNextRequest(): ?All
    {
        if ($this->getNext() === null) {
            return null;
        }

        return All::fromArray(QueryParametersArrayFactory::fromUrl($this->getNext()));
    }

    public function getPreviousRequest(): ?All
    {
        if ($this->getPrevious() === null) {
            return null;
        }

        return All::fromArray(QueryParametersArrayFactory::fromUrl($this->getPrevious()));
    }

    protected function createModelItem(array $data): Order
    {
        return Order::fromArray($data);
    }
}
