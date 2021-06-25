<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Dashboardblocks\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class ValueDetails implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var float The absolute number of this block. If the block is a relative block then it's the differnce between timespans.
     */
    private $value;
    
    /**
     * @var float If the block is a relative block and type is percentage then a percentage will be calculated comparing it to the previous timespan.
     */
    private $percentage;
    
    /**
     * @var string The representation of the number
     */
    private $type;
    
    /**
     * @var float The value of the previous timespan.
     */
    private $previous;
    
    /**
     * @var float The value of the current timespan.
     */
    private $current;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return float The absolute number of this block. If the block is a relative block then it's the differnce between timespans.
     */
    public function getValue(): float
    {
        return $this->value;
    }
    
    /**
     * @return float If the block is a relative block and type is percentage then a percentage will be calculated comparing it to the previous timespan.
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }
    
    /**
     * @return string The representation of the number
     */
    public function getType(): string
    {
        return $this->type;
    }
    
    /**
     * @return float The value of the previous timespan.
     */
    public function getPrevious(): float
    {
        return $this->previous;
    }
    
    /**
     * @return float The value of the current timespan.
     */
    public function getCurrent(): float
    {
        return $this->current;
    }
    
    /**
     * @param float $value The absolute number of this block. If the block is a relative block then it's the differnce between timespans.
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->value = $value;
        $this->propertyFilled('value');
        return $this;
    }
    
    /**
     * @param float $percentage If the block is a relative block and type is percentage then a percentage will be calculated comparing it to the previous timespan.
     * @return self
     */
    public function setPercentage(float $percentage): self
    {
        $this->percentage = $percentage;
        $this->propertyFilled('percentage');
        return $this;
    }
    
    /**
     * @param string $type The representation of the number
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        $this->propertyFilled('type');
        return $this;
    }
    
    /**
     * @param float $previous The value of the previous timespan.
     * @return self
     */
    public function setPrevious(float $previous): self
    {
        $this->previous = $previous;
        $this->propertyFilled('previous');
        return $this;
    }
    
    /**
     * @param float $current The value of the current timespan.
     * @return self
     */
    public function setCurrent(float $current): self
    {
        $this->current = $current;
        $this->propertyFilled('current');
        return $this;
    }
}
