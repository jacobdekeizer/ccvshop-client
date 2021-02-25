<?php

namespace JacobDeKeizer\Ccv\Parameters\Apps;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Parameters\Apps\Concerns\ExpandableAppFields;
use JacobDeKeizer\Ccv\Parameters\Apps\Concerns\SortableAppFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
{
    use FromArray;
    use ExpandableAppFields;
    use SortableAppFields;

    /**
     * @var string|null Title of the app.
     */
    private $name;

    /**
     * @param array $data
     * @return All
     */
    public static function fromArray(array $data): Parameter
    {
        return self::createFromArray($data);
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (new QueryParameterBuilder())
            ->addOptionalParameter('name', $this->getName())
            ->expandFields($this->getExpandedFields())
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return All
     */
    public function setName($name): All
    {
        $this->name = $name;
        return $this;
    }
}
