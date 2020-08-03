<?php

namespace JacobDeKeizer\Ccv\Parameters\Concerns;

trait ExpandableFields
{
    /** @var array<string, bool> */
    private $expandedFields = [];

    protected function expandField(string $name, bool $expand): void
    {
        $this->expandedFields[$name] = $expand;
    }

    /**
     * @return string[]
     */
    protected function getExpandedFields(): array
    {
        $fields = [];

        foreach ($this->expandedFields as $field => $expand) {
            if ($expand) {
                $fields[] = $field;
            }
        }

        return $fields;
    }
}

