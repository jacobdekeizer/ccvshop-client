<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Parameters\Products;

use JacobDeKeizer\Ccv\Contracts\Parameter;
use JacobDeKeizer\Ccv\Factories\QueryParametersArrayFactory;
use JacobDeKeizer\Ccv\Parameters\Concerns\ExpandableFields;
use JacobDeKeizer\Ccv\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\Ccv\Traits\FromArray;

class Get implements Parameter
{
    use FromArray;
    use ExpandableFields;

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
            ->expandFields($this->getExpandedFields())
    }

    public function expandAttributecombinations(bool $expand = true): self
    {
        $this->expandField('attributecombinations', $expand);
        return $this;
    }

    public function expandProductattachments(bool $expand = true): self
    {
        $this->expandField('productattachments', $expand);
        return $this;
    }

    public function expandProductattributesets(bool $expand = true): self
    {
        $this->expandField('productattributesets', $expand);
        return $this;
    }

    public function expandProductkeywords(bool $expand = true): self
    {
        $this->expandField('productkeywords', $expand);
        return $this;
    }

    public function expandProductphotos(bool $expand = true): self
    {
        $this->expandField('productphotos', $expand);
        return $this;
    }

    public function expandProductrelevant(bool $expand = true): self
    {
        $this->expandField('productrelevant', $expand);
        return $this;
    }

    public function expandProductreviews(bool $expand = true): self
    {
        $this->expandField('productreviews', $expand);
        return $this;
    }

    public function expandProductshippingcosts(bool $expand = true): self
    {
        $this->expandField('productshippingcosts', $expand);
        return $this;
    }

    public function expandProductstaggeredprices(bool $expand = true): self
    {
        $this->expandField('productstaggeredprices', $expand);
        return $this;
    }

    public function expandProducttopropertygroups(bool $expand = true): self
    {
        $this->expandField('producttopropertygroups', $expand);
        return $this;
    }

    public function expandProducttocategories(bool $expand = true): self
    {
        $this->expandField('producttocategories', $expand);
        return $this;
    }

    public function expandProductvariants(bool $expand = true): self
    {
        $this->expandField('productvariants', $expand);
        return $this;
    }

    public function expandProductvideos(bool $expand = true): self
    {
        $this->expandField('productvideos', $expand);
        return $this;
    }
}
