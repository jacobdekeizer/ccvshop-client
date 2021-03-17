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
    use FromArray;
    use SortableFields;

    /**
     * @var int|null Specific invoice number of an invoice.
     */
    private $invoicenumber;

    /**
     * @var int|null Specific order number of the order.
     */
    private $ordernumber;

    /**
     * @var string|null Specific invoice number, combined with the invoice number prefix of an invoice.
     */
    private $invoicenumberFull;

    /**
     * @var string|null Specific order number, combined with the order number prefix of an invoice.
     */
    private $ordernumberFull;

    /**
     * @var string|null Specific invoice status of the invoices in the result. (paid, unpaid, reimbursed).
     */
    private $status;

    /**
     * @var string|null Minimal create date of the orders in the result.
     */
    private $minCreateDate;

    /**
     * @var string|null Maximal create date of the orders in the result.
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

    /**
     * @param int|null $invoicenumber Specific invoice number of an invoice.
     * @return All
     */
    public function setInvoicenumber(?int $invoicenumber): All
    {
        $this->ordernumber = $invoicenumber;
        return $this;
    }

    /**
     * @return int|null Specific invoice number of an invoice.
     */
    public function getInvoicenumber(): ?int
    {
        return $this->invoicenumber;
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
     * @param string|null $invoicenumberFull Specific invoice number, combined with the invoice number prefix
     *                                       of an invoice.
     * @return All
     */
    public function setInvoicenumberFull(?string $invoicenumberFull): All
    {
        $this->ordernumber = $invoicenumberFull;
        return $this;
    }

    /**
     * @return string|null Specific invoice number, combined with the invoice number prefix of an invoice.
     */
    public function getInvoicenumberFull(): ?string
    {
        return $this->invoicenumberFull;
    }

    /**
     * @param string|null $ordernumberFull Specific order number, combined with the order number prefix of an invoice.
     * @return All
     */
    public function setOrdernumberFull(?string $ordernumberFull): All
    {
        $this->ordernumber = $ordernumberFull;
        return $this;
    }

    /**
     * @return string|null Specific order number, combined with the order number prefix of an invoice.
     */
    public function getOrdernumberFull(): ?string
    {
        return $this->ordernumberFull;
    }

    /**
     * @param string|null $status Specific invoice status of the invoices in the result. (paid, unpaid, reimbursed).
     * @return All
     */
    public function setStatus(?string $status): All
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null Specific invoice status of the invoices in the result. (paid, unpaid, reimbursed).
     */
    public function getStatus(): ?string
    {
        return $this->status;
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
