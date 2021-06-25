<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Discountcoupons;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\SortableFields;
use JacobDeKeizer\Ccv\Parameters\PaginatedList;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All extends PaginatedList implements Parameter
{
    use FromArray;
    use SortableFields;

    /**
     * @var string|null Minimal begin date of the coupons in the result.
     */
    private $minBegindate;

    /**
     * @var string|null Maximal begin date of the coupons in the result.
     */
    private $maxBegindate;

    /**
     * @var string|null Minimal end date of the coupons in the result.
     */
    private $minEnddate;

    /**
     * @var string|null Maximal end date of the coupons in the result.
     */
    private $maxEnddate;

    /**
     * @var bool|null Show coupons that can only be used once. If false it will only show coupons that can be used multiple times.
     */
    private $onetimeuse;

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
            return null;
        }

        return self::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (parent::toBuilder())
            ->addOptionalParameter('minBegindate', $this->minBegindate)
            ->addOptionalParameter('maxBegindate', $this->maxBegindate)
            ->addOptionalParameter('minEnddate', $this->minEnddate)
            ->addOptionalParameter('maxEnddate', $this->maxEnddate)
            ->addOptionalParameter('onetimeuse', $this->onetimeuse)
            ->orderBy($this->getOrderBy());
    }

    /**
     * @return string|null Minimal begin date of the coupons in the result.
     */
    public function getMinBegindate(): ?string
    {
        return $this->minBegindate;
    }

    /**
     * @return string|null Maximal begin date of the coupons in the result.
     */
    public function getMaxBegindate(): ?string
    {
        return $this->maxBegindate;
    }

    /**
     * @return string|null Minimal end date of the coupons in the result.
     */
    public function getMinEnddate(): ?string
    {
        return $this->minEnddate;
    }

    /**
     * @return string|null Maximal end date of the coupons in the result.
     */
    public function getMaxEnddate(): ?string
    {
        return $this->maxEnddate;
    }

    /**
     * @return bool|null Show coupons that can only be used once. If false it will only show coupons that can be used multiple times.
     */
    public function getOnetimeuse(): ?bool
    {
        return $this->onetimeuse;
    }

    /**
     * @param string|null $minBegindate Minimal begin date of the coupons in the result.
     * @return self
     */
    public function setMinBegindate(?string $minBegindate): self
    {
        $this->minBegindate = $minBegindate;
        return $this;
    }

    /**
     * @param string|null $maxBegindate Maximal begin date of the coupons in the result.
     * @return self
     */
    public function setMaxBegindate(?string $maxBegindate): self
    {
        $this->maxBegindate = $maxBegindate;
        return $this;
    }

    /**
     * @param string|null $minEnddate Minimal end date of the coupons in the result.
     * @return self
     */
    public function setMinEnddate(?string $minEnddate): self
    {
        $this->minEnddate = $minEnddate;
        return $this;
    }

    /**
     * @param string|null $maxEnddate Maximal end date of the coupons in the result.
     * @return self
     */
    public function setMaxEnddate(?string $maxEnddate): self
    {
        $this->maxEnddate = $maxEnddate;
        return $this;
    }

    /**
     * @param bool|null $onetimeuse Show coupons that can only be used once. If false it will only show coupons that can be used multiple times.
     * @return self
     */
    public function setOnetimeuse(?bool $onetimeuse): self
    {
        $this->onetimeuse = $onetimeuse;
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

    public function orderByBegindateAsc(): self
    {
        $this->orderByField('begindate', true);
        return $this;
    }

    public function orderByBegindateDesc(): self
    {
        $this->orderByField('begindate', false);
        return $this;
    }

    public function orderByEnddateAsc(): self
    {
        $this->orderByField('enddate', true);
        return $this;
    }

    public function orderByEnddateDesc(): self
    {
        $this->orderByField('enddate', false);
        return $this;
    }

    public function orderByTypeAsc(): self
    {
        $this->orderByField('type', true);
        return $this;
    }

    public function orderByTypeDesc(): self
    {
        $this->orderByField('type', false);
        return $this;
    }
}
