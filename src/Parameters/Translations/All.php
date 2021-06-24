<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Translations;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
{
    use FromArray;

    /**
     * @var bool|null If false only show keys that don't differ from the default value.
     */
    private $customValue;

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
            ->addOptionalParameter('customValue', $this->customValue)
    }

    /**
     * @return bool|null If false only show keys that don't differ from the default value.
     */
    public function getCustomValue(): ?bool
    {
        return $this->customValue;
    }

    /**
     * @param bool|null $customValue If false only show keys that don't differ from the default value.
     * @return self
     */
    public function setCustomValue(?bool $customValue): self
    {
        $this->customValue = $customValue;
        return $this;
    }
}
