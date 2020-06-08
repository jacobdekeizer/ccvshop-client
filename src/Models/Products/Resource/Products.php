<?php

namespace JacobDeKeizer\Ccv\Models\Products\Resource;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Products implements Model
{
    use FromArray, ToArray;

    /**
     * @var string Link to self
     */
    private $href;

    /**
     * @var int Unique id of the resource
     */
    private $id;

    /**
     * @var bool Indicates if (true) this product is active or (false) inactive.
     */
    private $isActive;

    /**
     * @var string Create date of product in UTC
     */
    private $createdate;

    /**
     * @var string Last modify date of product in UTC
     */
    private $modifydate;

    /**
     * @var string Product number
     */
    private $productnumber;

    /**
     * @var string EAN (European Article Number)
     */
    private $eannumber;

    /**
     * @var string Manufacturer Product Number
     */
    private $mpnnumber;

    /**
     * @var bool Indicates if (true) this product is managed in a multishop or (false) is a single webshop product. Multishop products can't be fully editted.
     */
    private $isMultishopProduct;

    /**
     * @var string Product name
     */
    private $name;

    /**
     * @var string Product short description
     */
    private $shortdescription;

    /**
     * @var string|null Product description
     */
    private $description;

    /**
     * @var float VAT rate of product in percentage
     */
    private $vatrate;

    /**
     * @var float Original price of the product, before discounts
     */
    private $price;

    /**
     * @var float Discount on the product. Price - Discount = Sell price
     */
    private $discount;

    /**
     * @var float Purchase price ex. VAT off this product.
     */
    private $purchaseprice;

    /**
     * @var float This price will be added to the total price as a container deposit (in Dutch: Statiegeld).
     */
    private $containerDepositPrice;

    /**
     * @var float This price will be added to the total price as a safety deposit (in Dutch: Borg).
     */
    private $safetyDepositPrice;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productshippingcosts Describes the bases shipping costs and a link to shipping costs per country.
     */
    private $productshippingcosts;

    /**
     * @var int|null Custom creditpoints for this product
     */
    private $creditPointsCustom;

    /**
     * @var int|null Calculated creditpoints for this product
     */
    private $creditPointsCalculated;

    /**
     * @var string|null The unit in which this product is sold (ie 'per piece')
     */
    private $unit;

    /**
     * @var bool|null This product has stock
     */
    private $stockenabled;

    /**
     * @var string|null If the stock amount is linked to the product of the attribute combination
     */
    private $stocktype;

    /**
     * @var float|null The quantity in stock for this product
     */
    private $stock;

    /**
     * @var string The location of the product's stock
     */
    private $stocklocation;

    /**
     * @var string|null Allow or dissallow ordering of this product when there is no stock. The default option 'global_setting' means the global webshop setting 'Starting point > My web shop > Settings > Ordering process & stock > Stock Options Allow the sale of more products than in stock' will be used for this product.
     */
    private $orderingWithoutStock;

    /**
     * @var float Weight of the product in kilograms
     */
    private $weight;

    /**
     * @var string|null The main categorie of this product.
     */
    private $maincategory;

    /**
     * @var string The sub categorie of this product.
     */
    private $subcategory;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Brand|null Brand resource
     */
    private $brand;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Condition|null Condition resource
     */
    private $condition;

    /**
     * @var string|null Link to mainphoto
     */
    private $productmainphoto;

    /**
     * @var string Metatag Description
     */
    private $metaDescription;

    /**
     * @var string Metatag Keywords
     */
    private $metaKeywords;

    /**
     * @var string Page title
     */
    private $pageTitle;

    /**
     * @var bool Metatag robots: No-Index
     */
    private $noIndex;

    /**
     * @var bool Metatag robots: No-Follow
     */
    private $noFollow;

    /**
     * @var string SEO Alias of this resource
     */
    private $alias;

    /**
     * @var string Deeplink to this resource
     */
    private $deeplink;

    /**
     * @var string|null Specification link
     */
    private $specs;

    /**
     * @var int Number of decimals that can be used in amounts
     */
    private $decimalAmount;

    /**
     * @var float Minimal order amount
     */
    private $minimalOrderAmount;

    /**
     * @var int Expected delivery time, number of days, weeks, months, quarters, years
     */
    private $stockDeliveryNumber;

    /**
     * @var string Expected delivery type
     */
    private $stockDeliveryType;

    /**
     * @var string This field will be showed as the standard delivery text
     */
    private $stockDeliveryStandard;

    /**
     * @var bool Show the product in the window offers
     */
    private $showInTemplate;

    /**
     * @var bool Show the product as a offer at the beginpage or offer element
     */
    private $showOnBeginpage;

    /**
     * @var bool Show the product in the facebook shop when available
     */
    private $showOnFacebook;

    /**
     * @var string Show order/offer button.  Y=show   QUOTATION=offer button   N=No button
     */
    private $showOrderButton;

    /**
     * @var int Product Layout   1=Standard layout,   2=Quick order,   3=Split layout,   4=Tab Layout
     */
    private $productLayout;

