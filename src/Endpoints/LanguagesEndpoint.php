<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class LanguagesEndpoint extends BaseEndpoint
{
    public function all(): \JacobDeKeizer\Ccv\Models\Languages\Collection\Languages
    {
        $result = $this->doRequest(
            self::GET,
            'languages/'
        );

        return \JacobDeKeizer\Ccv\Models\Languages\Collection\Languages::fromArray($result);
    }

    public function create(): \JacobDeKeizer\Ccv\Models\Languages\Languages\Post
    {
        $result = $this->doRequest(
            self::POST,
            'languages/'
        );

        return \JacobDeKeizer\Ccv\Models\Languages\Languages\Post::fromArray($result);
    }
}
