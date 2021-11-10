<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Apppsp\Paymethod\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Issuers implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string The ID of this issuer. When the consumer selects this issuser, this ID will be posts to /transactions
     */
    private string $id;

    /**
     * @var string The name of this issuer. This is the label displayed to the consumer.
     */
    private string $name;

    public static function fromArray(array $data): static
    {
        return self::createFromArray($data);
    }

    /**
     * @return string The ID of this issuer. When the consumer selects this issuser, this ID will be posts to /transactions
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string The name of this issuer. This is the label displayed to the consumer.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $id The ID of this issuer. When the consumer selects this issuser, this ID will be posts to /transactions
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name The name of this issuer. This is the label displayed to the consumer.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
