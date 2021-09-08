<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Services;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\ExpandableFields;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class AllFromServicecategory implements Parameter
{
    use FromArray;
    use ExpandableFields;
    use SortableFields;

    /**
     * @var string|null Title of the service.
     */
    private $name;

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
            ->addOptionalParameter('name', $this->name)
            ->expandFields($this->getExpandedFields())
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return string|null Title of the service.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name Title of the service.
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

    public function orderByDateAsc(): self
    {
        $this->orderByField('date', true);
        return $this;
    }

    public function orderByDateDesc(): self
    {
        $this->orderByField('date', false);
        return $this;
    }
}