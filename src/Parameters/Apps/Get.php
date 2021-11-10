<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Apps;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\ExpandableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

/**
 * This class is autogenerated.
 */
class Get implements Parameter
{
    use FromArray;
    use ExpandableFields;

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
            ->expandFields($this->getExpandedFields());
    }

    public function expandCategories(bool $expand = true): self
    {
        $this->expandField('categories', $expand);
        return $this;
    }
}
