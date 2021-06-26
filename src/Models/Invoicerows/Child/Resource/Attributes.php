<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Invoicerows\Child\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Attributes implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Option name.
     */
    private $optionName;
    
    /**
     * @var string|null Value name.
     */
    private $valueName;
    
    /**
     * @var float|null Extra price added to the invoice row.
     */
    private $price;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string|null Option name.
     */
    public function getOptionName(): ?string
    {
        return $this->optionName;
    }
    
    /**
     * @return string|null Value name.
     */
    public function getValueName(): ?string
    {
        return $this->valueName;
    }
    
    /**
     * @return float|null Extra price added to the invoice row.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    
    /**
     * @param string|null $optionName Option name.
     * @return self
     */
    public function setOptionName(?string $optionName): self
    {
        $this->optionName = $optionName;
        $this->propertyFilled('optionName');
        return $this;
    }
    
    /**
     * @param string|null $valueName Value name.
     * @return self
     */
    public function setValueName(?string $valueName): self
    {
        $this->valueName = $valueName;
        $this->propertyFilled('valueName');
        return $this;
    }
    
    /**
     * @param float|null $price Extra price added to the invoice row.
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }
}
