<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Mailingaddresses;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class AllFromMailinglists extends PaginatedList implements Parameter
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

    public function orderByNameAsc(): self
    {
        $this->orderByField('name', true);
        return $this;
    }

    public function orderByNameDesc(): self
    {
        $this->orderByField('name', false);
        return $this;
    }

    public function orderByLanguageAsc(): self
    {
        $this->orderByField('language', true);
        return $this;
    }

    public function orderByLanguageDesc(): self
    {
        $this->orderByField('language', false);
        return $this;
    }

    public function orderByEmailAsc(): self
    {
        $this->orderByField('email', true);
        return $this;
    }

    public function orderByEmailDesc(): self
    {
        $this->orderByField('email', false);
        return $this;
    }

    public function orderByEnableAsc(): self
    {
        $this->orderByField('enable', true);
        return $this;
    }

    public function orderByEnableDesc(): self
    {
        $this->orderByField('enable', false);
        return $this;
    }

    public function orderByCreate_dateAsc(): self
    {
        $this->orderByField('create_date', true);
        return $this;
    }

    public function orderByCreate_dateDesc(): self
    {
        $this->orderByField('create_date', false);
        return $this;
    }
}
