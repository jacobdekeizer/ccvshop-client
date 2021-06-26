<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class InvoicelabelsEndpoint extends BaseEndpoint
{
    /**
     * Get all labels linked to this invoice. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromInvoices(int $id): \JacobDeKeizer\Ccv\Models\Invoicelabels\Collection\Invoicelabels
    {
        $result = $this->doRequest(
            self::GET,
            'invoices/' . $id . '/invoicelabels/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Invoicelabels\Collection\Invoicelabels::fromArray($result);
    }
    
    /**
     * Replaces all labels of this invoice with the new collection. An empty collection can be used to remove all labels. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function updateFromInvoices(int $id, \JacobDeKeizer\Ccv\Models\Invoicelabels\Invoicelabels\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'invoices/' . $id . '/invoicelabels/',
            $model->toArray($onlyFilled)
        );
    }
}
