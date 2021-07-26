<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Disabledpaymethods\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Disabledpaymethods implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int The id of the Payment Service Provider. This can be used to filter in the order resource.
     */
    private $id;

    /**
     * @var string The Payment method, can be a sub brand of the psp. This can be empty.
     */
    private $method;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int The id of the Payment Service Provider. This can be used to filter in the order resource.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string The Payment method, can be a sub brand of the psp. This can be empty.
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param int $id The id of the Payment Service Provider. This can be used to filter in the order resource.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param string $method The Payment method, can be a sub brand of the psp. This can be empty.
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;
        $this->propertyFilled('method');
        return $this;
    }
}
