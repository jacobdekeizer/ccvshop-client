<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Productlabels\Productlabels;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Put implements Model
{
    use FromArray, ToArray;

    /**
     * @var int[] Replaces all labels of this product with the new collection. An empty collection can be used to remove all labels.
     */
    private $labels;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return int[] Replaces all labels of this product with the new collection. An empty collection can be used to remove all labels.
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    /**
     * @param int[] $labels Replaces all labels of this product with the new collection. An empty collection can be used to remove all labels.
     * @return self
     */
    public function setLabels(array $labels): self
    {
        $this->labels = $labels;
        $this->propertyFilled('labels');
        return $this;
    }
}