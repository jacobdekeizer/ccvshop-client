<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Productattributesets;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class AllFromProducts implements Parameter
{
    use FromArray;
    use SortableFields;

    /**
     * @return self
     */
    public static function fromArray(array $data): self
    {
        return self::createFromArray($data);
    }

    /**
     * @return self
     */
    public static function fromUrl(?string $url): ?self
    {
        if ($url === null) {
            return null;
        }

        return self::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (parent::toBuilder())
            ->orderBy($this->getOrderBy());
    }

    public function orderByAttributepositionAsc(): self
    {
        $this->orderByField('attributeposition', true);
        return $this;
    }

    public function orderByAttributepositionDesc(): self
    {
        $this->orderByField('attributeposition', false);
        return $this;
    }

    public function orderByPositionAsc(): self
    {
        $this->orderByField('position', true);
        return $this;
    }

    public function orderByPositionDesc(): self
    {
        $this->orderByField('position', false);
        return $this;
    }
}
