<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Quotations;

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
     * @var int|null Specific quotation number of an quotation.
     */
    private $quotationnumber;

    /**
     * @var string|null Specific quotation number, combined with the quotation number prefix of an quotation.
     */
    private $quotationnumberFull;

    /**
     * @var int|null Specific order number associated with an quotation.
     */
    private $ordernumber;

    /**
     * @var string|null Specific order number, combined with the order number prefix of an quotation.
     */
    private $ordernumberFull;

    /**
     * @var string|null Specific quotation status of the quotation in the result. (open, requested, send, accepted, concept).
     */
    private $status;

    /**
     * @var string|null Minimal create date of the quotation in the result.
     */
    private $minCreateDate;

    /**
     * @var string|null Maximal create date of the quotation in the result.
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
            return null;
        }

        return self::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (parent::toBuilder())
            ->addOptionalParameter('quotationnumber', $this->quotationnumber)
            ->addOptionalParameter('quotationnumberFull', $this->quotationnumberFull)
            ->addOptionalParameter('ordernumber', $this->ordernumber)
            ->addOptionalParameter('ordernumberFull', $this->ordernumberFull)
            ->addOptionalParameter('status', $this->status)
            ->addOptionalParameter('minCreateDate', $this->minCreateDate)
            ->addOptionalParameter('maxCreateDate', $this->maxCreateDate)
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return int|null Specific quotation number of an quotation.
     */
    public function getQuotationnumber(): ?int
    {
        return $this->quotationnumber;
    }

    /**
     * @return string|null Specific quotation number, combined with the quotation number prefix of an quotation.
     */
    public function getQuotationnumberFull(): ?string
    {
        return $this->quotationnumberFull;
    }

    /**
     * @return int|null Specific order number associated with an quotation.
     */
    public function getOrdernumber(): ?int
    {
        return $this->ordernumber;
    }

    /**
     * @return string|null Specific order number, combined with the order number prefix of an quotation.
     */
    public function getOrdernumberFull(): ?string
    {
        return $this->ordernumberFull;
    }

    /**
     * @return string|null Specific quotation status of the quotation in the result. (open, requested, send, accepted, concept).
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null Minimal create date of the quotation in the result.
     */
    public function getMinCreateDate(): ?string
    {
        return $this->minCreateDate;
    }

    /**
     * @return string|null Maximal create date of the quotation in the result.
     */
    public function getMaxCreateDate(): ?string
    {
        return $this->maxCreateDate;
    }

    /**
     * @param int|null $quotationnumber Specific quotation number of an quotation.
     * @return self
     */
    public function setQuotationnumber(?int $quotationnumber): self
    {
        $this->quotationnumber = $quotationnumber;
        return $this;
    }

    /**
     * @param string|null $quotationnumberFull Specific quotation number, combined with the quotation number prefix of an quotation.
     * @return self
     */
    public function setQuotationnumberFull(?string $quotationnumberFull): self
    {
        $this->quotationnumberFull = $quotationnumberFull;
        return $this;
    }

    /**
     * @param int|null $ordernumber Specific order number associated with an quotation.
     * @return self
     */
    public function setOrdernumber(?int $ordernumber): self
    {
        $this->ordernumber = $ordernumber;
        return $this;
    }

    /**
     * @param string|null $ordernumberFull Specific order number, combined with the order number prefix of an quotation.
     * @return self
     */
    public function setOrdernumberFull(?string $ordernumberFull): self
    {
        $this->ordernumberFull = $ordernumberFull;
        return $this;
    }

    /**
     * @param string|null $status Specific quotation status of the quotation in the result. (open, requested, send, accepted, concept).
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string|null $minCreateDate Minimal create date of the quotation in the result.
     * @return self
     */
    public function setMinCreateDate(?string $minCreateDate): self
    {
        $this->minCreateDate = $minCreateDate;
        return $this;
    }

    /**
     * @param string|null $maxCreateDate Maximal create date of the quotation in the result.
     * @return self
     */
    public function setMaxCreateDate(?string $maxCreateDate): self
    {
        $this->maxCreateDate = $maxCreateDate;
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

    public function orderByQuotationnumberAsc(): self
    {
        $this->orderByField('quotationnumber', true);
        return $this;
    }

    public function orderByQuotationnumberDesc(): self
    {
        $this->orderByField('quotationnumber', false);
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

    public function orderByQuotationnumber_fullAsc(): self
    {
        $this->orderByField('quotationnumber_full', true);
        return $this;
    }

    public function orderByQuotationnumber_fullDesc(): self
    {
        $this->orderByField('quotationnumber_full', false);
        return $this;
    }

    public function orderByOrdernumber_fullAsc(): self
    {
        $this->orderByField('ordernumber_full', true);
        return $this;
    }

    public function orderByOrdernumber_fullDesc(): self
    {
        $this->orderByField('ordernumber_full', false);
        return $this;
    }

    public function orderByCreate_dateAsc(): self
    {
        $this->orderByField('create_date', true);
        return $this;
    }

    public function orderByCreate_dateDesc(): self
    {
        $this->orderByField('create_date', false);
        return $this;
    }

    public function orderByStatusAsc(): self
    {
        $this->orderByField('status', true);
        return $this;
    }

    public function orderByStatusDesc(): self
    {
        $this->orderByField('status', false);
        return $this;
    }

    public function orderByTotal_priceAsc(): self
    {
        $this->orderByField('total_price', true);
        return $this;
    }

    public function orderByTotal_priceDesc(): self
    {
        $this->orderByField('total_price', false);
        return $this;
    }
}