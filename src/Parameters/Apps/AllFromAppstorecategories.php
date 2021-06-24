<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Apps;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\ExpandableFields;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class AllFromAppstorecategories implements Parameter
{
    use FromArray;
    use ExpandableFields;
    use SortableFields;

    /**
     * @var string|null Title of the app.
     */
    private $name;

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
            ->addOptionalParameter('name', $this->name)
            ->expandFields($this->getExpandedFields())
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return string|null Title of the app.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name Title of the app.
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function expandCategories(bool $expand = true): self
    {
        $this->expandField('categories', $expand);
        return $this;
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

    public function orderByPopulairAsc(bool $expand = true): self
    {
        $this->orderByField('populair', true);
        return $this;
    }

    public function orderByPopulairDesc(bool $expand = true): self
    {
        $this->orderByField('populair', false);
        return $this;
    }

    public function orderByDateAsc(bool $expand = true): self
    {
        $this->orderByField('date', true);
        return $this;
    }

    public function orderByDateDesc(bool $expand = true): self
    {
        $this->orderByField('date', false);
        return $this;
    }
}