    /**
     * @var string The photo description size
     */
    private $photoSize;

    /**
     * @var string Hide the products without categories.   YES=Hide,   NO_DIRECTLINK=No, the product can be found by direct url,   NO_SEARCHRESULTS=No, Product can be found in the searchresults
     */
    private $hideWithoutCategory;

    /**
     * @var string Internal memo for internal purpose only
     */
    private $memo;

    /**
     * @var bool|null Enable / disable Marktplaats.
     */
    private $marktplaatsActive;

    /**
     * @var string|null The status for this advertisement
     */
    private $marktplaatsStatus;

    /**
     * @var float|null Cost per click in euro cents
     */
    private $marktplaatsCpc;

    /**
     * @var float|null Daily budget for this advertisement in euro cents
     */
    private $marktplaatsDailyBudget;

    /**
     * @var float|null Total budget for this advertisement in euro cents. You can use 0 euro cents for a infinite total budget or 5000 euro cents as minimum.
     */
    private $marktplaatsTotalBudget;

    /**
     * @var int|null The Marktplaats category Id
     */
    private $marktplaatsCategoryId;

    /**
     * @var string|null The price type
     */
    private $marktplaatsPriceType;

    /**
     * @var string|null Google Shopping Category. Corresponds with the values given by Google. See: https://support.google.com/merchants/answer/160081#sel_csv
     */
    private $googleShoppingCategory;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Package|null Package of this product.
     */
    private $package;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Supplier|null Supplier resource
     */
    private $supplier;

    /**
     * @var bool|null Is this product included in the export feed
     */
    private $isIncludedForExportFeed;

    /**
     * @var bool Fixed staggered prices enabled
     */
    private $fixedStaggeredPrices;

    /**
     * @var bool Is this product visible in the webshop
     */
    private $isVisible;

    /**
     * @var bool Can this product be ordered in the webshop
     */
    private $canBeOrdered;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productphotos|null Product photos
     */
    private $productphotos;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productvideos|null Product videos
     */
    private $productvideos;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productattachments|null Product attachments
     */
    private $productattachments;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productkeywords|null These keyswords are used for the tagcloud and internal search engine on the webshop
     */
    private $productkeywords;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productrelevant|null Relevant product
     */
    private $productrelevant;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productattributesets|null Attribute sets
     */
    private $productattributesets;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productstaggeredprices|null Product staggered prices
     */
    private $productstaggeredprices;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Producttocategories|null Product categories
     */
    private $producttocategories;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Productreviews|null Product reviews
     */
    private $productreviews;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Webshops|null Collection of webshops in which this product is connected. Empty if this is not a multishop product.
     */
    private $webshops;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Attributecombinations|null Attribute combination
     */
    private $attributecombinations;

    /**
     * @var \JacobDeKeizer\Ccv\Models\Products\Resource\Producttopropertygroups|null Collection of product property groups.
     */
    private $producttopropertygroups;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Unique id of the resource
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool Indicates if (true) this product is active or (false) inactive.
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @return string Create date of product in UTC
     */
    public function getCreatedate(): string
    {
        return $this->createdate;
    }

    /**
     * @return string Last modify date of product in UTC
     */
    public function getModifydate(): string
    {
        return $this->modifydate;
    }

    /**
     * @return string Product number
     */
    public function getProductnumber(): string
    {
        return $this->productnumber;
    }

    /**
     * @return string EAN (European Article Number)
     */
    public function getEannumber(): string
    {
        return $this->eannumber;
    }

    /**
     * @return string Manufacturer Product Number
     */
    public function getMpnnumber(): string
    {
        return $this->mpnnumber;
    }

    /**
     * @return bool Indicates if (true) this product is managed in a multishop or (false) is a single webshop product. Multishop products can't be fully editted.
     */
    public function getIsMultishopProduct(): bool
    {
        return $this->isMultishopProduct;
    }

    /**
     * @return string Product name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string Product short description
     */
    public function getShortdescription(): string
    {
        return $this->shortdescription;
    }

    /**
     * @return string|null Product description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return float VAT rate of product in percentage
     */
    public function getVatrate(): float
    {
        return $this->vatrate;
    }

    /**
     * @return float Original price of the product, before discounts
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float Discount on the product. Price - Discount = Sell price
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @return float Purchase price ex. VAT off this product.
     */
    public function getPurchaseprice(): float
    {
        return $this->purchaseprice;
    }

    /**
     * @return float This price will be added to the total price as a container deposit (in Dutch: Statiegeld).
     */
    public function getContainerDepositPrice(): float
    {
        return $this->containerDepositPrice;
    }

