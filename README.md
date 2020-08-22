# CCV shop API client for PHP

[![Packagist Version](https://img.shields.io/packagist/v/jacobdekeizer/ccvshop-client)](https://packagist.org/packages/jacobdekeizer/ccvshop-client)
[![Packagist](https://img.shields.io/packagist/l/jacobdekeizer/ccvshop-client?color=brightgreen)](https://packagist.org/packages/jacobdekeizer/ccvshop-client)
[![Packagist](https://img.shields.io/packagist/dt/jacobdekeizer/ccvshop-client?color=brightgreen)](https://packagist.org/packages/jacobdekeizer/ccvshop-client)
![Build](https://github.com/jacobdekeizer/ccvshop-client/workflows/Build/badge.svg)

An object oriented php client for the CCV shop api. See here for the [CCV shop API documentation](https://demo.ccvshop.nl/API/Docs/).

## Contributing

Any help is appreciated, see [contributing](https://github.com/jacobdekeizer/ccvshop-client/blob/master/.github/CONTRIBUTING.md) for more information.
On the contributing page is described how you can automatically generated the required models for new API endpoints.

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

## Root endpoint

This endpoint returns the supported endpoints for your ccv shop.

```php
$result = $client->root()->all();

foreach ($result->getItems() as $item) {
    var_dump($item);
}
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
        // see the code and documentation for all available methods
        var_dump($order);
        $order->getUser()->getId();
        $order->getCustomer()->getBillingaddress()->getStreet();
        $order->getCustomer()->getBillingaddress()->getHousenumber();
        $order->getCustomer()->getBillingaddress()->getHousenumberSuffix();
        $order->getCustomer()->getBillingaddress()->getZipcode();
        $order->getCustomer()->getBillingaddress()->getCity();
        $order->getCustomer()->getDeliveryaddress()->getStreet();
        $order->getCustomer()->getDeliveryaddress()->getHousenumber();
        $order->getCustomer()->getDeliveryaddress()->getHousenumberSuffix();
        $order->getCustomer()->getDeliveryaddress()->getZipcode();
        $order->getCustomer()->getDeliveryaddress()->getCity();
        $order->getCustomer()->getBillingaddress()->getFirstName();
        $order->getCustomer()->getBillingaddress()->getLastName();
        $order->getCustomer()->getBillingaddress()->getTelephone();
        $order->getCustomer()->getEmail();

        $orderrows = $client->orderrows()->all($order->getId());
        
        var_dump($orderrows);
        
        foreach ($orderrows->getItems() as $orderrow) {
            var_dump($orderrow);

            $orderrow->getId();
            $orderrow->getCount();
            $orderrow->getPrice();
            $orderrow->getProductId();
            $orderrow->getProductName();
            $orderrow->getPriceWithoutDiscount();
            $orderrow->getDiscount();
            $orderrow->getStockLocation();
            $orderrow->getWeight();
            $orderrow->getSubEanNumber();
        }
    }

    $getOrdersParameter = \JacobDeKeizer\Ccv\Parameters\Orders\All::fromUrl($orders->getNext());
} while($getOrdersParameter !== null);
```

### Get order

```php
// see the code and documentation for all available methods
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

## Products

### All products
```php
// parameter is optional
$getProductsParameter = (new \JacobDeKeizer\Ccv\Parameters\Products\All)
    ->setMinStock(5)
    ->expandProductPhotos()
    ->orderByIdAsc();

$products = $client->products()->all($getProductsParameter);

foreach ($products->getItems() as $product) {
    // see the code and documentation for all available methods
    var_dump($product);

    $product->getId();
    $product->getStock();
    $product->getDiscount();
    $product->getWeight();
    $product->getPrice();
    $product->getBrand()->getId();
    $product->getEannumber();
    $product->getVatrate();
    // ...
}

$nextRequest = \JacobDeKeizer\Ccv\Parameters\Products\All::fromUrl($products->getNext());
```

### All products from brand

```php
$products = $client->products()->allFromBrand(1234);
```

### All products from webshop

```php
$products = $client->products()->allFromWebshop(1234);
```

### All products from category

```php
$products = $client->products()->allFromCategory(1234);
```

### All products from condition

```php
$products = $client->products()->allFromCondition(1234);
```

### All products from supplier

```php
$products = $client->products()->allFromSupplier(1234);
```

### Get product

```php
$product = $client->products()->get(1234);
```

### Update product

```php
// see the code and documentation for all available methods
$patch = (new \JacobDeKeizer\Ccv\Models\Products\Products\Patch())
        ->setDiscount(4.99)
        ->setPrice(100)
        ->setProductnumber('my_number')
        ->setActive(true)
        ->setDescription('This is a description')
        ->setEannumber('an ean number')
        ->setMetaKeywords('keyword')
        ->setStock(100)
        ->setUnit('piece')
        ->setWeight(5.5);

$client->products()->update(1234, $patch);

// or only update stock
$client->products()->update(1234, (new \JacobDeKeizer\Ccv\Models\Products\Products\Patch())->setStock(99));
```

### Create product

```php
// see the code and documentation for all available methods
$product = (new \JacobDeKeizer\Ccv\Models\Products\Products\Post())
    ->setDiscount(4.99)
    ->setPrice(100)
    ->setProductnumber('my_number')
    ->setActive(true)
    ->setDescription('This is a description')
    ->setEannumber('an ean number')
    ->setMetaKeywords('keyword')
    ->setStock(100)
    ->setUnit('piece')
    ->setWeight(5.5);
    // ->set...

$client->products()->create($product);
```

### Delete product

```php
$client->products()->delete(1234);
```

## Product photos

### Get product photo

```php
$client->productphotos()->get(1234);
```

### Delete product photo

```php
$client->productphotos()->delete(1234);
```

### Get all photos for product

```php
$client->productphotos()->allForProduct(1234);
```

### Update product photo

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Patch())
    ->setAlttext('text')
    ->setIsMainphoto(true);

$client->productphotos()->update(1234, $patch);

```
### Create product photo

```php
// see the code and documentation for all available methods
$post = (new \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Post())
    ->setSource(base64_encode(file_get_contents('photo.png')))
    ->setFileType('png');
    // ->set...

$client->productphotos()->create(1234, $post);
```

### Replace all product photos

```php
// see the code and documentation for all available methods
$productPhoto1 = (new \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Post())
    ->setSource(base64_encode(file_get_contents('photo1.png')))
    ->setFileType('png');
    // ->set...

$productPhoto2 = (new \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Post())
    ->setSource(base64_encode(file_get_contents('photo2.jpg')))
    ->setFileType('jpg');
    // ->set...

$put = (new \JacobDeKeizer\Ccv\Models\Productphotos\Productphotos\Put())
    ->setProductphotos([$productPhoto1, $productPhoto2]);

$client->productphotos()->replace(1234, $put);
```

## Product categories

### Create product to category reference

```php
$post = (new \JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Post())
    ->setProductId(123)
    ->setCategoryId(456)
    ->setPosition(null);

$client->producttocategories()->create($post);
```

### Get product to category reference

```php
$client->producttocategories()->get(123);
```

### Get product to category references by product

```php
$client->producttocategories()->allForProduct(123);
```

### Get product to category references by category

```php
$client->producttocategories()->allForCategory(123);
```

### Delete product to category by reference

```php
$client->producttocategories()->delete(123);
```

### Update product to category reference

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Patch())
    ->setPosition(1);

$client->producttocategories()->update(123, $patch);
```

### Create product to category reference

```php
$post = (new \JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Post())
    ->setProductId(123)
    ->setCategoryId(456)
    ->setPosition(null);

$client->producttocategories()->create($post);
```

### Get product to category reference

```php
$client->producttocategories()->get(123);
```

### Get product to category references by product

```php
$client->producttocategories()->allForProduct(123);
```

### Get product to category references by category

```php
$client->producttocategories()->allForCategory(123);
```

### Delete product to category by reference

```php
$client->producttocategories()->delete(123);
```

### Update product to category reference

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Producttocategories\Producttocategories\Patch())
    ->setPosition(1);

$client->producttocategories()->update(123, $patch);
```

## Attributes

### Get attribute

```php
$client->attributes()->get(1234);
```

### Get all attributes

```php
$client->attributes()->all();
```

### Get all attribute combinations

```php
$client->attributes()->allCombinationsFor(1234);
```

### Create attribute

```php
$attribute = (new \JacobDeKeizer\Ccv\Models\Attributes\Attributes\Input())
    ->setName('Foo')
    ->setType('option_menu_required');
$client->attributes()->create($attribute);
```

### Update attribute

```php
$attribute = (new \JacobDeKeizer\Ccv\Models\Attributes\Attributes\Input())
    ->setName('Foo')
    ->setType('option_menu_required');
$client->attributes()->update(1234, $attribute);
```

### Delete attribute

```php
$client->attributes()->delete(1234);
```

## Attribute values

### Get attribute values

```php
$client->attributevalues()->get(1234);
```

### Get all attribute values

```php
$client->attributevalues()->all();
```

### Get all attribute values for attribute

```php
$client->attributevalues()->allForAttribute(1234);
```

### Get all attribute values for combination

```php
$client->attributevalues()->allForCombination(1234);
```

### Create attribute value

```php
$create = (new \JacobDeKeizer\Ccv\Models\Attributevalues\Attributevalues\Post())
    ->setName('Bar')
    ->setDefaultPrice(0);

$client->attributevalues()->create(1234, $create);
```

### Update attribute value

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Attributevalues\Attributevalues\Patch())
    ->setName('Bar')
    ->setDefaultPrice(0);

$client->attributevalues()->update(1234, $patch);
```

### Delete attribute values

```php
$client->attributevalues()->delete(1234);
```

## Product attribute values

### Get product attribute value

```php
$client->productattributevalues()->get(1234);
```

### Get all product attribute values for product

```php
$client->productattributevalues()->allForProduct(1234);
```

### Create product attribute values

```php
$post = (new \JacobDeKeizer\Ccv\Models\Productattributevalues\Productattributevalues\Post())
    ->setPrice(2);
    // ->set...

$client->productattributevalues()->create(1234, $post);
```

### Update product attribute values

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Productattributevalues\Productattributevalues\Patch())
    ->setPrice(2);
    // ->set...

$client->productattributevalues()->update(1234, $patch);
```

### Delete product attribute value

```php
$client->productattributevalues()->delete(1234);
```

## Implemented endpoints

| Endpoints |
| --- |
| root |
| orderrows |
| orders |
| products|
| productphotos|
| producttocategories|
| producttocategories|
| attributes|
| attributevalues|
| productattributevalues|
