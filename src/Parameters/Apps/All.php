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
     * @return string|null Title of the app.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name Title of the app
     * @return All
     */
    public function setName(string $name): All
    {
        $this->name = $name;
        return $this;
    }
}
