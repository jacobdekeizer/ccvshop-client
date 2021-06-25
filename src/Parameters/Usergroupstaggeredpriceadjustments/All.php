<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Usergroupstaggeredpriceadjustments;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
{
    use FromArray;

    /**
     * @var int|null User Id, see resource /usergroups.
     */
    private $usergroupId;

    /**
     * @var int|null Product Id,  see resource /products.
     */
    private $productId;

    /**
     * @var int|null Product Staggeredprice Id,  see resource /productstaggeredprices.
     */
    private $staggeredpriceId;

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
            ->addOptionalParameter('usergroupId', $this->usergroupId)
            ->addOptionalParameter('productId', $this->productId)
            ->addOptionalParameter('staggeredpriceId', $this->staggeredpriceId)
    }

    /**
     * @return int|null User Id, see resource /usergroups.
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
     * @return int|null Product Staggeredprice Id,  see resource /productstaggeredprices.
     */
    public function getStaggeredpriceId(): ?int
    {
        return $this->staggeredpriceId;
    }

    /**
     * @param int|null $usergroupId User Id, see resource /usergroups.
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

    /**
     * @param int|null $staggeredpriceId Product Staggeredprice Id,  see resource /productstaggeredprices.
     * @return self
     */
    public function setStaggeredpriceId(?int $staggeredpriceId): self
    {
        $this->staggeredpriceId = $staggeredpriceId;
        return $this;
    }
}
