<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Invoicelabels\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Invoicelabels implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var int Resource Id of the label
     */
    private $labelId;
    
    /**
     * @var string Link to parent
     */
    private $parent;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return int Resource Id of the label
     */
    public function getLabelId(): int
    {
        return $this->labelId;
    }
    
    /**
     * @return string Link to parent
     */
    public function getParent(): string
    {
        return $this->parent;
    }
    
    /**
     * @param int $labelId Resource Id of the label
     * @return self
     */
    public function setLabelId(int $labelId): self
    {
        $this->labelId = $labelId;
        $this->propertyFilled('labelId');
        return $this;
    }
    
    /**
     * @param string $parent Link to parent
     * @return self
     */
    public function setParent(string $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
