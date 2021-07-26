<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Productstaggeredprices;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class AllFromProduct implements Parameter
{
    use FromArray;
    use SortableFields;

    /**
     * @return self
     */
    public static function fromArray(array $data): Parameter
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

    public function orderByQuantityAsc(): self
    {
        $this->orderByField('quantity', true);
        return $this;
    }

    public function orderByQuantityDesc(): self
    {
        $this->orderByField('quantity', false);
        return $this;
    }

    public function orderByPriceAsc(): self
    {
        $this->orderByField('price', true);
        return $this;
    }

    public function orderByPriceDesc(): self
    {
        $this->orderByField('price', false);
        return $this;
    }
}
