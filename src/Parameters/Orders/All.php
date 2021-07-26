<?php

declare(strict_types=1);

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
    private $deliverDate;

    /**
     * @var string|null Specific take out date of the orders in the result.
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
     * @var int|null Specific transaction id of the order.
     */
    private $transactionId;

    /**
     * @return self
     */
    public static function fromArray(array $data): Parameter
    {
        return self::createFromArray($data);
    }

    /**
     * @return self
     */
    public static function fromUrl(?string $url): ?self
    {
        if ($url === null) {
            return null;
        }

        return self::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (parent::toBuilder())
            ->addOptionalParameter('ordernumber', $this->ordernumber)
            ->addOptionalParameter('status', $this->status)
            ->addOptionalParameter('isPaid', $this->isPaid)
            ->addOptionalParameter('deliverDate', $this->deliverDate)
            ->addOptionalParameter('takeOutDate', $this->takeOutDate)
            ->addOptionalParameter('minCreateDate', $this->minCreateDate)
            ->addOptionalParameter('maxCreateDate', $this->maxCreateDate)
            ->addOptionalParameter('isCompleted', $this->isCompleted)
            ->addOptionalParameter('paymethodId', $this->paymethodId)
            ->addOptionalParameter('transactionId', $this->transactionId)
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return int|null Specific order number of the order.
     */
    public function getOrdernumber(): ?int
    {
        return $this->ordernumber;
    }

    /**
     * @return int|null Specific order status of the orders in the result.
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return bool|null Specific paid status of the orders in the result.
     */
    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    /**
     * @return string|null Specific deliver date of the orders in the result.
     */
    public function getDeliverDate(): ?string
    {
        return $this->deliverDate;
    }

    /**
     * @return string|null Specific take out date of the orders in the result.
     */
    public function getTakeOutDate(): ?string
    {
        return $this->takeOutDate;
    }

    /**
     * @return string|null Minimal create date of the orders in the result.
     */
    public function getMinCreateDate(): ?string
    {
        return $this->minCreateDate;
    }

    /**
     * @return string|null Maximal create date of the orders in the result.
     */
    public function getMaxCreateDate(): ?string
    {
        return $this->maxCreateDate;
    }

    /**
     * @return bool|null Toggles completed orders. Default: true.
     */
    public function getIsCompleted(): ?bool
    {
        return $this->isCompleted;
    }

    /**
     * @return int|null Specific paymethod of the orders in the result. See resource /paymethods for the options.
     */
    public function getPaymethodId(): ?int
    {
        return $this->paymethodId;
    }

    /**
     * @return int|null Specific transaction id of the order.
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }

    /**
     * @param int|null $ordernumber Specific order number of the order.
     * @return self
     */
    public function setOrdernumber(?int $ordernumber): self
    {
        $this->ordernumber = $ordernumber;
        return $this;
    }

    /**
     * @param int|null $status Specific order status of the orders in the result.
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param bool|null $isPaid Specific paid status of the orders in the result.
     * @return self
     */
    public function setIsPaid(?bool $isPaid): self
    {
        $this->isPaid = $isPaid;
        return $this;
    }

    /**
     * @param string|null $deliverDate Specific deliver date of the orders in the result.
     * @return self
     */
    public function setDeliverDate(?string $deliverDate): self
    {
        $this->deliverDate = $deliverDate;
        return $this;
    }

    /**
     * @param string|null $takeOutDate Specific take out date of the orders in the result.
     * @return self
     */
    public function setTakeOutDate(?string $takeOutDate): self
    {
        $this->takeOutDate = $takeOutDate;
        return $this;
    }

    /**
     * @param string|null $minCreateDate Minimal create date of the orders in the result.
     * @return self
     */
    public function setMinCreateDate(?string $minCreateDate): self
    {
        $this->minCreateDate = $minCreateDate;
        return $this;
    }

    /**
     * @param string|null $maxCreateDate Maximal create date of the orders in the result.
     * @return self
     */
    public function setMaxCreateDate(?string $maxCreateDate): self
    {
        $this->maxCreateDate = $maxCreateDate;
        return $this;
    }

    /**
     * @param bool|null $isCompleted Toggles completed orders. Default: true.
     * @return self
     */
    public function setIsCompleted(?bool $isCompleted): self
    {
        $this->isCompleted = $isCompleted;
        return $this;
    }

    /**
     * @param int|null $paymethodId Specific paymethod of the orders in the result. See resource /paymethods for the options.
     * @return self
     */
    public function setPaymethodId(?int $paymethodId): self
    {
        $this->paymethodId = $paymethodId;
        return $this;
    }

    /**
     * @param int|null $transactionId Specific transaction id of the order.
     * @return self
     */
    public function setTransactionId(?int $transactionId): self
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    public function orderByIdAsc(): self
    {
        $this->orderByField('id', true);
        return $this;
    }

    public function orderByIdDesc(): self
    {
        $this->orderByField('id', false);
        return $this;
    }

    public function orderByOrdernumberAsc(): self
    {
        $this->orderByField('ordernumber', true);
        return $this;
    }

    public function orderByOrdernumberDesc(): self
    {
        $this->orderByField('ordernumber', false);
        return $this;
    }

    public function orderByCreateDateAsc(): self
    {
        $this->orderByField('create_date', true);
        return $this;
    }

    public function orderByCreateDateDesc(): self
    {
        $this->orderByField('create_date', false);
        return $this;
    }

    public function orderByDeliverDateAsc(): self
    {
        $this->orderByField('deliver_date', true);
        return $this;
    }

    public function orderByDeliverDateDesc(): self
    {
        $this->orderByField('deliver_date', false);
        return $this;
    }
}
