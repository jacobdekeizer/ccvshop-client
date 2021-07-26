<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Appcodeblocks\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Appcodeblocks implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self.
     */
    private $href;

    /**
     * @var int Unique id of the resource.
     */
    private $id;

    /**
     * @var int Unique id of the app associated with this code block.
     */
    private $appId;

    /**
     * @var string The placeholder describes the location where the code block will be placed in the webshop. header: value will be placed in the &lt;head&gt; of each frontend page. footer: value will be place just above the &lt;/body&gt; of each frontend page.
     */
    private $placeholder;

    /**
     * @var string|null This is the title of the app code block. When empty the app name will be used.
     */
    private $title;

    /**
     * @var string|null This is the static contents of the code block. This is an alternative to the interactive content of the property 'interactive_content'. This value is displayed on the place holder 'as is'.
     */
    private $value;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Appcodeblocks\Collection\View|null This is the interactive content as an alternative to the static content of the property 'value'. With this content the app can interact with the user. For more info see the documentation on Code blocks.
     */
    private $interactiveContent;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Appcodeblocks\Child\Resource\ParentItem|null App
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
     * @return string|null Link to self.
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int Unique id of the resource.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int Unique id of the app associated with this code block.
     */
    public function getAppId(): int
    {
        return $this->appId;
    }

    /**
     * @return string The placeholder describes the location where the code block will be placed in the webshop. header: value will be placed in the &lt;head&gt; of each frontend page. footer: value will be place just above the &lt;/body&gt; of each frontend page.
     */
    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    /**
     * @return string|null This is the title of the app code block. When empty the app name will be used.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null This is the static contents of the code block. This is an alternative to the interactive content of the property 'interactive_content'. This value is displayed on the place holder 'as is'.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Appcodeblocks\Collection\View|null This is the interactive content as an alternative to the static content of the property 'value'. With this content the app can interact with the user. For more info see the documentation on Code blocks.
     */
    public function getInteractiveContent(): ?\JacobDeKeizer\Ccv\Models\Appcodeblocks\Collection\View
    {
        return $this->interactiveContent;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Appcodeblocks\Child\Resource\ParentItem|null App
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Appcodeblocks\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string|null $href Link to self.
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int $id Unique id of the resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param int $appId Unique id of the app associated with this code block.
     * @return self
     */
    public function setAppId(int $appId): self
    {
        $this->appId = $appId;
        $this->propertyFilled('appId');
        return $this;
    }

    /**
     * @param string $placeholder The placeholder describes the location where the code block will be placed in the webshop. header: value will be placed in the &lt;head&gt; of each frontend page. footer: value will be place just above the &lt;/body&gt; of each frontend page.
     * @return self
     */
    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;
        $this->propertyFilled('placeholder');
        return $this;
    }

    /**
     * @param string|null $title This is the title of the app code block. When empty the app name will be used.
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        $this->propertyFilled('title');
        return $this;
    }

    /**
     * @param string|null $value This is the static contents of the code block. This is an alternative to the interactive content of the property 'interactive_content'. This value is displayed on the place holder 'as is'.
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        $this->propertyFilled('value');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Appcodeblocks\Collection\View|null $interactiveContent This is the interactive content as an alternative to the static content of the property 'value'. With this content the app can interact with the user. For more info see the documentation on Code blocks.
     * @return self
     */
    public function setInteractiveContent(?\JacobDeKeizer\Ccv\Models\Appcodeblocks\Collection\View $interactiveContent): self
    {
        $this->interactiveContent = $interactiveContent;
        $this->propertyFilled('interactiveContent');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Appcodeblocks\Child\Resource\ParentItem|null $parent App
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Appcodeblocks\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
