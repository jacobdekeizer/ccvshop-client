<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class MailinglistsEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'mailinglists/' . $id . '/'
        );
    }

    public function get(int $id): \JacobDeKeizer\Ccv\Models\Mailinglists\Resource\Mailinglists
    {
        $result = $this->doRequest(
            self::GET,
            'mailinglists/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Mailinglists\Resource\Mailinglists::fromArray($result);
    }

    public function all(): \JacobDeKeizer\Ccv\Models\Mailinglists\Collection\Mailinglists
    {
        $result = $this->doRequest(
            self::GET,
            'mailinglists/'
        );

        return \JacobDeKeizer\Ccv\Models\Mailinglists\Collection\Mailinglists::fromArray($result);
    }

    public function update(int $id): \JacobDeKeizer\Ccv\Models\Mailinglists\Mailinglists\Input
    {
        $result = $this->doRequest(
            self::PATCH,
            'mailinglists/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Mailinglists\Mailinglists\Input::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Mailinglists\Mailinglists\Input
    {
        $result = $this->doRequest(
            self::POST,
            'mailinglists/'
        );

        return \JacobDeKeizer\Ccv\Models\Mailinglists\Mailinglists\Input::fromArray($result);
    }
}