    /**
     * @return float This price will be added to the total price as a safety deposit (in Dutch: Borg).
     */
    public function getSafetyDepositPrice(): float
    {
        return $this->safetyDepositPrice;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productshippingcosts Describes the bases shipping costs and a link to shipping costs per country.
     */
    public function getProductshippingcosts(): \JacobDeKeizer\Ccv\Models\Products\Resource\Productshippingcosts
    {
        return $this->productshippingcosts;
    }

    /**
     * @return int|null Custom creditpoints for this product
     */
    public function getCreditPointsCustom(): ?int
    {
        return $this->creditPointsCustom;
    }

    /**
     * @return int|null Calculated creditpoints for this product
     */
    public function getCreditPointsCalculated(): ?int
    {
        return $this->creditPointsCalculated;
    }

    /**
     * @return string|null The unit in which this product is sold (ie 'per piece')
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * @return bool|null This product has stock
     */
    public function getStockenabled(): ?bool
    {
        return $this->stockenabled;
    }

    /**
     * @return string|null If the stock amount is linked to the product of the attribute combination
     */
    public function getStocktype(): ?string
    {
        return $this->stocktype;
    }

    /**
     * @return float|null The quantity in stock for this product
     */
    public function getStock(): ?float
    {
        return $this->stock;
    }

    /**
     * @return string The location of the product's stock
     */
    public function getStocklocation(): string
    {
        return $this->stocklocation;
    }

    /**
     * @return string|null Allow or dissallow ordering of this product when there is no stock. The default option 'global_setting' means the global webshop setting 'Starting point > My web shop > Settings > Ordering process & stock > Stock Options Allow the sale of more products than in stock' will be used for this product.
     */
    public function getOrderingWithoutStock(): ?string
    {
        return $this->orderingWithoutStock;
    }

    /**
     * @return float Weight of the product in kilograms
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return string|null The main categorie of this product.
     */
    public function getMaincategory(): ?string
    {
        return $this->maincategory;
    }

    /**
     * @return string The sub categorie of this product.
     */
    public function getSubcategory(): string
    {
        return $this->subcategory;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Brand|null Brand resource
     */
    public function getBrand(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Brand
    {
        return $this->brand;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Condition|null Condition resource
     */
    public function getCondition(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Condition
    {
        return $this->condition;
    }

    /**
     * @return string|null Link to mainphoto
     */
    public function getProductmainphoto(): ?string
    {
        return $this->productmainphoto;
    }

    /**
     * @return string Metatag Description
     */
    public function getMetaDescription(): string
    {
        return $this->metaDescription;
    }

    /**
     * @return string Metatag Keywords
     */
    public function getMetaKeywords(): string
    {
        return $this->metaKeywords;
    }

    /**
     * @return string Page title
     */
    public function getPageTitle(): string
    {
        return $this->pageTitle;
    }

    /**
     * @return bool Metatag robots: No-Index
     */
    public function getNoIndex(): bool
    {
        return $this->noIndex;
    }

    /**
     * @return bool Metatag robots: No-Follow
     */
    public function getNoFollow(): bool
    {
        return $this->noFollow;
    }

    /**
     * @return string SEO Alias of this resource
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @return string Deeplink to this resource
     */
    public function getDeeplink(): string
    {
        return $this->deeplink;
    }

    /**
     * @return string|null Specification link
     */
    public function getSpecs(): ?string
    {
        return $this->specs;
    }

    /**
     * @return int Number of decimals that can be used in amounts
     */
    public function getDecimalAmount(): int
    {
        return $this->decimalAmount;
    }

    /**
     * @return float Minimal order amount
     */
    public function getMinimalOrderAmount(): float
    {
        return $this->minimalOrderAmount;
    }

    /**
     * @return int Expected delivery time, number of days, weeks, months, quarters, years
     */
    public function getStockDeliveryNumber(): int
    {
        return $this->stockDeliveryNumber;
    }

    /**
     * @return string Expected delivery type
     */
    public function getStockDeliveryType(): string
    {
        return $this->stockDeliveryType;
    }

    /**
     * @return string This field will be showed as the standard delivery text
     */
    public function getStockDeliveryStandard(): string
    {
        return $this->stockDeliveryStandard;
    }

    /**
     * @return bool Show the product in the window offers
     */
    public function getShowInTemplate(): bool
    {
        return $this->showInTemplate;
    }

    /**
     * @return bool Show the product as a offer at the beginpage or offer element
     */
    public function getShowOnBeginpage(): bool
    {
        return $this->showOnBeginpage;
    }

    /**
     * @return bool Show the product in the facebook shop when available
     */
    public function getShowOnFacebook(): bool
    {
        return $this->showOnFacebook;
    }

    /**
     * @return string Show order/offer button.  Y=show   QUOTATION=offer button   N=No button
     */
    public function getShowOrderButton(): string
    {
        return $this->showOrderButton;
    }

    /**
     * @return int Product Layout   1=Standard layout,   2=Quick order,   3=Split layout,   4=Tab Layout
     */
    public function getProductLayout(): int
    {
        return $this->productLayout;
    }

    /**
     * @return string The photo description size
     */
    public function getPhotoSize(): string
    {
        return $this->photoSize;
    }

    /**
     * @return string Hide the products without categories.   YES=Hide,   NO_DIRECTLINK=No, the product can be found by direct url,   NO_SEARCHRESULTS=No, Product can be found in the searchresults
     */
    public function getHideWithoutCategory(): string
    {
        return $this->hideWithoutCategory;
    }

    /**
     * @return string Internal memo for internal purpose only
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @return bool|null Enable / disable Marktplaats.
     */
    public function getMarktplaatsActive(): ?bool
    {
        return $this->marktplaatsActive;
    }

    /**
     * @return string|null The status for this advertisement
     */
    public function getMarktplaatsStatus(): ?string
    {
        return $this->marktplaatsStatus;
    }

    /**
     * @return float|null Cost per click in euro cents
     */
    public function getMarktplaatsCpc(): ?float
    {
        return $this->marktplaatsCpc;
    }

    /**
     * @return float|null Daily budget for this advertisement in euro cents
     */
    public function getMarktplaatsDailyBudget(): ?float
    {
        return $this->marktplaatsDailyBudget;
    }

    /**
     * @return float|null Total budget for this advertisement in euro cents. You can use 0 euro cents for a infinite total budget or 5000 euro cents as minimum.
     */
    public function getMarktplaatsTotalBudget(): ?float
    {
        return $this->marktplaatsTotalBudget;
    }

    /**
     * @return int|null The Marktplaats category Id
     */
    public function getMarktplaatsCategoryId(): ?int
    {
        return $this->marktplaatsCategoryId;
    }

    /**
     * @return string|null The price type
     */
    public function getMarktplaatsPriceType(): ?string
    {
        return $this->marktplaatsPriceType;
    }

    /**
     * @return string|null Google Shopping Category. Corresponds with the values given by Google. See: https://support.google.com/merchants/answer/160081#sel_csv
     */
    public function getGoogleShoppingCategory(): ?string
    {
        return $this->googleShoppingCategory;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Package|null Package of this product.
     */
    public function getPackage(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Package
    {
        return $this->package;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Supplier|null Supplier resource
     */
    public function getSupplier(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Supplier
    {
        return $this->supplier;
    }

    /**
     * @return bool|null Is this product included in the export feed
     */
    public function getIsIncludedForExportFeed(): ?bool
    {
        return $this->isIncludedForExportFeed;
    }

    /**
     * @return bool Fixed staggered prices enabled
     */
    public function getFixedStaggeredPrices(): bool
    {
        return $this->fixedStaggeredPrices;
    }

    /**
     * @return bool Is this product visible in the webshop
     */
    public function getIsVisible(): bool
    {
        return $this->isVisible;
    }

    /**
     * @return bool Can this product be ordered in the webshop
     */
    public function getCanBeOrdered(): bool
    {
        return $this->canBeOrdered;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productphotos|null Product photos
     */
    public function getProductphotos(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Productphotos
    {
        return $this->productphotos;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productvideos|null Product videos
     */
    public function getProductvideos(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Productvideos
    {
        return $this->productvideos;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productattachments|null Product attachments
     */
    public function getProductattachments(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Productattachments
    {
        return $this->productattachments;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productkeywords|null These keyswords are used for the tagcloud and internal search engine on the webshop
     */
    public function getProductkeywords(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Productkeywords
    {
        return $this->productkeywords;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productrelevant|null Relevant product
     */
    public function getProductrelevant(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Productrelevant
    {
        return $this->productrelevant;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productattributesets|null Attribute sets
     */
    public function getProductattributesets(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Productattributesets
    {
        return $this->productattributesets;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productstaggeredprices|null Product staggered prices
     */
    public function getProductstaggeredprices(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Productstaggeredprices
    {
        return $this->productstaggeredprices;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Producttocategories|null Product categories
     */
    public function getProducttocategories(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Producttocategories
    {
        return $this->producttocategories;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Productreviews|null Product reviews
     */
    public function getProductreviews(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Productreviews
    {
        return $this->productreviews;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Webshops|null Collection of webshops in which this product is connected. Empty if this is not a multishop product.
     */
    public function getWebshops(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Webshops
    {
        return $this->webshops;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Attributecombinations|null Attribute combination
     */
    public function getAttributecombinations(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Attributecombinations
    {
        return $this->attributecombinations;
    }

    /**
     * @return \JacobDeKeizer\Ccv\Models\Products\Resource\Producttopropertygroups|null Collection of product property groups.
     */
    public function getProducttopropertygroups(): ?\JacobDeKeizer\Ccv\Models\Products\Resource\Producttopropertygroups
    {
        return $this->producttopropertygroups;
    }

    /**
     * @param string Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }

    /**
     * @param int Unique id of the resource
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        $this->propertyFilled('id');
        return $this;
    }

    /**
     * @param bool Indicates if (true) this product is active or (false) inactive.
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;
        $this->propertyFilled('isActive');
        return $this;
    }

    /**
     * @param string Create date of product in UTC
     * @return self
     */
    public function setCreatedate(string $createdate): self
    {
        $this->createdate = $createdate;
        $this->propertyFilled('createdate');
        return $this;
    }

    /**
     * @param string Last modify date of product in UTC
     * @return self
     */
    public function setModifydate(string $modifydate): self
    {
        $this->modifydate = $modifydate;
        $this->propertyFilled('modifydate');
        return $this;
    }

    /**
     * @param string Product number
     * @return self
     */
    public function setProductnumber(string $productnumber): self
    {
        $this->productnumber = $productnumber;
        $this->propertyFilled('productnumber');
        return $this;
    }

    /**
     * @param string EAN (European Article Number)
     * @return self
     */
    public function setEannumber(string $eannumber): self
    {
        $this->eannumber = $eannumber;
        $this->propertyFilled('eannumber');
        return $this;
    }

    /**
     * @param string Manufacturer Product Number
     * @return self
     */
    public function setMpnnumber(string $mpnnumber): self
    {
        $this->mpnnumber = $mpnnumber;
        $this->propertyFilled('mpnnumber');
        return $this;
    }

    /**
     * @param bool Indicates if (true) this product is managed in a multishop or (false) is a single webshop product. Multishop products can't be fully editted.
     * @return self
     */
    public function setIsMultishopProduct(bool $isMultishopProduct): self
    {
        $this->isMultishopProduct = $isMultishopProduct;
        $this->propertyFilled('isMultishopProduct');
        return $this;
    }

    /**
     * @param string Product name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string Product short description
     * @return self
     */
    public function setShortdescription(string $shortdescription): self
    {
        $this->shortdescription = $shortdescription;
        $this->propertyFilled('shortdescription');
        return $this;
    }

    /**
     * @param string|null Product description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        $this->propertyFilled('description');
        return $this;
    }

    /**
     * @param float VAT rate of product in percentage
     * @return self
     */
    public function setVatrate(float $vatrate): self
    {
        $this->vatrate = $vatrate;
        $this->propertyFilled('vatrate');
        return $this;
    }

    /**
     * @param float Original price of the product, before discounts
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }

    /**
     * @param float Discount on the product. Price - Discount = Sell price
     * @return self
     */
    public function setDiscount(float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }

    /**
     * @param float Purchase price ex. VAT off this product.
     * @return self
     */
    public function setPurchaseprice(float $purchaseprice): self
    {
        $this->purchaseprice = $purchaseprice;
        $this->propertyFilled('purchaseprice');
        return $this;
    }

    /**
     * @param float This price will be added to the total price as a container deposit (in Dutch: Statiegeld).
     * @return self
     */
    public function setContainerDepositPrice(float $containerDepositPrice): self
    {
        $this->containerDepositPrice = $containerDepositPrice;
        $this->propertyFilled('containerDepositPrice');
        return $this;
    }

    /**
     * @param float This price will be added to the total price as a safety deposit (in Dutch: Borg).
     * @return self
     */
    public function setSafetyDepositPrice(float $safetyDepositPrice): self
    {
        $this->safetyDepositPrice = $safetyDepositPrice;
        $this->propertyFilled('safetyDepositPrice');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productshippingcosts Describes the bases shipping costs and a link to shipping costs per country.
     * @return self
     */
    public function setProductshippingcosts(\JacobDeKeizer\Ccv\Models\Products\Resource\Productshippingcosts $productshippingcosts): self
    {
        $this->productshippingcosts = $productshippingcosts;
        $this->propertyFilled('productshippingcosts');
        return $this;
    }

    /**
     * @param int|null Custom creditpoints for this product
     * @return self
     */
    public function setCreditPointsCustom(?int $creditPointsCustom): self
    {
        $this->creditPointsCustom = $creditPointsCustom;
        $this->propertyFilled('creditPointsCustom');
        return $this;
    }

    /**
     * @param int|null Calculated creditpoints for this product
     * @return self
     */
    public function setCreditPointsCalculated(?int $creditPointsCalculated): self
    {
        $this->creditPointsCalculated = $creditPointsCalculated;
        $this->propertyFilled('creditPointsCalculated');
        return $this;
    }

    /**
     * @param string|null The unit in which this product is sold (ie 'per piece')
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;
        $this->propertyFilled('unit');
        return $this;
    }

    /**
     * @param bool|null This product has stock
     * @return self
     */
    public function setStockenabled(?bool $stockenabled): self
    {
        $this->stockenabled = $stockenabled;
        $this->propertyFilled('stockenabled');
        return $this;
    }

    /**
     * @param string|null If the stock amount is linked to the product of the attribute combination
     * @return self
     */
    public function setStocktype(?string $stocktype): self
    {
        $this->stocktype = $stocktype;
        $this->propertyFilled('stocktype');
        return $this;
    }

    /**
     * @param float|null The quantity in stock for this product
     * @return self
     */
    public function setStock(?float $stock): self
    {
        $this->stock = $stock;
        $this->propertyFilled('stock');
        return $this;
    }

    /**
     * @param string The location of the product's stock
     * @return self
     */
    public function setStocklocation(string $stocklocation): self
    {
        $this->stocklocation = $stocklocation;
        $this->propertyFilled('stocklocation');
        return $this;
    }

    /**
     * @param string|null Allow or dissallow ordering of this product when there is no stock. The default option 'global_setting' means the global webshop setting 'Starting point > My web shop > Settings > Ordering process & stock > Stock Options Allow the sale of more products than in stock' will be used for this product.
     * @return self
     */
    public function setOrderingWithoutStock(?string $orderingWithoutStock): self
    {
        $this->orderingWithoutStock = $orderingWithoutStock;
        $this->propertyFilled('orderingWithoutStock');
        return $this;
    }

    /**
     * @param float Weight of the product in kilograms
     * @return self
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;
        $this->propertyFilled('weight');
        return $this;
    }

    /**
     * @param string|null The main categorie of this product.
     * @return self
     */
    public function setMaincategory(?string $maincategory): self
    {
        $this->maincategory = $maincategory;
        $this->propertyFilled('maincategory');
        return $this;
    }

    /**
     * @param string The sub categorie of this product.
     * @return self
     */
    public function setSubcategory(string $subcategory): self
    {
        $this->subcategory = $subcategory;
        $this->propertyFilled('subcategory');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Brand|null Brand resource
     * @return self
     */
    public function setBrand(?\JacobDeKeizer\Ccv\Models\Products\Resource\Brand $brand): self
    {
        $this->brand = $brand;
        $this->propertyFilled('brand');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Condition|null Condition resource
     * @return self
     */
    public function setCondition(?\JacobDeKeizer\Ccv\Models\Products\Resource\Condition $condition): self
    {
        $this->condition = $condition;
        $this->propertyFilled('condition');
        return $this;
    }

    /**
     * @param string|null Link to mainphoto
     * @return self
     */
    public function setProductmainphoto(?string $productmainphoto): self
    {
        $this->productmainphoto = $productmainphoto;
        $this->propertyFilled('productmainphoto');
        return $this;
    }

    /**
     * @param string Metatag Description
     * @return self
     */
    public function setMetaDescription(string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;
        $this->propertyFilled('metaDescription');
        return $this;
    }

    /**
     * @param string Metatag Keywords
     * @return self
     */
    public function setMetaKeywords(string $metaKeywords): self
    {
        $this->metaKeywords = $metaKeywords;
        $this->propertyFilled('metaKeywords');
        return $this;
    }

    /**
     * @param string Page title
     * @return self
     */
    public function setPageTitle(string $pageTitle): self
    {
        $this->pageTitle = $pageTitle;
        $this->propertyFilled('pageTitle');
        return $this;
    }

    /**
     * @param bool Metatag robots: No-Index
     * @return self
     */
    public function setNoIndex(bool $noIndex): self
    {
        $this->noIndex = $noIndex;
        $this->propertyFilled('noIndex');
        return $this;
    }

    /**
     * @param bool Metatag robots: No-Follow
     * @return self
     */
    public function setNoFollow(bool $noFollow): self
    {
        $this->noFollow = $noFollow;
        $this->propertyFilled('noFollow');
        return $this;
    }

    /**
     * @param string SEO Alias of this resource
     * @return self
     */
    public function setAlias(string $alias): self
    {
        $this->alias = $alias;
        $this->propertyFilled('alias');
        return $this;
    }

    /**
     * @param string Deeplink to this resource
     * @return self
     */
    public function setDeeplink(string $deeplink): self
    {
        $this->deeplink = $deeplink;
        $this->propertyFilled('deeplink');
        return $this;
    }

    /**
     * @param string|null Specification link
     * @return self
     */
    public function setSpecs(?string $specs): self
    {
        $this->specs = $specs;
        $this->propertyFilled('specs');
        return $this;
    }

    /**
     * @param int Number of decimals that can be used in amounts
     * @return self
     */
    public function setDecimalAmount(int $decimalAmount): self
    {
        $this->decimalAmount = $decimalAmount;
        $this->propertyFilled('decimalAmount');
        return $this;
    }

    /**
     * @param float Minimal order amount
     * @return self
     */
    public function setMinimalOrderAmount(float $minimalOrderAmount): self
    {
        $this->minimalOrderAmount = $minimalOrderAmount;
        $this->propertyFilled('minimalOrderAmount');
        return $this;
    }

    /**
     * @param int Expected delivery time, number of days, weeks, months, quarters, years
     * @return self
     */
    public function setStockDeliveryNumber(int $stockDeliveryNumber): self
    {
        $this->stockDeliveryNumber = $stockDeliveryNumber;
        $this->propertyFilled('stockDeliveryNumber');
        return $this;
    }

    /**
     * @param string Expected delivery type
     * @return self
     */
    public function setStockDeliveryType(string $stockDeliveryType): self
    {
        $this->stockDeliveryType = $stockDeliveryType;
        $this->propertyFilled('stockDeliveryType');
        return $this;
    }

    /**
     * @param string This field will be showed as the standard delivery text
     * @return self
     */
    public function setStockDeliveryStandard(string $stockDeliveryStandard): self
    {
        $this->stockDeliveryStandard = $stockDeliveryStandard;
        $this->propertyFilled('stockDeliveryStandard');
        return $this;
    }

    /**
     * @param bool Show the product in the window offers
     * @return self
     */
    public function setShowInTemplate(bool $showInTemplate): self
    {
        $this->showInTemplate = $showInTemplate;
        $this->propertyFilled('showInTemplate');
        return $this;
    }

    /**
     * @param bool Show the product as a offer at the beginpage or offer element
     * @return self
     */
    public function setShowOnBeginpage(bool $showOnBeginpage): self
    {
        $this->showOnBeginpage = $showOnBeginpage;
        $this->propertyFilled('showOnBeginpage');
        return $this;
    }

    /**
     * @param bool Show the product in the facebook shop when available
     * @return self
     */
    public function setShowOnFacebook(bool $showOnFacebook): self
    {
        $this->showOnFacebook = $showOnFacebook;
        $this->propertyFilled('showOnFacebook');
        return $this;
    }

    /**
     * @param string Show order/offer button.  Y=show   QUOTATION=offer button   N=No button
     * @return self
     */
    public function setShowOrderButton(string $showOrderButton): self
    {
        $this->showOrderButton = $showOrderButton;
        $this->propertyFilled('showOrderButton');
        return $this;
    }

    /**
     * @param int Product Layout   1=Standard layout,   2=Quick order,   3=Split layout,   4=Tab Layout
     * @return self
     */
    public function setProductLayout(int $productLayout): self
    {
        $this->productLayout = $productLayout;
        $this->propertyFilled('productLayout');
        return $this;
    }

    /**
     * @param string The photo description size
     * @return self
     */
    public function setPhotoSize(string $photoSize): self
    {
        $this->photoSize = $photoSize;
        $this->propertyFilled('photoSize');
        return $this;
    }

    /**
     * @param string Hide the products without categories.   YES=Hide,   NO_DIRECTLINK=No, the product can be found by direct url,   NO_SEARCHRESULTS=No, Product can be found in the searchresults
     * @return self
     */
    public function setHideWithoutCategory(string $hideWithoutCategory): self
    {
        $this->hideWithoutCategory = $hideWithoutCategory;
        $this->propertyFilled('hideWithoutCategory');
        return $this;
    }

    /**
     * @param string Internal memo for internal purpose only
     * @return self
     */
    public function setMemo(string $memo): self
    {
        $this->memo = $memo;
        $this->propertyFilled('memo');
        return $this;
    }

    /**
     * @param bool|null Enable / disable Marktplaats.
     * @return self
     */
    public function setMarktplaatsActive(?bool $marktplaatsActive): self
    {
        $this->marktplaatsActive = $marktplaatsActive;
        $this->propertyFilled('marktplaatsActive');
        return $this;
    }

    /**
     * @param string|null The status for this advertisement
     * @return self
     */
    public function setMarktplaatsStatus(?string $marktplaatsStatus): self
    {
        $this->marktplaatsStatus = $marktplaatsStatus;
        $this->propertyFilled('marktplaatsStatus');
        return $this;
    }

    /**
     * @param float|null Cost per click in euro cents
     * @return self
     */
    public function setMarktplaatsCpc(?float $marktplaatsCpc): self
    {
        $this->marktplaatsCpc = $marktplaatsCpc;
        $this->propertyFilled('marktplaatsCpc');
        return $this;
    }

    /**
     * @param float|null Daily budget for this advertisement in euro cents
     * @return self
     */
    public function setMarktplaatsDailyBudget(?float $marktplaatsDailyBudget): self
    {
        $this->marktplaatsDailyBudget = $marktplaatsDailyBudget;
        $this->propertyFilled('marktplaatsDailyBudget');
        return $this;
    }

    /**
     * @param float|null Total budget for this advertisement in euro cents. You can use 0 euro cents for a infinite total budget or 5000 euro cents as minimum.
     * @return self
     */
    public function setMarktplaatsTotalBudget(?float $marktplaatsTotalBudget): self
    {
        $this->marktplaatsTotalBudget = $marktplaatsTotalBudget;
        $this->propertyFilled('marktplaatsTotalBudget');
        return $this;
    }

    /**
     * @param int|null The Marktplaats category Id
     * @return self
     */
    public function setMarktplaatsCategoryId(?int $marktplaatsCategoryId): self
    {
        $this->marktplaatsCategoryId = $marktplaatsCategoryId;
        $this->propertyFilled('marktplaatsCategoryId');
        return $this;
    }

    /**
     * @param string|null The price type
     * @return self
     */
    public function setMarktplaatsPriceType(?string $marktplaatsPriceType): self
    {
        $this->marktplaatsPriceType = $marktplaatsPriceType;
        $this->propertyFilled('marktplaatsPriceType');
        return $this;
    }

    /**
     * @param string|null Google Shopping Category. Corresponds with the values given by Google. See: https://support.google.com/merchants/answer/160081#sel_csv
     * @return self
     */
    public function setGoogleShoppingCategory(?string $googleShoppingCategory): self
    {
        $this->googleShoppingCategory = $googleShoppingCategory;
        $this->propertyFilled('googleShoppingCategory');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Package|null Package of this product.
     * @return self
     */
    public function setPackage(?\JacobDeKeizer\Ccv\Models\Products\Resource\Package $package): self
    {
        $this->package = $package;
        $this->propertyFilled('package');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Supplier|null Supplier resource
     * @return self
     */
    public function setSupplier(?\JacobDeKeizer\Ccv\Models\Products\Resource\Supplier $supplier): self
    {
        $this->supplier = $supplier;
        $this->propertyFilled('supplier');
        return $this;
    }

    /**
     * @param bool|null Is this product included in the export feed
     * @return self
     */
    public function setIsIncludedForExportFeed(?bool $isIncludedForExportFeed): self
    {
        $this->isIncludedForExportFeed = $isIncludedForExportFeed;
        $this->propertyFilled('isIncludedForExportFeed');
        return $this;
    }

    /**
     * @param bool Fixed staggered prices enabled
     * @return self
     */
    public function setFixedStaggeredPrices(bool $fixedStaggeredPrices): self
    {
        $this->fixedStaggeredPrices = $fixedStaggeredPrices;
        $this->propertyFilled('fixedStaggeredPrices');
        return $this;
    }

    /**
     * @param bool Is this product visible in the webshop
     * @return self
     */
    public function setIsVisible(bool $isVisible): self
    {
        $this->isVisible = $isVisible;
        $this->propertyFilled('isVisible');
        return $this;
    }

    /**
     * @param bool Can this product be ordered in the webshop
     * @return self
     */
    public function setCanBeOrdered(bool $canBeOrdered): self
    {
        $this->canBeOrdered = $canBeOrdered;
        $this->propertyFilled('canBeOrdered');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productphotos|null Product photos
     * @return self
     */
    public function setProductphotos(?\JacobDeKeizer\Ccv\Models\Products\Resource\Productphotos $productphotos): self
    {
        $this->productphotos = $productphotos;
        $this->propertyFilled('productphotos');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productvideos|null Product videos
     * @return self
     */
    public function setProductvideos(?\JacobDeKeizer\Ccv\Models\Products\Resource\Productvideos $productvideos): self
    {
        $this->productvideos = $productvideos;
        $this->propertyFilled('productvideos');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productattachments|null Product attachments
     * @return self
     */
    public function setProductattachments(?\JacobDeKeizer\Ccv\Models\Products\Resource\Productattachments $productattachments): self
    {
        $this->productattachments = $productattachments;
        $this->propertyFilled('productattachments');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productkeywords|null These keyswords are used for the tagcloud and internal search engine on the webshop
     * @return self
     */
    public function setProductkeywords(?\JacobDeKeizer\Ccv\Models\Products\Resource\Productkeywords $productkeywords): self
    {
        $this->productkeywords = $productkeywords;
        $this->propertyFilled('productkeywords');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productrelevant|null Relevant product
     * @return self
     */
    public function setProductrelevant(?\JacobDeKeizer\Ccv\Models\Products\Resource\Productrelevant $productrelevant): self
    {
        $this->productrelevant = $productrelevant;
        $this->propertyFilled('productrelevant');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productattributesets|null Attribute sets
     * @return self
     */
    public function setProductattributesets(?\JacobDeKeizer\Ccv\Models\Products\Resource\Productattributesets $productattributesets): self
    {
        $this->productattributesets = $productattributesets;
        $this->propertyFilled('productattributesets');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productstaggeredprices|null Product staggered prices
     * @return self
     */
    public function setProductstaggeredprices(?\JacobDeKeizer\Ccv\Models\Products\Resource\Productstaggeredprices $productstaggeredprices): self
    {
        $this->productstaggeredprices = $productstaggeredprices;
        $this->propertyFilled('productstaggeredprices');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Producttocategories|null Product categories
     * @return self
     */
    public function setProducttocategories(?\JacobDeKeizer\Ccv\Models\Products\Resource\Producttocategories $producttocategories): self
    {
        $this->producttocategories = $producttocategories;
        $this->propertyFilled('producttocategories');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Productreviews|null Product reviews
     * @return self
     */
    public function setProductreviews(?\JacobDeKeizer\Ccv\Models\Products\Resource\Productreviews $productreviews): self
    {
        $this->productreviews = $productreviews;
        $this->propertyFilled('productreviews');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Webshops|null Collection of webshops in which this product is connected. Empty if this is not a multishop product.
     * @return self
     */
    public function setWebshops(?\JacobDeKeizer\Ccv\Models\Products\Resource\Webshops $webshops): self
    {
        $this->webshops = $webshops;
        $this->propertyFilled('webshops');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Attributecombinations|null Attribute combination
     * @return self
     */
    public function setAttributecombinations(?\JacobDeKeizer\Ccv\Models\Products\Resource\Attributecombinations $attributecombinations): self
    {
        $this->attributecombinations = $attributecombinations;
        $this->propertyFilled('attributecombinations');
        return $this;
    }

    /**
     * @param \JacobDeKeizer\Ccv\Models\Products\Resource\Producttopropertygroups|null Collection of product property groups.
     * @return self
     */
    public function setProducttopropertygroups(?\JacobDeKeizer\Ccv\Models\Products\Resource\Producttopropertygroups $producttopropertygroups): self
    {
        $this->producttopropertygroups = $producttopropertygroups;
        $this->propertyFilled('producttopropertygroups');
        return $this;
    }
}
