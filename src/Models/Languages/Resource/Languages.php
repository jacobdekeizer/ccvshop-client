<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Languages\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Languages implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Display label of the language.
     */
    private $label;

    /**
     * @var bool If active, it's visible in the webshop.
     */
    private $active;

    /**
     * @var string Languages on which this language is based.
     */
    private $baseLanguage;

    /**
     * @var string The iso two code of the language. If this a custom languege this will be an integer with 'c' as prefix.
     */
    private $isoCode;

    /**
     * @var string A href to the associated flag of this language. This will be used in the webshop.
     */
    private $flagIcon;

    /**
     * @var string Href to the collection of all languages.
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
     * @return string Display label of the language.
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return bool If active, it's visible in the webshop.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @return string Languages on which this language is based.
     */
    public function getBaseLanguage(): string
    {
        return $this->baseLanguage;
    }

    /**
     * @return string The iso two code of the language. If this a custom languege this will be an integer with 'c' as prefix.
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    /**
     * @return string A href to the associated flag of this language. This will be used in the webshop.
     */
    public function getFlagIcon(): string
    {
        return $this->flagIcon;
    }

    /**
     * @return string Href to the collection of all languages.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $label Display label of the language.
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;
        $this->propertyFilled('label');
        return $this;
    }

    /**
     * @param bool $active If active, it's visible in the webshop.
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        $this->propertyFilled('active');
        return $this;
    }

    /**
     * @param string $baseLanguage Languages on which this language is based.
     * @return self
     */
    public function setBaseLanguage(string $baseLanguage): self
    {
        $this->baseLanguage = $baseLanguage;
        $this->propertyFilled('baseLanguage');
        return $this;
    }

    /**
     * @param string $isoCode The iso two code of the language. If this a custom languege this will be an integer with 'c' as prefix.
     * @return self
     */
    public function setIsoCode(string $isoCode): self
    {
        $this->isoCode = $isoCode;
        $this->propertyFilled('isoCode');
        return $this;
    }

    /**
     * @param string $flagIcon A href to the associated flag of this language. This will be used in the webshop.
     * @return self
     */
    public function setFlagIcon(string $flagIcon): self
    {
        $this->flagIcon = $flagIcon;
        $this->propertyFilled('flagIcon');
        return $this;
    }

    /**
     * @param string $href Href to the collection of all languages.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
}
