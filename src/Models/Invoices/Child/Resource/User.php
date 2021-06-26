<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Invoices\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class User implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var int|null Unique id of the user. If null, no user was associated with this invoice.
     */
    private $id;
    
    /**
     * @var float|null Percentage of discount this user received on this invoice. This discount is already calculated in the prices.
     */
    private $discountPercentage;
    
    /**
     * @var string|null Link to user associated with this invoice.
     */
    private $href;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return int|null Unique id of the user. If null, no user was associated with this invoice.
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    
    /**
     * @return float|null Percentage of discount this user received on this invoice. This discount is already calculated in the prices.
     */
    public function getDiscountPercentage(): ?float
    {
        return $this->discountPercentage;
    }
    
    /**
     * @return string|null Link to user associated with this invoice.
     */
    public function getHref(): ?string
    {
        return $this->href;
    }
    
    /**
     * @param int|null $id Unique id of the user. If null, no user was associated with this invoice.
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param float|null $discountPercentage Percentage of discount this user received on this invoice. This discount is already calculated in the prices.
     * @return self
     */
    public function setDiscountPercentage(?float $discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;
        $this->propertyFilled('discountPercentage');
        return $this;
    }
    
    /**
     * @param string|null $href Link to user associated with this invoice.
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
