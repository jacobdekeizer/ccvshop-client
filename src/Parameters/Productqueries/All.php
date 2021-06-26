<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Productqueries;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All extends PaginatedList implements Parameter
{
    use FromArray;
    
    /**
     * @var string|null Number of the product.
     */
    private $productnumber;
    
    /**
     * @var string|null EAN (European Article Numbering) of the product.
     */
    private $eannumber;
    
    /**
     * @var string|null MPN (Manufacturer Part Number) of the product.
     */
    private $mpnnumber;
    
    /**
     * @var string|null SKU (Stock Keeping Unit ) of the product.
     */
    private $skunumber;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Parameter
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return self
     */
    public static function fromUrl(?string $url): ?self
    {
        if ($url === null) {
            return null;
        }
        
        return self::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }
    
    public function toBuilder(): QueryParameterBuilder
    {
        return (parent::toBuilder())
            ->addOptionalParameter('productnumber', $this->productnumber)
            ->addOptionalParameter('eannumber', $this->eannumber)
            ->addOptionalParameter('mpnnumber', $this->mpnnumber)
            ->addOptionalParameter('skunumber', $this->skunumber);
    }
    
    /**
     * @return string|null Number of the product.
     */
    public function getProductnumber(): ?string
    {
        return $this->productnumber;
    }
    
    /**
     * @return string|null EAN (European Article Numbering) of the product.
     */
    public function getEannumber(): ?string
    {
        return $this->eannumber;
    }
    
    /**
     * @return string|null MPN (Manufacturer Part Number) of the product.
     */
    public function getMpnnumber(): ?string
    {
        return $this->mpnnumber;
    }
    
    /**
     * @return string|null SKU (Stock Keeping Unit ) of the product.
     */
    public function getSkunumber(): ?string
    {
        return $this->skunumber;
    }
    
    /**
     * @param string|null $productnumber Number of the product.
     * @return self
     */
    public function setProductnumber(?string $productnumber): self
    {
        $this->productnumber = $productnumber;
        return $this;
    }
    
    /**
     * @param string|null $eannumber EAN (European Article Numbering) of the product.
     * @return self
     */
    public function setEannumber(?string $eannumber): self
    {
        $this->eannumber = $eannumber;
        return $this;
    }
    
    /**
     * @param string|null $mpnnumber MPN (Manufacturer Part Number) of the product.
     * @return self
     */
    public function setMpnnumber(?string $mpnnumber): self
    {
        $this->mpnnumber = $mpnnumber;
        return $this;
    }
    
    /**
     * @param string|null $skunumber SKU (Stock Keeping Unit ) of the product.
     * @return self
     */
    public function setSkunumber(?string $skunumber): self
    {
        $this->skunumber = $skunumber;
        return $this;
    }
}
