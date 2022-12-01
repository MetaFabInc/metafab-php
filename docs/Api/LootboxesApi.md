# MetaFab\LootboxesApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLootboxManager()**](LootboxesApi.md#createLootboxManager) | **POST** /v1/lootboxManagers | Create lootbox manager |
| [**getLootboxManagerLootbox()**](LootboxesApi.md#getLootboxManagerLootbox) | **GET** /v1/lootboxManagers/{lootboxManagerId}/lootboxes/{lootboxManagerLootboxId} | Get lootbox manager lootbox |
| [**getLootboxManagerLootboxes()**](LootboxesApi.md#getLootboxManagerLootboxes) | **GET** /v1/lootboxManagers/{lootboxManagerId}/lootboxes | Get lootbox manager lootboxes |
| [**getLootboxManagers()**](LootboxesApi.md#getLootboxManagers) | **GET** /v1/lootboxManagers | Get lootbox managers |
| [**openLootboxManagerLootbox()**](LootboxesApi.md#openLootboxManagerLootbox) | **POST** /v1/lootboxManagers/{lootboxManagerId}/lootboxes/{lootboxManagerLootboxId}/opens | Open lootbox manager lootbox |
| [**removeLootboxManagerLootbox()**](LootboxesApi.md#removeLootboxManagerLootbox) | **DELETE** /v1/lootboxManagers/{lootboxManagerId}/lootboxes/{lootboxManagerLootboxId} | Remove lootbox manager lootbox |
| [**setLootboxManagerLootbox()**](LootboxesApi.md#setLootboxManagerLootbox) | **POST** /v1/lootboxManagers/{lootboxManagerId}/lootboxes | Set lootbox manager lootbox |


## `createLootboxManager()`

```php
createLootboxManager($x_authorization, $x_password, $create_lootbox_manager_request): \MetaFab\Model\CreateLootboxManager200Response
```

Create lootbox manager

Creates a new game lootbox manager and deploys a lootbox manager contract on behalf of the authenticating game's primary wallet. The deployed lootbox manager contract allows you to create lootbox behavior for existing items. For example, you can define item id(s) from one of your item collections as the requirement(s) to open a \"lootbox\". The required item(s) would be burned from the interacting player's wallet and the player would receive item(s) from a weighted randomized set of possible items the lootbox can contain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\LootboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$create_lootbox_manager_request = new \MetaFab\Model\CreateLootboxManagerRequest(); // \MetaFab\Model\CreateLootboxManagerRequest

try {
    $result = $apiInstance->createLootboxManager($x_authorization, $x_password, $create_lootbox_manager_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LootboxesApi->createLootboxManager: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_password** | **string**| The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **create_lootbox_manager_request** | [**\MetaFab\Model\CreateLootboxManagerRequest**](../Model/CreateLootboxManagerRequest.md)|  | |

### Return type

[**\MetaFab\Model\CreateLootboxManager200Response**](../Model/CreateLootboxManager200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLootboxManagerLootbox()`

```php
getLootboxManagerLootbox($lootbox_manager_id, $lootbox_manager_lootbox_id): \MetaFab\Model\LootboxManagerLootbox
```

Get lootbox manager lootbox

Returns a lootbox manager lootbox object for the provided lootboxManagerLootboxId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\LootboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lootbox_manager_id = 'lootbox_manager_id_example'; // string | Any lootbox manager id within the MetaFab ecosystem.
$lootbox_manager_lootbox_id = 'lootbox_manager_lootbox_id_example'; // string | Any lootbox manager lootbox id within the MetaFab ecosystem.

try {
    $result = $apiInstance->getLootboxManagerLootbox($lootbox_manager_id, $lootbox_manager_lootbox_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LootboxesApi->getLootboxManagerLootbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lootbox_manager_id** | **string**| Any lootbox manager id within the MetaFab ecosystem. | |
| **lootbox_manager_lootbox_id** | **string**| Any lootbox manager lootbox id within the MetaFab ecosystem. | |

### Return type

[**\MetaFab\Model\LootboxManagerLootbox**](../Model/LootboxManagerLootbox.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLootboxManagerLootboxes()`

```php
getLootboxManagerLootboxes($lootbox_manager_id): \MetaFab\Model\LootboxManagerLootbox[]
```

Get lootbox manager lootboxes

Returns all lootbox manager lootboxes as an array of lootbox objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\LootboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lootbox_manager_id = 'lootbox_manager_id_example'; // string | Any lootbox manager id within the MetaFab ecosystem.

try {
    $result = $apiInstance->getLootboxManagerLootboxes($lootbox_manager_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LootboxesApi->getLootboxManagerLootboxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lootbox_manager_id** | **string**| Any lootbox manager id within the MetaFab ecosystem. | |

### Return type

[**\MetaFab\Model\LootboxManagerLootbox[]**](../Model/LootboxManagerLootbox.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLootboxManagers()`

```php
getLootboxManagers($x_game_key): \MetaFab\Model\GetLootboxManagers200ResponseInner[]
```

Get lootbox managers

Returns an array of active lootbox managers for the game associated with the provided `X-Game-Key`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\LootboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_game_key = game_pk_4SOqpDi8pQdnQgfCOBW29qR8YmwOhxVPz5iHoMgUEJLDdPXgwLuHqZf8ewo2GajZ; // string | The `publishedKey` of a specific game. This can be shared or included in game clients, websites, etc.

try {
    $result = $apiInstance->getLootboxManagers($x_game_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LootboxesApi->getLootboxManagers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_game_key** | **string**| The &#x60;publishedKey&#x60; of a specific game. This can be shared or included in game clients, websites, etc. | |

### Return type

[**\MetaFab\Model\GetLootboxManagers200ResponseInner[]**](../Model/GetLootboxManagers200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openLootboxManagerLootbox()`

```php
openLootboxManagerLootbox($lootbox_manager_id, $lootbox_manager_lootbox_id, $x_authorization, $x_password): \MetaFab\Model\TransactionModel[]
```

Open lootbox manager lootbox

Opens a lootbox manager lootbox. The required input item(s) are burned from the wallet or player wallet opening the lootbox. The given output item(s) are given to the wallet or player wallet opening the lootbox.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\LootboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lootbox_manager_id = 'lootbox_manager_id_example'; // string | Any lootbox manager id within the MetaFab ecosystem.
$lootbox_manager_lootbox_id = 'lootbox_manager_lootbox_id_example'; // string | Any lootbox manager lootbox id within the MetaFab ecosystem.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_password = mySecurePassword; // string | The password of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.

try {
    $result = $apiInstance->openLootboxManagerLootbox($lootbox_manager_id, $lootbox_manager_lootbox_id, $x_authorization, $x_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LootboxesApi->openLootboxManagerLootbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lootbox_manager_id** | **string**| Any lootbox manager id within the MetaFab ecosystem. | |
| **lootbox_manager_lootbox_id** | **string**| Any lootbox manager lootbox id within the MetaFab ecosystem. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_password** | **string**| The password of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |

### Return type

[**\MetaFab\Model\TransactionModel[]**](../Model/TransactionModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeLootboxManagerLootbox()`

```php
removeLootboxManagerLootbox($lootbox_manager_id, $lootbox_manager_lootbox_id, $x_authorization, $x_password): \MetaFab\Model\TransactionModel
```

Remove lootbox manager lootbox

Removes the provided lootbox by lootboxId from the provided lootbox manager. Removed lootboxes can no longer be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\LootboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lootbox_manager_id = 'lootbox_manager_id_example'; // string | Any lootbox manager id within the MetaFab ecosystem.
$lootbox_manager_lootbox_id = 'lootbox_manager_lootbox_id_example'; // string | Any lootbox manager lootbox id within the MetaFab ecosystem.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.

try {
    $result = $apiInstance->removeLootboxManagerLootbox($lootbox_manager_id, $lootbox_manager_lootbox_id, $x_authorization, $x_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LootboxesApi->removeLootboxManagerLootbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lootbox_manager_id** | **string**| Any lootbox manager id within the MetaFab ecosystem. | |
| **lootbox_manager_lootbox_id** | **string**| Any lootbox manager lootbox id within the MetaFab ecosystem. | |
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

## `setLootboxManagerLootbox()`

```php
setLootboxManagerLootbox($lootbox_manager_id, $x_authorization, $x_password, $set_lootbox_manager_lootbox_request): \MetaFab\Model\TransactionModel
```

Set lootbox manager lootbox

Sets a new lootbox manager lootbox or updates an existing one for the provided id. Lootboxes allow item(s) to be burned to receive a random set of possible item(s) based on probability weight.  Lootboxes can require any number of unique types of items and quantities to open a created lootbox type within the system. A common pattern with lootboxes is to create a lootbox item type within an item collection, and require it as the input item type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\LootboxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lootbox_manager_id = 'lootbox_manager_id_example'; // string | Any lootbox manager id within the MetaFab ecosystem.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_password = mySecurePassword; // string | The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$set_lootbox_manager_lootbox_request = new \MetaFab\Model\SetLootboxManagerLootboxRequest(); // \MetaFab\Model\SetLootboxManagerLootboxRequest

try {
    $result = $apiInstance->setLootboxManagerLootbox($lootbox_manager_id, $x_authorization, $x_password, $set_lootbox_manager_lootbox_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LootboxesApi->setLootboxManagerLootbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lootbox_manager_id** | **string**| Any lootbox manager id within the MetaFab ecosystem. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_password** | **string**| The password of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **set_lootbox_manager_lootbox_request** | [**\MetaFab\Model\SetLootboxManagerLootboxRequest**](../Model/SetLootboxManagerLootboxRequest.md)|  | |

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
