<?php

namespace JacobDeKeizer\Ccv\Models\Products\Products;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Post implements Model
{
    use FromArray, ToArray;

    /**
     * @var string|null Product number
     */
    private $productnumber;

    /**
     * @var bool|null Active product?
     */
    private $active;

    /**
     * @var string|null EAN (European Article Number)
     */
    private $eannumber;

    /**
     * @var string|null Manufacturer Product Number
     */
    private $mpnnumber;

    /**
     * @var string Product name
     */
    private $name;

    /**
     * @var string|null Product short description
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
     * @var float|null Purchase price ex. VAT off this product.
     */
    private $purchaseprice;

    /**
     * @var float|null This price will be added to the total price as a container deposit (in Dutch: Statiegeld).
     */
    private $containerDepositPrice;

    /**
     * @var float|null This price will be added to the total price as a safety deposit (in Dutch: Borg).
     */
    private $safetyDepositPrice;

    /**
     * @var int|null Custom creditpoints for this product
     */
    private $creditPointsCustom;

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
     * @var string|null The location of the product's stock
     */
    private $stocklocation;

    /**
     * @var string|null Allow or dissallow ordering of this product when there is no stock. The default option 'global_setting' means the global webshop setting 'Starting point > My web shop > Settings > Ordering process & stock > Stock Options Allow the sale of more products than in stock' will be used for this product.
     */
    private $orderingWithoutStock;

    /**
     * @var float|null Weight of the product in kilograms
     */
    private $weight;

    /**
     * @var string|null Name of the brand, you can also use a brand id, see property 'brand_id'.
     */
    private $brand;

    /**
     * @var int|null Id of the brand, the brand id's are available in the resource brands.You can also use a brand name, see property 'brand'.
     */
    private $brandId;

    /**
     * @var string|null Name of the condition, you can also use a condition id, see property 'condition_id'.
     */
    private $condition;

    /**
     * @var int|null Id of the condition, the condition id's are available in the resource conditions. You can also use a condition name, see property 'condition'.
     */
    private $conditionId;

    /**
     * @var int|null Id of the color, the color id are available in the resource colors. If NULL then the product won't have a color.
     */
    private $colorId;

    /**
     * @var string|null Main category of this product for exports and searches. This does not influence the category structure.
     */
    private $maincategory;

    /**
     * @var string|null Sub category of this product for exports and searches. This does not influence the category structure.
     */
    private $subcategory;

    /**
     * @var int Package id of this product, the package id's are available in the resource 'packages'.
     */
    private $packageId;

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
     * @var string|null Specification link
     */
    private $specs;

    /**
     * @var int|null Number of decimals that can be used in amounts
     */
    private $decimalAmount;

    /**
     * @var float|null Minimal order amount
     */
    private $minimalOrderAmount;

    /**
     * @var int|null Expected delivery time, number of days, weeks, months, quarters, years
     */
    private $stockDeliveryNumber;

    /**
     * @var string|null Expected delivery type days, weeks, months, quarters, years, outofstock, temporarilysoldout, ordered, onrequest, unknown
     */
    private $stockDeliveryType;

    /**
     * @var string|null This field will be showed as the standard delivery text
     */
    private $stockDeliveryStandard;

    /**
     * @var bool|null Show the product in the window offers
     */
    private $showInTemplate;

    /**
     * @var bool|null Show the product as a offer at the beginpage or offer element
     */
    private $showOnBeginpage;

    /**
     * @var bool|null Show the product in the facebook shop when available
     */
    private $showOnFacebook;

    /**
     * @var string|null Show order/offer button Y=show QUOTATION=offer button N=No button
     */
    private $showOrderButton;

    /**
     * @var int|null Product Layout 1=Standard layout, 2=Quick order, 3=Split layout, 4=Tab Layout
     */
    private $productLayout;

    /**
     * @var string|null The photo description size
     */
    private $photoSize;

    /**
     * @var string|null Hide the product when it has not any categories. YES=Hide, NO_DIRECTLINK=No, the product can be found by direct url, NO_SEARCHRESULTS=No, Product can be found in the searchresults
     */
    private $hideWithoutCategory;

    /**
     * @var string|null Internal memo for internal purpose only
     */
    private $memo;

    /**
     * @var int|null Id of the supplier, the supplier id are available in the resource suppliers
     */
    private $supplierId;

