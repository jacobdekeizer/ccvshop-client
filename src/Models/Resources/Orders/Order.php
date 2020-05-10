<?php

namespace JacobDeKeizer\Ccv\Models\Resources\Orders;

class Order
{
    /** @var int|null */
    private $invoicenumber;

    /** @var bool */
    private $isCompleted;

    /** @var bool */
    private $paid;

    /** @var bool */
    private $safetyDepositReturned;

    /** @var float */
    private $paymethodCosts;

    /** @var float */
    private $extraCosts;

    /** @var string */
    private $extraCostsDescription;

    /** @var bool */
    private $taxesIncluded;

    /** @var bool */
    private $orderRowTaxesIncluded;

    /** @var bool */
    private $isIntraCommunityOrder;

    /** @var bool */
    private $currency;

    /** @var  */
    private $orderedinlng;

    /**
     * @return int|null
     */
    public function getInvoicenumber(): ?int
    {
        return $this->invoicenumber;
    }

    /**
     * @param int|null $invoicenumber
     * @return self
     */
    public function setInvoicenumber(?int $invoicenumber): self
    {
        $this->invoicenumber = $invoicenumber;
        return $this;
    }


}

