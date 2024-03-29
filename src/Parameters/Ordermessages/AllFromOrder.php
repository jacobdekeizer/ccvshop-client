<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Ordermessages;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

/**
 * This class is autogenerated.
 */
class AllFromOrder implements Parameter
{
    use FromArray;
    use SortableFields;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    public static function fromUrl(?string $url): ?static
    {
        if ($url === null) {
            return null;
        }

        return static::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (new QueryParameterBuilder())
            ->orderBy($this->getOrderBy());
    }

    public function orderByIdAsc(): self
    {
        $this->orderByField('id', true);
        return $this;
    }

    public function orderByIdDesc(): self
    {
        $this->orderByField('id', false);
        return $this;
    }

    public function orderByCreateDateAsc(): self
    {
        $this->orderByField('create_date', true);
        return $this;
    }

    public function orderByCreateDateDesc(): self
    {
        $this->orderByField('create_date', false);
        return $this;
    }
}
