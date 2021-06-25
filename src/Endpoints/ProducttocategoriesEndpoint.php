<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

class ProducttocategoriesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $result = $this->doRequest(
            self::DELETE,
            'producttocategories/' . $id . '/'
        );
    }
    
    public function allFromCategories(int $id): \JacobDeKeizer\Ccv\Models\Producttocategories\Collection\Producttocategories
    {
        $result = $this->doRequest(
            self::GET,
            'categories/' . $id . '/producttocategories/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttocategories\Collection\Producttocategories::fromArray($result);
    }
    
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Producttocategories\Resource\Producttocategories
    {
        $result = $this->doRequest(
            self::GET,
            'producttocategories/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttocategories\Resource\Producttocategories::fromArray($result);
    }
    
    public function allFromProducts(int $id): \JacobDeKeizer\Ccv\Models\Producttocategories\Collection\Producttocategories
    {
        $result = $this->doRequest(
            self::GET,
            'products/' . $id . '/producttocategories/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttocategories\Collection\Producttocategories::fromArray($result);
    }
    
    public function update(int $id): \JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Patch
    {
        $result = $this->doRequest(
            self::PATCH,
            'producttocategories/' . $id . '/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Patch::fromArray($result);
    }
    
    public function create(): \JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Post
    {
        $result = $this->doRequest(
            self::POST,
            'producttocategories/'
        );
        
        return \JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Post::fromArray($result);
    }
}
