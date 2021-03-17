<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Invoices as Models;
use JacobDeKeizer\Ccv\Parameters\Invoices\All;

class InvoicesEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function all(?All $payload = null): Models\Collection\Invoices
    {
        if ($payload === null) {
            $payload = new All();
        }

        $result = $this->doRequest(self::GET, sprintf('invoices%s', $payload->toBuilder()->toQueryString()));

        return Models\Collection\Invoices::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function get(int $id): Models\Resource\Invoices
    {
        $result = $this->doRequest(self::GET, sprintf('invoices/%d', $id));

        return Models\Resource\Invoices::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Models\Invoices\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(self::PATCH, 'invoices/' . $id, $model->toArray($onlyFilled));
    }

    /**
     * @throws CcvShopException
     */
    public function create(
        int $orderId,
        Models\Invoices\Input $model,
        bool $onlyFilled = true
    ): Models\Resource\Invoices {
        $response = $this->doRequest(self::POST, sprintf('orders/%d/invoices', $orderId), $model->toArray($onlyFilled));

        return Models\Resource\Invoices::fromArray($response);
    }
}
