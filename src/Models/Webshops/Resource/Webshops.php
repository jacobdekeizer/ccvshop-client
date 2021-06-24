<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Webshops\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Webshops implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self.
     */
    private $href;

    /**
     * @var int Unique id of the resource.
     */
    private $id;

    /**
     * @var string|null The webshop name.
     */
    private $name;

    /**
     * @var bool|null Indicates if this is a webshop or a multishop system. Multiple webshops can be connected to one multishop system.
     */
    private $isMultishopSystem;

    /**
     * @var int Maximum limit of products that this shop can have. This can change if the webshop's subscription changes. If the value is -1, it's infinite.
     */
    private $productLimit;

    /**
     * @var int The quantity of product that can still be added. Depends on product_limit and the quantity of active products. If the value is -1, it's infinite.
     */
    private $productLimitLeft;

    /**
     * @var string The root of the API for this webshop. Do note: other credentials will be needed to access this API.
     */
    private $apiRoot;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Webshops\Child\Resource\Webshops|null Collection of webshops.
     */
    private $webshops;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Webshops\Child\Resource\ParentItem|null Parent resource of this resource.
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
     * @return string Link to self.
     */
    public function getHref(): string
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
     * @return string|null The webshop name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return bool|null Indicates if this is a webshop or a multishop system. Multiple webshops can be connected to one multishop system.
     */
    public function getIsMultishopSystem(): ?bool
    {
        return $this->isMultishopSystem;
    }

    /**
     * @return int Maximum limit of products that this shop can have. This can change if the webshop's subscription changes. If the value is -1, it's infinite.
     */
    public function getProductLimit(): int
    {
        return $this->productLimit;
    }

    /**
     * @return int The quantity of product that can still be added. Depends on product_limit and the quantity of active products. If the value is -1, it's infinite.
     */
    public function getProductLimitLeft(): int
    {
        return $this->productLimitLeft;
    }

    /**
     * @return string The root of the API for this webshop. Do note: other credentials will be needed to access this API.
     */
    public function getApiRoot(): string
    {
        return $this->apiRoot;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Webshops\Child\Resource\Webshops|null Collection of webshops.
     */
    public function getWebshops(): ?\JacobDeKeizer\Ccv\Models\Webshops\Child\Resource\Webshops
    {
        return $this->webshops;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Webshops\Child\Resource\ParentItem|null Parent resource of this resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Webshops\Child\Resource\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string $href Link to self.
     * @return self
     */
    public function setHref(string $href): self
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
     * @param string|null $name The webshop name.
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param bool|null $isMultishopSystem Indicates if this is a webshop or a multishop system. Multiple webshops can be connected to one multishop system.
     * @return self
     */
    public function setIsMultishopSystem(?bool $isMultishopSystem): self
    {
        $this->isMultishopSystem = $isMultishopSystem;
        $this->propertyFilled('isMultishopSystem');
        return $this;
    }

    /**
     * @param int $productLimit Maximum limit of products that this shop can have. This can change if the webshop's subscription changes. If the value is -1, it's infinite.
     * @return self
     */
    public function setProductLimit(int $productLimit): self
    {
        $this->productLimit = $productLimit;
        $this->propertyFilled('productLimit');
        return $this;
    }

    /**
     * @param int $productLimitLeft The quantity of product that can still be added. Depends on product_limit and the quantity of active products. If the value is -1, it's infinite.
     * @return self
     */
    public function setProductLimitLeft(int $productLimitLeft): self
    {
        $this->productLimitLeft = $productLimitLeft;
        $this->propertyFilled('productLimitLeft');
        return $this;
    }

    /**
     * @param string $apiRoot The root of the API for this webshop. Do note: other credentials will be needed to access this API.
     * @return self
     */
    public function setApiRoot(string $apiRoot): self
    {
        $this->apiRoot = $apiRoot;
        $this->propertyFilled('apiRoot');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Webshops\Child\Resource\Webshops|null $webshops Collection of webshops.
     * @return self
     */
    public function setWebshops(?\JacobDeKeizer\Ccv\Models\Webshops\Child\Resource\Webshops $webshops): self
    {
        $this->webshops = $webshops;
        $this->propertyFilled('webshops');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Webshops\Child\Resource\ParentItem|null $parent Parent resource of this resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Webshops\Child\Resource\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
}
