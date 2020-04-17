# CCV shop API client for PHP

Work in progress, any help is appreciated.

[CCV shop API documentation](https://demo.ccvshop.nl/API/Schema/internal.resource.orders.post.v1.json)

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

### List all orders
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

### Get order by id

```php
$order = $client->orders()->get(123456);
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
| orders | ✔️️ |
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
