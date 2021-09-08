<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Settings\Entity;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Takeoutsettings implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var int|null Takeout slot interval (in minutes)
     */
    private $deliveryinterval;

    /**
     * @var int|null Order in advance (in days). This determines the last available slot (current date and time + orderinadvance)
     */
    private $orderinadvance;

    /**
     * @var int|null Preparationtime (in minutes). This is used to determine the first available slot (current date and time + preperation time).
     */
    private $preparationtime;

    /**
     * @var bool|null Allow the customer to choose a takeout slot
     */
    private $allowselection;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\Periods[]|null Time periods. These are used to generate slots.
     */
    private $periods;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\Excludes[]|null Exclusions from normal time periods. No slots will be generated for these excluded dates and times
     */
    private $excludes;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int|null Takeout slot interval (in minutes)
     */
    public function getDeliveryinterval(): ?int
    {
        return $this->deliveryinterval;
    }

    /**
     * @return int|null Order in advance (in days). This determines the last available slot (current date and time + orderinadvance)
     */
    public function getOrderinadvance(): ?int
    {
        return $this->orderinadvance;
    }

    /**
     * @return int|null Preparationtime (in minutes). This is used to determine the first available slot (current date and time + preperation time).
     */
    public function getPreparationtime(): ?int
    {
        return $this->preparationtime;
    }

    /**
     * @return bool|null Allow the customer to choose a takeout slot
     */
    public function getAllowselection(): ?bool
    {
        return $this->allowselection;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\Periods[]|null Time periods. These are used to generate slots.
     */
    public function getPeriods(): ?array
    {
        return $this->periods;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\Excludes[]|null Exclusions from normal time periods. No slots will be generated for these excluded dates and times
     */
    public function getExcludes(): ?array
    {
        return $this->excludes;
    }

    /**
     * @param int|null $deliveryinterval Takeout slot interval (in minutes)
     * @return self
     */
    public function setDeliveryinterval(?int $deliveryinterval): self
    {
        $this->deliveryinterval = $deliveryinterval;
        $this->propertyFilled('deliveryinterval');
        return $this;
    }

    /**
     * @param int|null $orderinadvance Order in advance (in days). This determines the last available slot (current date and time + orderinadvance)
     * @return self
     */
    public function setOrderinadvance(?int $orderinadvance): self
    {
        $this->orderinadvance = $orderinadvance;
        $this->propertyFilled('orderinadvance');
        return $this;
    }

    /**
     * @param int|null $preparationtime Preparationtime (in minutes). This is used to determine the first available slot (current date and time + preperation time).
     * @return self
     */
    public function setPreparationtime(?int $preparationtime): self
    {
        $this->preparationtime = $preparationtime;
        $this->propertyFilled('preparationtime');
        return $this;
    }

    /**
     * @param bool|null $allowselection Allow the customer to choose a takeout slot
     * @return self
     */
    public function setAllowselection(?bool $allowselection): self
    {
        $this->allowselection = $allowselection;
        $this->propertyFilled('allowselection');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\Periods[]|null $periods Time periods. These are used to generate slots.
     * @return self
     */
    public function setPeriods(?array $periods): self
    {
        $this->periods = $periods;
        $this->propertyFilled('periods');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\Excludes[]|null $excludes Exclusions from normal time periods. No slots will be generated for these excluded dates and times
     * @return self
     */
    public function setExcludes(?array $excludes): self
    {
        $this->excludes = $excludes;
        $this->propertyFilled('excludes');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'periods') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\Periods::fromArray($item);
            }

            return $items;
        }

        if ($key === 'excludes') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\Excludes::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
