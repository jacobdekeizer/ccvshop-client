<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Usercategoryadjustments;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
{
    use FromArray;

    /**
     * @var int|null User Id, see resource /users.
     */
    private $userId;

    /**
     * @var int|null Category Id,  see resource /categories.
     */
    private $categoryId;

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
            ->addOptionalParameter('userId', $this->userId)
            ->addOptionalParameter('categoryId', $this->categoryId)
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
