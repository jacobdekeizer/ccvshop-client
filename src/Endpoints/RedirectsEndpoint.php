<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class RedirectsEndpoint extends BaseEndpoint
{
    /**
     * Deletes a single redirect url. 100 per minute
     *
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'redirects/' . $id . '/',
        );
    }

    /**
     * Get one redirect url by Id. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Redirects\Resource\Redirects
    {
        $result = $this->doRequest(
            self::GET,
            'redirects/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Redirects\Resource\Redirects::fromArray($result);
    }

    /**
     * Get all redirect urls as a collection. You can use start and size parameters. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Redirects\Collection\Redirects
    {
        $result = $this->doRequest(
            self::GET,
            'redirects/'
        );

        return \JacobDeKeizer\Ccv\Models\Redirects\Collection\Redirects::fromArray($result);
    }

    /**
     * Updates an existing redirect. This resource describes redirects. Redirects are http 301 forwards from source_url to target_url. This can for instance be used to keep SEO ranking of outdated urls. This source_url will be relative and must be unique. The redirects will work for any domain resolving to this webshop. The target_url can be relative or absolute. It can also be a different domain. Carefully when creating circular references. 100 per minute
     *
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Redirects\Redirects\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'redirects/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }

    /**
     * Creates a new redirect. This resource describes redirects. Redirects are http 301 forwards from source_url to target_url. This can for instance be used to keep SEO ranking of outdated urls. This source_url will be relative and must be unique. The redirects will work for any domain resolving to this webshop. The target_url can be relative or absolute. It can also be a different domain. Carefully when creating circular references. 100 per minute
     *
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Redirects\Redirects\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Redirects\Resource\Redirects
    {
        $result = $this->doRequest(
            self::POST,
            'redirects/',
            $model->toArray($onlyFilled)
        );

        return \JacobDeKeizer\Ccv\Models\Redirects\Resource\Redirects::fromArray($result);
    }
}
