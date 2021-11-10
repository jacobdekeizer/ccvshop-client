<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categorytree;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Categorytree implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categorytreenode\Categorytreenode[] Array with root categories.
     */
    private array $rootCategories;

    public static function fromArray(array $data): static
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categorytreenode\Categorytreenode[] Array with root categories.
     */
    public function getRootCategories(): array
    {
        return $this->rootCategories;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categorytreenode\Categorytreenode ...$rootCategories $rootCategories Array with root categories.
     * @return self
     */
    public function setRootCategories(\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categorytreenode\Categorytreenode ...$rootCategories): self
    {
        $this->rootCategories = $rootCategories;
        return $this;
    }
}
