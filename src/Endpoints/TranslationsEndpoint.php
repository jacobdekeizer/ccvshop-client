<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class TranslationsEndpoint extends BaseEndpoint
{
    /**
     * Get all translations keys and values. Translation will be based on accept language. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Translations\All $parameter = null): \JacobDeKeizer\Ccv\Models\Translations\Collection\Translations
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Translations\All();
        }

        $result = $this->doRequest(
            self::GET,
            'translations/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Translations\Collection\Translations::fromArray($result);
    }

    /**
     * Overwrites the current value of a language of a key. The translation will be applied to the accept language. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(\JacobDeKeizer\Ccv\Models\Translations\Translations\Input $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PUT,
            'translations/',
            $model->toArray($onlyFilled)
        );
    }
}
