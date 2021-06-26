<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Settings\Entity;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

class Settings implements Model
{
    use FromArray;
    use ToArray;
    
    /**
     * @var string Link to self.
     */
    private $href;
    
    /**
     * @var bool If the webshop is disabled a notice will be shown to visitors.
     */
    private $webshopEnabled;
    
    /**
     * @var string If the webshop is disabled a notice will be shown to visitors. This is the title of the notice.
     */
    private $webshopDisabledTitle;
    
    /**
     * @var string If the webshop is disabled a notice will be shown to visitors. This is the body of the notice.
     */
    private $webshopDisabledText;
    
    /**
     * @var string|null Currency code used in webshop, ISO 4217 Currency Codes
     */
    private $currency;
    
    /**
     * @var float|null Default VAT rate used when creating new products
     */
    private $defaultVatRat;
    
    /**
     * @var bool|null Do prices include VAT
     */
    private $pricesIncludeVat;
    
    /**
     * @var bool|null Is the webshop Full SSL. If true, all links should be https://
     */
    private $fullSslWebshop;
    
    /**
     * @var float|null The current value of one creditpoint in a webshop
     */
    private $creditpointValue;
    
    /**
     * @var string[]|null Array with available languages of the webshop
     */
    private $languages;
    
    /**
     * @var string Language of the webshop's backend. See ISO 639-1 Language Codes.
     */
    private $backendLanguage;
    
    /**
     * @var bool If a shop has multiple languages it can also have a separate domain for each language.
     */
    private $separateDomainPerLanguage;
    
    /**
     * @var bool Is stock is enabled certain stock rules apply, like 'ordering_without_stock' and 'stock_level_warnings'.
     */
    private $stock;
    
    /**
     * @var string|null Allow or dissallow ordering of products when there is no stock. This option can be overwritten per product
     */
    private $orderingWithoutStock;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\StockLevelWarnings Describes the stock level thresholds. Typically if a product's stock is above high it's 'green'. Is it below low it's 'red'. In between would be considered 'orange'.
     */
    private $stockLevelWarnings;
    
    /**
     * @var string[] If a product has a system_id and is a multishop product, certain properties can't be patch because they are maintained from the multishop system. These properties are read-only.
     */
    private $multishopReadonlyProperties;
    
    /**
     * @var string[]|null Array with available checkouts
     */
    private $checkoutType;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Settings\Entity\Takeoutsettings|null Contains takeout settings for this webshop
     */
    private $takeoutsettings;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\QuotationStatus[]|null An array of all possible status.
     */
    private $quotationStatus;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\OrderStatus[]|null An array of all possible status.
     */
    private $orderStatus;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\InvoiceStatus[]|null An array of all possible status.
     */
    private $invoiceStatus;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\ReturnStatus[]|null An array of all possible status.
     */
    private $returnStatus;
    
    /**
     * @var \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\ParentItem|null Contains link to parent resource.
     */
    private $parent;
    
    /**
     * @return self
     */
    public static function fromArray(array $data): Model
    {
        return self::createFromArray($data);
    }
    
    /**
     * @return string Link to self.
     */
    public function getHref(): string
    {
        return $this->href;
    }
    
    /**
     * @return bool If the webshop is disabled a notice will be shown to visitors.
     */
    public function getWebshopEnabled(): bool
    {
        return $this->webshopEnabled;
    }
    
    /**
     * @return string If the webshop is disabled a notice will be shown to visitors. This is the title of the notice.
     */
    public function getWebshopDisabledTitle(): string
    {
        return $this->webshopDisabledTitle;
    }
    
    /**
     * @return string If the webshop is disabled a notice will be shown to visitors. This is the body of the notice.
     */
    public function getWebshopDisabledText(): string
    {
        return $this->webshopDisabledText;
    }
    
    /**
     * @return string|null Currency code used in webshop, ISO 4217 Currency Codes
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    
    /**
     * @return float|null Default VAT rate used when creating new products
     */
    public function getDefaultVatRat(): ?float
    {
        return $this->defaultVatRat;
    }
    
    /**
     * @return bool|null Do prices include VAT
     */
    public function getPricesIncludeVat(): ?bool
    {
        return $this->pricesIncludeVat;
    }
    
    /**
     * @return bool|null Is the webshop Full SSL. If true, all links should be https://
     */
    public function getFullSslWebshop(): ?bool
    {
        return $this->fullSslWebshop;
    }
    
    /**
     * @return float|null The current value of one creditpoint in a webshop
     */
    public function getCreditpointValue(): ?float
    {
        return $this->creditpointValue;
    }
    
    /**
     * @return string[]|null Array with available languages of the webshop
     */
    public function getLanguages(): ?array
    {
        return $this->languages;
    }
    
    /**
     * @return string Language of the webshop's backend. See ISO 639-1 Language Codes.
     */
    public function getBackendLanguage(): string
    {
        return $this->backendLanguage;
    }
    
    /**
     * @return bool If a shop has multiple languages it can also have a separate domain for each language.
     */
    public function getSeparateDomainPerLanguage(): bool
    {
        return $this->separateDomainPerLanguage;
    }
    
