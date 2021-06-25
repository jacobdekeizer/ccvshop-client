<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class WebhooksEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'webhooks/' . $id . '/'
        );
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Webhooks\Resource\Webhooks
    {
        $result = $this->doRequest(
            self::GET,
            'webhooks/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Webhooks\Resource\Webhooks::fromArray($result);
    }

    public function all(?\JacobDeKeizer\Ccv\Parameters\Webhooks\All $parameter = null): \JacobDeKeizer\Ccv\Models\Webhooks\Collection\Webhooks
    {
        if ($parameter === null) {
            $payload = new \JacobDeKeizer\Ccv\Parameters\Webhooks\All();
        }

        $result = $this->doRequest(
            self::GET,
            'webhooks/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Webhooks\Collection\Webhooks::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Webhooks\Webhooks\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'webhooks/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Webhooks\Webhooks\Patch::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Webhooks\Webhooks\Post
    {
        $result = $this->doRequest(
            self::POST,
            'webhooks/'
        );

        return \JacobDeKeizer\Ccv\Models\Webhooks\Webhooks\Post::fromArray($result);
    }
}
