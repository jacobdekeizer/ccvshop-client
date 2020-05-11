# CCV shop API client for PHP

![Build](https://github.com/jacobdekeizer/ccvshop-client/workflows/Build/badge.svg)

An object oriented php client for the CCV shop api. See here for the [CCV shop API documentation](https://demo.ccvshop.nl/API/Docs/).

## Contributing

Any help is appreciated, see [contributing](https://github.com/jacobdekeizer/ccvshop-client/blob/master/.github/CONTRIBUTING.md) for more information.

## Installation
You can install this package via composer:

```
composer require jacobdekeizer/ccvshop-client
```

## Usage

Create the client

```php
$client = new \JacobDeKeizer\Ccv\Client();
$client->setBaseUrl('https://demo.ccvshop.nl');
$client->setPublicKey('public_key');
$client->setPrivateKey('private_key');
```

## Orders

### Get all orders
Get all open orders which are paid and completed
```php
$getOrdersParameter = (new \JacobDeKeizer\Ccv\Parameters\Orders\All)
    ->setStatus(1)
    ->setIsPaid(true)
    ->setIsCompleted(true);

do {
    $orders = $client->orders()->all($getOrdersParameter);

    foreach ($orders->getItems() as $order) {
        var_dump($order);
    }
} while(($getOrdersParameter = \JacobDeKeizer\Ccv\Parameters\Orders\All::fromUrl($orders->getNext())) !== null);
```

### Get order

```php
$order = $client->orders()->get(123456);
```

### Update order

For example update the order status and the customer email

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Orders\Patch())
    ->setStatus(6)
    ->setCustomer(
        (new \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input)
            ->setEmail('example@example.com')
    );

$client->orders()->update(123456, $patch);
```

### Create order

```php
$order = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Orders\Post())
    ->setInvoicenumber(123456);
    //->set..
   
$client->orders()->create($order);
```

## Supported resources

| Resources | Supported |
| --- | --- |
| root | ✖️ |
| affiliatenetworks | ✖️ |
| appcodeblocks | ✖️ |
| apppsp | ✖️ |
| apppsppaymethods | ✖️ |
| appstorecategories | ✖️ |
| apps | ✖️ |
| attributecombinationphotos | ✖️ |
| attributecombinations | ✖️ |
| attributevalues | ✖️ |
| attributes | ✖️ |
| brands | ✖️ |
| categories | ✖️ |
| categoryproductlayouts | ✖️ |
| categorytree | ✖️ |
| conditions | ✖️ |
| creditpointmutations | ✖️ |
| creditpoints | ✖️ |
| disabledpaymethods | ✖️ |
| discountcoupons | ✖️ |
| domains | ✖️ |
| languages | ✖️ |
| mailingaddresses | ✖️ |
| mailinglists | ✖️ |
| marktplaatscategories | ✖️ |
| merchant | ✖️ |
| orderaffiliatenetworks | ✖️ |
| ordernotes | ✖️ |
| ordernotifications | ✖️ |
| orderrows | ✖️ |
| orders | :heavy_check_mark: |
| packages | ✖️ |
| paymethods | ✖️ |
| productattachments | ✖️ |
| productattributesets | ✖️ |
| productattributevalues | ✖️ |
| productkeywords | ✖️ |
| productphotos | ✖️ |
| productproperties | ✖️ |
| productpropertygroups | ✖️ |
| productpropertyoptions | ✖️ |
| productpropertyvalues | ✖️ |
| productqueries | ✖️ |
| productrelevant | ✖️ |
| productreviews | ✖️ |
| productshippingcosts | ✖️ |
| productstaggeredprices | ✖️ |
| producttocategories | ✖️ |
| producttopropertygroups | ✖️ |
| productvideos | ✖️ |
| products | ✖️ |
| redirects | ✖️ |
| servicecategories | ✖️ |
| services | ✖️ |
| settings | ✖️ |
| suppliers | ✖️ |
| takeoutslots | ✖️ |
| translations | ✖️ |
| usercategoryadjustments | ✖️ |
| usergroupcategoryadjustments | ✖️ |
| usergroupproductadjustments | ✖️ |
| usergroupstaggeredpriceadjustments | ✖️ |
| usergroups | ✖️ |
| userproductadjustments | ✖️ |
| userstaggeredpriceadjustments | ✖️ |
| users | ✖️ |
| webhooks | ✖️ |
| webshops | ✖️ |
