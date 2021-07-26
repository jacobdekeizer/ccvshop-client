<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Producttopropertygroups\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Producttopropertygroups implements Model
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
     * @var int|null Unique id of the product
     */
    private $productId;

    /**
     * @var int|null Unique id of the product property group
     */
    private $productPropertyGroupId;

    /**
     * @var string|null Link to product
     */
    private $productHref;

    /**
     * @var string|null Link to Product Property Group
     */
    private $productPropertyGroupHref;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Child\Resource\Values|null Product values
     */
    private $values;

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
     * @return int|null Unique id of the product
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return int|null Unique id of the product property group
     */
    public function getProductPropertyGroupId(): ?int
    {
        return $this->productPropertyGroupId;
    }

    /**
     * @return string|null Link to product
     */
    public function getProductHref(): ?string
    {
        return $this->productHref;
    }

    /**
     * @return string|null Link to Product Property Group
     */
    public function getProductPropertyGroupHref(): ?string
    {
        return $this->productPropertyGroupHref;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Child\Resource\Values|null Product values
     */
    public function getValues(): ?\JacobDeKeizer\Ccv\Models\Producttopropertygroups\Child\Resource\Values
    {
        return $this->values;
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
     * @param int|null $productPropertyGroupId Unique id of the product property group
     * @return self
     */
    public function setProductPropertyGroupId(?int $productPropertyGroupId): self
    {
        $this->productPropertyGroupId = $productPropertyGroupId;
        $this->propertyFilled('productPropertyGroupId');
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
     * @param string|null $productPropertyGroupHref Link to Product Property Group
     * @return self
     */
    public function setProductPropertyGroupHref(?string $productPropertyGroupHref): self
    {
        $this->productPropertyGroupHref = $productPropertyGroupHref;
        $this->propertyFilled('productPropertyGroupHref');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Producttopropertygroups\Child\Resource\Values|null $values Product values
     * @return self
     */
    public function setValues(?\JacobDeKeizer\Ccv\Models\Producttopropertygroups\Child\Resource\Values $values): self
    {
        $this->values = $values;
        $this->propertyFilled('values');
        return $this;
    }
}
