<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Usergroupproductadjustments;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

/**
 * This class is autogenerated.
 */
class All implements Parameter
{
    use FromArray;

    /**
     * @var int|null User Group Id, see resource /usergroups.
     */
    private ?int $usergroupId = null;

    /**
     * @var int|null Product Id,  see resource /products.
     */
    private ?int $productId = null;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    public static function fromUrl(?string $url): ?static
    {
        if ($url === null) {
            return null;
        }

        return static::fromArray(QueryParametersArrayFactory::fromUrl($url));
    }

    public function toBuilder(): QueryParameterBuilder
    {
        return (new QueryParameterBuilder())
            ->addOptionalParameter('usergroup_id', $this->usergroupId)
            ->addOptionalParameter('product_id', $this->productId);
    }

    /**
     * @return int|null User Group Id, see resource /usergroups.
     */
    public function getUsergroupId(): ?int
    {
        return $this->usergroupId;
    }

    /**
     * @return int|null Product Id,  see resource /products.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
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
     * @param int|null $productId Product Id,  see resource /products.
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }
}
