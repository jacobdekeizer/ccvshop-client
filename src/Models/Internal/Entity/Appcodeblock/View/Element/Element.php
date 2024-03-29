<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Element implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string This is the unique identiefer of this element. This element's value will be posted as this property.
     */
    private string $name;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Child\Label This label will be display above or next to this element, depending on the 'element_type'.
     */
    private \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Child\Label $label;

    /**
     * @var string Defines the different webpage elements that can be used. Deeplinks are a unordered list with links to remote files. Attachments will create a 'Save As' promt for the user to download a remote file.
     */
    private string $elementType;

    /**
     * @var string|null The value of this element. For a text, this is the 'text' that is displayed. For 'input_select', this is the selected value. For 'deeplinks', this is a the label of the remote file. For input_price this is an object with price and currency present.
     */
    private ?string $value;

    /**
     * @var string|null Only used for deeplinks and attachments. Should contain the remote link to the file.
     */
    private ?string $deeplink;

    /**
     * @var string|null Icon displayed with the element. Can be placed before deeplinks or in the button. See https://fortawesome.github.io/ for examples.
     */
    private ?string $icon;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Child\Options[]|null Only used for input_radio and input_select. Containts all options of these elements
     */
    private ?array $options;

    /**
     * @var string|null Only used for element_type input_button. This binds the action of the page to this button. submit_on_save is triggered when the user presses the save or apply button the page. To prevent double save buttons, this input_button will be hidden.
     */
    private ?string $action;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string This is the unique identiefer of this element. This element's value will be posted as this property.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Child\Label This label will be display above or next to this element, depending on the 'element_type'.
     */
    public function getLabel(): \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Child\Label
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
     * @return \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Child\Options[]|null Only used for input_radio and input_select. Containts all options of these elements
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
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Child\Label $label This label will be display above or next to this element, depending on the 'element_type'.
     * @return self
     */
    public function setLabel(\JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Child\Label $label): self
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @param string $elementType Defines the different webpage elements that can be used. Deeplinks are a unordered list with links to remote files. Attachments will create a 'Save As' promt for the user to download a remote file.
     * @return self
     */
    public function setElementType(string $elementType): self
    {
        $this->elementType = $elementType;
        return $this;
    }

    /**
     * @param string|null $value The value of this element. For a text, this is the 'text' that is displayed. For 'input_select', this is the selected value. For 'deeplinks', this is a the label of the remote file. For input_price this is an object with price and currency present.
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param string|null $deeplink Only used for deeplinks and attachments. Should contain the remote link to the file.
     * @return self
     */
    public function setDeeplink(?string $deeplink): self
    {
        $this->deeplink = $deeplink;
        return $this;
    }

    /**
     * @param string|null $icon Icon displayed with the element. Can be placed before deeplinks or in the button. See https://fortawesome.github.io/ for examples.
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Child\Options|null ...$options $options Only used for input_radio and input_select. Containts all options of these elements
     * @return self
     */
    public function setOptions(\JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\View\Element\Child\Options ...$options): self
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @param string|null $action Only used for element_type input_button. This binds the action of the page to this button. submit_on_save is triggered when the user presses the save or apply button the page. To prevent double save buttons, this input_button will be hidden.
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }
}
