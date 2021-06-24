<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ApppsppaymethodsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'apppsppaymethods/' . $id . '/'
        );
    }

    public function allFromApppsp(int $id): \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethods
    {
        $result = $this->doRequest(
            self::GET,
            'apppsp/' . $id . '/apppsppaymethods/'
        );

        return \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethods::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethod
    {
        $result = $this->doRequest(
            self::GET,
            'apppsppaymethods/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Apppsp\Paymethod::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Paymethods\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'apppsppaymethods/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Apppsppaymethods\Paymethods\Patch::fromArray($result);
    }

    public function createFromApppsp(int $id): \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Paymethod
    {
        $result = $this->doRequest(
            self::POST,
            'apppsp/' . $id . '/apppsppaymethods/'
        );

        return \JacobDeKeizer\Ccv\Models\Apppsp\Apppsp\Paymethod::fromArray($result);
    }
}
