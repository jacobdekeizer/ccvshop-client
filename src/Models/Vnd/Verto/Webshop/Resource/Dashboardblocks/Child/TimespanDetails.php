<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Dashboardblocks\Child;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class TimespanDetails implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string The period used by this timespan. If the timespan is 'none', it can be custom with specific dates.
     */
    private string $period;

    /**
     * @var string|null If timespane is 'none', this will indicate the specific date from.
     */
    private ?string $dateFrom;

    /**
     * @var string|null If timespane is 'none', this will indicate the specific date to.
     */
    private ?string $dateTo;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string The period used by this timespan. If the timespan is 'none', it can be custom with specific dates.
     */
    public function getPeriod(): string
    {
        return $this->period;
    }

    /**
     * @return string|null If timespane is 'none', this will indicate the specific date from.
     */
    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }

    /**
     * @return string|null If timespane is 'none', this will indicate the specific date to.
     */
    public function getDateTo(): ?string
    {
        return $this->dateTo;
    }

    /**
     * @param string $period The period used by this timespan. If the timespan is 'none', it can be custom with specific dates.
     * @return self
     */
    public function setPeriod(string $period): self
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @param string|null $dateFrom If timespane is 'none', this will indicate the specific date from.
     * @return self
     */
    public function setDateFrom(?string $dateFrom): self
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * @param string|null $dateTo If timespane is 'none', this will indicate the specific date to.
     * @return self
     */
    public function setDateTo(?string $dateTo): self
    {
        $this->dateTo = $dateTo;
        return $this;
    }
}
