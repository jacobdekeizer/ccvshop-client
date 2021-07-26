<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class ColorsEndpoint extends BaseEndpoint
{
    /**
     * Get all colors. Filters can be applied. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Colors\All $parameter = null): \JacobDeKeizer\Ccv\Models\Colors\Collection\Colors
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Colors\All();
        }

        $result = $this->doRequest(
            self::GET,
            'colors/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Colors\Collection\Colors::fromArray($result);
    }

    /**
     * Get one color. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Colors\Resource\Colors
    {
        $result = $this->doRequest(
            self::GET,
            'colors/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Colors\Resource\Colors::fromArray($result);
    }

    /**
     * Create a new color based on a hex color code. The hex must be unique. 100 per minute
     *
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Colors\Colors\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Colors\Resource\Colors
    {
        $result = $this->doRequest(
            self::POST,
            'colors/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Colors\Resource\Colors::fromArray($result);
    }
}
