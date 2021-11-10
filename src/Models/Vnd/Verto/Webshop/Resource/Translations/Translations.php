<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Translations;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Translations implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Unique identifier
     */
    private string $key;

    /**
     * @var string The translated value.
     */
    private string $value;

    /**
     * @var bool If this value differs from default.
     */
    private bool $customValue;

    public static function fromArray(array $data): static
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Unique identifier
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return string The translated value.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return bool If this value differs from default.
     */
    public function getCustomValue(): bool
    {
        return $this->customValue;
    }

    /**
     * @param string $key Unique identifier
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param string $value The translated value.
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param bool $customValue If this value differs from default.
     * @return self
     */
    public function setCustomValue(bool $customValue): self
    {
        $this->customValue = $customValue;
        return $this;
    }
}
