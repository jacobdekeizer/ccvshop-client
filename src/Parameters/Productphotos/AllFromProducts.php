<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Productphotos;

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

    public function orderByIdAsc(bool $expand = true): self
    {
        $this->orderByField('id', true);
        return $this;
    }

    public function orderByIdDesc(bool $expand = true): self
    {
        $this->orderByField('id', false);
        return $this;
    }

    public function orderByIsmainphotoAsc(bool $expand = true): self
    {
        $this->orderByField('ismainphoto', true);
        return $this;
    }

    public function orderByIsmainphotoDesc(bool $expand = true): self
    {
        $this->orderByField('ismainphoto', false);
        return $this;
    }
}
