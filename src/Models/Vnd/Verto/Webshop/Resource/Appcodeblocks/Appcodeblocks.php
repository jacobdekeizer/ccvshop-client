<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Appcodeblocks;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Appcodeblocks implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self.
     */
    private ?string $href;

    /**
     * @var int Unique id of the resource.
     */
    private int $id;

    /**
     * @var int Unique id of the app associated with this code block.
     */
    private int $appId;

    /**
     * @var string The placeholder describes the location where the code block will be placed in the webshop. header: value will be placed in the &lt;head&gt; of each frontend page. footer: value will be place just above the &lt;/body&gt; of each frontend page.
     */
    private string $placeholder;

    /**
     * @var string|null This is the title of the app code block. When empty the app name will be used.
     */
    private ?string $title;

    /**
     * @var string|null This is the static contents of the code block. This is an alternative to the interactive content of the property 'interactive_content'. This value is displayed on the place holder 'as is'.
     */
    private ?string $value;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\Collection\View\View|null This is the interactive content as an alternative to the static content of the property 'value'. With this content the app can interact with the user. For more info see the documentation on Code blocks.
     */
    private ?\JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\Collection\View\View $interactiveContent;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Appcodeblocks\Child\ParentItem|null App
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Appcodeblocks\Child\ParentItem $parent;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
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
     * @return \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\Collection\View\View|null This is the interactive content as an alternative to the static content of the property 'value'. With this content the app can interact with the user. For more info see the documentation on Code blocks.
     */
    public function getInteractiveContent(): ?\JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\Collection\View\View
    {
        return $this->interactiveContent;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Appcodeblocks\Child\ParentItem|null App
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Appcodeblocks\Child\ParentItem
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
        return $this;
    }

    /**
     * @param int $id Unique id of the resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int $appId Unique id of the app associated with this code block.
     * @return self
     */
    public function setAppId(int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @param string $placeholder The placeholder describes the location where the code block will be placed in the webshop. header: value will be placed in the &lt;head&gt; of each frontend page. footer: value will be place just above the &lt;/body&gt; of each frontend page.
     * @return self
     */
    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @param string|null $title This is the title of the app code block. When empty the app name will be used.
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string|null $value This is the static contents of the code block. This is an alternative to the interactive content of the property 'interactive_content'. This value is displayed on the place holder 'as is'.
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\Collection\View\View|null $interactiveContent This is the interactive content as an alternative to the static content of the property 'value'. With this content the app can interact with the user. For more info see the documentation on Code blocks.
     * @return self
     */
    public function setInteractiveContent(?\JacobDeKeizer\Ccv\Models\Internal\Entity\Appcodeblock\Collection\View\View $interactiveContent): self
    {
        $this->interactiveContent = $interactiveContent;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Appcodeblocks\Child\ParentItem|null $parent App
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Appcodeblocks\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
