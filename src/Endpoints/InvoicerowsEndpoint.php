<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class InvoicerowsEndpoint extends BaseEndpoint
{
    /**
     * Get all invoice rows of this invoice. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromInvoice(int $id, \JacobDeKeizer\Ccv\Parameters\Invoicerows\AllFromInvoice $parameter = null): \JacobDeKeizer\Ccv\Models\Invoicerows\Collection\Invoicerows
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Invoicerows\AllFromInvoice();
        }
        
        $result = $this->doRequest(
            self::GET,
            'invoices/' . $id . '/invoicerows/' . $parameter->toBuilder()->toQueryString()
        );
        
        return \JacobDeKeizer\Ccv\Models\Invoicerows\Collection\Invoicerows::fromArray($result);
    }
    
    /**
     * Get one invoice row. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Invoicerows\Resource\Invoicerows
    {
        $result = $this->doRequest(
            self::GET,
            'invoicerows/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Invoicerows\Resource\Invoicerows::fromArray($result);
    }
}
