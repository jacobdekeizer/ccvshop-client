# CCV shop API client for PHP

![Build](https://github.com/jacobdekeizer/ccvshop-client/workflows/Build/badge.svg)

[CCV shop API documentation](https://demo.ccvshop.nl/API/Docs/)

## Contributing
This package is work in progress, any help is appreciated.

Automatic model generation for new api endpoints:
```php
$generator = new \JacobDeKeizer\Ccv\Generator\SchemaGenerator();

$generator->generate('/API/Schema/vnd.verto.webshop.resource.collection.orders.v1.json');
```

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
        $id = $order->getId();
        var_dump($order);
    }
} while(($getOrdersParameter = $orders->getNextRequest()) !== null);
```

### Get order

```php
$order = $client->orders()->get(123456);
```

### Update order

Update all order values including null fields
```php

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

## Code sniffer
Run: `./vendor/bin/phpcs --standard=PSR2 ./src`
