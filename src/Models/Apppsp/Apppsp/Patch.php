<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Apppsp\Apppsp;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null The name of the PSP. This is how the App PSP is identified
     */
    private $name;
    
    /**
     * @var string|null The description will be shown to the merchant above the settings in the webshop's backend.
     */
    private $description;
    
    /**
     * @var string|null This is an icon of the PSP that will be shown to the merchant above the settings in the webshop's backend. This is optional and may be empty.
     */
    private $icon;
    
    /**
     * @var string|null This is the endpoint of the PSP. All API calls made from the webshop will be made to this endpoint.
     */
    private $endpoint;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Paymethod[]|null Array of paymethods of the psp.
     */
    private $paymethods;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string|null The name of the PSP. This is how the App PSP is identified
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * @return string|null The description will be shown to the merchant above the settings in the webshop's backend.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    /**
     * @return string|null This is an icon of the PSP that will be shown to the merchant above the settings in the webshop's backend. This is optional and may be empty.
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }
    
    /**
     * @return string|null This is the endpoint of the PSP. All API calls made from the webshop will be made to this endpoint.
     */
    public function getEndpoint(): ?string
    {
        return $this->endpoint;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Paymethod[]|null Array of paymethods of the psp.
     */
    public function getPaymethods(): ?array
    {
        return $this->paymethods;
    }
    
    /**
     * @param string|null $name The name of the PSP. This is how the App PSP is identified
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
    
    /**
     * @param string|null $description The description will be shown to the merchant above the settings in the webshop's backend.
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        $this->propertyFilled('description');
        return $this;
    }
    
    /**
     * @param string|null $icon This is an icon of the PSP that will be shown to the merchant above the settings in the webshop's backend. This is optional and may be empty.
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        $this->propertyFilled('icon');
        return $this;
    }
    
    /**
     * @param string|null $endpoint This is the endpoint of the PSP. All API calls made from the webshop will be made to this endpoint.
     * @return self
     */
    public function setEndpoint(?string $endpoint): self
    {
        $this->endpoint = $endpoint;
        $this->propertyFilled('endpoint');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Paymethod[]|null $paymethods Array of paymethods of the psp.
     * @return self
     */
    public function setPaymethods(?array $paymethods): self
    {
        $this->paymethods = $paymethods;
        $this->propertyFilled('paymethods');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'paymethods') {
            $items = [];
            
            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Paymethod::fromArray($item);
            }
            
            return $items;
        }
        
        return $value;
    }
}
