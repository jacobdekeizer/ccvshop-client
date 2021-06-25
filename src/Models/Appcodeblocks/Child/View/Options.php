<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Appcodeblocks\Child\View;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Options implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var object|null Label of this options.
     */
    private $label;
    
    /**
     * @var string|null Value of this options. This will be posted as value.
     */
    private $value;
    
    /**
     * @var bool|null If true, this option is selected by default. Will be overwritten by the value of this element, if not null.
     */
    private $selected;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return object|null Label of this options.
     */
    public function getLabel(): ?object
    {
        return $this->label;
    }
    
    /**
     * @return string|null Value of this options. This will be posted as value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    
    /**
     * @return bool|null If true, this option is selected by default. Will be overwritten by the value of this element, if not null.
     */
    public function getSelected(): ?bool
    {
        return $this->selected;
    }
    
    /**
     * @param object|null $label Label of this options.
     * @return self
     */
    public function setLabel(?object $label): self
    {
        $this->label = $label;
        $this->propertyFilled('label');
        return $this;
    }
    
    /**
     * @param string|null $value Value of this options. This will be posted as value.
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        $this->propertyFilled('value');
        return $this;
    }
    
    /**
     * @param bool|null $selected If true, this option is selected by default. Will be overwritten by the value of this element, if not null.
     * @return self
     */
    public function setSelected(?bool $selected): self
    {
        $this->selected = $selected;
        $this->propertyFilled('selected');
        return $this;
    }
}
