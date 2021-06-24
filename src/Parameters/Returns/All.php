<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Returns;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
{
    use FromArray;
    use SortableFields;

    /**
     * @var int|null Specific return number of an return.
     */
    private $returnnumber;

    /**
     * @var string|null Specific return number, combined with the return number prefix of a return.
     */
    private $returnnumberFull;

    /**
     * @var int|null Specific order number associated with a return.
     */
    private $ordernumber;

    /**
     * @var string|null Specific order number, combined with the order number prefix of a return.
     */
    private $ordernumberFull;

    /**
     * @var string|null Specific rma status of the returns in the result. (paid, unpaid, reimbursed).
     */
    private $status;

    /**
     * @var string|null Minimal create date of the returns in the result.
     */
    private $minCreateDate;

    /**
     * @var string|null Maximal create date of the returns in the result.
     */
    private $maxCreateDate;

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
            ->addOptionalParameter('returnnumber', $this->returnnumber)
            ->addOptionalParameter('returnnumberFull', $this->returnnumberFull)
            ->addOptionalParameter('ordernumber', $this->ordernumber)
            ->addOptionalParameter('ordernumberFull', $this->ordernumberFull)
            ->addOptionalParameter('status', $this->status)
            ->addOptionalParameter('minCreateDate', $this->minCreateDate)
            ->addOptionalParameter('maxCreateDate', $this->maxCreateDate)
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return int|null Specific return number of an return.
     */
    public function getReturnnumber(): ?int
    {
        return $this->returnnumber;
    }

    /**
     * @return string|null Specific return number, combined with the return number prefix of a return.
     */
    public function getReturnnumberFull(): ?string
    {
        return $this->returnnumberFull;
    }

    /**
     * @return int|null Specific order number associated with a return.
     */
    public function getOrdernumber(): ?int
    {
        return $this->ordernumber;
    }

    /**
     * @return string|null Specific order number, combined with the order number prefix of a return.
     */
    public function getOrdernumberFull(): ?string
    {
        return $this->ordernumberFull;
    }

    /**
     * @return string|null Specific rma status of the returns in the result. (paid, unpaid, reimbursed).
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null Minimal create date of the returns in the result.
     */
    public function getMinCreateDate(): ?string
    {
        return $this->minCreateDate;
    }

    /**
     * @return string|null Maximal create date of the returns in the result.
     */
    public function getMaxCreateDate(): ?string
    {
        return $this->maxCreateDate;
    }

    /**
     * @param int|null $returnnumber Specific return number of an return.
     * @return self
     */
    public function setReturnnumber(?int $returnnumber): self
    {
        $this->returnnumber = $returnnumber;
        return $this;
    }

    /**
     * @param string|null $returnnumberFull Specific return number, combined with the return number prefix of a return.
     * @return self
     */
    public function setReturnnumberFull(?string $returnnumberFull): self
    {
        $this->returnnumberFull = $returnnumberFull;
        return $this;
    }

    /**
     * @param int|null $ordernumber Specific order number associated with a return.
     * @return self
     */
    public function setOrdernumber(?int $ordernumber): self
    {
        $this->ordernumber = $ordernumber;
        return $this;
    }

    /**
     * @param string|null $ordernumberFull Specific order number, combined with the order number prefix of a return.
     * @return self
     */
    public function setOrdernumberFull(?string $ordernumberFull): self
    {
        $this->ordernumberFull = $ordernumberFull;
        return $this;
    }

    /**
     * @param string|null $status Specific rma status of the returns in the result. (paid, unpaid, reimbursed).
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string|null $minCreateDate Minimal create date of the returns in the result.
     * @return self
     */
    public function setMinCreateDate(?string $minCreateDate): self
    {
        $this->minCreateDate = $minCreateDate;
        return $this;
    }

    /**
     * @param string|null $maxCreateDate Maximal create date of the returns in the result.
     * @return self
     */
    public function setMaxCreateDate(?string $maxCreateDate): self
    {
        $this->maxCreateDate = $maxCreateDate;
        return $this;
    }

    public function orderByIdAsc(bool $expand = true): self
    {
        $this->orderByField('id', true);
        return $this;
    }

    public function orderByIdDesc(bool $expand = true): self
    {
        $this->orderByField('id', false);
        return $this;
    }

    public function orderByReturnnumberAsc(bool $expand = true): self
    {
        $this->orderByField('returnnumber', true);
        return $this;
    }

    public function orderByReturnnumberDesc(bool $expand = true): self
    {
        $this->orderByField('returnnumber', false);
        return $this;
    }

    public function orderByOrdernumberAsc(bool $expand = true): self
    {
        $this->orderByField('ordernumber', true);
        return $this;
    }

    public function orderByOrdernumberDesc(bool $expand = true): self
    {
        $this->orderByField('ordernumber', false);
        return $this;
    }

    public function orderByReturnnumber_fullAsc(bool $expand = true): self
    {
        $this->orderByField('returnnumber_full', true);
        return $this;
    }

    public function orderByReturnnumber_fullDesc(bool $expand = true): self
    {
        $this->orderByField('returnnumber_full', false);
        return $this;
    }

    public function orderByOrdernumber_fullAsc(bool $expand = true): self
    {
        $this->orderByField('ordernumber_full', true);
        return $this;
    }

    public function orderByOrdernumber_fullDesc(bool $expand = true): self
    {
        $this->orderByField('ordernumber_full', false);
        return $this;
    }

    public function orderByCreate_dateAsc(bool $expand = true): self
    {
        $this->orderByField('create_date', true);
        return $this;
    }

    public function orderByCreate_dateDesc(bool $expand = true): self
    {
        $this->orderByField('create_date', false);
        return $this;
    }

    public function orderByStatusAsc(bool $expand = true): self
    {
        $this->orderByField('status', true);
        return $this;
    }

    public function orderByStatusDesc(bool $expand = true): self
    {
        $this->orderByField('status', false);
        return $this;
    }

    public function orderByTotal_priceAsc(bool $expand = true): self
    {
        $this->orderByField('total_price', true);
        return $this;
    }

    public function orderByTotal_priceDesc(bool $expand = true): self
    {
        $this->orderByField('total_price', false);
        return $this;
    }
}
