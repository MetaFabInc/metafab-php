# MetaFab\ContractsApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContract()**](ContractsApi.md#createContract) | **POST** /v1/contracts | Create custom contract |
| [**getContracts()**](ContractsApi.md#getContracts) | **GET** /v1/contracts | Get contracts |
| [**readContract()**](ContractsApi.md#readContract) | **GET** /v1/contracts/{contractId}/reads | Read contract data |
| [**transferContractOwnership()**](ContractsApi.md#transferContractOwnership) | **POST** /v1/contracts/{contractId}/owners | Transfer contract ownership |
| [**upgradeContractTrustedForwarder()**](ContractsApi.md#upgradeContractTrustedForwarder) | **POST** /v1/contracts/{contractId}/forwarders | Upgrade contract trusted forwarder |
| [**writeContract()**](ContractsApi.md#writeContract) | **POST** /v1/contracts/{contractId}/writes | Write contract data |


## `createContract()`

```php
createContract($x_authorization, $create_contract_request): \MetaFab\Model\ContractModel
```

Create custom contract

Create a MetaFab custom contract entry from an existing contract address and contract abi. This allows the game and players belonging to the authenticated game to interact with the contract's read and write functions through MetaFab's read and write contract endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$create_contract_request = new \MetaFab\Model\CreateContractRequest(); // \MetaFab\Model\CreateContractRequest

try {
    $result = $apiInstance->createContract($x_authorization, $create_contract_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->createContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **create_contract_request** | [**\MetaFab\Model\CreateContractRequest**](../Model/CreateContractRequest.md)|  | |

### Return type

[**\MetaFab\Model\ContractModel**](../Model/ContractModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContracts()`

```php
getContracts($x_game_key): \MetaFab\Model\ContractModel[]
```

Get contracts

Returns an array of active contracts deployed by the game associated with the provided `X-Game-Key`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_game_key = game_pk_4SOqpDi8pQdnQgfCOBW29qR8YmwOhxVPz5iHoMgUEJLDdPXgwLuHqZf8ewo2GajZ; // string | The `publishedKey` of a specific game. This can be shared or included in game clients, websites, etc.

try {
    $result = $apiInstance->getContracts($x_game_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_game_key** | **string**| The &#x60;publishedKey&#x60; of a specific game. This can be shared or included in game clients, websites, etc. | |

### Return type

[**\MetaFab\Model\ContractModel[]**](../Model/ContractModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readContract()`

```php
readContract($contract_id, $func, $args): mixed
```

Read contract data

Oftentimes you'll want to query and retrieve some data from a contract. This is incredibly easy to do for any contract deployed through MetaFab.  Using this endpoint, you can get the data returned by any readable function listed in a contracts ABI. This could be things like querying the totalSupply of a currency contract, the number of owners of an items contract, and more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 'contract_id_example'; // string | Any contract id within the MetaFab platform.
$func = 'func_example'; // string | A contract function name. This can be any valid function from the the ABI of the contract you are interacting with. For example, `balanceOf`.
$args = 123,"Hello",false; // string | A comma seperated list of basic data type arguments. This is optional and only necessary if the function being invoked requires arguments per the contract ABI. For example, `123,\"Hello\",false`.

try {
    $result = $apiInstance->readContract($contract_id, $func, $args);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->readContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **string**| Any contract id within the MetaFab platform. | |
| **func** | **string**| A contract function name. This can be any valid function from the the ABI of the contract you are interacting with. For example, &#x60;balanceOf&#x60;. | |
| **args** | **string**| A comma seperated list of basic data type arguments. This is optional and only necessary if the function being invoked requires arguments per the contract ABI. For example, &#x60;123,\&quot;Hello\&quot;,false&#x60;. | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferContractOwnership()`

```php
transferContractOwnership($contract_id, $x_authorization, $x_wallet_decrypt_key, $transfer_contract_ownership_request): \MetaFab\Model\TransactionModel
```

Transfer contract ownership

Transfer ownership and control of a MetaFab deployed smart contract to another wallet you control. Transferring control does not disrupt your usage of MetaFab APIs and can be done so without causing any service outages for your game. The new owner wallet will have full control over any relevant item collections and marketplace related pages this contract may be associated with, such as for MetaFab item or NFT contracts.  Your game's custodial wallet will retain a `MANAGER_ROLE` on your contracts, allowing you to still use MetaFab APIs without issue while you retain full contract ownership and the contract's administrator role. If ever you want eject from using the MetaFab APIs but still retain your deployed smart contracts, you can revoke the `MANAGER_ROLE` from your game's custodial wallet address for your contract. We do not lock you into our systems.  Please be certain that the wallet address you transfer ownership to is one you control. Once ownership and admin permissions are transferred, your game's custodial wallet no longer has permission to reassign ownership or administrative priveleges for your contract.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 'contract_id_example'; // string | Any contract id within the MetaFab platform.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$transfer_contract_ownership_request = new \MetaFab\Model\TransferContractOwnershipRequest(); // \MetaFab\Model\TransferContractOwnershipRequest

try {
    $result = $apiInstance->transferContractOwnership($contract_id, $x_authorization, $x_wallet_decrypt_key, $transfer_contract_ownership_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->transferContractOwnership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **string**| Any contract id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **transfer_contract_ownership_request** | [**\MetaFab\Model\TransferContractOwnershipRequest**](../Model/TransferContractOwnershipRequest.md)|  | |

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

## `upgradeContractTrustedForwarder()`

```php
upgradeContractTrustedForwarder($contract_id, $x_authorization, $x_wallet_decrypt_key, $upgrade_contract_trusted_forwarder_request): \MetaFab\Model\TransactionModel
```

Upgrade contract trusted forwarder

In rare circumstances, you may need to upgrade the underlying trusted forwarder contract address attached to your game's contracts. Using this endpoint, you can provide a new trusted forwarder contract address to assign to any of your contracts that implement the `upgradeTrustedForwarder` function.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 'contract_id_example'; // string | Any contract id within the MetaFab platform.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet.
$upgrade_contract_trusted_forwarder_request = new \MetaFab\Model\UpgradeContractTrustedForwarderRequest(); // \MetaFab\Model\UpgradeContractTrustedForwarderRequest

try {
    $result = $apiInstance->upgradeContractTrustedForwarder($contract_id, $x_authorization, $x_wallet_decrypt_key, $upgrade_contract_trusted_forwarder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->upgradeContractTrustedForwarder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **string**| Any contract id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game. Required to decrypt and perform blockchain transactions with the game primary wallet. | |
| **upgrade_contract_trusted_forwarder_request** | [**\MetaFab\Model\UpgradeContractTrustedForwarderRequest**](../Model/UpgradeContractTrustedForwarderRequest.md)|  | |

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

## `writeContract()`

```php
writeContract($contract_id, $x_authorization, $x_wallet_decrypt_key, $write_contract_request): \MetaFab\Model\TransactionModel
```

Write contract data

MetaFab's convenience endpoints for contract interactions may not be flexible enough depending on your use case. For these situations, you can interact with contracts and create transactions directly.  Using this endpoint, you can execute a transaction for any writeable contract method as defined in the contract's ABI for the MetaFab contractId provided. Both Games and Player resources have authority to use this endpoint to execute transactions against any valid MetaFab contractId.  Additionally, MetaFab will automatically attempt to perform a gasless transaction for players interacting with a contract through this endpoint. Gasless transactions by players through this endpoint will only work if the target contract was deployed through MetaFab or supports MetaFab's ERC2771 trusted forwarder contract.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract_id = 'contract_id_example'; // string | Any contract id within the MetaFab platform.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet.
$write_contract_request = new \MetaFab\Model\WriteContractRequest(); // \MetaFab\Model\WriteContractRequest

try {
    $result = $apiInstance->writeContract($contract_id, $x_authorization, $x_wallet_decrypt_key, $write_contract_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->writeContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_id** | **string**| Any contract id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating game or player. Required to decrypt and perform blockchain transactions with the game or player primary wallet. | |
| **write_contract_request** | [**\MetaFab\Model\WriteContractRequest**](../Model/WriteContractRequest.md)|  | |

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
