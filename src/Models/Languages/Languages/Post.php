<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Languages\Languages;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Display label of the language.
     */
    private $label;

    /**
     * @var string Languages on which this language is based.
     */
    private $baseLanguage;

    /**
     * @var string A href to the associated flag of this language. This will be used in the webshop.
     */
    private $flagIcon;

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
     * @return string Languages on which this language is based.
     */
    public function getBaseLanguage(): string
    {
        return $this->baseLanguage;
    }

    /**
     * @return string A href to the associated flag of this language. This will be used in the webshop.
     */
    public function getFlagIcon(): string
    {
        return $this->flagIcon;
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
     * @param string $flagIcon A href to the associated flag of this language. This will be used in the webshop.
     * @return self
     */
    public function setFlagIcon(string $flagIcon): self
    {
        $this->flagIcon = $flagIcon;
        $this->propertyFilled('flagIcon');
        return $this;
    }
}
