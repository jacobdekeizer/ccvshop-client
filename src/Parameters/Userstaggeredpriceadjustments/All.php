<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Userstaggeredpriceadjustments;

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
     * @var int|null User Id, see resource /users.
     */
    private ?int $userId = null;

    /**
     * @var int|null Product Id,  see resource /products.
     */
    private ?int $productId = null;

    /**
     * @var int|null Product Staggeredprice Id,  see resource /productstaggeredprices.
     */
    private ?int $staggeredpriceId = null;

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
            ->addOptionalParameter('user_id', $this->userId)
            ->addOptionalParameter('product_id', $this->productId)
            ->addOptionalParameter('staggeredprice_id', $this->staggeredpriceId);
    }

    /**
     * @return int|null User Id, see resource /users.
     */
    public function getUserId(): ?int
    {
        return $this->userId;
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
     * @param int|null $userId User Id, see resource /users.
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
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
