<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Settings\Settings;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Put implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string[]|null Array with available languages of the webshop. Putting this will change the active languages.
     */
    private $languages;
    
    /**
     * @var bool|null If the webshop is disabled a notice will be shown to visitors.
     */
    private $webshopEnabled;
    
    /**
     * @var string|null If the webshop is disabled a notice will be shown to visitors. This is the title of the notice.
     */
    private $webshopDisabledTitle;
    
    /**
     * @var string|null If the webshop is disabled a notice will be shown to visitors. This is the body of the notice.
     */
    private $webshopDisabledText;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string[]|null Array with available languages of the webshop. Putting this will change the active languages.
     */
    public function getLanguages(): ?array
    {
        return $this->languages;
    }
    
    /**
     * @return bool|null If the webshop is disabled a notice will be shown to visitors.
     */
    public function getWebshopEnabled(): ?bool
    {
        return $this->webshopEnabled;
    }
    
    /**
     * @return string|null If the webshop is disabled a notice will be shown to visitors. This is the title of the notice.
     */
    public function getWebshopDisabledTitle(): ?string
    {
        return $this->webshopDisabledTitle;
    }
    
    /**
     * @return string|null If the webshop is disabled a notice will be shown to visitors. This is the body of the notice.
     */
    public function getWebshopDisabledText(): ?string
    {
        return $this->webshopDisabledText;
    }
    
    /**
     * @param string[]|null $languages Array with available languages of the webshop. Putting this will change the active languages.
     * @return self
     */
    public function setLanguages(?array $languages): self
    {
        $this->languages = $languages;
        $this->propertyFilled('languages');
        return $this;
    }
    
    /**
     * @param bool|null $webshopEnabled If the webshop is disabled a notice will be shown to visitors.
     * @return self
     */
    public function setWebshopEnabled(?bool $webshopEnabled): self
    {
        $this->webshopEnabled = $webshopEnabled;
        $this->propertyFilled('webshopEnabled');
        return $this;
    }
    
    /**
     * @param string|null $webshopDisabledTitle If the webshop is disabled a notice will be shown to visitors. This is the title of the notice.
     * @return self
     */
    public function setWebshopDisabledTitle(?string $webshopDisabledTitle): self
    {
        $this->webshopDisabledTitle = $webshopDisabledTitle;
        $this->propertyFilled('webshopDisabledTitle');
        return $this;
    }
    
    /**
     * @param string|null $webshopDisabledText If the webshop is disabled a notice will be shown to visitors. This is the body of the notice.
     * @return self
     */
    public function setWebshopDisabledText(?string $webshopDisabledText): self
    {
        $this->webshopDisabledText = $webshopDisabledText;
        $this->propertyFilled('webshopDisabledText');
        return $this;
    }
}
