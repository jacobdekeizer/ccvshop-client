# CCV shop API client for PHP

[![Packagist Version](https://img.shields.io/packagist/v/jacobdekeizer/ccvshop-client)](https://packagist.org/packages/jacobdekeizer/ccvshop-client)
[![Packagist](https://img.shields.io/packagist/l/jacobdekeizer/ccvshop-client?color=brightgreen)](https://packagist.org/packages/jacobdekeizer/ccvshop-client)
[![Packagist](https://img.shields.io/packagist/dt/jacobdekeizer/ccvshop-client?color=brightgreen)](https://packagist.org/packages/jacobdekeizer/ccvshop-client)
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
> This readme shows basic usage of this package, for all available options see the class definitions and the api documentation.

Create the client

```php
$client = new \JacobDeKeizer\Ccv\Client();
$client->setBaseUrl('https://demo.ccvshop.nl');
$client->setPublicKey('public_key');
$client->setPrivateKey('private_key');
```

## Orders

### Get all orders with orderrows
Get all open orders which are paid and completed
```php
$getOrdersParameter = (new \JacobDeKeizer\Ccv\Parameters\Orders\All)
    ->setStatus(1)
    ->setIsPaid(true)
    ->setIsCompleted(true);

do {
    $orders = $client->orders()->all($getOrdersParameter);

    foreach ($orders->getItems() as $order) {
        var_dump($order); // see the code and documentation for all available methods
         
        $orderrows = $client->orderrows()->all($order->getId());
        
        var_dump($orderrows);
        
        foreach ($orderrows->getItems() as $orderrow) {
            $orderRowId = $orderrow->getId();
            var_dump($orderrow);
        }
    }

    $getOrdersParameter = \JacobDeKeizer\Ccv\Parameters\Orders\All::fromUrl($orders->getNext());
} while($getOrdersParameter !== null);
```

### Get order

```php
$order = $client->orders()->get(123456);
```

### Update order

For example update the order status and the customer email

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Orders\Orders\Patch())
    ->setStatus(6)
    ->setCustomer(
        (new \JacobDeKeizer\Ccv\Models\Orders\Personalinfo\Input)
            ->setEmail('example@example.com')
    );
    // ->set...

$client->orders()->update(123456, $patch);
```

### Create order

```php
$order = (new \JacobDeKeizer\Ccv\Models\Orders\Orders\Post())
    ->setInvoicenumber(123456);
    //->set..
   
$client->orders()->create($order);
```

## Orderrows

### Get all orderrows of an order

```php
$orderId = 123456;

$orderrows = $client->orderrows()->all($orderId);
```

### Get orderrow

```php
$orderrow = $client->orderrows()->get(336401521);
```

### Update orderrow
Order must not be completed to update orderrows

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Orderrows\Orderrows\Patch())
    ->setCount(1)
    ->setDiscount(20)
    ->setPrice(100);

$client->orderrows()->update(123456, $patch);
```

### Replace orderrows of order

```php
$orderId = 123456;

$newOrderrows = (new \JacobDeKeizer\Ccv\Models\Orderrows\Orderrows\Put())
    ->setOrderrows([
        (new \JacobDeKeizer\Ccv\Models\Orderrows\Orderrow\Input())
            ->setProductId(12345)
            ->setCount(1)
            ->setPrice(100)
            ->setDiscount(20)
            // ->set..
    ]);

$client->orderrows()->replace($orderId, $newOrderrows);
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
| orderrows | :heavy_check_mark: |
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
