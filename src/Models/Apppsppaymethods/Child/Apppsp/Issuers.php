<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Apppsppaymethods\Child\Apppsp;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Issuers implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string The ID of this issuer. When the consumer selects this issuser, this ID will be posts to /transactions
     */
    private $id;

    /**
     * @var string The name of this issuer. This is the label displayed to the consumer.
     */
    private $name;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
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
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $name The name of this issuer. This is the label displayed to the consumer.
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }
}
