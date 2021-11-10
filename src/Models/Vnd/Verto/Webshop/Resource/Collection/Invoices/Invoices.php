<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Invoices;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Invoices implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int Offset of the set
     */
    private int $start;

    /**
     * @var int Size of the set
     */
    private int $size;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var string|null Link to the first set of the collection
     */
    private ?string $first;

    /**
     * @var string|null Link to the previous set of the collection
     */
    private ?string $previous;

    /**
     * @var string|null Link to the next set of the collection
     */
    private ?string $next;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Invoices\Invoices[] Array with collection items
     */
    private array $items;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return int Offset of the set
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @return int Size of the set
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return string|null Link to the first set of the collection
     */
    public function getFirst(): ?string
    {
        return $this->first;
    }

    /**
     * @return string|null Link to the previous set of the collection
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * @return string|null Link to the next set of the collection
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Invoices\Invoices[] Array with collection items
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param int $start Offset of the set
     * @return self
     */
    public function setStart(int $start): self
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @param int $size Size of the set
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->size = $size;
        return $this;
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
     * @param string|null $first Link to the first set of the collection
     * @return self
     */
    public function setFirst(?string $first): self
    {
        $this->first = $first;
        return $this;
    }

    /**
     * @param string|null $previous Link to the previous set of the collection
     * @return self
     */
    public function setPrevious(?string $previous): self
    {
        $this->previous = $previous;
        return $this;
    }

    /**
     * @param string|null $next Link to the next set of the collection
     * @return self
     */
    public function setNext(?string $next): self
    {
        $this->next = $next;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Invoices\Invoices ...$items $items Array with collection items
     * @return self
     */
    public function setItems(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Invoices\Invoices ...$items): self
    {
        $this->items = $items;
        return $this;
    }
}
