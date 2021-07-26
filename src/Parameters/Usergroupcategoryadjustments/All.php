<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Usergroupcategoryadjustments;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
{
    use FromArray;

    /**
     * @var int|null User Group Id, see resource /usergroups.
     */
    private $usergroupId;

    /**
     * @var int|null Category Id,  see resource /categories.
     */
    private $categoryId;

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
            ->addOptionalParameter('usergroupId', $this->usergroupId)
            ->addOptionalParameter('categoryId', $this->categoryId);
    }

    /**
     * @return int|null User Group Id, see resource /usergroups.
     */
    public function getUsergroupId(): ?int
    {
        return $this->usergroupId;
    }

    /**
     * @return int|null Category Id,  see resource /categories.
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int|null $usergroupId User Group Id, see resource /usergroups.
     * @return self
     */
    public function setUsergroupId(?int $usergroupId): self
    {
        $this->usergroupId = $usergroupId;
        return $this;
    }

    /**
     * @param int|null $categoryId Category Id,  see resource /categories.
     * @return self
     */
    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }
}
