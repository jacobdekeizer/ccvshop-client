<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class AttributevaluesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'attributevalues/' . $id . '/'
        );
    }

    public function allFromAttributecombinations(int $id): \JacobDeKeizer\Ccv\Models\Attributevalues\Collection\Attributevalues
    {
        $result = $this->doRequest(
            self::GET,
            'attributecombinations/' . $id . '/attributevalues/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributevalues\Collection\Attributevalues::fromArray($result);
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Attributevalues\Resource\Attributevalues
    {
        $result = $this->doRequest(
            self::GET,
            'attributevalues/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributevalues\Resource\Attributevalues::fromArray($result);
    }

    public function allFromAttributes(int $id): \JacobDeKeizer\Ccv\Models\Attributevalues\Collection\Attributevalues
    {
        $result = $this->doRequest(
            self::GET,
            'attributes/' . $id . '/attributevalues/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributevalues\Collection\Attributevalues::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Attributevalues\Attributevalues\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'attributevalues/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributevalues\Attributevalues\Patch::fromArray($result);
    }

    public function createFromAttributes(int $id): \JacobDeKeizer\Ccv\Models\Attributevalues\Attributevalues\Post
    {
        $result = $this->doRequest(
            self::POST,
            'attributes/' . $id . '/attributevalues/'
        );

        return \JacobDeKeizer\Ccv\Models\Attributevalues\Attributevalues\Post::fromArray($result);
    }
}
