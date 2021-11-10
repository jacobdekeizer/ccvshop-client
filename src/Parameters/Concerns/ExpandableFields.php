<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Concerns;

trait ExpandableFields
{
    /** @var array<string, bool> */
    private array $expand = [];

    /**
     * Setter for the from array method
     */
    public function setExpand(string $expand): void
    {
        if (empty($expand)) {
            $this->expand = [];
            return;
        }

        $fields = explode(',', $expand);

        foreach ($fields as $field) {
            $this->expand[$field] = true;
        }
    }

    protected function expandField(string $name, bool $expand): void
    {
        $this->expand[$name] = $expand;
    }

    /**
     * @return string[]
     */
    protected function getExpandedFields(): array
    {
        $fields = [];

        foreach ($this->expand as $field => $expand) {
            if ($expand) {
                $fields[] = $field;
            }
        }

        return $fields;
    }
}
