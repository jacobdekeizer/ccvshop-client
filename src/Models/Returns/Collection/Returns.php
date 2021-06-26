<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Returns\Collection;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Returns implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var int Offset of the set
     */
    private $start;
    
    /**
     * @var int Size of the set
     */
    private $size;
    
    /**
     * @var string Link to self
     */
    private $href;
    
    /**
     * @var string|null Link to the first set of the collection
     */
    private $first;
    
    /**
     * @var string|null Link to the previous set of the collection
     */
    private $previous;
    
    /**
     * @var string|null Link to the next set of the collection
     */
    private $next;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Returns\Resource\Returns[] Array with collection items
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
     * @return \JacobDeKeizer\Ccv\Models\Returns\Resource\Returns[] Array with collection items
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
        $this->propertyFilled('start');
        return $this;
    }
    
    /**
     * @param int $size Size of the set
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->size = $size;
        $this->propertyFilled('size');
        return $this;
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
     * @param string|null $first Link to the first set of the collection
     * @return self
     */
    public function setFirst(?string $first): self
    {
        $this->first = $first;
        $this->propertyFilled('first');
        return $this;
    }
    
    /**
     * @param string|null $previous Link to the previous set of the collection
     * @return self
     */
    public function setPrevious(?string $previous): self
    {
        $this->previous = $previous;
        $this->propertyFilled('previous');
        return $this;
    }
    
    /**
     * @param string|null $next Link to the next set of the collection
     * @return self
     */
    public function setNext(?string $next): self
    {
        $this->next = $next;
        $this->propertyFilled('next');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Returns\Resource\Returns[] $items Array with collection items
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
                $items[] = \JacobDeKeizer\Ccv\Models\Returns\Resource\Returns::fromArray($item);
            }
            
            return $items;
        }
        
        return $value;
    }
}