    /**
     * @return bool Is stock is enabled certain stock rules apply, like 'ordering_without_stock' and 'stock_level_warnings'.
     */
    public function getStock(): bool
    {
        return $this->stock;
    }
    
    /**
     * @return string|null Allow or dissallow ordering of products when there is no stock. This option can be overwritten per product
     */
    public function getOrderingWithoutStock(): ?string
    {
        return $this->orderingWithoutStock;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\StockLevelWarnings Describes the stock level thresholds. Typically if a product's stock is above high it's 'green'. Is it below low it's 'red'. In between would be considered 'orange'.
     */
    public function getStockLevelWarnings(): \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\StockLevelWarnings
    {
        return $this->stockLevelWarnings;
    }
    
    /**
     * @return string[] If a product has a system_id and is a multishop product, certain properties can't be patch because they are maintained from the multishop system. These properties are read-only.
     */
    public function getMultishopReadonlyProperties(): array
    {
        return $this->multishopReadonlyProperties;
    }
    
    /**
     * @return string[]|null Array with available checkouts
     */
    public function getCheckoutType(): ?array
    {
        return $this->checkoutType;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Settings\Entity\Takeoutsettings|null Contains takeout settings for this webshop
     */
    public function getTakeoutsettings(): ?\JacobDeKeizer\Ccv\Models\Settings\Entity\Takeoutsettings
    {
        return $this->takeoutsettings;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\QuotationStatus[]|null An array of all possible status.
     */
    public function getQuotationStatus(): ?array
    {
        return $this->quotationStatus;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\OrderStatus[]|null An array of all possible status.
     */
    public function getOrderStatus(): ?array
    {
        return $this->orderStatus;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\InvoiceStatus[]|null An array of all possible status.
     */
    public function getInvoiceStatus(): ?array
    {
        return $this->invoiceStatus;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\ReturnStatus[]|null An array of all possible status.
     */
    public function getReturnStatus(): ?array
    {
        return $this->returnStatus;
    }
    
    /**
     * @return \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\ParentItem|null Contains link to parent resource.
     */
    public function getParent(): ?\JacobDeKeizer\Ccv\Models\Settings\Child\Entity\ParentItem
    {
        return $this->parent;
    }
    
    /**
     * @param string $href Link to self.
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        $this->propertyFilled('href');
        return $this;
    }
    
    /**
     * @param bool $webshopEnabled If the webshop is disabled a notice will be shown to visitors.
     * @return self
     */
    public function setWebshopEnabled(bool $webshopEnabled): self
    {
        $this->webshopEnabled = $webshopEnabled;
        $this->propertyFilled('webshopEnabled');
        return $this;
    }
    
    /**
     * @param string $webshopDisabledTitle If the webshop is disabled a notice will be shown to visitors. This is the title of the notice.
     * @return self
     */
    public function setWebshopDisabledTitle(string $webshopDisabledTitle): self
    {
        $this->webshopDisabledTitle = $webshopDisabledTitle;
        $this->propertyFilled('webshopDisabledTitle');
        return $this;
    }
    
    /**
     * @param string $webshopDisabledText If the webshop is disabled a notice will be shown to visitors. This is the body of the notice.
     * @return self
     */
    public function setWebshopDisabledText(string $webshopDisabledText): self
    {
        $this->webshopDisabledText = $webshopDisabledText;
        $this->propertyFilled('webshopDisabledText');
        return $this;
    }
    
    /**
     * @param string|null $currency Currency code used in webshop, ISO 4217 Currency Codes
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        $this->propertyFilled('currency');
        return $this;
    }
    
    /**
     * @param float|null $defaultVatRat Default VAT rate used when creating new products
     * @return self
     */
    public function setDefaultVatRat(?float $defaultVatRat): self
    {
        $this->defaultVatRat = $defaultVatRat;
        $this->propertyFilled('defaultVatRat');
        return $this;
    }
    
    /**
     * @param bool|null $pricesIncludeVat Do prices include VAT
     * @return self
     */
    public function setPricesIncludeVat(?bool $pricesIncludeVat): self
    {
        $this->pricesIncludeVat = $pricesIncludeVat;
        $this->propertyFilled('pricesIncludeVat');
        return $this;
    }
    
    /**
     * @param bool|null $fullSslWebshop Is the webshop Full SSL. If true, all links should be https://
     * @return self
     */
    public function setFullSslWebshop(?bool $fullSslWebshop): self
    {
        $this->fullSslWebshop = $fullSslWebshop;
        $this->propertyFilled('fullSslWebshop');
        return $this;
    }
    
    /**
     * @param float|null $creditpointValue The current value of one creditpoint in a webshop
     * @return self
     */
    public function setCreditpointValue(?float $creditpointValue): self
    {
        $this->creditpointValue = $creditpointValue;
        $this->propertyFilled('creditpointValue');
        return $this;
    }
    
    /**
     * @param string[]|null $languages Array with available languages of the webshop
     * @return self
     */
    public function setLanguages(?array $languages): self
    {
        $this->languages = $languages;
        $this->propertyFilled('languages');
        return $this;
    }
    
    /**
     * @param string $backendLanguage Language of the webshop's backend. See ISO 639-1 Language Codes.
     * @return self
     */
    public function setBackendLanguage(string $backendLanguage): self
    {
        $this->backendLanguage = $backendLanguage;
        $this->propertyFilled('backendLanguage');
        return $this;
    }
    
    /**
     * @param bool $separateDomainPerLanguage If a shop has multiple languages it can also have a separate domain for each language.
     * @return self
     */
    public function setSeparateDomainPerLanguage(bool $separateDomainPerLanguage): self
    {
        $this->separateDomainPerLanguage = $separateDomainPerLanguage;
        $this->propertyFilled('separateDomainPerLanguage');
        return $this;
    }
    
    /**
     * @param bool $stock Is stock is enabled certain stock rules apply, like 'ordering_without_stock' and 'stock_level_warnings'.
     * @return self
     */
    public function setStock(bool $stock): self
    {
        $this->stock = $stock;
        $this->propertyFilled('stock');
        return $this;
    }
    
    /**
     * @param string|null $orderingWithoutStock Allow or dissallow ordering of products when there is no stock. This option can be overwritten per product
     * @return self
     */
    public function setOrderingWithoutStock(?string $orderingWithoutStock): self
    {
        $this->orderingWithoutStock = $orderingWithoutStock;
        $this->propertyFilled('orderingWithoutStock');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\StockLevelWarnings $stockLevelWarnings Describes the stock level thresholds. Typically if a product's stock is above high it's 'green'. Is it below low it's 'red'. In between would be considered 'orange'.
     * @return self
     */
    public function setStockLevelWarnings(\JacobDeKeizer\Ccv\Models\Settings\Child\Entity\StockLevelWarnings $stockLevelWarnings): self
    {
        $this->stockLevelWarnings = $stockLevelWarnings;
        $this->propertyFilled('stockLevelWarnings');
        return $this;
    }
    
    /**
     * @param string[] $multishopReadonlyProperties If a product has a system_id and is a multishop product, certain properties can't be patch because they are maintained from the multishop system. These properties are read-only.
     * @return self
     */
    public function setMultishopReadonlyProperties(array $multishopReadonlyProperties): self
    {
        $this->multishopReadonlyProperties = $multishopReadonlyProperties;
        $this->propertyFilled('multishopReadonlyProperties');
        return $this;
    }
    
    /**
     * @param string[]|null $checkoutType Array with available checkouts
     * @return self
     */
    public function setCheckoutType(?array $checkoutType): self
    {
        $this->checkoutType = $checkoutType;
        $this->propertyFilled('checkoutType');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Settings\Entity\Takeoutsettings|null $takeoutsettings Contains takeout settings for this webshop
     * @return self
     */
    public function setTakeoutsettings(?\JacobDeKeizer\Ccv\Models\Settings\Entity\Takeoutsettings $takeoutsettings): self
    {
        $this->takeoutsettings = $takeoutsettings;
        $this->propertyFilled('takeoutsettings');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\QuotationStatus[]|null $quotationStatus An array of all possible status.
     * @return self
     */
    public function setQuotationStatus(?array $quotationStatus): self
    {
        $this->quotationStatus = $quotationStatus;
        $this->propertyFilled('quotationStatus');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\OrderStatus[]|null $orderStatus An array of all possible status.
     * @return self
     */
    public function setOrderStatus(?array $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        $this->propertyFilled('orderStatus');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\InvoiceStatus[]|null $invoiceStatus An array of all possible status.
     * @return self
     */
    public function setInvoiceStatus(?array $invoiceStatus): self
    {
        $this->invoiceStatus = $invoiceStatus;
        $this->propertyFilled('invoiceStatus');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\ReturnStatus[]|null $returnStatus An array of all possible status.
     * @return self
     */
    public function setReturnStatus(?array $returnStatus): self
    {
        $this->returnStatus = $returnStatus;
        $this->propertyFilled('returnStatus');
        return $this;
    }
    
    /**
     * @param \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\ParentItem|null $parent Contains link to parent resource.
     * @return self
     */
    public function setParent(?\JacobDeKeizer\Ccv\Models\Settings\Child\Entity\ParentItem $parent): self
    {
        $this->parent = $parent;
        $this->propertyFilled('parent');
        return $this;
    }
    protected function convertFromArrayData(string $key, $value)
    {
        if ($key === 'quotation_status') {
            $items = [];
            
            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\QuotationStatus::fromArray($item);
            }
            
            return $items;
        }
        
        if ($key === 'order_status') {
            $items = [];
            
            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\OrderStatus::fromArray($item);
            }
            
            return $items;
        }
        
        if ($key === 'invoice_status') {
            $items = [];
            
            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\InvoiceStatus::fromArray($item);
            }
            
            return $items;
        }
        
        if ($key === 'return_status') {
            $items = [];
            
            foreach ($value as $item) {
                $items[] = \JacobDeKeizer\Ccv\Models\Settings\Child\Entity\ReturnStatus::fromArray($item);
            }
            
            return $items;
        }
        
        return $value;
    }
}
