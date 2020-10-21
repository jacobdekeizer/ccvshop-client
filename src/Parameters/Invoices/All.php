<?php

namespace JacobDeKeizer\Ccv\Parameters\Invoices;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All extends PaginatedList implements Parameter
{
    use FromArray, SortableFields;

    /**
     * Specific invoice number of an invoice.
     * @var int|null
     */
    private $invoicenumber;

    /**
     * Specific order number of the order.
     * @var int|null
     */
    private $ordernumber;

    /**
     * Specific invoice number, combined with the invoice number prefix of an invoice.
     * @var string|null
     */
    private $invoicenumberFull;

    /**
     * Specific order number, combined with the order number prefix of an invoice.
     * @var string|null
     */
    private $ordernumberFull;

    /**
     * Specific invoice status of the invoices in the result. (paid, unpaid, reimbursed).
     * @var string|null
     */
    private $status;

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
            ->addOptionalParameter('invoicenumber', $this->getInvoicenumber())
            ->addOptionalParameter('ordernumber', $this->getOrdernumber())
            ->addOptionalParameter('invoicenumber_full', $this->getInvoicenumberFull())
            ->addOptionalParameter('ordernumber_full', $this->getOrdernumberFull())
            ->addOptionalParameter('status', $this->getStatus())
            ->addOptionalParameter('min_create_date', $this->getMinCreateDate())
            ->addOptionalParameter('max_create_date', $this->getMaxCreateDate())
            ->orderBy($this->getOrderBy());
    }

    public function setInvoicenumber(?int $invoicenumber): All
    {
        $this->ordernumber = $invoicenumber;
        return $this;
    }

    public function getInvoicenumber(): ?int
    {
        return $this->invoicenumber;
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

    public function setInvoicenumberFull(?string $invoicenumberFull): All
    {
        $this->ordernumber = $invoicenumberFull;
        return $this;
    }

    public function getInvoicenumberFull(): ?string
    {
        return $this->invoicenumberFull;
    }

    public function setOrdernumberFull(?string $ordernumberFull): All
    {
        $this->ordernumber = $ordernumberFull;
        return $this;
    }

    public function getOrdernumberFull(): ?string
    {
        return $this->ordernumberFull;
    }

    public function setStatus(?string $status): All
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
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

    public function orderByInvoiceNumberAsc(): All
    {
        $this->orderByField('invoicenumber', true);
        return $this;
    }

    public function orderByInvoiceNumberDesc(): All
    {
        $this->orderByField('invoicenumber', false);
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

    public function orderByInvoiceNumberFullAsc(): All
    {
        $this->orderByField('invoicenumber_full', true);
        return $this;
    }

    public function orderByInvoiceNumberFullDesc(): All
    {
        $this->orderByField('invoicenumber_full', false);
        return $this;
    }

    public function orderByOrderNumberFullAsc(): All
    {
        $this->orderByField('ordernumber_full', true);
        return $this;
    }

    public function orderByOrderNumberFullDesc(): All
    {
        $this->orderByField('ordernumber_full', false);
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

    public function orderByStatusAsc(): All
    {
        $this->orderByField('status', true);
        return $this;
    }

    public function orderByStatusDesc(): All
    {
        $this->orderByField('status', false);
        return $this;
    }

    public function orderByTotalPriceAsc(): All
    {
        $this->orderByField('total_price', true);
        return $this;
    }

    public function orderByTotalPriceDesc(): All
    {
        $this->orderByField('total_price', false);
        return $this;
    }
}
