<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Models\Packages\Collection\Packages;
use JacobDeKeizer\Ccv\Models\Packages\Packages\Input;
use JacobDeKeizer\Ccv\Models\Packages\Resource\Packages as Package;

class PackagesEndpoint extends BaseEndpoint
{
    public function get(int $id): Package
    {
        $result = $this->doRequest(self::GET, '/packages/' . $id . '/');

        return Package::fromArray($result);
    }

    public function all(): Packages
    {
        $result = $this->doRequest(self::GET, '/packages/');

        return Packages::fromArray($result);
    }

    public function update(int $id, Input $package, bool $onlyFilledProperties = true): void
    {
        $this->doRequest(self::PATCH, '/packages/' . $id . '/', $package->toArray($onlyFilledProperties));
    }

    public function create(Input $package, bool $onlyFilledProperties = true): Package
    {
        $result = $this->doRequest(self::POST, '/packages/', $package->toArray($onlyFilledProperties));

        return Package::fromArray($result);
    }
}
