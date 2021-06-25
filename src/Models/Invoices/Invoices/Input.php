<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Invoices\Invoices;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Input implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string|null Status of the invoice. 1. paid. 2. upaid. 3. reimbursed.
     */
    private $status;
    
    /**
     * @var string|null Date of when the payment link was send to the customer in UTC
     */
    private $paymentLinkSent;
    
    /**
     * @var string|null A reference to the invoice number at a third party.
     */
    private $externalReference;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string|null Status of the invoice. 1. paid. 2. upaid. 3. reimbursed.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    
    /**
     * @return string|null Date of when the payment link was send to the customer in UTC
     */
    public function getPaymentLinkSent(): ?string
    {
        return $this->paymentLinkSent;
    }
    
    /**
     * @return string|null A reference to the invoice number at a third party.
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }
    
    /**
     * @param string|null $status Status of the invoice. 1. paid. 2. upaid. 3. reimbursed.
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        $this->propertyFilled('status');
        return $this;
    }
    
    /**
     * @param string|null $paymentLinkSent Date of when the payment link was send to the customer in UTC
     * @return self
     */
    public function setPaymentLinkSent(?string $paymentLinkSent): self
    {
        $this->paymentLinkSent = $paymentLinkSent;
        $this->propertyFilled('paymentLinkSent');
        return $this;
    }
    
    /**
     * @param string|null $externalReference A reference to the invoice number at a third party.
     * @return self
     */
    public function setExternalReference(?string $externalReference): self
    {
        $this->externalReference = $externalReference;
        $this->propertyFilled('externalReference');
        return $this;
    }
}
