<?php

namespace JacobDeKeizer\Ccv\Parameters\Orders;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All extends PaginatedList implements Parameter
{
    use FromArray;
    use SortableFields;

    /**
     * Specific order number of the order.
     * @var int|null
     */
    private $ordernumber;

    /**
     * Specific order status of the orders in the result.
     * @var int|null
     */
    private $status;

    /**
     * Specific paid status of the orders in the result.
     * @var bool|null
     */
    private $isPaid;

    /**
     * Specific deliver date of the orders in the result.
     * @var string|null
     */
    private $takeOutDate;

    /**
     * Minimal create date of the orders in the result.
     * @var string|null
     */
    private $minCreateDate;

    /**
     * Maximal create date of the orders in the result.
     * @var string|null
     */
    private $maxCreateDate;

    /**
     * Toggles completed orders. Default: true.
     * @var bool|null
     */
    private $isCompleted;

    /**
     * Specific paymethod of the orders in the result. See resource /paymethods for the options.
     * @var int|null
     */
    private $paymethodId;

    /**
     * @return All
     */
    public static function fromArray(array $data): Parameter
    {
        return self::createFromArray($data);
    }

    public static function fromUrl(?string $url): ?All
    {
        if ($url === null) {
            return null;
        }

        return self::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (parent::toBuilder())
            ->addOptionalParameter('ordernumber', $this->getOrdernumber())
            ->addOptionalParameter('status', $this->getStatus())
            ->addOptionalParameter('is_paid', $this->getIsPaid())
            ->addOptionalParameter('take_out_date', $this->getTakeOutDate())
            ->addOptionalParameter('min_create_date', $this->getMinCreateDate())
            ->addOptionalParameter('max_create_date', $this->getMaxCreateDate())
            ->addOptionalParameter('paymethod_id', $this->getPaymethodId())
            ->orderBy($this->getOrderBy());
    }

    public function setOrdernumber(?int $ordernumber): All
    {
        $this->ordernumber = $ordernumber;
        return $this;
    }

    public function getOrdernumber(): ?int
    {
        return $this->ordernumber;
    }

    public function setStatus(?int $status): All
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setIsPaid(?bool $isPaid): All
    {
        $this->isPaid = $isPaid;
        return $this;
    }

    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    public function setTakeOutDate(?string $takeOutDate): All
    {
        $this->takeOutDate = $takeOutDate;
        return $this;
    }

    public function getTakeOutDate(): ?string
    {
        return $this->takeOutDate;
    }

    public function setMinCreateDate(?string $minCreateDate): All
    {
        $this->minCreateDate = $minCreateDate;
        return $this;
    }

    public function getMinCreateDate(): ?string
    {
        return $this->minCreateDate;
    }

    public function setMaxCreateDate(?string $maxCreateDate): All
    {
        $this->maxCreateDate = $maxCreateDate;
        return $this;
    }

    public function getMaxCreateDate(): ?string
    {
        return $this->maxCreateDate;
    }

    public function setIsCompleted(?bool $isCompleted): All
    {
        $this->isCompleted = $isCompleted;
        return $this;
    }

    public function getIsCompleted(): ?bool
    {
        return $this->isCompleted;
    }

    public function setPaymethodId(?int $paymethodId): All
    {
        $this->paymethodId = $paymethodId;
        return $this;
    }

    public function getPaymethodId(): ?int
    {
        return $this->paymethodId;
    }

    public function orderByIdAsc(): All
    {
        $this->orderByField('id', true);
        return $this;
    }

    public function orderByIdDesc(): All
    {
        $this->orderByField('id', false);
        return $this;
    }

    public function orderByOrderNumberAsc(): All
    {
        $this->orderByField('ordernumber', true);
        return $this;
    }

    public function orderByOrderNumberDesc(): All
    {
        $this->orderByField('ordernumber', false);
        return $this;
    }

    public function orderByCreateDateAsc(): All
    {
        $this->orderByField('create_date', true);
        return $this;
    }

    public function orderByCreateDateDesc(): All
    {
        $this->orderByField('create_date', false);
        return $this;
    }

    public function orderByDeliverDateAsc(): All
    {
        $this->orderByField('deliver_date', true);
        return $this;
    }

    public function orderByDeliverDateDesc(): All
    {
        $this->orderByField('deliver_date', false);
        return $this;
    }
}
