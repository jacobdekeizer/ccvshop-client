<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Internal\Resource\Productlabels\Put;

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
     * @var int[] Replaces all labels of this product with the new collection. An empty collection can be used to remove all labels.
     */
    private array $labels;

    public static function fromArray(array $data): static
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
        return $this;
    }
}
