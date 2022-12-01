# MetaFab\ShopsApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShop()**](ShopsApi.md#createShop) | **POST** /v1/shops | Create shop |
| [**getShopOffer()**](ShopsApi.md#getShopOffer) | **GET** /v1/shops/{shopId}/items/{shopOfferId} | Get shop offer |
| [**getShopOffers()**](ShopsApi.md#getShopOffers) | **GET** /v1/shops/{shopId}/offers | Get shop offers |
| [**getShops()**](ShopsApi.md#getShops) | **GET** /v1/shops | Get shops |
| [**removeShopOffer()**](ShopsApi.md#removeShopOffer) | **DELETE** /v1/shops/{shopId}/offers/{shopOfferId} | Remove shop offer |
| [**setShopOffer()**](ShopsApi.md#setShopOffer) | **POST** /v1/shops/{shopId}/offers | Set shop offer |
| [**useShopOffer()**](ShopsApi.md#useShopOffer) | **POST** /v1/shops/{shopId}/offers/{shopOfferId}/uses | Use shop offer |
| [**withdrawFromShop()**](ShopsApi.md#withdrawFromShop) | **POST** /v1/shops/{shopId}/withdrawals | Withdraw from shop |


## `createShop()`

```php
createShop($x_authorization, $x_password, $create_shop_request): \MetaFab\Model\CreateShop200Response
```

Create shop

Creates a new game shop and deploys a shop contract on behalf of the authenticating game's primary wallet. The deployed shop contract allows you to create fixed price rates for players to buy specific items from any item collection or ERC1155 contract. Additionally, a shop allows you to create shop offers for some set of item(s) to another set of item(s) or any mix of currency. Shops completely support gasless player transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ShopsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$create_shop_request = new \MetaFab\Model\CreateShopRequest(); // \MetaFab\Model\CreateShopRequest

try {
    $result = $apiInstance->createShop($x_authorization, $x_password, $create_shop_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopsApi->createShop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_password** | **string**| The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **create_shop_request** | [**\MetaFab\Model\CreateShopRequest**](../Model/CreateShopRequest.md)|  | |

### Return type

[**\MetaFab\Model\CreateShop200Response**](../Model/CreateShop200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShopOffer()`

```php
getShopOffer($shop_id, $shop_offer_id): \MetaFab\Model\ShopOffer
```

Get shop offer

Returns a shop offer object for the provided shopOfferId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ShopsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shop_id = 'shop_id_example'; // string | Any shop id within the MetaFab ecosystem.
$shop_offer_id = 'shop_offer_id_example'; // string | Any offer id for the shop. Zero, or a positive integer.

try {
    $result = $apiInstance->getShopOffer($shop_id, $shop_offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopsApi->getShopOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shop_id** | **string**| Any shop id within the MetaFab ecosystem. | |
| **shop_offer_id** | **string**| Any offer id for the shop. Zero, or a positive integer. | |

### Return type

[**\MetaFab\Model\ShopOffer**](../Model/ShopOffer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShopOffers()`

```php
getShopOffers($shop_id): \MetaFab\Model\ShopOffer[]
```

Get shop offers

Returns all shop offers as an array of shop offer objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ShopsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shop_id = 'shop_id_example'; // string | Any shop id within the MetaFab ecosystem.

try {
    $result = $apiInstance->getShopOffers($shop_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopsApi->getShopOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shop_id** | **string**| Any shop id within the MetaFab ecosystem. | |

### Return type

[**\MetaFab\Model\ShopOffer[]**](../Model/ShopOffer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShops()`

```php
getShops($x_game_key): \MetaFab\Model\GetShops200ResponseInner[]
```

Get shops

Returns an array of active shops for the game associated with the provided `X-Game-Key`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ShopsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_game_key = game_pk_4SOqpDi8pQdnQgfCOBW29qR8YmwOhxVPz5iHoMgUEJLDdPXgwLuHqZf8ewo2GajZ; // string | The `publishedKey` of a specific game. This can be shared or included in game clients, websites, etc.

try {
    $result = $apiInstance->getShops($x_game_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopsApi->getShops: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_game_key** | **string**| The &#x60;publishedKey&#x60; of a specific game. This can be shared or included in game clients, websites, etc. | |

### Return type

[**\MetaFab\Model\GetShops200ResponseInner[]**](../Model/GetShops200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeShopOffer()`

```php
removeShopOffer($shop_id, $shop_offer_id, $x_authorization, $x_password): \MetaFab\Model\TransactionModel
```

Remove shop offer

Removes the provided offer by offerId from the provided shop. Removed offers can no longer be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ShopsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shop_id = 'shop_id_example'; // string | Any shop id within the MetaFab ecosystem.
$shop_offer_id = 'shop_offer_id_example'; // string | Any offer id for the shop. Zero, or a positive integer.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.

try {
    $result = $apiInstance->removeShopOffer($shop_id, $shop_offer_id, $x_authorization, $x_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopsApi->removeShopOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shop_id** | **string**| Any shop id within the MetaFab ecosystem. | |
| **shop_offer_id** | **string**| Any offer id for the shop. Zero, or a positive integer. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_password** | **string**| The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |

### Return type

[**\MetaFab\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setShopOffer()`

```php
setShopOffer($shop_id, $x_authorization, $x_password, $set_shop_offer_request): \MetaFab\Model\TransactionModel
```

Set shop offer

Sets a new shop offer or updates an existing one for the provided id. Shop offers allow currency to item, item to currency or item to item exchanges.  All request fields besides `id` are optional. Any optional fields omitted will not be used for the offer. This allows you to create many different combinations of offers. For example, you can create an offer that may require 3 unique item ids of specified quantities from a given item collection and gives the user 1 new unique item id in exchange.  Another example, you may want to make a shop offer from one ERC20 token to another. This is also possible - simple set the input and output currency fields and leave the others blank.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ShopsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shop_id = 'shop_id_example'; // string | Any shop id within the MetaFab ecosystem.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$set_shop_offer_request = new \MetaFab\Model\SetShopOfferRequest(); // \MetaFab\Model\SetShopOfferRequest

try {
    $result = $apiInstance->setShopOffer($shop_id, $x_authorization, $x_password, $set_shop_offer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopsApi->setShopOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shop_id** | **string**| Any shop id within the MetaFab ecosystem. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_password** | **string**| The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **set_shop_offer_request** | [**\MetaFab\Model\SetShopOfferRequest**](../Model/SetShopOfferRequest.md)|  | |

### Return type

[**\MetaFab\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `useShopOffer()`

```php
useShopOffer($shop_id, $shop_offer_id, $x_authorization, $x_password): \MetaFab\Model\TransactionModel
```

Use shop offer

Uses a shop offer. The required (input) item(s) and/or currency are removed from the wallet or player wallet using the offer. The given (output) item(s) and/or currency are given to the wallet or player wallet using the offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ShopsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shop_id = 'shop_id_example'; // string | Any shop id within the MetaFab ecosystem.
$shop_offer_id = 'shop_offer_id_example'; // string | Any offer id for the shop. Zero, or a positive integer.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_password = mySecurePassword; // string | The password of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.

try {
    $result = $apiInstance->useShopOffer($shop_id, $shop_offer_id, $x_authorization, $x_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopsApi->useShopOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shop_id** | **string**| Any shop id within the MetaFab ecosystem. | |
| **shop_offer_id** | **string**| Any offer id for the shop. Zero, or a positive integer. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_password** | **string**| The password of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |

### Return type

[**\MetaFab\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `withdrawFromShop()`

```php
withdrawFromShop($shop_id, $x_authorization, $x_password, $withdraw_from_shop_request): \MetaFab\Model\TransactionModel
```

Withdraw from shop

Withdraws native token, currency or items from a shop. Whenever a shop offer has input requirements, the native tokens, currencies or items for the requirements of that offer are deposited into the shop contract when the offer is used. These can be withdrawn to any other address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ShopsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shop_id = 'shop_id_example'; // string | Any shop id within the MetaFab ecosystem.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$withdraw_from_shop_request = new \MetaFab\Model\WithdrawFromShopRequest(); // \MetaFab\Model\WithdrawFromShopRequest

try {
    $result = $apiInstance->withdrawFromShop($shop_id, $x_authorization, $x_password, $withdraw_from_shop_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShopsApi->withdrawFromShop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shop_id** | **string**| Any shop id within the MetaFab ecosystem. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_password** | **string**| The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **withdraw_from_shop_request** | [**\MetaFab\Model\WithdrawFromShopRequest**](../Model/WithdrawFromShopRequest.md)|  | |

### Return type

[**\MetaFab\Model\TransactionModel**](../Model/TransactionModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
