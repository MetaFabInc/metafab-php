# Metafab

 Complete MetaFab API references and guides can be found at: https://trymetafab.com

For more information, please visit [https://trymetafab.com](https://trymetafab.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Metafab/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$create_contract_request = new \OpenAPI\Client\Model\CreateContractRequest(); // \OpenAPI\Client\Model\CreateContractRequest

try {
    $result = $apiInstance->createContract($x_authorization, $create_contract_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->createContract: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.trymetafab.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContractsApi* | [**createContract**](docs/Api/ContractsApi.md#createcontract) | **POST** /v1/contracts | Create custom contract
*ContractsApi* | [**getContracts**](docs/Api/ContractsApi.md#getcontracts) | **GET** /v1/contracts | Get contracts
*ContractsApi* | [**readContract**](docs/Api/ContractsApi.md#readcontract) | **GET** /v1/contracts/{contractId}/reads | Read contract data
*ContractsApi* | [**writeContract**](docs/Api/ContractsApi.md#writecontract) | **POST** /v1/contracts/{contractId}/writes | Write contract data
*CurrenciesApi* | [**batchTransferCurrency**](docs/Api/CurrenciesApi.md#batchtransfercurrency) | **POST** /v1/currencies/{currencyId}/batchTransfers | Batch transfer currency
*CurrenciesApi* | [**burnCurrency**](docs/Api/CurrenciesApi.md#burncurrency) | **POST** /v1/currencies/{currencyId}/burns | Burn currency
*CurrenciesApi* | [**createCurrency**](docs/Api/CurrenciesApi.md#createcurrency) | **POST** /v1/currencies | Create currency
*CurrenciesApi* | [**getCurrencies**](docs/Api/CurrenciesApi.md#getcurrencies) | **GET** /v1/currencies | Get currencies
*CurrenciesApi* | [**getCurrencyBalances**](docs/Api/CurrenciesApi.md#getcurrencybalances) | **GET** /v1/currencies/{currencyId}/balances | Get currency balance
*CurrenciesApi* | [**getCurrencyFees**](docs/Api/CurrenciesApi.md#getcurrencyfees) | **GET** /v1/currencies/{currencyId}/fees | Get currency fees
*CurrenciesApi* | [**mintCurrency**](docs/Api/CurrenciesApi.md#mintcurrency) | **POST** /v1/currencies/{currencyId}/mints | Mint currency
*CurrenciesApi* | [**setCurrencyFees**](docs/Api/CurrenciesApi.md#setcurrencyfees) | **POST** /v1/currencies/{currencyId}/fees | Set currency fees
*CurrenciesApi* | [**transferCurrency**](docs/Api/CurrenciesApi.md#transfercurrency) | **POST** /v1/currencies/{currencyId}/transfers | Transfer currency
*GamesApi* | [**authGame**](docs/Api/GamesApi.md#authgame) | **GET** /v1/games | Authenticate game
*GamesApi* | [**createGame**](docs/Api/GamesApi.md#creategame) | **POST** /v1/games | Create game
*GamesApi* | [**updateGame**](docs/Api/GamesApi.md#updategame) | **PATCH** /v1/games/{gameId} | Update game
*PlayersApi* | [**authPlayer**](docs/Api/PlayersApi.md#authplayer) | **GET** /v1/players | Authenticate player
*PlayersApi* | [**createPlayer**](docs/Api/PlayersApi.md#createplayer) | **POST** /v1/players | Create player
*PlayersApi* | [**updatePlayer**](docs/Api/PlayersApi.md#updateplayer) | **PATCH** /v1/players/{playerId} | Update player
*TransactionsApi* | [**getTransaction**](docs/Api/TransactionsApi.md#gettransaction) | **GET** /v1/transactions/{transactionId} | Get transaction
*WalletsApi* | [**getWalletBalances**](docs/Api/WalletsApi.md#getwalletbalances) | **GET** /v1/wallets/{walletId}/balances | Get wallet balances
*WalletsApi* | [**getWalletTransactions**](docs/Api/WalletsApi.md#getwallettransactions) | **GET** /v1/wallets/{walletId}/transactions | Get wallet transactions

## Models

- [AuthGame200Response](docs/Model/AuthGame200Response.md)
- [AuthGame200ResponseAllOf](docs/Model/AuthGame200ResponseAllOf.md)
- [AuthGame200ResponseAllOf1](docs/Model/AuthGame200ResponseAllOf1.md)
- [AuthPlayer200Response](docs/Model/AuthPlayer200Response.md)
- [BatchTransferCurrencyRequest](docs/Model/BatchTransferCurrencyRequest.md)
- [BurnCurrencyRequest](docs/Model/BurnCurrencyRequest.md)
- [ContractModel](docs/Model/ContractModel.md)
- [CreateContractRequest](docs/Model/CreateContractRequest.md)
- [CreateCurrency200Response](docs/Model/CreateCurrency200Response.md)
- [CreateCurrency200ResponseAllOf](docs/Model/CreateCurrency200ResponseAllOf.md)
- [CreateCurrency200ResponseAllOfContract](docs/Model/CreateCurrency200ResponseAllOfContract.md)
- [CreateCurrency200ResponseAllOfContractAllOf](docs/Model/CreateCurrency200ResponseAllOfContractAllOf.md)
- [CreateCurrencyRequest](docs/Model/CreateCurrencyRequest.md)
- [CreateGameRequest](docs/Model/CreateGameRequest.md)
- [CreatePlayerRequest](docs/Model/CreatePlayerRequest.md)
- [CurrencyModel](docs/Model/CurrencyModel.md)
- [GameModel](docs/Model/GameModel.md)
- [GetCurrencies200ResponseInner](docs/Model/GetCurrencies200ResponseInner.md)
- [GetCurrencies200ResponseInnerAllOf](docs/Model/GetCurrencies200ResponseInnerAllOf.md)
- [GetCurrencyFees200Response](docs/Model/GetCurrencyFees200Response.md)
- [MintCurrencyRequest](docs/Model/MintCurrencyRequest.md)
- [PlayerModel](docs/Model/PlayerModel.md)
- [SetCurrencyFeesRequest](docs/Model/SetCurrencyFeesRequest.md)
- [TransactionModel](docs/Model/TransactionModel.md)
- [TransferCurrencyRequest](docs/Model/TransferCurrencyRequest.md)
- [UpdateGameRequest](docs/Model/UpdateGameRequest.md)
- [UpdatePlayerRequest](docs/Model/UpdatePlayerRequest.md)
- [WalletModel](docs/Model/WalletModel.md)
- [WriteContractRequest](docs/Model/WriteContractRequest.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

metafabproject@gmail.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
