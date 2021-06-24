<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class RedirectsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'redirects/' . $id . '/'
        );
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Redirects\Resource\Redirects
    {
        $result = $this->doRequest(
            self::GET,
            'redirects/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Redirects\Resource\Redirects::fromArray($result);
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Redirects\Collection\Redirects
    {
        $result = $this->doRequest(
            self::GET,
            'redirects/'
        );

        return \JacobDeKeizer\Ccv\Models\Redirects\Collection\Redirects::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Redirects\Redirects\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'redirects/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Redirects\Redirects\Patch::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Redirects\Redirects\Post
    {
        $result = $this->doRequest(
            self::POST,
            'redirects/'
        );

        return \JacobDeKeizer\Ccv\Models\Redirects\Redirects\Post::fromArray($result);
    }
}
