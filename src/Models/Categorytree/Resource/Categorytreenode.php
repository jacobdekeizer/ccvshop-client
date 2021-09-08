<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Categorytree\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Categorytreenode implements Model
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
     * @var string|null Category name
     */
    private $name;

    /**
     * @var string|null Category description
     */
    private $description;

    /**
     * @var int|null Category position
     */
    private $position;

    /**
     * @var bool|null Category visible on website
     */
    private $showOnWebsite;

    /**
     * @var string|null Deeplink to this resource
     */
    private $deeplink;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytreenode[]|null Array with child categories. Child categories have the same properies as root categories
     */
    private $children;

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
     * @return string|null Category name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null Category description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return int|null Category position
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return bool|null Category visible on website
     */
    public function getShowOnWebsite(): ?bool
    {
        return $this->showOnWebsite;
    }

    /**
     * @return string|null Deeplink to this resource
     */
    public function getDeeplink(): ?string
    {
        return $this->deeplink;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytreenode[]|null Array with child categories. Child categories have the same properies as root categories
     */
    public function getChildren(): ?array
    {
        return $this->children;
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
     * @param string|null $name Category name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string|null $description Category description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        $this->propertyFilled('description');
        return $this;
    }

    /**
     * @param int|null $position Category position
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }

    /**
     * @param bool|null $showOnWebsite Category visible on website
     * @return self
     */
    public function setShowOnWebsite(?bool $showOnWebsite): self
    {
        $this->showOnWebsite = $showOnWebsite;
        $this->propertyFilled('showOnWebsite');
        return $this;
    }

    /**
     * @param string|null $deeplink Deeplink to this resource
     * @return self
     */
    public function setDeeplink(?string $deeplink): self
    {
        $this->deeplink = $deeplink;
        $this->propertyFilled('deeplink');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytreenode[]|null $children Array with child categories. Child categories have the same properies as root categories
     * @return self
     */
    public function setChildren(?array $children): self
    {
        $this->children = $children;
        $this->propertyFilled('children');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'children') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Categorytree\Resource\Categorytreenode::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
