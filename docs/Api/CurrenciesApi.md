# MetaFab\CurrenciesApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchTransferCurrency()**](CurrenciesApi.md#batchTransferCurrency) | **POST** /v1/currencies/{currencyId}/batchTransfers | Batch transfer currency |
| [**burnCurrency()**](CurrenciesApi.md#burnCurrency) | **POST** /v1/currencies/{currencyId}/burns | Burn currency |
| [**createCurrency()**](CurrenciesApi.md#createCurrency) | **POST** /v1/currencies | Create currency |
| [**getCurrencies()**](CurrenciesApi.md#getCurrencies) | **GET** /v1/currencies | Get currencies |
| [**getCurrencyBalance()**](CurrenciesApi.md#getCurrencyBalance) | **GET** /v1/currencies/{currencyId}/balances | Get currency balance |
| [**getCurrencyFees()**](CurrenciesApi.md#getCurrencyFees) | **GET** /v1/currencies/{currencyId}/fees | Get currency fees |
| [**getCurrencyRole()**](CurrenciesApi.md#getCurrencyRole) | **GET** /v1/currencies/{currencyId}/roles | Get currency role |
| [**grantCurrencyRole()**](CurrenciesApi.md#grantCurrencyRole) | **POST** /v1/currencies/{currencyId}/roles | Grant currency role |
| [**mintCurrency()**](CurrenciesApi.md#mintCurrency) | **POST** /v1/currencies/{currencyId}/mints | Mint currency |
| [**revokeCurrencyRole()**](CurrenciesApi.md#revokeCurrencyRole) | **DELETE** /v1/currencies/{currencyId}/roles | Revoke currency role |
| [**setCurrencyFees()**](CurrenciesApi.md#setCurrencyFees) | **POST** /v1/currencies/{currencyId}/fees | Set currency fees |
| [**transferCurrency()**](CurrenciesApi.md#transferCurrency) | **POST** /v1/currencies/{currencyId}/transfers | Transfer currency |


## `batchTransferCurrency()`

```php
batchTransferCurrency($currency_id, $x_authorization, $x_wallet_decrypt_key, $batch_transfer_currency_request): \MetaFab\Model\TransactionModel
```

Batch transfer currency

Transfers multiple amounts of currency to multiple provided wallet addresses or wallet addresses associated with the provided walletIds. You may also provide a combination of addresses and walletIds in one request, the proper receipients will be automatically determined, with `addresses` getting `amounts` order priority first.  Optional references may be included for the transfer. References are useful for identifying transfers intended to pay for items, trades, services and more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string | Any currency id within the MetaFab platform.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$batch_transfer_currency_request = new \MetaFab\Model\BatchTransferCurrencyRequest(); // \MetaFab\Model\BatchTransferCurrencyRequest

try {
    $result = $apiInstance->batchTransferCurrency($currency_id, $x_authorization, $x_wallet_decrypt_key, $batch_transfer_currency_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->batchTransferCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**| Any currency id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **batch_transfer_currency_request** | [**\MetaFab\Model\BatchTransferCurrencyRequest**](../Model/BatchTransferCurrencyRequest.md)|  | |

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

## `burnCurrency()`

```php
burnCurrency($currency_id, $x_authorization, $x_wallet_decrypt_key, $burn_currency_request): \MetaFab\Model\TransactionModel
```

Burn currency

Removes (burns) the provided amount of currency from the authenticating game or players wallet. The currency amount is permanently removed from the circulating supply of the currency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string | Any currency id within the MetaFab platform.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$burn_currency_request = new \MetaFab\Model\BurnCurrencyRequest(); // \MetaFab\Model\BurnCurrencyRequest

try {
    $result = $apiInstance->burnCurrency($currency_id, $x_authorization, $x_wallet_decrypt_key, $burn_currency_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->burnCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**| Any currency id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **burn_currency_request** | [**\MetaFab\Model\BurnCurrencyRequest**](../Model/BurnCurrencyRequest.md)|  | |

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

## `createCurrency()`

```php
createCurrency($x_authorization, $x_wallet_decrypt_key, $create_currency_request): \MetaFab\Model\CreateCurrency200Response
```

Create currency

Creates a new game currency and deploys an ERC20 token contract on behalf of the authenticating game's primary wallet. The deployed ERC20 contract is preconfigured to fully support bridging across blockchains, batched transfers and gasless transactions on any supported blockchain as well as full support for gasless transactions from player managed wallets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$create_currency_request = new \MetaFab\Model\CreateCurrencyRequest(); // \MetaFab\Model\CreateCurrencyRequest

try {
    $result = $apiInstance->createCurrency($x_authorization, $x_wallet_decrypt_key, $create_currency_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->createCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **create_currency_request** | [**\MetaFab\Model\CreateCurrencyRequest**](../Model/CreateCurrencyRequest.md)|  | |

### Return type

[**\MetaFab\Model\CreateCurrency200Response**](../Model/CreateCurrency200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencies()`

```php
getCurrencies($x_game_key): \MetaFab\Model\GetCurrencies200ResponseInner[]
```

Get currencies

Returns an array of active currencies for the game associated with the provided `X-Game-Key`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_game_key = game_pk_4SOqpDi8pQdnQgfCOBW29qR8YmwOhxVPz5iHoMgUEJLDdPXgwLuHqZf8ewo2GajZ; // string | The `publishedKey` of a specific game. This can be shared or included in game clients, websites, etc.

try {
    $result = $apiInstance->getCurrencies($x_game_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_game_key** | **string**| The &#x60;publishedKey&#x60; of a specific game. This can be shared or included in game clients, websites, etc. | |

### Return type

[**\MetaFab\Model\GetCurrencies200ResponseInner[]**](../Model/GetCurrencies200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencyBalance()`

```php
getCurrencyBalance($currency_id, $address, $wallet_id): float
```

Get currency balance

Returns the current currency balance of the provided wallet address or or the wallet address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string | Any currency id within the MetaFab platform.
$address = 0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D; // string | A valid EVM based address. For example, `0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D`.
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.

try {
    $result = $apiInstance->getCurrencyBalance($currency_id, $address, $wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->getCurrencyBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**| Any currency id within the MetaFab platform. | |
| **address** | **string**| A valid EVM based address. For example, &#x60;0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D&#x60;. | [optional] |
| **wallet_id** | **string**| Any wallet id within the MetaFab platform. | [optional] |

### Return type

**float**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencyFees()`

```php
getCurrencyFees($currency_id): \MetaFab\Model\GetCurrencyFees200Response
```

Get currency fees

Returns the current fee recipient address and fees of the currency for the provided currencyId. Fees are only applicable for gasless transactions performed by default by players.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string | Any currency id within the MetaFab platform.

try {
    $result = $apiInstance->getCurrencyFees($currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->getCurrencyFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**| Any currency id within the MetaFab platform. | |

### Return type

[**\MetaFab\Model\GetCurrencyFees200Response**](../Model/GetCurrencyFees200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencyRole()`

```php
getCurrencyRole($currency_id, $role, $address, $wallet_id): bool
```

Get currency role

Returns a boolean (true/false) representing if the provided role for this currency has been granted to the provided address or address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string | Any currency id within the MetaFab platform.
$role = minter; // string | A valid MetaFab role or bytes string representing a role, such as `0xc9eb32e43bf5ecbceacf00b32281dfc5d6d700a0db676ea26ccf938a385ac3b7`
$address = 0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D; // string | A valid EVM based address. For example, `0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D`.
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.

try {
    $result = $apiInstance->getCurrencyRole($currency_id, $role, $address, $wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->getCurrencyRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**| Any currency id within the MetaFab platform. | |
| **role** | **string**| A valid MetaFab role or bytes string representing a role, such as &#x60;0xc9eb32e43bf5ecbceacf00b32281dfc5d6d700a0db676ea26ccf938a385ac3b7&#x60; | |
| **address** | **string**| A valid EVM based address. For example, &#x60;0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D&#x60;. | [optional] |
| **wallet_id** | **string**| Any wallet id within the MetaFab platform. | [optional] |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grantCurrencyRole()`

```php
grantCurrencyRole($currency_id, $x_authorization, $x_wallet_decrypt_key, $grant_currency_role_request): \MetaFab\Model\TransactionModel
```

Grant currency role

Grants the provided role for the currency to the provided address or address associated with the provided walletId. Granted roles give different types of authority on behalf of the currency for specific players, addresses, or contracts to perform different types of permissioned currency operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string | Any currency id within the MetaFab platform.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$grant_currency_role_request = new \MetaFab\Model\GrantCurrencyRoleRequest(); // \MetaFab\Model\GrantCurrencyRoleRequest

try {
    $result = $apiInstance->grantCurrencyRole($currency_id, $x_authorization, $x_wallet_decrypt_key, $grant_currency_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->grantCurrencyRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**| Any currency id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **grant_currency_role_request** | [**\MetaFab\Model\GrantCurrencyRoleRequest**](../Model/GrantCurrencyRoleRequest.md)|  | |

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

## `mintCurrency()`

```php
mintCurrency($currency_id, $x_authorization, $x_wallet_decrypt_key, $mint_currency_request): \MetaFab\Model\TransactionModel
```

Mint currency

Creates (mints) the provided amount of currency to the provided wallet address or wallet address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string | Any currency id within the MetaFab platform.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$mint_currency_request = new \MetaFab\Model\MintCurrencyRequest(); // \MetaFab\Model\MintCurrencyRequest

try {
    $result = $apiInstance->mintCurrency($currency_id, $x_authorization, $x_wallet_decrypt_key, $mint_currency_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->mintCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**| Any currency id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **mint_currency_request** | [**\MetaFab\Model\MintCurrencyRequest**](../Model/MintCurrencyRequest.md)|  | |

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

## `revokeCurrencyRole()`

```php
revokeCurrencyRole($currency_id, $x_authorization, $x_wallet_decrypt_key, $revoke_collection_role_request): \MetaFab\Model\TransactionModel
```

Revoke currency role

Revokes the provided role for the currency to the provided address or address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string | Any currency id within the MetaFab platform.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$revoke_collection_role_request = new \MetaFab\Model\RevokeCollectionRoleRequest(); // \MetaFab\Model\RevokeCollectionRoleRequest

try {
    $result = $apiInstance->revokeCurrencyRole($currency_id, $x_authorization, $x_wallet_decrypt_key, $revoke_collection_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->revokeCurrencyRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**| Any currency id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **revoke_collection_role_request** | [**\MetaFab\Model\RevokeCollectionRoleRequest**](../Model/RevokeCollectionRoleRequest.md)|  | |

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

## `setCurrencyFees()`

```php
setCurrencyFees($currency_id, $x_authorization, $x_wallet_decrypt_key, $set_currency_fees_request): \MetaFab\Model\TransactionModel
```

Set currency fees

Sets the recipient address, basis points, fixed amount and cap amount for a currency's fees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string | Any currency id within the MetaFab platform.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$set_currency_fees_request = new \MetaFab\Model\SetCurrencyFeesRequest(); // \MetaFab\Model\SetCurrencyFeesRequest

try {
    $result = $apiInstance->setCurrencyFees($currency_id, $x_authorization, $x_wallet_decrypt_key, $set_currency_fees_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->setCurrencyFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**| Any currency id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **set_currency_fees_request** | [**\MetaFab\Model\SetCurrencyFeesRequest**](../Model/SetCurrencyFeesRequest.md)|  | |

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

## `transferCurrency()`

```php
transferCurrency($currency_id, $x_authorization, $x_wallet_decrypt_key, $transfer_currency_request): \MetaFab\Model\TransactionModel
```

Transfer currency

Transfers an amount of currency to the provided wallet address or wallet address associated with the provided walletId. If you want to transfer to multiple wallets with different amounts and optional references in one API request, please see the Batch transfer currency documentation.  An optional reference may be included for the transfer. References are useful for identifying transfers intended to pay for items, trades, services and more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_id = 'currency_id_example'; // string | Any currency id within the MetaFab platform.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$transfer_currency_request = new \MetaFab\Model\TransferCurrencyRequest(); // \MetaFab\Model\TransferCurrencyRequest

try {
    $result = $apiInstance->transferCurrency($currency_id, $x_authorization, $x_wallet_decrypt_key, $transfer_currency_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->transferCurrency: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_id** | **string**| Any currency id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **transfer_currency_request** | [**\MetaFab\Model\TransferCurrencyRequest**](../Model/TransferCurrencyRequest.md)|  | |

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
