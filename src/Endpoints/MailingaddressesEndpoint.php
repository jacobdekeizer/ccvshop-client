<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class MailingaddressesEndpoint extends BaseEndpoint
{
    /**
     * Delete a mailingaddress. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'mailingaddresses/' . $id . '/',
        );
    }

    /**
     * Get all mailingaddresses that belong to this mailinglist. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromMailinglist(int $id, \JacobDeKeizer\Ccv\Parameters\Mailingaddresses\AllFromMailinglist $parameter = null): \JacobDeKeizer\Ccv\Models\Mailingaddresses\Collection\Mailingaddresses
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Mailingaddresses\AllFromMailinglist();
        }

        $result = $this->doRequest(
            self::GET,
            'mailinglists/' . $id . '/mailingaddresses/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Mailingaddresses\Collection\Mailingaddresses::fromArray($result);
    }

    /**
     * Get all mailingaddresses. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Mailingaddresses\All $parameter = null): \JacobDeKeizer\Ccv\Models\Mailingaddresses\Collection\Mailingaddresses
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Mailingaddresses\All();
        }

        $result = $this->doRequest(
            self::GET,
            'mailingaddresses/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Mailingaddresses\Collection\Mailingaddresses::fromArray($result);
    }

    /**
     * Get one mailingaddress. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Mailingaddresses\Resource\Mailingaddresses
    {
        $result = $this->doRequest(
            self::GET,
            'mailingaddresses/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Mailingaddresses\Resource\Mailingaddresses::fromArray($result);
    }

    /**
     * Patch a mailingaddress. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Mailingaddresses\Mailingaddresses\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'mailingaddresses/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Post a mailingaddress. 100 per minute
     *
     * @throws CcvShopException
     */
    public function createForMailinglist(int $id, \JacobDeKeizer\Ccv\Models\Mailingaddresses\Mailingaddresses\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Mailingaddresses\Resource\Mailingaddresses
    {
        $result = $this->doRequest(
            self::POST,
            'mailinglists/' . $id . '/mailingaddresses/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Mailingaddresses\Resource\Mailingaddresses::fromArray($result);
    }
}
