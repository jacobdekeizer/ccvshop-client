<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\ClientInterface;
use JacobDeKeizer\Ccv\Endpoints;

class Client
{
    public const API_VERSION = 'v1';
    public const API_ENDPOINT = '/api/rest/';

    /** @var string */
    private $baseUrl;

    /** @var string */
    private $publicKey;

    /** @var string */
    private $privateKey;

    /** @var ClientInterface */
    private $client;

    public function __construct()
    {
        $this->client = new HttpClient();
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): Client
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function setPublicKey(string $publicKey): Client
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }

    public function setPrivateKey(string $privateKey): Client
    {
        $this->privateKey = $privateKey;
        return $this;
    }

    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    public function setClient(ClientInterface $client): Client
    {
        $this->client = $client;
        return $this;
    }

    public function root(): Endpoints\RootEndpoint
    {
        return new Endpoints\RootEndpoint($this);
    }
    public function affiliatenetworks(): Endpoints\AffiliatenetworksEndpoint
    {
        return new Endpoints\AffiliatenetworksEndpoint($this);
    }

    public function appcodeblocks(): Endpoints\AppcodeblocksEndpoint
    {
        return new Endpoints\AppcodeblocksEndpoint($this);
    }

    public function apppsp(): Endpoints\ApppspEndpoint
    {
        return new Endpoints\ApppspEndpoint($this);
    }

    public function apppsppaymethods(): Endpoints\ApppsppaymethodsEndpoint
    {
        return new Endpoints\ApppsppaymethodsEndpoint($this);
    }

    public function appstorecategories(): Endpoints\AppstorecategoriesEndpoint
    {
        return new Endpoints\AppstorecategoriesEndpoint($this);
    }

    public function apps(): Endpoints\AppsEndpoint
    {
        return new Endpoints\AppsEndpoint($this);
    }

    public function attributecombinationphotos(): Endpoints\AttributecombinationphotosEndpoint
    {
        return new Endpoints\AttributecombinationphotosEndpoint($this);
    }

    public function attributecombinations(): Endpoints\AttributecombinationsEndpoint
    {
        return new Endpoints\AttributecombinationsEndpoint($this);
    }

    public function attributevalues(): Endpoints\AttributevaluesEndpoint
    {
        return new Endpoints\AttributevaluesEndpoint($this);
    }

    public function attributes(): Endpoints\AttributesEndpoint
    {
        return new Endpoints\AttributesEndpoint($this);
    }

    public function brands(): Endpoints\BrandsEndpoint
    {
        return new Endpoints\BrandsEndpoint($this);
    }

    public function categories(): Endpoints\CategoriesEndpoint
    {
        return new Endpoints\CategoriesEndpoint($this);
    }

    public function categoryproductlayouts(): Endpoints\CategoryproductlayoutsEndpoint
    {
        return new Endpoints\CategoryproductlayoutsEndpoint($this);
    }

    public function categorytree(): Endpoints\CategorytreeEndpoint
    {
        return new Endpoints\CategorytreeEndpoint($this);
    }

    public function colors(): Endpoints\ColorsEndpoint
    {
        return new Endpoints\ColorsEndpoint($this);
    }

    public function conditions(): Endpoints\ConditionsEndpoint
    {
        return new Endpoints\ConditionsEndpoint($this);
    }

    public function credentials(): Endpoints\CredentialsEndpoint
    {
        return new Endpoints\CredentialsEndpoint($this);
    }

    public function creditpointmutations(): Endpoints\CreditpointmutationsEndpoint
    {
        return new Endpoints\CreditpointmutationsEndpoint($this);
    }

    public function creditpoints(): Endpoints\CreditpointsEndpoint
    {
        return new Endpoints\CreditpointsEndpoint($this);
    }

    public function dashboardblocks(): Endpoints\DashboardblocksEndpoint
    {
        return new Endpoints\DashboardblocksEndpoint($this);
    }

    public function dashboards(): Endpoints\DashboardsEndpoint
    {
        return new Endpoints\DashboardsEndpoint($this);
    }

    public function disabledpaymethods(): Endpoints\DisabledpaymethodsEndpoint
    {
        return new Endpoints\DisabledpaymethodsEndpoint($this);
    }

    public function discountcoupons(): Endpoints\DiscountcouponsEndpoint
    {
        return new Endpoints\DiscountcouponsEndpoint($this);
    }

    public function domains(): Endpoints\DomainsEndpoint
    {
        return new Endpoints\DomainsEndpoint($this);
    }

    public function invoicelabels(): Endpoints\InvoicelabelsEndpoint
    {
        return new Endpoints\InvoicelabelsEndpoint($this);
    }

    public function invoicenotifications(): Endpoints\InvoicenotificationsEndpoint
    {
        return new Endpoints\InvoicenotificationsEndpoint($this);
    }

    public function invoicerows(): Endpoints\InvoicerowsEndpoint
    {
        return new Endpoints\InvoicerowsEndpoint($this);
    }

    public function invoices(): Endpoints\InvoicesEndpoint
    {
        return new Endpoints\InvoicesEndpoint($this);
    }

    public function labels(): Endpoints\LabelsEndpoint
    {
        return new Endpoints\LabelsEndpoint($this);
    }

    public function languages(): Endpoints\LanguagesEndpoint
    {
        return new Endpoints\LanguagesEndpoint($this);
    }

    public function mailingaddresses(): Endpoints\MailingaddressesEndpoint
    {
        return new Endpoints\MailingaddressesEndpoint($this);
    }

    public function mailinglists(): Endpoints\MailinglistsEndpoint
    {
        return new Endpoints\MailinglistsEndpoint($this);
    }

    public function marktplaatscategories(): Endpoints\MarktplaatscategoriesEndpoint
    {
        return new Endpoints\MarktplaatscategoriesEndpoint($this);
    }

    public function merchant(): Endpoints\MerchantEndpoint
    {
        return new Endpoints\MerchantEndpoint($this);
    }

    public function orderaffiliatenetworks(): Endpoints\OrderaffiliatenetworksEndpoint
    {
        return new Endpoints\OrderaffiliatenetworksEndpoint($this);
    }

    public function orderlabels(): Endpoints\OrderlabelsEndpoint
    {
        return new Endpoints\OrderlabelsEndpoint($this);
    }

    public function ordermessages(): Endpoints\OrdermessagesEndpoint
    {
        return new Endpoints\OrdermessagesEndpoint($this);
    }

    public function ordernotes(): Endpoints\OrdernotesEndpoint
    {
        return new Endpoints\OrdernotesEndpoint($this);
    }

    public function ordernotifications(): Endpoints\OrdernotificationsEndpoint
    {
        return new Endpoints\OrdernotificationsEndpoint($this);
    }

    public function orderrowattributevalues(): Endpoints\OrderrowattributevaluesEndpoint
    {
        return new Endpoints\OrderrowattributevaluesEndpoint($this);
    }

    public function orderrows(): Endpoints\OrderrowsEndpoint
    {
        return new Endpoints\OrderrowsEndpoint($this);
    }

    public function orders(): Endpoints\OrdersEndpoint
    {
        return new Endpoints\OrdersEndpoint($this);
    }

    public function packages(): Endpoints\PackagesEndpoint
    {
        return new Endpoints\PackagesEndpoint($this);
    }

    public function paymethods(): Endpoints\PaymethodsEndpoint
    {
        return new Endpoints\PaymethodsEndpoint($this);
    }

    public function productattachments(): Endpoints\ProductattachmentsEndpoint
    {
        return new Endpoints\ProductattachmentsEndpoint($this);
    }

    public function productattributesets(): Endpoints\ProductattributesetsEndpoint
    {
        return new Endpoints\ProductattributesetsEndpoint($this);
    }

    public function productattributevalues(): Endpoints\ProductattributevaluesEndpoint
    {
        return new Endpoints\ProductattributevaluesEndpoint($this);
    }

    public function productkeywords(): Endpoints\ProductkeywordsEndpoint
    {
        return new Endpoints\ProductkeywordsEndpoint($this);
    }

    public function productlabels(): Endpoints\ProductlabelsEndpoint
    {
        return new Endpoints\ProductlabelsEndpoint($this);
    }

    public function productphotos(): Endpoints\ProductphotosEndpoint
    {
        return new Endpoints\ProductphotosEndpoint($this);
    }

    public function productproperties(): Endpoints\ProductpropertiesEndpoint
    {
        return new Endpoints\ProductpropertiesEndpoint($this);
    }

    public function productpropertygroups(): Endpoints\ProductpropertygroupsEndpoint
    {
        return new Endpoints\ProductpropertygroupsEndpoint($this);
    }

    public function productpropertyoptions(): Endpoints\ProductpropertyoptionsEndpoint
    {
        return new Endpoints\ProductpropertyoptionsEndpoint($this);
    }

    public function productpropertyvalues(): Endpoints\ProductpropertyvaluesEndpoint
    {
        return new Endpoints\ProductpropertyvaluesEndpoint($this);
    }

    public function productqueries(): Endpoints\ProductqueriesEndpoint
    {
        return new Endpoints\ProductqueriesEndpoint($this);
    }

    public function productrelevant(): Endpoints\ProductrelevantEndpoint
    {
        return new Endpoints\ProductrelevantEndpoint($this);
    }

    public function productreviews(): Endpoints\ProductreviewsEndpoint
    {
        return new Endpoints\ProductreviewsEndpoint($this);
    }

    public function productshippingcosts(): Endpoints\ProductshippingcostsEndpoint
    {
        return new Endpoints\ProductshippingcostsEndpoint($this);
    }

    public function productstaggeredprices(): Endpoints\ProductstaggeredpricesEndpoint
    {
        return new Endpoints\ProductstaggeredpricesEndpoint($this);
    }

    public function producttaxtariffexceptions(): Endpoints\ProducttaxtariffexceptionsEndpoint
    {
        return new Endpoints\ProducttaxtariffexceptionsEndpoint($this);
    }

    public function producttocategories(): Endpoints\ProducttocategoriesEndpoint
    {
        return new Endpoints\ProducttocategoriesEndpoint($this);
    }

    public function producttopropertygroups(): Endpoints\ProducttopropertygroupsEndpoint
    {
        return new Endpoints\ProducttopropertygroupsEndpoint($this);
    }

    public function productvariations(): Endpoints\ProductvariationsEndpoint
    {
        return new Endpoints\ProductvariationsEndpoint($this);
    }

    public function productvideos(): Endpoints\ProductvideosEndpoint
    {
        return new Endpoints\ProductvideosEndpoint($this);
    }

    public function products(): Endpoints\ProductsEndpoint
    {
        return new Endpoints\ProductsEndpoint($this);
    }

    public function quotationrows(): Endpoints\QuotationrowsEndpoint
    {
        return new Endpoints\QuotationrowsEndpoint($this);
    }

    public function quotations(): Endpoints\QuotationsEndpoint
    {
        return new Endpoints\QuotationsEndpoint($this);
    }

    public function redirects(): Endpoints\RedirectsEndpoint
    {
        return new Endpoints\RedirectsEndpoint($this);
    }

    public function returnrows(): Endpoints\ReturnrowsEndpoint
    {
        return new Endpoints\ReturnrowsEndpoint($this);
    }

    public function returns(): Endpoints\ReturnsEndpoint
    {
        return new Endpoints\ReturnsEndpoint($this);
    }

    public function servicecategories(): Endpoints\ServicecategoriesEndpoint
    {
        return new Endpoints\ServicecategoriesEndpoint($this);
    }

    public function services(): Endpoints\ServicesEndpoint
    {
        return new Endpoints\ServicesEndpoint($this);
    }

    public function settings(): Endpoints\SettingsEndpoint
    {
        return new Endpoints\SettingsEndpoint($this);
    }

    public function suppliers(): Endpoints\SuppliersEndpoint
    {
        return new Endpoints\SuppliersEndpoint($this);
    }

    public function takeoutslots(): Endpoints\TakeoutslotsEndpoint
    {
        return new Endpoints\TakeoutslotsEndpoint($this);
    }

    public function translations(): Endpoints\TranslationsEndpoint
    {
        return new Endpoints\TranslationsEndpoint($this);
    }

    public function usercategoryadjustments(): Endpoints\UsercategoryadjustmentsEndpoint
    {
        return new Endpoints\UsercategoryadjustmentsEndpoint($this);
    }

    public function usergroupcategoryadjustments(): Endpoints\UsergroupcategoryadjustmentsEndpoint
    {
        return new Endpoints\UsergroupcategoryadjustmentsEndpoint($this);
    }

    public function usergroupproductadjustments(): Endpoints\UsergroupproductadjustmentsEndpoint
    {
        return new Endpoints\UsergroupproductadjustmentsEndpoint($this);
    }

    public function usergroupstaggeredpriceadjustments(): Endpoints\UsergroupstaggeredpriceadjustmentsEndpoint
    {
        return new Endpoints\UsergroupstaggeredpriceadjustmentsEndpoint($this);
    }

    public function usergroups(): Endpoints\UsergroupsEndpoint
    {
        return new Endpoints\UsergroupsEndpoint($this);
    }

    public function userproductadjustments(): Endpoints\UserproductadjustmentsEndpoint
    {
        return new Endpoints\UserproductadjustmentsEndpoint($this);
    }

    public function userstaggeredpriceadjustments(): Endpoints\UserstaggeredpriceadjustmentsEndpoint
    {
        return new Endpoints\UserstaggeredpriceadjustmentsEndpoint($this);
    }

    public function users(): Endpoints\UsersEndpoint
    {
        return new Endpoints\UsersEndpoint($this);
    }

    public function webhooks(): Endpoints\WebhooksEndpoint
    {
        return new Endpoints\WebhooksEndpoint($this);
    }

    public function webshops(): Endpoints\WebshopsEndpoint
    {
        return new Endpoints\WebshopsEndpoint($this);
    }
}
