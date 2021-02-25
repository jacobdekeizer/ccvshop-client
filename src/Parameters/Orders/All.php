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
     * @var int|null Specific order number of the order.
     */
    private $ordernumber;

    /**
     * @var int|null Specific order status of the orders in the result.
     */
    private $status;

    /**
     * @var bool|null Specific paid status of the orders in the result.
     */
    private $isPaid;

    /**
     * @var string|null Specific deliver date of the orders in the result.
     */
    private $takeOutDate;

    /**
     * @var string|null Minimal create date of the orders in the result.
     */
    private $minCreateDate;

    /**
     * @var string|null Maximal create date of the orders in the result.
     */
    private $maxCreateDate;

    /**
     * @var bool|null Toggles completed orders. Default: true.
     */
    private $isCompleted;

    /**
     * @var int|null Specific paymethod of the orders in the result. See resource /paymethods for the options.
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

    /**
     * @param int|null $ordernumber Specific order number of the order.
     * @return All
     */
    public function setOrdernumber(?int $ordernumber): All
    {
        $this->ordernumber = $ordernumber;
        return $this;
    }

    /**
     * @return int|null Specific order number of the order.
     */
    public function getOrdernumber(): ?int
    {
        return $this->ordernumber;
    }

    /**
     * @param int|null $status Specific order status of the orders in the result.
     * @return All
     */
    public function setStatus(?int $status): All
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int|null Specific order status of the orders in the result.
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param bool|null $isPaid Specific paid status of the orders in the result.
     * @return All
     */
    public function setIsPaid(?bool $isPaid): All
    {
        $this->isPaid = $isPaid;
        return $this;
    }

    /**
     * @return bool|null Specific paid status of the orders in the result.
     */
    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    /**
     * @param string|null $takeOutDate Specific deliver date of the orders in the result.
     * @return All
     */
    public function setTakeOutDate(?string $takeOutDate): All
    {
        $this->takeOutDate = $takeOutDate;
        return $this;
    }

    /**
     * @return string|null Specific deliver date of the orders in the result.
     */
    public function getTakeOutDate(): ?string
    {
        return $this->takeOutDate;
    }

    /**
     * @param string|null $minCreateDate Minimal create date of the orders in the result.
     * @return All
     */
    public function setMinCreateDate(?string $minCreateDate): All
    {
        $this->minCreateDate = $minCreateDate;
        return $this;
    }

    /**
     * @return string|null Minimal create date of the orders in the result.
     */
    public function getMinCreateDate(): ?string
    {
        return $this->minCreateDate;
    }

    /**
     * @param string|null $maxCreateDate Maximal create date of the orders in the result.
     * @return All
     */
    public function setMaxCreateDate(?string $maxCreateDate): All
    {
        $this->maxCreateDate = $maxCreateDate;
        return $this;
    }

    /**
     * @return string|null Maximal create date of the orders in the result.
     */
    public function getMaxCreateDate(): ?string
    {
        return $this->maxCreateDate;
    }

    /**
     * @param bool|null $isCompleted Toggles completed orders. Default: true.
     * @return All
     */
    public function setIsCompleted(?bool $isCompleted): All
    {
        $this->isCompleted = $isCompleted;
        return $this;
    }

    /**
     * @return bool|null Toggles completed orders. Default: true.
     */
    public function getIsCompleted(): ?bool
    {
        return $this->isCompleted;
    }

    /**
     * @param int|null $paymethodId Specific paymethod of the orders in the result.
     *                              See resource /paymethods for the options.
     * @return All
     */
    public function setPaymethodId(?int $paymethodId): All
    {
        $this->paymethodId = $paymethodId;
        return $this;
    }

    /**
     * @return int|null Specific paymethod of the orders in the result. See resource /paymethods for the options.
     */
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
