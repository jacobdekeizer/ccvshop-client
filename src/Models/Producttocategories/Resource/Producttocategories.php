<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Producttocategories\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Producttocategories implements Model
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
     * @var int|null Position of product in category
     */
    private $position;
    
    /**
     * @var int|null Unique id of the product
     */
    private $productId;
    
    /**
     * @var int|null Unique id of the category
     */
    private $categoryId;
    
    /**
     * @var string|null Link to product
     */
    private $productHref;
    
    /**
     * @var string|null Link to category
     */
    private $categoryHref;
    
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
     * @return int|null Position of product in category
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    
    /**
     * @return int|null Unique id of the product
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }
    
    /**
     * @return int|null Unique id of the category
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }
    
    /**
     * @return string|null Link to product
     */
    public function getProductHref(): ?string
    {
        return $this->productHref;
    }
    
    /**
     * @return string|null Link to category
     */
    public function getCategoryHref(): ?string
    {
        return $this->categoryHref;
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
     * @param int|null $position Position of product in category
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }
    
    /**
     * @param int|null $productId Unique id of the product
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        $this->propertyFilled('productId');
        return $this;
    }
    
    /**
     * @param int|null $categoryId Unique id of the category
     * @return self
     */
    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;
        $this->propertyFilled('categoryId');
        return $this;
    }
    
    /**
     * @param string|null $productHref Link to product
     * @return self
     */
    public function setProductHref(?string $productHref): self
    {
        $this->productHref = $productHref;
        $this->propertyFilled('productHref');
        return $this;
    }
    
    /**
     * @param string|null $categoryHref Link to category
     * @return self
     */
    public function setCategoryHref(?string $categoryHref): self
    {
        $this->categoryHref = $categoryHref;
        $this->propertyFilled('categoryHref');
        return $this;
    }
}
