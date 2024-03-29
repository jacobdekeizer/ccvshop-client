<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Usercategoryadjustments;

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
     * @var int|null Category Id,  see resource /categories.
     */
    private ?int $categoryId = null;

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
            ->addOptionalParameter('category_id', $this->categoryId);
    }

    /**
     * @return int|null User Id, see resource /users.
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @return int|null Category Id,  see resource /categories.
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
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
     * @param int|null $categoryId Category Id,  see resource /categories.
     * @return self
     */
    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }
}
