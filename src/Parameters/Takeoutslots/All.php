<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Takeoutslots;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
{
    use FromArray;

    /**
     * @var string|null End date for the timeslots in Y-m-d format. if no date is chosen all available timeslots will be returned.
     */
    private $date;

    /**
     * @var string|null The deliverytype, deliver or pickup. if no type is chosen both deliver and pickup slots are returned.
     */
    private $type;

    /**
     * @return self
     */
    public static function fromArray(array $data): self
    {
        return self::createFromArray($data);
    }

    /**
     * @return self
     */
    public static function fromUrl(?string $url): ?self
    {
        if ($url === null) {
            return null;        }

        return self::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (parent::toBuilder())
            ->addOptionalParameter('date', $this->date)
            ->addOptionalParameter('type', $this->type)
    }

    /**
     * @return string|null End date for the timeslots in Y-m-d format. if no date is chosen all available timeslots will be returned.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @return string|null The deliverytype, deliver or pickup. if no type is chosen both deliver and pickup slots are returned.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $date End date for the timeslots in Y-m-d format. if no date is chosen all available timeslots will be returned.
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @param string|null $type The deliverytype, deliver or pickup. if no type is chosen both deliver and pickup slots are returned.
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
