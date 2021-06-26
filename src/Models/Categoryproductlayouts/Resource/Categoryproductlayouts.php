<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Categoryproductlayouts implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Link to self
     */
    private $href;
    
    /**
     * @var int|null Unique id of the resource
     */
    private $id;
    
    /**
     * @var string|null Layout name
     */
    private $name;
    
    /**
     * @var bool|null If this layout has the option to define colors
     */
    private $hasColorScheme;
    
    /**
     * @var bool|null If this layout has the option to show an order button
     */
    private $hasOrderButton;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Child\Resource\ParentItem|null Parent resource of this resource
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
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    
    /**
     * @return string|null Layout name
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @return bool|null If this layout has the option to define colors
     */
    public function getHasColorScheme(): ?bool
    {
        return $this->hasColorScheme;
    }
    
    /**
     * @return bool|null If this layout has the option to show an order button
     */
    public function getHasOrderButton(): ?bool
    {
        return $this->hasOrderButton;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Child\Resource\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Child\Resource\ParentItem
    {
        return $this->parent;
    }
    
    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
    
    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param string|null $name Layout name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param bool|null $hasColorScheme If this layout has the option to define colors
     * @return self
     */
    public function setHasColorScheme(?bool $hasColorScheme): self
    {
        $this->hasColorScheme = $hasColorScheme;
        $this->propertyFilled('hasColorScheme');
        return $this;
    }
    
    /**
     * @param bool|null $hasOrderButton If this layout has the option to show an order button
     * @return self
     */
    public function setHasOrderButton(?bool $hasOrderButton): self
    {
        $this->hasOrderButton = $hasOrderButton;
        $this->propertyFilled('hasOrderButton');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Child\Resource\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Categoryproductlayouts\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
