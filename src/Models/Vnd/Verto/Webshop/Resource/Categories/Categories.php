<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Categories implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string|null Link to self
     */
    private ?string $href;

    /**
     * @var int|null Unique id of the resource
     */
    private ?int $id;

    /**
     * @var string|null Category name
     */
    private ?string $name;

    /**
     * @var string|null Category description
     */
    private ?string $description;

    /**
     * @var string|null Category description photo size.
     */
    private ?string $descriptionPhotoSize;

    /**
     * @var string|null Category description photo position
     */
    private ?string $descriptionPhotoPosition;

    /**
     * @var string|null Category description photo
     */
    private ?string $descriptionPhoto;

    /**
     * @var string|null Category description on the bottom of the page
     */
    private ?string $descriptionBottom;

    /**
     * @var string|null Search keywords
     */
    private ?string $searchwords;

    /**
     * @var string|null Link to the photo.
     */
    private ?string $photo;

    /**
     * @var bool|null Show a larger photo on mouseover.
     */
    private ?bool $showBigPhoto;

    /**
     * @var bool|null Product photos will be zoomed in and cropped onto a canvas. Only used in certain category layouts.
     */
    private ?bool $productphotoInCanvas;

    /**
     * @var bool|null Show the product order button.
     */
    private ?bool $showOrderbutton;

    /**
     * @var string|null The order in which the products are sorted in this category
     */
    private ?string $orderby;

    /**
     * @var int|null Number of items per page
     */
    private ?int $itemsPerPage;

    /**
     * @var int|null Category position
     */
    private ?int $position;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\LayoutOfProducts|null Layout of the products in this category
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\LayoutOfProducts $layoutOfProducts;

    /**
     * @var int|null The layout id of the sub categories in this category. 1: Images with category name. 2: List with category names. 3: Images with sliding category name.4: Images in enlarging blocks.5: Large images with sliding category name. 2001: ProTOM lay-out SubCategory1.sub.tpl. 2002: ProTOM lay-out SubCategory2.sub.tpl.
     */
    private ?int $layoutOfCategoriesId;

    /**
     * @var bool|null Category visible on website
     */
    private ?bool $showOnWebsite;

    /**
     * @var int|null Color scheme number. Only used in certain category layouts.1: Blue. 2: Yellow. 3: Gray. 4: Green. 5: Orange. 6: Purple. 7: Red.
     */
    private ?int $color;

    /**
     * @var int|null Alternative color scheme. Only used in certain category layouts. 1: Blue. 2: Yellow. 3: Gray. 4: Green. 5: Orange. 6: Purple. 7: Red.
     */
    private ?int $colorAlternative;

    /**
     * @var string|null Metatag Description
     */
    private ?string $metaDescription;

    /**
     * @var string|null Metatag Keywords
     */
    private ?string $metaKeywords;

    /**
     * @var string|null Page title
     */
    private ?string $pageTitle;

    /**
     * @var bool|null Metatag robots: No-Index
     */
    private ?bool $noIndex;

    /**
     * @var bool|null Metatag robots: No-Follow
     */
    private ?bool $noFollow;

    /**
     * @var string|null SEO Alias of this resource
     */
    private ?string $alias;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Producttocategories|null Category products
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Producttocategories $producttocategories;

    /**
     * @var string|null Deeplink to this resource
     */
    private ?string $deeplink;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Categories|null Children categories of this category
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Categories $categories;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Parentcategory|null Parent category
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Parentcategory $parentcategory;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\ParentItem|null Parent resource of this resource
     */
    private ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\ParentItem $parent;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string|null Link to self
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @return int|null Unique id of the resource
     */
    public function getId(): ?int
    {
        return $this->id;
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
     * @return string|null Category description photo size.
     */
    public function getDescriptionPhotoSize(): ?string
    {
        return $this->descriptionPhotoSize;
    }

    /**
     * @return string|null Category description photo position
     */
    public function getDescriptionPhotoPosition(): ?string
    {
        return $this->descriptionPhotoPosition;
    }

    /**
     * @return string|null Category description photo
     */
    public function getDescriptionPhoto(): ?string
    {
        return $this->descriptionPhoto;
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
     * @return string|null Link to the photo.
     */
    public function getPhoto(): ?string
    {
        return $this->photo;
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
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\LayoutOfProducts|null Layout of the products in this category
     */
    public function getLayoutOfProducts(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\LayoutOfProducts
    {
        return $this->layoutOfProducts;
    }

    /**
     * @return int|null The layout id of the sub categories in this category. 1: Images with category name. 2: List with category names. 3: Images with sliding category name.4: Images in enlarging blocks.5: Large images with sliding category name. 2001: ProTOM lay-out SubCategory1.sub.tpl. 2002: ProTOM lay-out SubCategory2.sub.tpl.
     */
    public function getLayoutOfCategoriesId(): ?int
    {
        return $this->layoutOfCategoriesId;
    }

    /**
     * @return bool|null Category visible on website
     */
    public function getShowOnWebsite(): ?bool
    {
        return $this->showOnWebsite;
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
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Producttocategories|null Category products
     */
    public function getProducttocategories(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Producttocategories
    {
        return $this->producttocategories;
    }

    /**
     * @return string|null Deeplink to this resource
     */
    public function getDeeplink(): ?string
    {
        return $this->deeplink;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Categories|null Children categories of this category
     */
    public function getCategories(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Categories
    {
        return $this->categories;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Parentcategory|null Parent category
     */
    public function getParentcategory(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Parentcategory
    {
        return $this->parentcategory;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\ParentItem|null Parent resource of this resource
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\ParentItem
    {
        return $this->parent;
    }

    /**
     * @param string|null $href Link to self
     * @return self
     */
    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param int|null $id Unique id of the resource
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string|null $name Category name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string|null $description Category description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string|null $descriptionPhotoSize Category description photo size.
     * @return self
     */
    public function setDescriptionPhotoSize(?string $descriptionPhotoSize): self
    {
        $this->descriptionPhotoSize = $descriptionPhotoSize;
        return $this;
    }

    /**
     * @param string|null $descriptionPhotoPosition Category description photo position
     * @return self
     */
    public function setDescriptionPhotoPosition(?string $descriptionPhotoPosition): self
    {
        $this->descriptionPhotoPosition = $descriptionPhotoPosition;
        return $this;
    }

    /**
     * @param string|null $descriptionPhoto Category description photo
     * @return self
     */
    public function setDescriptionPhoto(?string $descriptionPhoto): self
    {
        $this->descriptionPhoto = $descriptionPhoto;
        return $this;
    }

    /**
     * @param string|null $descriptionBottom Category description on the bottom of the page
     * @return self
     */
    public function setDescriptionBottom(?string $descriptionBottom): self
    {
        $this->descriptionBottom = $descriptionBottom;
        return $this;
    }

    /**
     * @param string|null $searchwords Search keywords
     * @return self
     */
    public function setSearchwords(?string $searchwords): self
    {
        $this->searchwords = $searchwords;
        return $this;
    }

    /**
     * @param string|null $photo Link to the photo.
     * @return self
     */
    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @param bool|null $showBigPhoto Show a larger photo on mouseover.
     * @return self
     */
    public function setShowBigPhoto(?bool $showBigPhoto): self
    {
        $this->showBigPhoto = $showBigPhoto;
        return $this;
    }

    /**
     * @param bool|null $productphotoInCanvas Product photos will be zoomed in and cropped onto a canvas. Only used in certain category layouts.
     * @return self
     */
    public function setProductphotoInCanvas(?bool $productphotoInCanvas): self
    {
        $this->productphotoInCanvas = $productphotoInCanvas;
        return $this;
    }

    /**
     * @param bool|null $showOrderbutton Show the product order button.
     * @return self
     */
    public function setShowOrderbutton(?bool $showOrderbutton): self
    {
        $this->showOrderbutton = $showOrderbutton;
        return $this;
    }

    /**
     * @param string|null $orderby The order in which the products are sorted in this category
     * @return self
     */
    public function setOrderby(?string $orderby): self
    {
        $this->orderby = $orderby;
        return $this;
    }

    /**
     * @param int|null $itemsPerPage Number of items per page
     * @return self
     */
    public function setItemsPerPage(?int $itemsPerPage): self
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }

    /**
     * @param int|null $position Category position
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\LayoutOfProducts|null $layoutOfProducts Layout of the products in this category
     * @return self
     */
    public function setLayoutOfProducts(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\LayoutOfProducts $layoutOfProducts): self
    {
        $this->layoutOfProducts = $layoutOfProducts;
        return $this;
    }

    /**
     * @param int|null $layoutOfCategoriesId The layout id of the sub categories in this category. 1: Images with category name. 2: List with category names. 3: Images with sliding category name.4: Images in enlarging blocks.5: Large images with sliding category name. 2001: ProTOM lay-out SubCategory1.sub.tpl. 2002: ProTOM lay-out SubCategory2.sub.tpl.
     * @return self
     */
    public function setLayoutOfCategoriesId(?int $layoutOfCategoriesId): self
    {
        $this->layoutOfCategoriesId = $layoutOfCategoriesId;
        return $this;
    }

    /**
     * @param bool|null $showOnWebsite Category visible on website
     * @return self
     */
    public function setShowOnWebsite(?bool $showOnWebsite): self
    {
        $this->showOnWebsite = $showOnWebsite;
        return $this;
    }

    /**
     * @param int|null $color Color scheme number. Only used in certain category layouts.1: Blue. 2: Yellow. 3: Gray. 4: Green. 5: Orange. 6: Purple. 7: Red.
     * @return self
     */
    public function setColor(?int $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @param int|null $colorAlternative Alternative color scheme. Only used in certain category layouts. 1: Blue. 2: Yellow. 3: Gray. 4: Green. 5: Orange. 6: Purple. 7: Red.
     * @return self
     */
    public function setColorAlternative(?int $colorAlternative): self
    {
        $this->colorAlternative = $colorAlternative;
        return $this;
    }

    /**
     * @param string|null $metaDescription Metatag Description
     * @return self
     */
    public function setMetaDescription(?string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    /**
     * @param string|null $metaKeywords Metatag Keywords
     * @return self
     */
    public function setMetaKeywords(?string $metaKeywords): self
    {
        $this->metaKeywords = $metaKeywords;
        return $this;
    }

    /**
     * @param string|null $pageTitle Page title
     * @return self
     */
    public function setPageTitle(?string $pageTitle): self
    {
        $this->pageTitle = $pageTitle;
        return $this;
    }

    /**
     * @param bool|null $noIndex Metatag robots: No-Index
     * @return self
     */
    public function setNoIndex(?bool $noIndex): self
    {
        $this->noIndex = $noIndex;
        return $this;
    }

    /**
     * @param bool|null $noFollow Metatag robots: No-Follow
     * @return self
     */
    public function setNoFollow(?bool $noFollow): self
    {
        $this->noFollow = $noFollow;
        return $this;
    }

    /**
     * @param string|null $alias SEO Alias of this resource
     * @return self
     */
    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Producttocategories|null $producttocategories Category products
     * @return self
     */
    public function setProducttocategories(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Producttocategories $producttocategories): self
    {
        $this->producttocategories = $producttocategories;
        return $this;
    }

    /**
     * @param string|null $deeplink Deeplink to this resource
     * @return self
     */
    public function setDeeplink(?string $deeplink): self
    {
        $this->deeplink = $deeplink;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Categories|null $categories Children categories of this category
     * @return self
     */
    public function setCategories(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Categories $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Parentcategory|null $parentcategory Parent category
     * @return self
     */
    public function setParentcategory(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\Parentcategory $parentcategory): self
    {
        $this->parentcategory = $parentcategory;
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\ParentItem|null $parent Parent resource of this resource
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Categories\Child\ParentItem $parent): self
    {
        $this->parent = $parent;
        return $this;
    }
}
