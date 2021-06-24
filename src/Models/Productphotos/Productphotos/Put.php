<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productphotos\Productphotos;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Put implements Model
{
    use FromArray, ToArray;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Post[] Collection of productphoto entities to replace all current photos of this product. With an empty collection you can achieve a DELETE ALL product photos.
     */
    private $productphotos;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Post[] Collection of productphoto entities to replace all current photos of this product. With an empty collection you can achieve a DELETE ALL product photos.
     */
    public function getProductphotos(): array
    {
        return $this->productphotos;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Post[] $productphotos Collection of productphoto entities to replace all current photos of this product. With an empty collection you can achieve a DELETE ALL product photos.
     * @return self
     */
    public function setProductphotos(array $productphotos): self
    {
        $this->productphotos = $productphotos;
        $this->propertyFilled('productphotos');
        return $this;
    }

    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'productphotos') {
            $items = [];

            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Post::fromArray($item);
            }

            return $items;
        }

        return $value;
    }
}
