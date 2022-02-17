<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Put;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Put implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Post\Post[] Collection of productphoto entities to replace all current photos of this product. With an empty collection you can achieve a DELETE ALL product photos.
     */
    private array $productphotos;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Post\Post[] Collection of productphoto entities to replace all current photos of this product. With an empty collection you can achieve a DELETE ALL product photos.
     */
    public function getProductphotos(): array
    {
        return $this->productphotos;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Post\Post ...$productphotos $productphotos Collection of productphoto entities to replace all current photos of this product. With an empty collection you can achieve a DELETE ALL product photos.
     * @return self
     */
    public function setProductphotos(\JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Post\Post ...$productphotos): self
    {
        $this->productphotos = $productphotos;
        return $this;
    }
}