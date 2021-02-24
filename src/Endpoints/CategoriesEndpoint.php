<?php

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Models\Categories\Categories\Patch;
use JacobDeKeizer\Ccv\Models\Categories\Categories\Post;
use JacobDeKeizer\Ccv\Models\Categories\Collection\Categories;
use JacobDeKeizer\Ccv\Models\Categories\Resource\Categories as Category;

class CategoriesEndpoint extends BaseEndpoint
{
    public function delete(int $id): void
    {
        $this->doRequest(self::DELETE, '/categories/' . $id . '/');
    }

    public function allForCategory(int $id): Categories
    {
        $result = $this->doRequest(self::GET, '/categories/' . $id . '/categories/');

        return Categories::fromArray($result);
    }

    public function all(): Categories
    {
        $result = $this->doRequest(self::GET, '/categories/');

        return Categories::fromArray($result);
    }

    public function get(int $id): Category
    {
        $result = $this->doRequest(self::GET, '/categories/' . $id);

        return Category::fromArray($result);
    }

    public function update(int $id, Patch $category, bool $onlyFilledProperties = true): void
    {
        $this->doRequest(self::PATCH, '/categories/' . $id . '/', $category->toArray($onlyFilledProperties));
    }

    public function create(Post $category, bool $onlyFilledProperties = true): Category
    {
        $result = $this->doRequest(self::POST, '/categories/', $category->toArray($onlyFilledProperties));

        return Category::fromArray($result);
    }
}
