<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Settings\Child\Entity;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Periods implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int Day of the week: 1 = Monday, 2 = Tuesday, 3 = Wednesday, 4 = Thursday, 5 = Friday, 6 = Saturday, 7 = Sunday
     */
    private $dayoftheweek;

    /**
     * @var string Start time for the period
     */
    private $timefrom;

    /**
     * @var string End time for the period
     */
    private $timetill;

    /**
     * @var string Checkout type
     */
    private $checkouttype;

    /**
     * @var int Capacity (maxiumum orders) for the slots based on the takeout period
     */
    private $capacity;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int Day of the week: 1 = Monday, 2 = Tuesday, 3 = Wednesday, 4 = Thursday, 5 = Friday, 6 = Saturday, 7 = Sunday
     */
    public function getDayoftheweek(): int
    {
        return $this->dayoftheweek;
    }

    /**
     * @return string Start time for the period
     */
    public function getTimefrom(): string
    {
        return $this->timefrom;
    }

    /**
     * @return string End time for the period
     */
    public function getTimetill(): string
    {
        return $this->timetill;
    }

    /**
     * @return string Checkout type
     */
    public function getCheckouttype(): string
    {
        return $this->checkouttype;
    }

    /**
     * @return int Capacity (maxiumum orders) for the slots based on the takeout period
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $dayoftheweek Day of the week: 1 = Monday, 2 = Tuesday, 3 = Wednesday, 4 = Thursday, 5 = Friday, 6 = Saturday, 7 = Sunday
     * @return self
     */
    public function setDayoftheweek(int $dayoftheweek): self
    {
        $this->dayoftheweek = $dayoftheweek;
        $this->propertyFilled('dayoftheweek');
        return $this;
    }

    /**
     * @param string $timefrom Start time for the period
     * @return self
     */
    public function setTimefrom(string $timefrom): self
    {
        $this->timefrom = $timefrom;
        $this->propertyFilled('timefrom');
        return $this;
    }

    /**
     * @param string $timetill End time for the period
     * @return self
     */
    public function setTimetill(string $timetill): self
    {
        $this->timetill = $timetill;
        $this->propertyFilled('timetill');
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
     * @param int $capacity Capacity (maxiumum orders) for the slots based on the takeout period
     * @return self
     */
    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;
        $this->propertyFilled('capacity');
        return $this;
    }
}
