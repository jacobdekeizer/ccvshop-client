<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Takeoutslots\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Takeoutslots implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Unique id of the resource
     */
    private $id;

    /**
     * @var int Slot Capacity
     */
    private $capacity;

    /**
     * @var string Start datetime
     */
    private $datetimefrom;

    /**
     * @var string End datetime
     */
    private $datetimetill;

    /**
     * @var string Checkout type
     */
    private $checkouttype;

    /**
     * @var int Number of reservations
     */
    private $countReservation;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Unique id of the resource
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int Slot Capacity
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @return string Start datetime
     */
    public function getDatetimefrom(): string
    {
        return $this->datetimefrom;
    }

    /**
     * @return string End datetime
     */
    public function getDatetimetill(): string
    {
        return $this->datetimetill;
    }

    /**
     * @return string Checkout type
     */
    public function getCheckouttype(): string
    {
        return $this->checkouttype;
    }

    /**
     * @return int Number of reservations
     */
    public function getCountReservation(): int
    {
        return $this->countReservation;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int $id Unique id of the resource
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param int $capacity Slot Capacity
     * @return self
     */
    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;
        $this->propertyFilled('capacity');
        return $this;
    }

    /**
     * @param string $datetimefrom Start datetime
     * @return self
     */
    public function setDatetimefrom(string $datetimefrom): self
    {
        $this->datetimefrom = $datetimefrom;
        $this->propertyFilled('datetimefrom');
        return $this;
    }

    /**
     * @param string $datetimetill End datetime
     * @return self
     */
    public function setDatetimetill(string $datetimetill): self
    {
        $this->datetimetill = $datetimetill;
        $this->propertyFilled('datetimetill');
        return $this;
    }

    /**
     * @param string $checkouttype Checkout type
     * @return self
     */
    public function setCheckouttype(string $checkouttype): self
    {
        $this->checkouttype = $checkouttype;
        $this->propertyFilled('checkouttype');
        return $this;
    }

    /**
     * @param int $countReservation Number of reservations
     * @return self
     */
    public function setCountReservation(int $countReservation): self
    {
        $this->countReservation = $countReservation;
        $this->propertyFilled('countReservation');
        return $this;
    }
}
