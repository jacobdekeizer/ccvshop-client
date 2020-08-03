<?php

namespace JacobDeKeizer\Ccv\Parameters\Products\Concerns;

use JacobDeKeizer\Ccv\Parameters\Concerns\ExpandableFields;

trait ExpandableProductFields
{
    use ExpandableFields;

    public function expandAttributeCombinations(bool $expand = true): self
    {
        $this->expandField('attributecombinations', $expand);
        return $this;
    }

    public function expandProductAttachments(bool $expand = true): self
    {
        $this->expandField('productattachments', $expand);
        return $this;
    }

    public function expandAttributeSets(bool $expand = true): self
    {
        $this->expandField('productattributesets', $expand);
        return $this;
    }

    public function expandProductKeywords(bool $expand = true): self
    {
        $this->expandField('productkeywords', $expand);
        return $this;
    }

    public function expandProductPhotos(bool $expand = true): self
    {
        $this->expandField('productphotos', $expand);
        return $this;
    }

    public function expandProductRelevant(bool $expand = true): self
    {
        $this->expandField('productrelevant', $expand);
        return $this;
    }

    public function expandProductReviews(bool $expand = true): self
    {
        $this->expandField('productreviews', $expand);
        return $this;
    }

    public function expandProductShippingCosts(bool $expand = true): self
    {
        $this->expandField('productshippingcosts', $expand);
        return $this;
    }

    public function expandProductStaggeredPrices(bool $expand = true): self
    {
        $this->expandField('productstaggeredprices', $expand);
        return $this;
    }

    public function expandProductToCategories(bool $expand = true): self
    {
        $this->expandField('producttocategories', $expand);
        return $this;
    }

    public function expandProductVideos(bool $expand = true): self
    {
        $this->expandField('productvideos', $expand);
        return $this;
    }
}

