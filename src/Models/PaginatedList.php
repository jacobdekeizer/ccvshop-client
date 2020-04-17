<?php

namespace JacobDeKeizer\Ccv\Models;

use JacobDeKeizer\Ccv\Contracts\Model;

abstract class PaginatedList implements Model
{
    /** @var int */
    protected $start;

    /** @var int */
    protected $size;

    /** @var string */
    protected $href;

    /** @var string */
    protected $fist;

    /** @var string */
    protected $previous;

    /** @var string */
    protected $next;

    /** @var Model[] */
    protected $items;

    public function getStart(): int
    {
        return $this->start;
    }

    public function setStart(int $start): void
    {
        $this->start = $start;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function setHref(string $href): void
    {
        $this->href = $href;
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function setFist(string $fist): void
    {
        $this->fist = $fist;
    }

    public function getFist(): string
    {
        return $this->fist;
    }

    public function setPrevious(string $previous): PaginatedList
    {
        $this->previous = $previous;
        return $this;
    }

    public function getPrevious(): string
    {
        return $this->previous;
    }

    public function getNext(): string
    {
        return $this->next;
    }

    public function setNext(string $next): PaginatedList
    {
        $this->next = $next;
        return $this;
    }

    public function setItems(array $items): PaginatedList
    {
        $this->items = [];

        foreach ($items as $item) {
            $this->items[] = $this->createModelItem($item);
        }

        return $this;
    }

    protected function getItems(): array
    {
        return $this->items;
    }

    abstract protected function createModelItem(array $data);
}