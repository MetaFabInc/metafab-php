# MetaFab\ExchangesApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createExchange()**](ExchangesApi.md#createExchange) | **POST** /v1/exchanges | Create exchange |
| [**getExchangeOffer()**](ExchangesApi.md#getExchangeOffer) | **GET** /v1/exchanges/{exchangeId}/items/{exchangeOfferId} | Get exchange offer |
| [**getExchangeOffers()**](ExchangesApi.md#getExchangeOffers) | **GET** /v1/exchanges/{exchangeId}/offers | Get exchange offers |
| [**getExchanges()**](ExchangesApi.md#getExchanges) | **GET** /v1/exchanges | Get exchanges |
| [**removeExchangeOffer()**](ExchangesApi.md#removeExchangeOffer) | **DELETE** /v1/exchanges/{exchangeId}/offers/{exchangeOfferId} | Remove exchange offer |
| [**setExchangeOffer()**](ExchangesApi.md#setExchangeOffer) | **POST** /v1/exchanges/{exchangeId}/offers | Set exchange offer |
| [**useExchangeOffer()**](ExchangesApi.md#useExchangeOffer) | **POST** /v1/exchanges/{exchangeId}/offers/{exchangeOfferId}/uses | Use exchange offer |
| [**withdrawFromExchange()**](ExchangesApi.md#withdrawFromExchange) | **POST** /v1/exchanges/{exchangeId}/withdrawals | Withdraw from exchange |


## `createExchange()`

```php
createExchange($x_authorization, $x_password, $create_exchange_request): \MetaFab\Model\CreateExchange200Response
```

Create exchange

Creates a new game exchange and deploys a exchange contract on behalf of the authenticating game's primary wallet. The deployed exchange contract allows you to create fixed price rates for players to buy specific items from any item collection or ERC1155 contract. Additionally, an exchange allows you to create exchange offers for some set of item(s) to another set of item(s) or any mix of currency. Exchanges completely supports gasless player transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$create_exchange_request = new \MetaFab\Model\CreateExchangeRequest(); // \MetaFab\Model\CreateExchangeRequest

try {
    $result = $apiInstance->createExchange($x_authorization, $x_password, $create_exchange_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->createExchange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_password** | **string**| The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **create_exchange_request** | [**\MetaFab\Model\CreateExchangeRequest**](../Model/CreateExchangeRequest.md)|  | |

### Return type

[**\MetaFab\Model\CreateExchange200Response**](../Model/CreateExchange200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeOffer()`

```php
getExchangeOffer($exchange_id, $exchange_offer_id): \MetaFab\Model\ExchangeOffer
```

Get exchange offer

Returns a exchange offer object for the provided exchangeOfferId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exchange_id = 'exchange_id_example'; // string | Any exchange id within the MetaFab ecosystem.
$exchange_offer_id = 'exchange_offer_id_example'; // string | Any offer id for the exchange. Zero, or a positive integer.

try {
    $result = $apiInstance->getExchangeOffer($exchange_id, $exchange_offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->getExchangeOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_id** | **string**| Any exchange id within the MetaFab ecosystem. | |
| **exchange_offer_id** | **string**| Any offer id for the exchange. Zero, or a positive integer. | |

### Return type

[**\MetaFab\Model\ExchangeOffer**](../Model/ExchangeOffer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeOffers()`

```php
getExchangeOffers($exchange_id): \MetaFab\Model\ExchangeOffer[]
```

Get exchange offers

Returns all exchange offers as an array of exchange offer objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exchange_id = 'exchange_id_example'; // string | Any exchange id within the MetaFab ecosystem.

try {
    $result = $apiInstance->getExchangeOffers($exchange_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->getExchangeOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_id** | **string**| Any exchange id within the MetaFab ecosystem. | |

### Return type

[**\MetaFab\Model\ExchangeOffer[]**](../Model/ExchangeOffer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchanges()`

```php
getExchanges($x_game_key): \MetaFab\Model\GetExchanges200ResponseInner[]
```

Get exchanges

Returns an array of active exchanges for the game associated with the provided `X-Game-Key`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_game_key = game_pk_4SOqpDi8pQdnQgfCOBW29qR8YmwOhxVPz5iHoMgUEJLDdPXgwLuHqZf8ewo2GajZ; // string | The `publishedKey` of a specific game. This can be shared or included in game clients, websites, etc.

try {
    $result = $apiInstance->getExchanges($x_game_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->getExchanges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_game_key** | **string**| The &#x60;publishedKey&#x60; of a specific game. This can be shared or included in game clients, websites, etc. | |

### Return type

[**\MetaFab\Model\GetExchanges200ResponseInner[]**](../Model/GetExchanges200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeExchangeOffer()`

```php
removeExchangeOffer($exchange_id, $exchange_offer_id, $x_authorization, $x_password): \MetaFab\Model\TransactionModel
```

Remove exchange offer

Removes the provided offerId from the provided exchange. Removed offers can no longer be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exchange_id = 'exchange_id_example'; // string | Any exchange id within the MetaFab ecosystem.
$exchange_offer_id = 'exchange_offer_id_example'; // string | Any offer id for the exchange. Zero, or a positive integer.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.

try {
    $result = $apiInstance->removeExchangeOffer($exchange_id, $exchange_offer_id, $x_authorization, $x_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->removeExchangeOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_id** | **string**| Any exchange id within the MetaFab ecosystem. | |
| **exchange_offer_id** | **string**| Any offer id for the exchange. Zero, or a positive integer. | |
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

## `setExchangeOffer()`

```php
setExchangeOffer($exchange_id, $x_authorization, $x_password, $set_exchange_offer_request): \MetaFab\Model\TransactionModel
```

Set exchange offer

Sets a new exchange offer or updates an existing one for the provided id. Exchange offers allow currency to item, item to currency or item to item exchanges.  All request fields besides `id` are optional. Any optional fields omitted will not be used for the offer. This allows you to create many different combinations of offers. For example, you can create an offer that may require 3 unique item ids of specified quantities from a given item collection and gives the user 1 new unique item id in exchange.  Another example, you may want to make an exchange offer from one ERC20 token to another. This is also possible - simple set the input and output currency fields and leave the others blank.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exchange_id = 'exchange_id_example'; // string | Any exchange id within the MetaFab ecosystem.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$set_exchange_offer_request = new \MetaFab\Model\SetExchangeOfferRequest(); // \MetaFab\Model\SetExchangeOfferRequest

try {
    $result = $apiInstance->setExchangeOffer($exchange_id, $x_authorization, $x_password, $set_exchange_offer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->setExchangeOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_id** | **string**| Any exchange id within the MetaFab ecosystem. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_password** | **string**| The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **set_exchange_offer_request** | [**\MetaFab\Model\SetExchangeOfferRequest**](../Model/SetExchangeOfferRequest.md)|  | |

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

## `useExchangeOffer()`

```php
useExchangeOffer($exchange_id, $exchange_offer_id, $x_authorization, $x_password): \MetaFab\Model\TransactionModel
```

Use exchange offer

Uses an exchange offer. The required (input) item(s) and/or currency are removed from the wallet or player wallet using the offer. The given (output) item(s) and/or currency are given to the wallet or player wallet using the offer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exchange_id = 'exchange_id_example'; // string | Any exchange id within the MetaFab ecosystem.
$exchange_offer_id = 'exchange_offer_id_example'; // string | Any offer id for the exchange. Zero, or a positive integer.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_password = mySecurePassword; // string | The password of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.

try {
    $result = $apiInstance->useExchangeOffer($exchange_id, $exchange_offer_id, $x_authorization, $x_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->useExchangeOffer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_id** | **string**| Any exchange id within the MetaFab ecosystem. | |
| **exchange_offer_id** | **string**| Any offer id for the exchange. Zero, or a positive integer. | |
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

## `withdrawFromExchange()`

```php
withdrawFromExchange($exchange_id, $x_authorization, $x_password, $withdraw_from_exchange_request): \MetaFab\Model\TransactionModel
```

Withdraw from exchange

Withdraws native token, currency or items from a exchange. Whenever an exchange offer has input requirements, the native tokens, currencies or items for the requirements of that offer are deposited into the exchange contract when the offer is used. These can be withdrawn to any other address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ExchangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exchange_id = 'exchange_id_example'; // string | Any exchange id within the MetaFab ecosystem.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$withdraw_from_exchange_request = new \MetaFab\Model\WithdrawFromExchangeRequest(); // \MetaFab\Model\WithdrawFromExchangeRequest

try {
    $result = $apiInstance->withdrawFromExchange($exchange_id, $x_authorization, $x_password, $withdraw_from_exchange_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangesApi->withdrawFromExchange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exchange_id** | **string**| Any exchange id within the MetaFab ecosystem. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_password** | **string**| The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **withdraw_from_exchange_request** | [**\MetaFab\Model\WithdrawFromExchangeRequest**](../Model/WithdrawFromExchangeRequest.md)|  | |

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
