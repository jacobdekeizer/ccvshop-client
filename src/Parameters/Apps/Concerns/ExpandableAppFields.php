<?php

namespace JacobDeKeizer\Ccv\Parameters\Apps\Concerns;

use JacobDeKeizer\Ccv\Parameters\Concerns\ExpandableFields;

trait ExpandableAppFields
{
    use ExpandableFields;

    public function expandCategories(bool $expand = true): self
    {
        $this->expandField('categories', $expand);
        return $this;
    }
}
