<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Colors;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class All implements Parameter
{
    use FromArray;

    /**
     * @var string|null A hex code, multicolor, transparent to filter that color.
     */
    private $color;

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
            ->addOptionalParameter('color', $this->color);
    }

    /**
     * @return string|null A hex code, multicolor, transparent to filter that color.
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color A hex code, multicolor, transparent to filter that color.
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }
}
