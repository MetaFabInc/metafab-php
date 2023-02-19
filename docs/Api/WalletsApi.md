# MetaFab\WalletsApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWalletSignature()**](WalletsApi.md#createWalletSignature) | **POST** /v1/wallets/{walletId}/signatures | Create wallet signature |
| [**getWallet()**](WalletsApi.md#getWallet) | **GET** /v1/wallets/{walletId} | Get wallet |
| [**getWalletBalances()**](WalletsApi.md#getWalletBalances) | **GET** /v1/wallets/{walletId}/balances | Get wallet balances |
| [**getWalletTransactions()**](WalletsApi.md#getWalletTransactions) | **GET** /v1/wallets/{walletId}/transactions | Get wallet transactions |


## `createWalletSignature()`

```php
createWalletSignature($wallet_id, $x_wallet_decrypt_key, $create_wallet_signature_request): string
```

Create wallet signature

Creates a wallet signature from a plaintext message using the wallet for the provided walletId and walletDecryptKey. Wallet signatures cannot be generated for EOA wallets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` for the provided `walletId`.
$create_wallet_signature_request = new \MetaFab\Model\CreateWalletSignatureRequest(); // \MetaFab\Model\CreateWalletSignatureRequest

try {
    $result = $apiInstance->createWalletSignature($wallet_id, $x_wallet_decrypt_key, $create_wallet_signature_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWalletSignature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**| Any wallet id within the MetaFab platform. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; for the provided &#x60;walletId&#x60;. | |
| **create_wallet_signature_request** | [**\MetaFab\Model\CreateWalletSignatureRequest**](../Model/CreateWalletSignatureRequest.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWallet()`

```php
getWallet($wallet_id): \MetaFab\Model\WalletModel
```

Get wallet

Returns a wallet object for the provided walletId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.

try {
    $result = $apiInstance->getWallet($wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**| Any wallet id within the MetaFab platform. | |

### Return type

[**\MetaFab\Model\WalletModel**](../Model/WalletModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletBalances()`

```php
getWalletBalances($wallet_id): array<string,float>
```

Get wallet balances

Returns the current native token balance for all chains supported by MetaFab for the provided walletId. This includes balances like Eth, Matic and other native tokens from chains MetaFab supports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.

try {
    $result = $apiInstance->getWalletBalances($wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**| Any wallet id within the MetaFab platform. | |

### Return type

**array<string,float>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWalletTransactions()`

```php
getWalletTransactions($wallet_id): \MetaFab\Model\TransactionModel[]
```

Get wallet transactions

Returns an array of MetaFab initiated transactions performed by the provided walletId. Transactions returned are ordered chronologically from newest to oldest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$wallet_id = 'wallet_id_example'; // string | Any wallet id within the MetaFab platform.

try {
    $result = $apiInstance->getWalletTransactions($wallet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->getWalletTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_id** | **string**| Any wallet id within the MetaFab platform. | |

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
