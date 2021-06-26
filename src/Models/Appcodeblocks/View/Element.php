<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Appcodeblocks\View;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Element implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string This is the unique identiefer of this element. This element's value will be posted as this property.
     */
    private $name;
    
    /**
     * @var object This label will be display above or next to this element, depending on the 'element_type'.
     */
    private $label;
    
    /**
     * @var string Defines the different webpage elements that can be used. Deeplinks are a unordered list with links to remote files. Attachments will create a 'Save As' promt for the user to download a remote file.
     */
    private $elementType;
    
    /**
     * @var string|null The value of this element. For a text, this is the 'text' that is displayed. For 'input_select', this is the selected value. For 'deeplinks', this is a the label of the remote file. For input_price this is an object with price and currency present.
     */
    private $value;
    
    /**
     * @var string|null Only used for deeplinks and attachments. Should contain the remote link to the file.
     */
    private $deeplink;
    
    /**
     * @var string|null Icon displayed with the element. Can be placed before deeplinks or in the button. See https://fortawesome.github.io/ for examples.
     */
    private $icon;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Appcodeblocks\Child\View\Options[]|null Only used for input_radio and input_select. Containts all options of these elements
     */
    private $options;
    
    /**
     * @var string|null Only used for element_type input_button. This binds the action of the page to this button. submit_on_save is triggered when the user presses the save or apply button the page. To prevent double save buttons, this input_button will be hidden.
     */
    private $action;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string This is the unique identiefer of this element. This element's value will be posted as this property.
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @return object This label will be display above or next to this element, depending on the 'element_type'.
     */
    public function getLabel(): object
    {
        return $this->label;
    }
    
    /**
     * @return string Defines the different webpage elements that can be used. Deeplinks are a unordered list with links to remote files. Attachments will create a 'Save As' promt for the user to download a remote file.
     */
    public function getElementType(): string
    {
        return $this->elementType;
    }
    
    /**
     * @return string|null The value of this element. For a text, this is the 'text' that is displayed. For 'input_select', this is the selected value. For 'deeplinks', this is a the label of the remote file. For input_price this is an object with price and currency present.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    
    /**
     * @return string|null Only used for deeplinks and attachments. Should contain the remote link to the file.
     */
    public function getDeeplink(): ?string
    {
        return $this->deeplink;
    }
    
    /**
     * @return string|null Icon displayed with the element. Can be placed before deeplinks or in the button. See https://fortawesome.github.io/ for examples.
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Appcodeblocks\Child\View\Options[]|null Only used for input_radio and input_select. Containts all options of these elements
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    
    /**
     * @return string|null Only used for element_type input_button. This binds the action of the page to this button. submit_on_save is triggered when the user presses the save or apply button the page. To prevent double save buttons, this input_button will be hidden.
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    
    /**
     * @param string $name This is the unique identiefer of this element. This element's value will be posted as this property.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param object $label This label will be display above or next to this element, depending on the 'element_type'.
     * @return self
     */
    public function setLabel(object $label): self
    {
        $this->label = $label;
        $this->propertyFilled('label');
        return $this;
    }
    
    /**
     * @param string $elementType Defines the different webpage elements that can be used. Deeplinks are a unordered list with links to remote files. Attachments will create a 'Save As' promt for the user to download a remote file.
     * @return self
     */
    public function setElementType(string $elementType): self
    {
        $this->elementType = $elementType;
        $this->propertyFilled('elementType');
        return $this;
    }
    
    /**
     * @param string|null $value The value of this element. For a text, this is the 'text' that is displayed. For 'input_select', this is the selected value. For 'deeplinks', this is a the label of the remote file. For input_price this is an object with price and currency present.
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        $this->propertyFilled('value');
        return $this;
    }
    
    /**
     * @param string|null $deeplink Only used for deeplinks and attachments. Should contain the remote link to the file.
     * @return self
     */
    public function setDeeplink(?string $deeplink): self
    {
        $this->deeplink = $deeplink;
        $this->propertyFilled('deeplink');
        return $this;
    }
    
    /**
     * @param string|null $icon Icon displayed with the element. Can be placed before deeplinks or in the button. See https://fortawesome.github.io/ for examples.
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        $this->propertyFilled('icon');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Appcodeblocks\Child\View\Options[]|null $options Only used for input_radio and input_select. Containts all options of these elements
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;
        $this->propertyFilled('options');
        return $this;
    }
    
    /**
     * @param string|null $action Only used for element_type input_button. This binds the action of the page to this button. submit_on_save is triggered when the user presses the save or apply button the page. To prevent double save buttons, this input_button will be hidden.
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;
        $this->propertyFilled('action');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'options') {
            $items = [];
            
            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Appcodeblocks\Child\View\Options::fromArray($item);
            }
            
            return $items;
        }
        
        return $value;
    }
}
