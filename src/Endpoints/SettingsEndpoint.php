<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class SettingsEndpoint extends BaseEndpoint
{
    public function allFromWebshops(int $id): \JacobDeKeizer\Ccv\Models\Settings\Entity\Settings
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/settings/'
        );

        return \JacobDeKeizer\Ccv\Models\Settings\Entity\Settings::fromArray($result);
    }

    public function updateFromWebshops(int $id): \JacobDeKeizer\Ccv\Models\Settings\Settings\Put
    {
        $result = $this->doRequest(
            self::PUT,
            'webshops/' . $id . '/settings/'
        );

        return \JacobDeKeizer\Ccv\Models\Settings\Settings\Put::fromArray($result);
    }
}
