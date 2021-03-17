<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;
use JacobDeKeizer\Ccv\Models\Packages\Collection\Packages;
use JacobDeKeizer\Ccv\Models\Packages\Packages\Input;
use JacobDeKeizer\Ccv\Models\Packages\Resource\Packages as Package;

class PackagesEndpoint extends BaseEndpoint
{
    /**
     * @throws CcvShopException
     */
    public function get(int $id): Package
    {
        $result = $this->doRequest(self::GET, sprintf('/packages/%d/', $id));

        return Package::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function all(): Packages
    {
        $result = $this->doRequest(self::GET, '/packages/');

        return Packages::fromArray($result);
    }

    /**
     * @throws CcvShopException
     */
    public function update(int $id, Input $package, bool $onlyFilledProperties = true): void
    {
        $this->doRequest(self::PATCH, sprintf('/packages/%d/', $id), $package->toArray($onlyFilledProperties));
    }

    /**
     * @throws CcvShopException
     */
    public function create(Input $package, bool $onlyFilledProperties = true): Package
    {
        $result = $this->doRequest(self::POST, '/packages/', $package->toArray($onlyFilledProperties));

        return Package::fromArray($result);
    }
}
