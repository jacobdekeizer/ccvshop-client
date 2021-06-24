<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Attributecombinations;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\ExpandableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class Get implements Parameter
{
    use FromArray;
    use ExpandableFields;

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
            ->expandFields($this->getExpandedFields())
    }

    public function expandAttributecombinationphotos(bool $expand = true): self
    {
        $this->expandField('attributecombinationphotos', $expand);
        return $this;
    }
}
