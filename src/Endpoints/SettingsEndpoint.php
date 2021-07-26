<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class SettingsEndpoint extends BaseEndpoint
{
    /**
     * Retrieve all settings of the webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromWebshop(int $id): \JacobDeKeizer\Ccv\Models\Settings\Entity\Settings
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/settings/'
        );

        return \JacobDeKeizer\Ccv\Models\Settings\Entity\Settings::fromArray($result);
    }

    /**
     * You can override the current values of certain settings. Only settings that are included in the payload will be overwritten. 100 per minute
     *
     * @throws CcvShopException
     */
    public function updateForWebshop(int $id, \JacobDeKeizer\Ccv\Models\Settings\Settings\Put $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'webshops/' . $id . '/settings/',
            $model->toArray($onlyFilled)
        );
    }
}
