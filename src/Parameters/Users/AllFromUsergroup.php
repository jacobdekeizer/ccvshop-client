<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Users;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class AllFromUsergroup extends PaginatedList implements Parameter
{
    use FromArray;
    use SortableFields;

    /**
     * @var string|null Options are pending or accepted.
     */
    private $approvalStatus;

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
            ->addOptionalParameter('approvalStatus', $this->approvalStatus)
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return string|null Options are pending or accepted.
     */
    public function getApprovalStatus(): ?string
    {
        return $this->approvalStatus;
    }

    /**
     * @param string|null $approvalStatus Options are pending or accepted.
     * @return self
     */
    public function setApprovalStatus(?string $approvalStatus): self
    {
        $this->approvalStatus = $approvalStatus;
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

    public function orderByFirstNameAsc(): self
    {
        $this->orderByField('first_name', true);
        return $this;
    }

    public function orderByFirstNameDesc(): self
    {
        $this->orderByField('first_name', false);
        return $this;
    }

    public function orderByLastNameAsc(): self
    {
        $this->orderByField('last_name', true);
        return $this;
    }

    public function orderByLastNameDesc(): self
    {
        $this->orderByField('last_name', false);
        return $this;
    }
}
