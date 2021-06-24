<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Productreviews;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
{
    use FromArray;
    use SortableFields;

    /**
     * @var bool|null Get reviews that are either approved (true) or unapproved (false).
     */
    private $approved;

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
            ->addOptionalParameter('approved', $this->approved)
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return bool|null Get reviews that are either approved (true) or unapproved (false).
     */
    public function getApproved(): ?bool
    {
        return $this->approved;
    }

    /**
     * @param bool|null $approved Get reviews that are either approved (true) or unapproved (false).
     * @return self
     */
    public function setApproved(?bool $approved): self
    {
        $this->approved = $approved;
        return $this;
    }

    public function orderByIdAsc(bool $expand = true): self
    {
        $this->orderByField('id', true);
        return $this;
    }

    public function orderByIdDesc(bool $expand = true): self
    {
        $this->orderByField('id', false);
        return $this;
    }

    public function orderByPointsAsc(bool $expand = true): self
    {
        $this->orderByField('points', true);
        return $this;
    }

    public function orderByPointsDesc(bool $expand = true): self
    {
        $this->orderByField('points', false);
        return $this;
    }

    public function orderByCreatedateAsc(bool $expand = true): self
    {
        $this->orderByField('createdate', true);
        return $this;
    }

    public function orderByCreatedateDesc(bool $expand = true): self
    {
        $this->orderByField('createdate', false);
        return $this;
    }
}
