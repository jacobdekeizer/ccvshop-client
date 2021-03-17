<?php

namespace JacobDeKeizer\Ccv\Models\Categories\Categories;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Patch implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Category name
     */
    private $name;

    /**
     * @var string|null Category description
     */
    private $description;

    /**
     * @var string|null Category description on the bottom of the page
     */
    private $descriptionBottom;

    /**
     * @var string|null Search keywords
     */
    private $searchwords;

    /**
     * @var string|null Description photo position
     */
    private $descriptionPhotoPosition;

    /**
     * @var string|null Description photo size
     */
    private $descriptionPhotoSize;

    /**
     * @var string|null Base64 encode image
     */
    private $descriptionPhotoSource;

    /**
     * @var string|null File extension jpg,gif,png etc
     */
    private $descriptionPhotoFileType;

    /**
     * @var int|null The unique Id of the layout of the products in this category. A list of the layouts is available in the resource categoryproductlayouts
     */
    private $layoutOfProductsId;

    /**
     * @var int|null Color scheme number. Only used in certain category layouts.1: Blue. 2: Yellow. 3: Gray. 4: Green. 5: Orange. 6: Purple. 7: Red.
     */
    private $color;

    /**
     * @var int|null Alternative color scheme. Only used in certain category layouts. 1: Blue. 2: Yellow. 3: Gray. 4: Green. 5: Orange. 6: Purple. 7: Red.
     */
    private $colorAlternative;

    /**
     * @var int|null The layout id of the categories in this category. 1: Images with category name. 2: List with category names. 3: Images with sliding category name.4: Images in enlarging blocks.5: Large images with sliding category name. 2001: ProTOM lay-out SubCategory1.sub.tpl. 2002: ProTOM lay-out SubCategory2.sub.tpl.
     */
    private $layoutOfCategoriesId;

    /**
     * @var string|null Base 64 encode photo source
     */
    private $photoSource;

    /**
     * @var string|null Photo extension.
     */
    private $photoFileType;

    /**
     * @var bool|null Show a larger photo on mouseover.
     */
    private $showBigPhoto;

    /**
     * @var bool|null Product photos will be zoomed in and cropped onto a canvas. Only used in certain category layouts.
     */
    private $productphotoInCanvas;

    /**
     * @var bool|null Show the product order button.
     */
    private $showOrderbutton;

    /**
     * @var string|null The order in which the products are sorted in this category
     */
    private $orderby;

    /**
     * @var int|null Number of items per page
     */
    private $itemsPerPage;

    /**
     * @var int|null Category position
     */
    private $position;

    /**
     * @var bool|null Category visible on website
     */
    private $showOnWebsite;

    /**
     * @var int|null Category parent id
     */
    private $parentcategoryId;

    /**
     * @var string|null Metatag Description
     */
    private $metaDescription;

    /**
     * @var string|null Metatag Keywords
     */
    private $metaKeywords;

    /**
     * @var string|null Page title
     */
    private $pageTitle;

    /**
     * @var bool|null Metatag robots: No-Index
     */
    private $noIndex;

    /**
     * @var bool|null Metatag robots: No-Follow
     */
    private $noFollow;

    /**
     * @var string|null SEO Alias of this resource
     */
    private $alias;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null Category name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null Category description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null Category description on the bottom of the page
     */
    public function getDescriptionBottom(): ?string
    {
        return $this->descriptionBottom;
    }

    /**
     * @return string|null Search keywords
     */
    public function getSearchwords(): ?string
    {
        return $this->searchwords;
    }

    /**
     * @return string|null Description photo position
     */
    public function getDescriptionPhotoPosition(): ?string
    {
        return $this->descriptionPhotoPosition;
    }

    /**
     * @return string|null Description photo size
     */
    public function getDescriptionPhotoSize(): ?string
    {
        return $this->descriptionPhotoSize;
    }

    /**
     * @return string|null Base64 encode image
     */
    public function getDescriptionPhotoSource(): ?string
    {
        return $this->descriptionPhotoSource;
    }

    /**
     * @return string|null File extension jpg,gif,png etc
     */
    public function getDescriptionPhotoFileType(): ?string
    {
        return $this->descriptionPhotoFileType;
    }

    /**
     * @return int|null The unique Id of the layout of the products in this category. A list of the layouts is available in the resource categoryproductlayouts
     */
    public function getLayoutOfProductsId(): ?int
    {
        return $this->layoutOfProductsId;
    }

    /**
     * @return int|null Color scheme number. Only used in certain category layouts.1: Blue. 2: Yellow. 3: Gray. 4: Green. 5: Orange. 6: Purple. 7: Red.
     */
    public function getColor(): ?int
    {
        return $this->color;
    }

    /**
     * @return int|null Alternative color scheme. Only used in certain category layouts. 1: Blue. 2: Yellow. 3: Gray. 4: Green. 5: Orange. 6: Purple. 7: Red.
     */
    public function getColorAlternative(): ?int
    {
        return $this->colorAlternative;
    }

    /**
     * @return int|null The layout id of the categories in this category. 1: Images with category name. 2: List with category names. 3: Images with sliding category name.4: Images in enlarging blocks.5: Large images with sliding category name. 2001: ProTOM lay-out SubCategory1.sub.tpl. 2002: ProTOM lay-out SubCategory2.sub.tpl.
     */
    public function getLayoutOfCategoriesId(): ?int
    {
        return $this->layoutOfCategoriesId;
    }

    /**
     * @return string|null Base 64 encode photo source
     */
    public function getPhotoSource(): ?string
    {
        return $this->photoSource;
    }

    /**
     * @return string|null Photo extension.
     */
    public function getPhotoFileType(): ?string
    {
        return $this->photoFileType;
    }

    /**
     * @return bool|null Show a larger photo on mouseover.
     */
    public function getShowBigPhoto(): ?bool
    {
        return $this->showBigPhoto;
    }

    /**
     * @return bool|null Product photos will be zoomed in and cropped onto a canvas. Only used in certain category layouts.
     */
    public function getProductphotoInCanvas(): ?bool
    {
        return $this->productphotoInCanvas;
    }

    /**
     * @return bool|null Show the product order button.
     */
    public function getShowOrderbutton(): ?bool
    {
        return $this->showOrderbutton;
    }

    /**
     * @return string|null The order in which the products are sorted in this category
     */
    public function getOrderby(): ?string
    {
        return $this->orderby;
    }

    /**
     * @return int|null Number of items per page
     */
    public function getItemsPerPage(): ?int
    {
        return $this->itemsPerPage;
    }

    /**
     * @return int|null Category position
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return bool|null Category visible on website
     */
    public function getShowOnWebsite(): ?bool
    {
        return $this->showOnWebsite;
    }

    /**
     * @return int|null Category parent id
     */
    public function getParentcategoryId(): ?int
    {
        return $this->parentcategoryId;
    }

    /**
     * @return string|null Metatag Description
     */
    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    /**
     * @return string|null Metatag Keywords
     */
    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    /**
     * @return string|null Page title
     */
    public function getPageTitle(): ?string
    {
        return $this->pageTitle;
    }

    /**
     * @return bool|null Metatag robots: No-Index
     */
    public function getNoIndex(): ?bool
    {
        return $this->noIndex;
    }

    /**
     * @return bool|null Metatag robots: No-Follow
     */
    public function getNoFollow(): ?bool
    {
        return $this->noFollow;
    }

    /**
     * @return string|null SEO Alias of this resource
     */
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string|null $name Category name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string|null $description Category description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        $this->propertyFilled('description');
        return $this;
    }

    /**
     * @param string|null $descriptionBottom Category description on the bottom of the page
     * @return self
     */
    public function setDescriptionBottom(?string $descriptionBottom): self
    {
        $this->descriptionBottom = $descriptionBottom;
        $this->propertyFilled('descriptionBottom');
        return $this;
    }

    /**
     * @param string|null $searchwords Search keywords
     * @return self
     */
    public function setSearchwords(?string $searchwords): self
    {
        $this->searchwords = $searchwords;
        $this->propertyFilled('searchwords');
        return $this;
    }

    /**
     * @param string|null $descriptionPhotoPosition Description photo position
     * @return self
     */
    public function setDescriptionPhotoPosition(?string $descriptionPhotoPosition): self
    {
        $this->descriptionPhotoPosition = $descriptionPhotoPosition;
        $this->propertyFilled('descriptionPhotoPosition');
        return $this;
    }

    /**
     * @param string|null $descriptionPhotoSize Description photo size
     * @return self
     */
    public function setDescriptionPhotoSize(?string $descriptionPhotoSize): self
    {
        $this->descriptionPhotoSize = $descriptionPhotoSize;
        $this->propertyFilled('descriptionPhotoSize');
        return $this;
    }

    /**
     * @param string|null $descriptionPhotoSource Base64 encode image
     * @return self
     */
    public function setDescriptionPhotoSource(?string $descriptionPhotoSource): self
    {
        $this->descriptionPhotoSource = $descriptionPhotoSource;
        $this->propertyFilled('descriptionPhotoSource');
        return $this;
    }

    /**
     * @param string|null $descriptionPhotoFileType File extension jpg,gif,png etc
     * @return self
     */
    public function setDescriptionPhotoFileType(?string $descriptionPhotoFileType): self
    {
        $this->descriptionPhotoFileType = $descriptionPhotoFileType;
        $this->propertyFilled('descriptionPhotoFileType');
        return $this;
    }

    /**
     * @param int|null $layoutOfProductsId The unique Id of the layout of the products in this category. A list of the layouts is available in the resource categoryproductlayouts
     * @return self
     */
    public function setLayoutOfProductsId(?int $layoutOfProductsId): self
    {
        $this->layoutOfProductsId = $layoutOfProductsId;
        $this->propertyFilled('layoutOfProductsId');
        return $this;
    }

    /**
     * @param int|null $color Color scheme number. Only used in certain category layouts.1: Blue. 2: Yellow. 3: Gray. 4: Green. 5: Orange. 6: Purple. 7: Red.
     * @return self
     */
    public function setColor(?int $color): self
    {
        $this->color = $color;
        $this->propertyFilled('color');
        return $this;
    }

    /**
     * @param int|null $colorAlternative Alternative color scheme. Only used in certain category layouts. 1: Blue. 2: Yellow. 3: Gray. 4: Green. 5: Orange. 6: Purple. 7: Red.
     * @return self
     */
    public function setColorAlternative(?int $colorAlternative): self
    {
        $this->colorAlternative = $colorAlternative;
        $this->propertyFilled('colorAlternative');
        return $this;
    }

    /**
     * @param int|null $layoutOfCategoriesId The layout id of the categories in this category. 1: Images with category name. 2: List with category names. 3: Images with sliding category name.4: Images in enlarging blocks.5: Large images with sliding category name. 2001: ProTOM lay-out SubCategory1.sub.tpl. 2002: ProTOM lay-out SubCategory2.sub.tpl.
     * @return self
     */
    public function setLayoutOfCategoriesId(?int $layoutOfCategoriesId): self
    {
        $this->layoutOfCategoriesId = $layoutOfCategoriesId;
        $this->propertyFilled('layoutOfCategoriesId');
        return $this;
    }

    /**
     * @param string|null $photoSource Base 64 encode photo source
     * @return self
     */
    public function setPhotoSource(?string $photoSource): self
    {
        $this->photoSource = $photoSource;
        $this->propertyFilled('photoSource');
        return $this;
    }

    /**
     * @param string|null $photoFileType Photo extension.
     * @return self
     */
    public function setPhotoFileType(?string $photoFileType): self
    {
        $this->photoFileType = $photoFileType;
        $this->propertyFilled('photoFileType');
        return $this;
    }

    /**
     * @param bool|null $showBigPhoto Show a larger photo on mouseover.
     * @return self
     */
    public function setShowBigPhoto(?bool $showBigPhoto): self
    {
        $this->showBigPhoto = $showBigPhoto;
        $this->propertyFilled('showBigPhoto');
        return $this;
    }

    /**
     * @param bool|null $productphotoInCanvas Product photos will be zoomed in and cropped onto a canvas. Only used in certain category layouts.
     * @return self
     */
    public function setProductphotoInCanvas(?bool $productphotoInCanvas): self
    {
        $this->productphotoInCanvas = $productphotoInCanvas;
        $this->propertyFilled('productphotoInCanvas');
        return $this;
    }

    /**
     * @param bool|null $showOrderbutton Show the product order button.
     * @return self
     */
    public function setShowOrderbutton(?bool $showOrderbutton): self
    {
        $this->showOrderbutton = $showOrderbutton;
        $this->propertyFilled('showOrderbutton');
        return $this;
    }

    /**
     * @param string|null $orderby The order in which the products are sorted in this category
     * @return self
     */
    public function setOrderby(?string $orderby): self
    {
        $this->orderby = $orderby;
        $this->propertyFilled('orderby');
        return $this;
    }

    /**
     * @param int|null $itemsPerPage Number of items per page
     * @return self
     */
    public function setItemsPerPage(?int $itemsPerPage): self
    {
        $this->itemsPerPage = $itemsPerPage;
        $this->propertyFilled('itemsPerPage');
        return $this;
    }

    /**
     * @param int|null $position Category position
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        $this->propertyFilled('position');
        return $this;
    }

    /**
     * @param bool|null $showOnWebsite Category visible on website
     * @return self
     */
    public function setShowOnWebsite(?bool $showOnWebsite): self
    {
        $this->showOnWebsite = $showOnWebsite;
        $this->propertyFilled('showOnWebsite');
        return $this;
    }

    /**
     * @param int|null $parentcategoryId Category parent id
     * @return self
     */
    public function setParentcategoryId(?int $parentcategoryId): self
    {
        $this->parentcategoryId = $parentcategoryId;
        $this->propertyFilled('parentcategoryId');
        return $this;
    }

    /**
     * @param string|null $metaDescription Metatag Description
     * @return self
     */
    public function setMetaDescription(?string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;
        $this->propertyFilled('metaDescription');
        return $this;
    }

    /**
     * @param string|null $metaKeywords Metatag Keywords
     * @return self
     */
    public function setMetaKeywords(?string $metaKeywords): self
    {
        $this->metaKeywords = $metaKeywords;
        $this->propertyFilled('metaKeywords');
        return $this;
    }

    /**
     * @param string|null $pageTitle Page title
     * @return self
     */
    public function setPageTitle(?string $pageTitle): self
    {
        $this->pageTitle = $pageTitle;
        $this->propertyFilled('pageTitle');
        return $this;
    }

    /**
     * @param bool|null $noIndex Metatag robots: No-Index
     * @return self
     */
    public function setNoIndex(?bool $noIndex): self
    {
        $this->noIndex = $noIndex;
        $this->propertyFilled('noIndex');
        return $this;
    }

    /**
     * @param bool|null $noFollow Metatag robots: No-Follow
     * @return self
     */
    public function setNoFollow(?bool $noFollow): self
    {
        $this->noFollow = $noFollow;
        $this->propertyFilled('noFollow');
        return $this;
    }

    /**
     * @param string|null $alias SEO Alias of this resource
     * @return self
     */
    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;
        $this->propertyFilled('alias');
        return $this;
    }
}
