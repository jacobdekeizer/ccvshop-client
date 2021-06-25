<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Invoices;

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
     * @var int|null Specific invoice number of an invoice.
     */
    private $invoicenumber;

    /**
     * @var string|null Specific invoice number, combined with the invoice number prefix of an invoice.
     */
    private $invoicenumberFull;

    /**
     * @var int|null Specific order number associated with an invoice.
     */
    private $ordernumber;

    /**
     * @var string|null Specific order number, combined with the order number prefix of an invoice.
     */
    private $ordernumberFull;

    /**
     * @var string|null Specific invoice status of the invoices in the result. (paid, unpaid, reimbursed).
     */
    private $status;

    /**
     * @var string|null Minimal create date of the invoices in the result.
     */
    private $minCreateDate;

    /**
     * @var string|null Maximal create date of the invoices in the result.
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
            ->addOptionalParameter('invoicenumber', $this->invoicenumber)
            ->addOptionalParameter('invoicenumberFull', $this->invoicenumberFull)
            ->addOptionalParameter('ordernumber', $this->ordernumber)
            ->addOptionalParameter('ordernumberFull', $this->ordernumberFull)
            ->addOptionalParameter('status', $this->status)
            ->addOptionalParameter('minCreateDate', $this->minCreateDate)
            ->addOptionalParameter('maxCreateDate', $this->maxCreateDate)
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return int|null Specific invoice number of an invoice.
     */
    public function getInvoicenumber(): ?int
    {
        return $this->invoicenumber;
    }

    /**
     * @return string|null Specific invoice number, combined with the invoice number prefix of an invoice.
     */
    public function getInvoicenumberFull(): ?string
    {
        return $this->invoicenumberFull;
    }

    /**
     * @return int|null Specific order number associated with an invoice.
     */
    public function getOrdernumber(): ?int
    {
        return $this->ordernumber;
    }

    /**
     * @return string|null Specific order number, combined with the order number prefix of an invoice.
     */
    public function getOrdernumberFull(): ?string
    {
        return $this->ordernumberFull;
    }

    /**
     * @return string|null Specific invoice status of the invoices in the result. (paid, unpaid, reimbursed).
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null Minimal create date of the invoices in the result.
     */
    public function getMinCreateDate(): ?string
    {
        return $this->minCreateDate;
    }

    /**
     * @return string|null Maximal create date of the invoices in the result.
     */
    public function getMaxCreateDate(): ?string
    {
        return $this->maxCreateDate;
    }

    /**
     * @param int|null $invoicenumber Specific invoice number of an invoice.
     * @return self
     */
    public function setInvoicenumber(?int $invoicenumber): self
    {
        $this->invoicenumber = $invoicenumber;
        return $this;
    }

    /**
     * @param string|null $invoicenumberFull Specific invoice number, combined with the invoice number prefix of an invoice.
     * @return self
     */
    public function setInvoicenumberFull(?string $invoicenumberFull): self
    {
        $this->invoicenumberFull = $invoicenumberFull;
        return $this;
    }

    /**
     * @param int|null $ordernumber Specific order number associated with an invoice.
     * @return self
     */
    public function setOrdernumber(?int $ordernumber): self
    {
        $this->ordernumber = $ordernumber;
        return $this;
    }

    /**
     * @param string|null $ordernumberFull Specific order number, combined with the order number prefix of an invoice.
     * @return self
     */
    public function setOrdernumberFull(?string $ordernumberFull): self
    {
        $this->ordernumberFull = $ordernumberFull;
        return $this;
    }

    /**
     * @param string|null $status Specific invoice status of the invoices in the result. (paid, unpaid, reimbursed).
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string|null $minCreateDate Minimal create date of the invoices in the result.
     * @return self
     */
    public function setMinCreateDate(?string $minCreateDate): self
    {
        $this->minCreateDate = $minCreateDate;
        return $this;
    }

    /**
     * @param string|null $maxCreateDate Maximal create date of the invoices in the result.
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

    public function orderByInvoicenumberAsc(): self
    {
        $this->orderByField('invoicenumber', true);
        return $this;
    }

    public function orderByInvoicenumberDesc(): self
    {
        $this->orderByField('invoicenumber', false);
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

    public function orderByInvoicenumber_fullAsc(): self
    {
        $this->orderByField('invoicenumber_full', true);
        return $this;
    }

    public function orderByInvoicenumber_fullDesc(): self
    {
        $this->orderByField('invoicenumber_full', false);
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
