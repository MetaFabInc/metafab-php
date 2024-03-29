# MetaFab\ItemsApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchMintCollectionItems()**](ItemsApi.md#batchMintCollectionItems) | **POST** /v1/collections/{collectionId}/batchMints | Batch mint collection items |
| [**batchTransferCollectionItems()**](ItemsApi.md#batchTransferCollectionItems) | **POST** /v1/collections/{collectionId}/batchTransfers | Batch transfer collection items |
| [**burnCollectionItem()**](ItemsApi.md#burnCollectionItem) | **POST** /v1/collections/{collectionId}/items/{collectionItemId}/burns | Burn collection item |
| [**createCollection()**](ItemsApi.md#createCollection) | **POST** /v1/collections | Create collection |
| [**createCollectionItem()**](ItemsApi.md#createCollectionItem) | **POST** /v1/collections/{collectionId}/items | Create collection item |
| [**getCollectionApproval()**](ItemsApi.md#getCollectionApproval) | **GET** /v1/collections/{collectionId}/approvals | Get collection approval |
| [**getCollectionItem()**](ItemsApi.md#getCollectionItem) | **GET** /v1/collections/{collectionId}/items/{collectionItemId} | Get collection item |
| [**getCollectionItemBalance()**](ItemsApi.md#getCollectionItemBalance) | **GET** /v1/collections/{collectionId}/items/{collectionItemId}/balances | Get collection item balance |
| [**getCollectionItemBalances()**](ItemsApi.md#getCollectionItemBalances) | **GET** /v1/collections/{collectionId}/balances | Get collection item balances |
| [**getCollectionItemSupplies()**](ItemsApi.md#getCollectionItemSupplies) | **GET** /v1/collections/{collectionId}/supplies | Get collection item supplies |
| [**getCollectionItemSupply()**](ItemsApi.md#getCollectionItemSupply) | **GET** /v1/collections/{collectionId}/items/{collectionItemId}/supplies | Get collection item supply |
| [**getCollectionItemTimelock()**](ItemsApi.md#getCollectionItemTimelock) | **GET** /v1/collections/{collectionId}/items/{collectionItemId}/timelocks | Get collection item timelock |
| [**getCollectionItems()**](ItemsApi.md#getCollectionItems) | **GET** /v1/collections/{collectionId}/items | Get collection items |
| [**getCollectionRole()**](ItemsApi.md#getCollectionRole) | **GET** /v1/collections/{collectionId}/roles | Get collection role |
| [**getCollections()**](ItemsApi.md#getCollections) | **GET** /v1/collections | Get collections |
| [**grantCollectionRole()**](ItemsApi.md#grantCollectionRole) | **POST** /v1/collections/{collectionId}/roles | Grant collection role |
| [**mintCollectionItem()**](ItemsApi.md#mintCollectionItem) | **POST** /v1/collections/{collectionId}/items/{collectionItemId}/mints | Mint collection item |
| [**revokeCollectionRole()**](ItemsApi.md#revokeCollectionRole) | **DELETE** /v1/collections/{collectionId}/roles | Revoke collection role |
| [**setCollectionApproval()**](ItemsApi.md#setCollectionApproval) | **POST** /v1/collections/{collectionId}/approvals | Set collection approval |
| [**setCollectionItemTimelock()**](ItemsApi.md#setCollectionItemTimelock) | **POST** /v1/collections/{collectionId}/items/{collectionItemId}/timelocks | Set collection item timelock |
| [**transferCollectionItem()**](ItemsApi.md#transferCollectionItem) | **POST** /v1/collections/{collectionId}/items/{collectionItemId}/transfers | Transfer collection item |


## `batchMintCollectionItems()`

```php
batchMintCollectionItems($collection_id, $x_authorization, $x_wallet_decrypt_key, $batch_mint_collection_items_request): \MetaFab\Model\TransactionModel
```

Batch mint collection items

Creates (mints) the provided itemIds of the specified quantities to the provided wallet address or wallet address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$batch_mint_collection_items_request = new \MetaFab\Model\BatchMintCollectionItemsRequest(); // \MetaFab\Model\BatchMintCollectionItemsRequest

try {
    $result = $apiInstance->batchMintCollectionItems($collection_id, $x_authorization, $x_wallet_decrypt_key, $batch_mint_collection_items_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->batchMintCollectionItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **batch_mint_collection_items_request** | [**\MetaFab\Model\BatchMintCollectionItemsRequest**](../Model/BatchMintCollectionItemsRequest.md)|  | |

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

## `batchTransferCollectionItems()`

```php
batchTransferCollectionItems($collection_id, $x_authorization, $x_wallet_decrypt_key, $batch_transfer_collection_items_request): \MetaFab\Model\TransactionModel
```

Batch transfer collection items

Transfers one or multiple items of specified quantities to the provided wallet addresses or wallet addresses associated with the provided walletIds. You may also provide a combination of addresses and walletIds in one request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$batch_transfer_collection_items_request = new \MetaFab\Model\BatchTransferCollectionItemsRequest(); // \MetaFab\Model\BatchTransferCollectionItemsRequest

try {
    $result = $apiInstance->batchTransferCollectionItems($collection_id, $x_authorization, $x_wallet_decrypt_key, $batch_transfer_collection_items_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->batchTransferCollectionItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **batch_transfer_collection_items_request** | [**\MetaFab\Model\BatchTransferCollectionItemsRequest**](../Model/BatchTransferCollectionItemsRequest.md)|  | |

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

## `burnCollectionItem()`

```php
burnCollectionItem($collection_id, $collection_item_id, $x_authorization, $x_wallet_decrypt_key, $burn_collection_item_request): \MetaFab\Model\TransactionModel
```

Burn collection item

Removes (burns) the provided quantity of the collectionItemId from the authenticating game or players wallet. The quantity is permanently removed from the circulating supply of the item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$collection_item_id = 3.4; // float | Any item id for the collection. Zero, or a positive integer.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$burn_collection_item_request = new \MetaFab\Model\BurnCollectionItemRequest(); // \MetaFab\Model\BurnCollectionItemRequest

try {
    $result = $apiInstance->burnCollectionItem($collection_id, $collection_item_id, $x_authorization, $x_wallet_decrypt_key, $burn_collection_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->burnCollectionItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **collection_item_id** | **float**| Any item id for the collection. Zero, or a positive integer. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **burn_collection_item_request** | [**\MetaFab\Model\BurnCollectionItemRequest**](../Model/BurnCollectionItemRequest.md)|  | |

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

## `createCollection()`

```php
createCollection($x_authorization, $x_wallet_decrypt_key, $create_collection_request): \MetaFab\Model\CreateCollection200Response
```

Create collection

Creates a new game item collection and deploys an extended functionality ERC1155 contract on behalf of the authenticating game's primary wallet. The deployed ERC1155 contract is preconfigured to fully support creating unique item types, item transfer timelocks, custom metadata per item, gasless transactions from player managed wallets, and much more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$create_collection_request = new \MetaFab\Model\CreateCollectionRequest(); // \MetaFab\Model\CreateCollectionRequest

try {
    $result = $apiInstance->createCollection($x_authorization, $x_wallet_decrypt_key, $create_collection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **create_collection_request** | [**\MetaFab\Model\CreateCollectionRequest**](../Model/CreateCollectionRequest.md)|  | |

### Return type

[**\MetaFab\Model\CreateCollection200Response**](../Model/CreateCollection200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCollectionItem()`

```php
createCollectionItem($collection_id, $x_authorization, $x_wallet_decrypt_key, $create_collection_item_request): \MetaFab\Model\TransactionModel
```

Create collection item

Creates a new item type. Item type creation associates all of the relevant item data to a specific itemId. Such as item name, image, description, attributes, any arbitrary data such as 2D or 3D model resolver URLs, and more. It is recommended, but not required, that you create a new item type through this endpoint before minting any quantity of the related itemId.  Any itemId provided will have its existing item type overriden if it already exists.  Item type data is uploaded to, and resolved through IPFS for decentralized persistence.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$create_collection_item_request = new \MetaFab\Model\CreateCollectionItemRequest(); // \MetaFab\Model\CreateCollectionItemRequest

try {
    $result = $apiInstance->createCollectionItem($collection_id, $x_authorization, $x_wallet_decrypt_key, $create_collection_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->createCollectionItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **create_collection_item_request** | [**\MetaFab\Model\CreateCollectionItemRequest**](../Model/CreateCollectionItemRequest.md)|  | |

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

## `getCollectionApproval()`

```php
getCollectionApproval($collection_id, $operator_address, $address, $wallet_id): bool
```

Get collection approval

Returns a boolean (true/false) representing if the provided operatorAddress has approval to transfer and burn items from the current collection owned by the address or address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$operator_address = 0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D; // string | A valid EVM based address. For example, `0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D`.
$address = 0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D; // string | A valid EVM based address. For example, `0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D`.
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.

try {
    $result = $apiInstance->getCollectionApproval($collection_id, $operator_address, $address, $wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getCollectionApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **operator_address** | **string**| A valid EVM based address. For example, &#x60;0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D&#x60;. | |
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

## `getCollectionItem()`

```php
getCollectionItem($collection_id, $collection_item_id): \MetaFab\Model\CollectionItem
```

Get collection item

Returns a metadata object for the provided collectionItemId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$collection_item_id = 3.4; // float | Any item id for the collection. Zero, or a positive integer.

try {
    $result = $apiInstance->getCollectionItem($collection_id, $collection_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getCollectionItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **collection_item_id** | **float**| Any item id for the collection. Zero, or a positive integer. | |

### Return type

[**\MetaFab\Model\CollectionItem**](../Model/CollectionItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollectionItemBalance()`

```php
getCollectionItemBalance($collection_id, $collection_item_id, $address, $wallet_id): int
```

Get collection item balance

Returns the current collection item balance of the provided collectionItemId for the provided wallet address or the wallet address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$collection_item_id = 3.4; // float | Any item id for the collection. Zero, or a positive integer.
$address = 0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D; // string | A valid EVM based address. For example, `0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D`.
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.

try {
    $result = $apiInstance->getCollectionItemBalance($collection_id, $collection_item_id, $address, $wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getCollectionItemBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **collection_item_id** | **float**| Any item id for the collection. Zero, or a positive integer. | |
| **address** | **string**| A valid EVM based address. For example, &#x60;0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D&#x60;. | [optional] |
| **wallet_id** | **string**| Any wallet id within the MetaFab platform. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollectionItemBalances()`

```php
getCollectionItemBalances($collection_id, $address, $wallet_id): array<string,int>
```

Get collection item balances

Returns the current collection item balances of all collection items for the provided wallet address or the wallet address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$address = 0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D; // string | A valid EVM based address. For example, `0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D`.
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.

try {
    $result = $apiInstance->getCollectionItemBalances($collection_id, $address, $wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getCollectionItemBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **address** | **string**| A valid EVM based address. For example, &#x60;0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D&#x60;. | [optional] |
| **wallet_id** | **string**| Any wallet id within the MetaFab platform. | [optional] |

### Return type

**array<string,int>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollectionItemSupplies()`

```php
getCollectionItemSupplies($collection_id): array<string,int>
```

Get collection item supplies

Returns the currency circulating supply of all collection items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.

try {
    $result = $apiInstance->getCollectionItemSupplies($collection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getCollectionItemSupplies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |

### Return type

**array<string,int>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollectionItemSupply()`

```php
getCollectionItemSupply($collection_id, $collection_item_id, $address, $wallet_id): int
```

Get collection item supply

Returns the current circulating supply of the provided collectionItemId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$collection_item_id = 3.4; // float | Any item id for the collection. Zero, or a positive integer.
$address = 0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D; // string | A valid EVM based address. For example, `0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D`.
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.

try {
    $result = $apiInstance->getCollectionItemSupply($collection_id, $collection_item_id, $address, $wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getCollectionItemSupply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **collection_item_id** | **float**| Any item id for the collection. Zero, or a positive integer. | |
| **address** | **string**| A valid EVM based address. For example, &#x60;0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D&#x60;. | [optional] |
| **wallet_id** | **string**| Any wallet id within the MetaFab platform. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollectionItemTimelock()`

```php
getCollectionItemTimelock($collection_id, $collection_item_id): int
```

Get collection item timelock

Returns a timestamp (in seconds) for when the provided collectionItemId's transfer timelock expires. A value of 0 means the provided collectionItemId does not have a timelock set. Timelocks prevent items of a specific collectionItemId from being transferred until the set timelock timestamp has been surpassed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$collection_item_id = 3.4; // float | Any item id for the collection. Zero, or a positive integer.

try {
    $result = $apiInstance->getCollectionItemTimelock($collection_id, $collection_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getCollectionItemTimelock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **collection_item_id** | **float**| Any item id for the collection. Zero, or a positive integer. | |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollectionItems()`

```php
getCollectionItems($collection_id): \MetaFab\Model\CollectionItem[]
```

Get collection items

Returns all collection items as an array of metadata objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.

try {
    $result = $apiInstance->getCollectionItems($collection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getCollectionItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |

### Return type

[**\MetaFab\Model\CollectionItem[]**](../Model/CollectionItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollectionRole()`

```php
getCollectionRole($collection_id, $role, $address, $wallet_id): bool
```

Get collection role

Returns a boolean (true/false) representing if the provided role for this collection has been granted to the provided address or address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$role = minter; // string | A valid MetaFab role or bytes string representing a role, such as `0xc9eb32e43bf5ecbceacf00b32281dfc5d6d700a0db676ea26ccf938a385ac3b7`
$address = 0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D; // string | A valid EVM based address. For example, `0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D`.
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.

try {
    $result = $apiInstance->getCollectionRole($collection_id, $role, $address, $wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getCollectionRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
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

## `getCollections()`

```php
getCollections($x_game_key): \MetaFab\Model\GetCollections200ResponseInner[]
```

Get collections

Returns an array of active item collections for the game associated with the provided `X-Game-Key`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_game_key = game_pk_4SOqpDi8pQdnQgfCOBW29qR8YmwOhxVPz5iHoMgUEJLDdPXgwLuHqZf8ewo2GajZ; // string | The `publishedKey` of a specific game. This can be shared or included in game clients, websites, etc.

try {
    $result = $apiInstance->getCollections($x_game_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_game_key** | **string**| The &#x60;publishedKey&#x60; of a specific game. This can be shared or included in game clients, websites, etc. | |

### Return type

[**\MetaFab\Model\GetCollections200ResponseInner[]**](../Model/GetCollections200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grantCollectionRole()`

```php
grantCollectionRole($collection_id, $x_authorization, $x_wallet_decrypt_key, $grant_collection_role_request): \MetaFab\Model\TransactionModel
```

Grant collection role

Grants the provided role for the collection to the provided address or address associated with the provided walletId. Granted roles give different types of authority on behalf of the collection for specific players, addresses, or contracts to perform different types of permissioned collection operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$grant_collection_role_request = new \MetaFab\Model\GrantCollectionRoleRequest(); // \MetaFab\Model\GrantCollectionRoleRequest

try {
    $result = $apiInstance->grantCollectionRole($collection_id, $x_authorization, $x_wallet_decrypt_key, $grant_collection_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->grantCollectionRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **grant_collection_role_request** | [**\MetaFab\Model\GrantCollectionRoleRequest**](../Model/GrantCollectionRoleRequest.md)|  | |

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

## `mintCollectionItem()`

```php
mintCollectionItem($collection_id, $collection_item_id, $x_authorization, $x_wallet_decrypt_key, $mint_collection_item_request): \MetaFab\Model\TransactionModel
```

Mint collection item

Creates (mints) the specified quantity of the provided collectionItemId to the provided wallet address or wallet address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$collection_item_id = 3.4; // float | Any item id for the collection. Zero, or a positive integer.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$mint_collection_item_request = new \MetaFab\Model\MintCollectionItemRequest(); // \MetaFab\Model\MintCollectionItemRequest

try {
    $result = $apiInstance->mintCollectionItem($collection_id, $collection_item_id, $x_authorization, $x_wallet_decrypt_key, $mint_collection_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->mintCollectionItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **collection_item_id** | **float**| Any item id for the collection. Zero, or a positive integer. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **mint_collection_item_request** | [**\MetaFab\Model\MintCollectionItemRequest**](../Model/MintCollectionItemRequest.md)|  | |

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

## `revokeCollectionRole()`

```php
revokeCollectionRole($collection_id, $x_authorization, $x_wallet_decrypt_key, $revoke_collection_role_request): \MetaFab\Model\TransactionModel
```

Revoke collection role

Revokes the provided role for the collection to the provided address or address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$revoke_collection_role_request = new \MetaFab\Model\RevokeCollectionRoleRequest(); // \MetaFab\Model\RevokeCollectionRoleRequest

try {
    $result = $apiInstance->revokeCollectionRole($collection_id, $x_authorization, $x_wallet_decrypt_key, $revoke_collection_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->revokeCollectionRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
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

## `setCollectionApproval()`

```php
setCollectionApproval($collection_id, $x_authorization, $x_wallet_decrypt_key, $set_collection_approval_request): \MetaFab\Model\TransactionModel
```

Set collection approval

Sets approval for the provided address or wallet address associated with the provided walletId to operate on behalf of the authenticating game or player's owned items for this collection. Setting an approved value of `true` allows the provided address or address associated with the provided walletId to transfer and burn items from this collection on behalf of the authenticated game or player's wallet address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$set_collection_approval_request = new \MetaFab\Model\SetCollectionApprovalRequest(); // \MetaFab\Model\SetCollectionApprovalRequest

try {
    $result = $apiInstance->setCollectionApproval($collection_id, $x_authorization, $x_wallet_decrypt_key, $set_collection_approval_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->setCollectionApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **set_collection_approval_request** | [**\MetaFab\Model\SetCollectionApprovalRequest**](../Model/SetCollectionApprovalRequest.md)|  | |

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

## `setCollectionItemTimelock()`

```php
setCollectionItemTimelock($collection_id, $collection_item_id, $x_authorization, $x_wallet_decrypt_key, $set_collection_item_timelock_request): \MetaFab\Model\TransactionModel
```

Set collection item timelock

Sets the item timelock for the provided collection itemId. The timelock is a unix timestamp (in seconds) that defines a period in time of when an item may be transferred by players. Until the timelock timestamp has passed, the itemId for the given timelock may not be transferred, sold, traded, etc. A timelock of 0 (default) means that there is no timelock set on the itemId and it can be freely transferred, traded, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$collection_item_id = 3.4; // float | Any item id for the collection. Zero, or a positive integer.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$set_collection_item_timelock_request = new \MetaFab\Model\SetCollectionItemTimelockRequest(); // \MetaFab\Model\SetCollectionItemTimelockRequest

try {
    $result = $apiInstance->setCollectionItemTimelock($collection_id, $collection_item_id, $x_authorization, $x_wallet_decrypt_key, $set_collection_item_timelock_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->setCollectionItemTimelock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **collection_item_id** | **float**| Any item id for the collection. Zero, or a positive integer. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **set_collection_item_timelock_request** | [**\MetaFab\Model\SetCollectionItemTimelockRequest**](../Model/SetCollectionItemTimelockRequest.md)|  | |

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

## `transferCollectionItem()`

```php
transferCollectionItem($collection_id, $collection_item_id, $x_authorization, $x_wallet_decrypt_key, $transfer_collection_item_request): \MetaFab\Model\TransactionModel
```

Transfer collection item

Transfers specified quantity of itemId to the provided wallet address or wallet address associated with the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection_id = 'collection_id_example'; // string | Any collection id within the MetaFab platform.
$collection_item_id = 3.4; // float | Any item id for the collection. Zero, or a positive integer.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$transfer_collection_item_request = new \MetaFab\Model\TransferCollectionItemRequest(); // \MetaFab\Model\TransferCollectionItemRequest

try {
    $result = $apiInstance->transferCollectionItem($collection_id, $collection_item_id, $x_authorization, $x_wallet_decrypt_key, $transfer_collection_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->transferCollectionItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| Any collection id within the MetaFab platform. | |
| **collection_item_id** | **float**| Any item id for the collection. Zero, or a positive integer. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **transfer_collection_item_request** | [**\MetaFab\Model\TransferCollectionItemRequest**](../Model/TransferCollectionItemRequest.md)|  | |

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