    /**
     * @var bool|null Enable / disable fixed staggered prices
     */
    private $fixedStaggeredPrices;

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
     * @var bool|null Is this product included in the export feed
     */
    private $isIncludedForExportFeed;

    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }

    /**
     * @return string|null Product number
     */
    public function getProductnumber(): ?string
    {
        return $this->productnumber;
    }

    /**
     * @return bool|null Active product?
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @return string|null EAN (European Article Number)
     */
    public function getEannumber(): ?string
    {
        return $this->eannumber;
    }

    /**
     * @return string|null Manufacturer Product Number
     */
    public function getMpnnumber(): ?string
    {
        return $this->mpnnumber;
    }

    /**
     * @return string Product name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null Product short description
     */
    public function getShortdescription(): ?string
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
     * @return float|null Purchase price ex. VAT off this product.
     */
    public function getPurchaseprice(): ?float
    {
        return $this->purchaseprice;
    }

    /**
     * @return float|null This price will be added to the total price as a container deposit (in Dutch: Statiegeld).
     */
    public function getContainerDepositPrice(): ?float
    {
        return $this->containerDepositPrice;
    }

    /**
     * @return float|null This price will be added to the total price as a safety deposit (in Dutch: Borg).
     */
    public function getSafetyDepositPrice(): ?float
    {
        return $this->safetyDepositPrice;
    }

    /**
     * @return int|null Custom creditpoints for this product
     */
    public function getCreditPointsCustom(): ?int
    {
        return $this->creditPointsCustom;
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
     * @return string|null The location of the product's stock
     */
    public function getStocklocation(): ?string
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
     * @return float|null Weight of the product in kilograms
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @return string|null Name of the brand, you can also use a brand id, see property 'brand_id'.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @return int|null Id of the brand, the brand id's are available in the resource brands.You can also use a brand name, see property 'brand'.
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * @return string|null Name of the condition, you can also use a condition id, see property 'condition_id'.
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }

    /**
     * @return int|null Id of the condition, the condition id's are available in the resource conditions. You can also use a condition name, see property 'condition'.
     */
    public function getConditionId(): ?int
    {
        return $this->conditionId;
    }

    /**
     * @return int|null Id of the color, the color id are available in the resource colors. If NULL then the product won't have a color.
     */
    public function getColorId(): ?int
    {
        return $this->colorId;
    }

    /**
     * @return string|null Main category of this product for exports and searches. This does not influence the category structure.
     */
    public function getMaincategory(): ?string
    {
        return $this->maincategory;
    }

    /**
     * @return string|null Sub category of this product for exports and searches. This does not influence the category structure.
     */
    public function getSubcategory(): ?string
    {
        return $this->subcategory;
    }

    /**
     * @return int Package id of this product, the package id's are available in the resource 'packages'.
     */
    public function getPackageId(): int
    {
        return $this->packageId;
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
     * @return string|null Specification link
     */
    public function getSpecs(): ?string
    {
        return $this->specs;
    }

    /**
     * @return int|null Number of decimals that can be used in amounts
     */
    public function getDecimalAmount(): ?int
    {
        return $this->decimalAmount;
    }

    /**
     * @return float|null Minimal order amount
     */
    public function getMinimalOrderAmount(): ?float
    {
        return $this->minimalOrderAmount;
    }

    /**
     * @return int|null Expected delivery time, number of days, weeks, months, quarters, years
     */
    public function getStockDeliveryNumber(): ?int
    {
        return $this->stockDeliveryNumber;
    }

    /**
     * @return string|null Expected delivery type days, weeks, months, quarters, years, outofstock, temporarilysoldout, ordered, onrequest, unknown
     */
    public function getStockDeliveryType(): ?string
    {
        return $this->stockDeliveryType;
    }

    /**
     * @return string|null This field will be showed as the standard delivery text
     */
    public function getStockDeliveryStandard(): ?string
    {
        return $this->stockDeliveryStandard;
    }

    /**
     * @return bool|null Show the product in the window offers
     */
    public function getShowInTemplate(): ?bool
    {
        return $this->showInTemplate;
    }

    /**
     * @return bool|null Show the product as a offer at the beginpage or offer element
     */
    public function getShowOnBeginpage(): ?bool
    {
        return $this->showOnBeginpage;
    }

    /**
     * @return bool|null Show the product in the facebook shop when available
     */
    public function getShowOnFacebook(): ?bool
    {
        return $this->showOnFacebook;
    }

    /**
     * @return string|null Show order/offer button Y=show QUOTATION=offer button N=No button
     */
    public function getShowOrderButton(): ?string
    {
        return $this->showOrderButton;
    }

    /**
     * @return int|null Product Layout 1=Standard layout, 2=Quick order, 3=Split layout, 4=Tab Layout
     */
    public function getProductLayout(): ?int
    {
        return $this->productLayout;
    }

    /**
     * @return string|null The photo description size
     */
    public function getPhotoSize(): ?string
    {
        return $this->photoSize;
    }

    /**
     * @return string|null Hide the product when it has not any categories. YES=Hide, NO_DIRECTLINK=No, the product can be found by direct url, NO_SEARCHRESULTS=No, Product can be found in the searchresults
     */
    public function getHideWithoutCategory(): ?string
    {
        return $this->hideWithoutCategory;
    }

    /**
     * @return string|null Internal memo for internal purpose only
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * @return int|null Id of the supplier, the supplier id are available in the resource suppliers
     */
    public function getSupplierId(): ?int
    {
        return $this->supplierId;
    }

    /**
     * @return bool|null Enable / disable fixed staggered prices
     */
    public function getFixedStaggeredPrices(): ?bool
    {
        return $this->fixedStaggeredPrices;
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
     * @return bool|null Is this product included in the export feed
     */
    public function getIsIncludedForExportFeed(): ?bool
    {
        return $this->isIncludedForExportFeed;
    }

    /**
     * @param string|null $productnumber Product number
     * @return self
     */
    public function setProductnumber(?string $productnumber): self
    {
        $this->productnumber = $productnumber;
        $this->propertyFilled('productnumber');
        return $this;
    }

    /**
     * @param bool|null $active Active product?
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->active = $active;
        $this->propertyFilled('active');
        return $this;
    }

    /**
     * @param string|null $eannumber EAN (European Article Number)
     * @return self
     */
    public function setEannumber(?string $eannumber): self
    {
        $this->eannumber = $eannumber;
        $this->propertyFilled('eannumber');
        return $this;
    }

    /**
     * @param string|null $mpnnumber Manufacturer Product Number
     * @return self
     */
    public function setMpnnumber(?string $mpnnumber): self
    {
        $this->mpnnumber = $mpnnumber;
        $this->propertyFilled('mpnnumber');
        return $this;
    }

    /**
     * @param string $name Product name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->propertyFilled('name');
        return $this;
    }

    /**
     * @param string|null $shortdescription Product short description
     * @return self
     */
    public function setShortdescription(?string $shortdescription): self
    {
        $this->shortdescription = $shortdescription;
        $this->propertyFilled('shortdescription');
        return $this;
    }

    /**
     * @param string|null $description Product description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        $this->propertyFilled('description');
        return $this;
    }

    /**
     * @param float $vatrate VAT rate of product in percentage
     * @return self
     */
    public function setVatrate(float $vatrate): self
    {
        $this->vatrate = $vatrate;
        $this->propertyFilled('vatrate');
        return $this;
    }

    /**
     * @param float $price Original price of the product, before discounts
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        $this->propertyFilled('price');
        return $this;
    }

    /**
     * @param float $discount Discount on the product. Price - Discount = Sell price
     * @return self
     */
    public function setDiscount(float $discount): self
    {
        $this->discount = $discount;
        $this->propertyFilled('discount');
        return $this;
    }

    /**
     * @param float|null $purchaseprice Purchase price ex. VAT off this product.
     * @return self
     */
    public function setPurchaseprice(?float $purchaseprice): self
    {
        $this->purchaseprice = $purchaseprice;
        $this->propertyFilled('purchaseprice');
        return $this;
    }

    /**
     * @param float|null $containerDepositPrice This price will be added to the total price as a container deposit (in Dutch: Statiegeld).
     * @return self
     */
    public function setContainerDepositPrice(?float $containerDepositPrice): self
    {
        $this->containerDepositPrice = $containerDepositPrice;
        $this->propertyFilled('containerDepositPrice');
        return $this;
    }

    /**
     * @param float|null $safetyDepositPrice This price will be added to the total price as a safety deposit (in Dutch: Borg).
     * @return self
     */
    public function setSafetyDepositPrice(?float $safetyDepositPrice): self
    {
        $this->safetyDepositPrice = $safetyDepositPrice;
        $this->propertyFilled('safetyDepositPrice');
        return $this;
    }

    /**
     * @param int|null $creditPointsCustom Custom creditpoints for this product
     * @return self
     */
    public function setCreditPointsCustom(?int $creditPointsCustom): self
    {
        $this->creditPointsCustom = $creditPointsCustom;
        $this->propertyFilled('creditPointsCustom');
        return $this;
    }

    /**
     * @param string|null $unit The unit in which this product is sold (ie 'per piece')
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;
        $this->propertyFilled('unit');
        return $this;
    }

    /**
     * @param bool|null $stockenabled This product has stock
     * @return self
     */
    public function setStockenabled(?bool $stockenabled): self
    {
        $this->stockenabled = $stockenabled;
        $this->propertyFilled('stockenabled');
        return $this;
    }

    /**
     * @param string|null $stocktype If the stock amount is linked to the product of the attribute combination
     * @return self
     */
    public function setStocktype(?string $stocktype): self
    {
        $this->stocktype = $stocktype;
        $this->propertyFilled('stocktype');
        return $this;
    }

    /**
     * @param float|null $stock The quantity in stock for this product
     * @return self
     */
    public function setStock(?float $stock): self
    {
        $this->stock = $stock;
        $this->propertyFilled('stock');
        return $this;
    }

    /**
     * @param string|null $stocklocation The location of the product's stock
     * @return self
     */
    public function setStocklocation(?string $stocklocation): self
    {
        $this->stocklocation = $stocklocation;
        $this->propertyFilled('stocklocation');
        return $this;
    }

    /**
     * @param string|null $orderingWithoutStock Allow or dissallow ordering of this product when there is no stock. The default option 'global_setting' means the global webshop setting 'Starting point > My web shop > Settings > Ordering process & stock > Stock Options Allow the sale of more products than in stock' will be used for this product.
     * @return self
     */
    public function setOrderingWithoutStock(?string $orderingWithoutStock): self
    {
        $this->orderingWithoutStock = $orderingWithoutStock;
        $this->propertyFilled('orderingWithoutStock');
        return $this;
    }

    /**
     * @param float|null $weight Weight of the product in kilograms
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        $this->propertyFilled('weight');
        return $this;
    }

    /**
     * @param string|null $brand Name of the brand, you can also use a brand id, see property 'brand_id'.
     * @return self
     */
    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;
        $this->propertyFilled('brand');
        return $this;
    }

    /**
     * @param int|null $brandId Id of the brand, the brand id's are available in the resource brands.You can also use a brand name, see property 'brand'.
     * @return self
     */
    public function setBrandId(?int $brandId): self
    {
        $this->brandId = $brandId;
        $this->propertyFilled('brandId');
        return $this;
    }

    /**
     * @param string|null $condition Name of the condition, you can also use a condition id, see property 'condition_id'.
     * @return self
     */
    public function setCondition(?string $condition): self
    {
        $this->condition = $condition;
        $this->propertyFilled('condition');
        return $this;
    }

    /**
     * @param int|null $conditionId Id of the condition, the condition id's are available in the resource conditions. You can also use a condition name, see property 'condition'.
     * @return self
     */
    public function setConditionId(?int $conditionId): self
    {
        $this->conditionId = $conditionId;
        $this->propertyFilled('conditionId');
        return $this;
    }

    /**
     * @param int|null $colorId Id of the color, the color id are available in the resource colors. If NULL then the product won't have a color.
     * @return self
     */
    public function setColorId(?int $colorId): self
    {
        $this->colorId = $colorId;
        $this->propertyFilled('colorId');
        return $this;
    }

    /**
     * @param string|null $maincategory Main category of this product for exports and searches. This does not influence the category structure.
     * @return self
     */
    public function setMaincategory(?string $maincategory): self
    {
        $this->maincategory = $maincategory;
        $this->propertyFilled('maincategory');
        return $this;
    }

    /**
     * @param string|null $subcategory Sub category of this product for exports and searches. This does not influence the category structure.
     * @return self
     */
    public function setSubcategory(?string $subcategory): self
    {
        $this->subcategory = $subcategory;
        $this->propertyFilled('subcategory');
        return $this;
    }

    /**
     * @param int $packageId Package id of this product, the package id's are available in the resource 'packages'.
     * @return self
     */
    public function setPackageId(int $packageId): self
    {
        $this->packageId = $packageId;
        $this->propertyFilled('packageId');
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

    /**
     * @param string|null $specs Specification link
     * @return self
     */
    public function setSpecs(?string $specs): self
    {
        $this->specs = $specs;
        $this->propertyFilled('specs');
        return $this;
    }

    /**
     * @param int|null $decimalAmount Number of decimals that can be used in amounts
     * @return self
     */
    public function setDecimalAmount(?int $decimalAmount): self
    {
        $this->decimalAmount = $decimalAmount;
        $this->propertyFilled('decimalAmount');
        return $this;
    }

    /**
     * @param float|null $minimalOrderAmount Minimal order amount
     * @return self
     */
    public function setMinimalOrderAmount(?float $minimalOrderAmount): self
    {
        $this->minimalOrderAmount = $minimalOrderAmount;
        $this->propertyFilled('minimalOrderAmount');
        return $this;
    }

    /**
     * @param int|null $stockDeliveryNumber Expected delivery time, number of days, weeks, months, quarters, years
     * @return self
     */
    public function setStockDeliveryNumber(?int $stockDeliveryNumber): self
    {
        $this->stockDeliveryNumber = $stockDeliveryNumber;
        $this->propertyFilled('stockDeliveryNumber');
        return $this;
    }

    /**
     * @param string|null $stockDeliveryType Expected delivery type days, weeks, months, quarters, years, outofstock, temporarilysoldout, ordered, onrequest, unknown
     * @return self
     */
    public function setStockDeliveryType(?string $stockDeliveryType): self
    {
        $this->stockDeliveryType = $stockDeliveryType;
        $this->propertyFilled('stockDeliveryType');
        return $this;
    }

    /**
     * @param string|null $stockDeliveryStandard This field will be showed as the standard delivery text
     * @return self
     */
    public function setStockDeliveryStandard(?string $stockDeliveryStandard): self
    {
        $this->stockDeliveryStandard = $stockDeliveryStandard;
        $this->propertyFilled('stockDeliveryStandard');
        return $this;
    }

    /**
     * @param bool|null $showInTemplate Show the product in the window offers
     * @return self
     */
    public function setShowInTemplate(?bool $showInTemplate): self
    {
        $this->showInTemplate = $showInTemplate;
        $this->propertyFilled('showInTemplate');
        return $this;
    }

    /**
     * @param bool|null $showOnBeginpage Show the product as a offer at the beginpage or offer element
     * @return self
     */
    public function setShowOnBeginpage(?bool $showOnBeginpage): self
    {
        $this->showOnBeginpage = $showOnBeginpage;
        $this->propertyFilled('showOnBeginpage');
        return $this;
    }

    /**
     * @param bool|null $showOnFacebook Show the product in the facebook shop when available
     * @return self
     */
    public function setShowOnFacebook(?bool $showOnFacebook): self
    {
        $this->showOnFacebook = $showOnFacebook;
        $this->propertyFilled('showOnFacebook');
        return $this;
    }

    /**
     * @param string|null $showOrderButton Show order/offer button Y=show QUOTATION=offer button N=No button
     * @return self
     */
    public function setShowOrderButton(?string $showOrderButton): self
    {
        $this->showOrderButton = $showOrderButton;
        $this->propertyFilled('showOrderButton');
        return $this;
    }

    /**
     * @param int|null $productLayout Product Layout 1=Standard layout, 2=Quick order, 3=Split layout, 4=Tab Layout
     * @return self
     */
    public function setProductLayout(?int $productLayout): self
    {
        $this->productLayout = $productLayout;
        $this->propertyFilled('productLayout');
        return $this;
    }

    /**
     * @param string|null $photoSize The photo description size
     * @return self
     */
    public function setPhotoSize(?string $photoSize): self
    {
        $this->photoSize = $photoSize;
        $this->propertyFilled('photoSize');
        return $this;
    }

    /**
     * @param string|null $hideWithoutCategory Hide the product when it has not any categories. YES=Hide, NO_DIRECTLINK=No, the product can be found by direct url, NO_SEARCHRESULTS=No, Product can be found in the searchresults
     * @return self
     */
    public function setHideWithoutCategory(?string $hideWithoutCategory): self
    {
        $this->hideWithoutCategory = $hideWithoutCategory;
        $this->propertyFilled('hideWithoutCategory');
        return $this;
    }

    /**
     * @param string|null $memo Internal memo for internal purpose only
     * @return self
     */
    public function setMemo(?string $memo): self
    {
        $this->memo = $memo;
        $this->propertyFilled('memo');
        return $this;
    }

    /**
     * @param int|null $supplierId Id of the supplier, the supplier id are available in the resource suppliers
     * @return self
     */
    public function setSupplierId(?int $supplierId): self
    {
        $this->supplierId = $supplierId;
        $this->propertyFilled('supplierId');
        return $this;
    }

    /**
     * @param bool|null $fixedStaggeredPrices Enable / disable fixed staggered prices
     * @return self
     */
    public function setFixedStaggeredPrices(?bool $fixedStaggeredPrices): self
    {
        $this->fixedStaggeredPrices = $fixedStaggeredPrices;
        $this->propertyFilled('fixedStaggeredPrices');
        return $this;
    }

    /**
     * @param bool|null $marktplaatsActive Enable / disable Marktplaats.
     * @return self
     */
    public function setMarktplaatsActive(?bool $marktplaatsActive): self
    {
        $this->marktplaatsActive = $marktplaatsActive;
        $this->propertyFilled('marktplaatsActive');
        return $this;
    }

    /**
     * @param string|null $marktplaatsStatus The status for this advertisement
     * @return self
     */
    public function setMarktplaatsStatus(?string $marktplaatsStatus): self
    {
        $this->marktplaatsStatus = $marktplaatsStatus;
        $this->propertyFilled('marktplaatsStatus');
        return $this;
    }

    /**
     * @param float|null $marktplaatsCpc Cost per click in euro cents
     * @return self
     */
    public function setMarktplaatsCpc(?float $marktplaatsCpc): self
    {
        $this->marktplaatsCpc = $marktplaatsCpc;
        $this->propertyFilled('marktplaatsCpc');
        return $this;
    }

    /**
     * @param float|null $marktplaatsDailyBudget Daily budget for this advertisement in euro cents
     * @return self
     */
    public function setMarktplaatsDailyBudget(?float $marktplaatsDailyBudget): self
    {
        $this->marktplaatsDailyBudget = $marktplaatsDailyBudget;
        $this->propertyFilled('marktplaatsDailyBudget');
        return $this;
    }

    /**
     * @param float|null $marktplaatsTotalBudget Total budget for this advertisement in euro cents. You can use 0 euro cents for a infinite total budget or 5000 euro cents as minimum.
     * @return self
     */
    public function setMarktplaatsTotalBudget(?float $marktplaatsTotalBudget): self
    {
        $this->marktplaatsTotalBudget = $marktplaatsTotalBudget;
        $this->propertyFilled('marktplaatsTotalBudget');
        return $this;
    }

    /**
     * @param int|null $marktplaatsCategoryId The Marktplaats category Id
     * @return self
     */
    public function setMarktplaatsCategoryId(?int $marktplaatsCategoryId): self
    {
        $this->marktplaatsCategoryId = $marktplaatsCategoryId;
        $this->propertyFilled('marktplaatsCategoryId');
        return $this;
    }

    /**
     * @param string|null $marktplaatsPriceType The price type
     * @return self
     */
    public function setMarktplaatsPriceType(?string $marktplaatsPriceType): self
    {
        $this->marktplaatsPriceType = $marktplaatsPriceType;
        $this->propertyFilled('marktplaatsPriceType');
        return $this;
    }

    /**
     * @param string|null $googleShoppingCategory Google Shopping Category. Corresponds with the values given by Google. See: https://support.google.com/merchants/answer/160081#sel_csv
     * @return self
     */
    public function setGoogleShoppingCategory(?string $googleShoppingCategory): self
    {
        $this->googleShoppingCategory = $googleShoppingCategory;
        $this->propertyFilled('googleShoppingCategory');
        return $this;
    }

    /**
     * @param bool|null $isIncludedForExportFeed Is this product included in the export feed
     * @return self
     */
    public function setIsIncludedForExportFeed(?bool $isIncludedForExportFeed): self
    {
        $this->isIncludedForExportFeed = $isIncludedForExportFeed;
        $this->propertyFilled('isIncludedForExportFeed');
        return $this;
    }
}
