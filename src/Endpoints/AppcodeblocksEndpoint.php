<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

class AppcodeblocksEndpoint extends BaseEndpoint
{
    /**
     * Deletes a code block associated with an App. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function delete(int $id): void
    {
        $this->doRequest(
            self::DELETE,
            'appcodeblocks/' . $id . '/',
        );
    }
    
    /**
     * Gets all app code blocks associated with this resource id. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function allFromApp(int $id): \JacobDeKeizer\Ccv\Models\Appcodeblocks\Collection\Appcodeblocks
    {
        $result = $this->doRequest(
            self::GET,
            'apps/' . $id . '/appcodeblocks/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Appcodeblocks\Collection\Appcodeblocks::fromArray($result);
    }
    
    /**
     * Gets one app code block associated with this resource id. 150 per minute
     * 
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Appcodeblocks\Resource\Appcodeblocks
    {
        $result = $this->doRequest(
            self::GET,
            'appcodeblocks/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Appcodeblocks\Resource\Appcodeblocks::fromArray($result);
    }
    
    /**
     * Creates a code block associated with an App. 100 per minute
     * 
     * @throws CcvShopException
     */
    public function createForApp(int $id, \JacobDeKeizer\Ccv\Models\Appcodeblocks\Appcodeblocks\Post $model, bool $onlyFilled = true): \JacobDeKeizer\Ccv\Models\Appcodeblocks\Resource\Appcodeblocks
    {
        $result = $this->doRequest(
            self::POST,
            'apps/' . $id . '/appcodeblocks/',
            $model->toArray($onlyFilled)
        );
        
        return \JacobDeKeizer\Ccv\Models\Appcodeblocks\Resource\Appcodeblocks::fromArray($result);
    }
}
