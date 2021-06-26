<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class LabelsEndpoint extends BaseEndpoint
{
    /**
     * Deletes this label and all the links to other resources. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'labels/' . $id . '/',
        );
    }
    
    /**
     * Gets all labels created by this api key. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function all(): \JacobDeKeizer\Ccv\Models\Labels\Collection\Labels
    {
        $result = $this->doRequest(
            self::GET,
            'labels/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Labels\Collection\Labels::fromArray($result);
    }
    
    /**
     * Gets one label. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Labels\Resource\Labels
    {
        $result = $this->doRequest(
            self::GET,
            'labels/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Labels\Resource\Labels::fromArray($result);
    }
    
    /**
     * Edits an existing label. Note that this has no effects on the current links with other resources (like products). 100 per minute
     * 
     * @throws CcvShopException
     */
    public function update(int $id, \JacobDeKeizer\Ccv\Models\Labels\Labels\Patch $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::PATCH,
            'labels/' . $id . '/',
            $model->toArray($onlyFilled)
        );
    }
    
    /**
     * Creates a new label. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function create(\JacobDeKeizer\Ccv\Models\Labels\Labels\Post $model, bool $onlyFilled = true): void
    {
        $this->doRequest(
            self::POST,
            'labels/',
            $model->toArray($onlyFilled)
        );
    }
}
