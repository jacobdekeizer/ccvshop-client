<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Mailingaddresses;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
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

    public function orderByNameAsc(bool $expand = true): self
    {
        $this->orderByField('name', true);
        return $this;
    }

    public function orderByNameDesc(bool $expand = true): self
    {
        $this->orderByField('name', false);
        return $this;
    }

    public function orderByLanguageAsc(bool $expand = true): self
    {
        $this->orderByField('language', true);
        return $this;
    }

    public function orderByLanguageDesc(bool $expand = true): self
    {
        $this->orderByField('language', false);
        return $this;
    }

    public function orderByEmailAsc(bool $expand = true): self
    {
        $this->orderByField('email', true);
        return $this;
    }

    public function orderByEmailDesc(bool $expand = true): self
    {
        $this->orderByField('email', false);
        return $this;
    }

    public function orderByEnableAsc(bool $expand = true): self
    {
        $this->orderByField('enable', true);
        return $this;
    }

    public function orderByEnableDesc(bool $expand = true): self
    {
        $this->orderByField('enable', false);
        return $this;
    }

    public function orderByCreate_dateAsc(bool $expand = true): self
    {
        $this->orderByField('create_date', true);
        return $this;
    }

    public function orderByCreate_dateDesc(bool $expand = true): self
    {
        $this->orderByField('create_date', false);
        return $this;
    }
}
