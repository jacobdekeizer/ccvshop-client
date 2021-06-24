<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Productattributevalues;

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
            return null;        }

        return self::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (parent::toBuilder())
            ->orderBy($this->getOrderBy());
    }

    public function orderByPositionAsc(bool $expand = true): self
    {
        $this->orderByField('position', true);
        return $this;
    }

    public function orderByPositionDesc(bool $expand = true): self
    {
        $this->orderByField('position', false);
        return $this;
    }

    public function orderByOptionpositionAsc(bool $expand = true): self
    {
        $this->orderByField('optionposition', true);
        return $this;
    }

    public function orderByOptionpositionDesc(bool $expand = true): self
    {
        $this->orderByField('optionposition', false);
        return $this;
    }
}
