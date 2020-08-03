<?php

namespace JacobDeKeizer\Ccv\Parameters\Concerns;

trait SortableFields
{
    /**
     * @var string|null
     */
    private $orderBy;

    /**
     * Setter for the from array method.
     * Lowercase b is intentional, because the from url method returns orderby in lowercase.
     */
    public function setOrderby(string $orderBy): void
    {
        if (empty($orderBy)) {
            $this->orderBy = null;
            return;
        }

        $this->orderBy = $orderBy;
    }

    public function resetOrderBy(): void
    {
        $this->orderBy = null;
    }

    protected function orderByField(string $field, bool $ascending): void
    {
        if ($ascending) {
            $this->orderBy = $field;
            return;
        }

        $this->orderBy = $field . '_desc';
    }

    protected function getOrderBy(): ?string
    {
        return $this->orderBy;
    }
}

