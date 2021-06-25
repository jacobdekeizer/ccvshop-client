<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Disabledpaymethods\Child\Disabledpaymethods;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class DisabledPaymethods implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var int The id of the Payment Service Provider. See the resource /paymethods for options.
     */
    private $id;
    
    /**
     * @var string The Payment method, can be a sub brand of the psp. This can be empty. See the resource /paymethods for options.
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
     * @return int The id of the Payment Service Provider. See the resource /paymethods for options.
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @return string The Payment method, can be a sub brand of the psp. This can be empty. See the resource /paymethods for options.
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    
    /**
     * @param int $id The id of the Payment Service Provider. See the resource /paymethods for options.
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }
    
    /**
     * @param string $method The Payment method, can be a sub brand of the psp. This can be empty. See the resource /paymethods for options.
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;
        $this->propertyFilled('method');
        return $this;
    }
}
