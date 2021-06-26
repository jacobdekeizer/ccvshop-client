<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Translations\Child\Translations;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Translations implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Unique identifier of the translation.
     */
    private $key;
    
    /**
     * @var string The translated value for the current accept language. If an value is empty it will be restored to default.
     */
    private $value;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string Unique identifier of the translation.
     */
    public function getKey(): string
    {
        return $this->key;
    }
    
    /**
     * @return string The translated value for the current accept language. If an value is empty it will be restored to default.
     */
    public function getValue(): string
    {
        return $this->value;
    }
    
    /**
     * @param string $key Unique identifier of the translation.
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->key = $key;
        $this->propertyFilled('key');
        return $this;
    }
    
    /**
     * @param string $value The translated value for the current accept language. If an value is empty it will be restored to default.
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        $this->propertyFilled('value');
        return $this;
    }
}
