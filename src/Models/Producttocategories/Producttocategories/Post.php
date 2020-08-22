<?php

namespace JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var int|null Unique product position. When the position isn't filled the highest position will be used.
     */
    private $position;

    /**
     * @var int Unique product id
     */
    private $productId;

    /**
     * @var int Unique category id
     */
    private $categoryId;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int|null Unique product position. When the position isn't filled the highest position will be used.
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return int Unique product id
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return int Unique category id
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int|null Unique product position. When the position isn't filled the highest position will be used.
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }

    /**
     * @param int Unique product id
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        $this->propertyFilled('productId');
        return $this;
    }

    /**
     * @param int Unique category id
     * @return self
     */
    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;
        $this->propertyFilled('categoryId');
        return $this;
    }
}
