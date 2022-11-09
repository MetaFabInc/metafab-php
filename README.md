# MetaFab

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
require_once('/path/to/MetaFab/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
*CurrenciesApi* | [**getCurrencyBalance**](docs/Api/CurrenciesApi.md#getcurrencybalance) | **GET** /v1/currencies/{currencyId}/balances | Get currency balance
*CurrenciesApi* | [**getCurrencyFees**](docs/Api/CurrenciesApi.md#getcurrencyfees) | **GET** /v1/currencies/{currencyId}/fees | Get currency fees
*CurrenciesApi* | [**getCurrencyRole**](docs/Api/CurrenciesApi.md#getcurrencyrole) | **GET** /v1/currencies/{currencyId}/roles | Get currency role
*CurrenciesApi* | [**grantCurrencyRole**](docs/Api/CurrenciesApi.md#grantcurrencyrole) | **POST** /v1/currencies/{currencyId}/roles | Grant currency role
*CurrenciesApi* | [**mintCurrency**](docs/Api/CurrenciesApi.md#mintcurrency) | **POST** /v1/currencies/{currencyId}/mints | Mint currency
*CurrenciesApi* | [**revokeCurrencyRole**](docs/Api/CurrenciesApi.md#revokecurrencyrole) | **DELETE** /v1/currencies/{currencyId}/roles | Revoke currency role
*CurrenciesApi* | [**setCurrencyFees**](docs/Api/CurrenciesApi.md#setcurrencyfees) | **POST** /v1/currencies/{currencyId}/fees | Set currency fees
*CurrenciesApi* | [**transferCurrency**](docs/Api/CurrenciesApi.md#transfercurrency) | **POST** /v1/currencies/{currencyId}/transfers | Transfer currency
*ExchangesApi* | [**createExchange**](docs/Api/ExchangesApi.md#createexchange) | **POST** /v1/exchanges | Create exchange
*ExchangesApi* | [**getExchangeOffer**](docs/Api/ExchangesApi.md#getexchangeoffer) | **GET** /v1/exchanges/{exchangeId}/items/{exchangeOfferId} | Get exchange offer
*ExchangesApi* | [**getExchangeOffers**](docs/Api/ExchangesApi.md#getexchangeoffers) | **GET** /v1/exchanges/{exchangeId}/offers | Get exchange offers
*ExchangesApi* | [**getExchanges**](docs/Api/ExchangesApi.md#getexchanges) | **GET** /v1/exchanges | Get exchanges
*ExchangesApi* | [**removeExchangeOffer**](docs/Api/ExchangesApi.md#removeexchangeoffer) | **DELETE** /v1/exchanges/{exchangeId}/offers/{exchangeOfferId} | Remove exchange offer
*ExchangesApi* | [**setExchangeOffer**](docs/Api/ExchangesApi.md#setexchangeoffer) | **POST** /v1/exchanges/{exchangeId}/offers | Set exchange offer
*ExchangesApi* | [**useExchangeOffer**](docs/Api/ExchangesApi.md#useexchangeoffer) | **POST** /v1/exchanges/{exchangeId}/offers/{exchangeOfferId}/uses | Use exchange offer
*ExchangesApi* | [**withdrawFromExchange**](docs/Api/ExchangesApi.md#withdrawfromexchange) | **POST** /v1/exchanges/{exchangeId}/withdrawals | Withdraw from exchange
*GamesApi* | [**authGame**](docs/Api/GamesApi.md#authgame) | **GET** /v1/games/auth | Authenticate game
*GamesApi* | [**createGame**](docs/Api/GamesApi.md#creategame) | **POST** /v1/games | Create game
*GamesApi* | [**getGame**](docs/Api/GamesApi.md#getgame) | **GET** /v1/games/{gameId} | Get game
*GamesApi* | [**updateGame**](docs/Api/GamesApi.md#updategame) | **PATCH** /v1/games/{gameId} | Update game
*ItemsApi* | [**batchMintCollectionItems**](docs/Api/ItemsApi.md#batchmintcollectionitems) | **POST** /v1/collections/{collectionId}/batchMints | Batch mint collection items
*ItemsApi* | [**batchTransferCollectionItems**](docs/Api/ItemsApi.md#batchtransfercollectionitems) | **POST** /v1/collections/{collectionId}/batchTransfers | Batch transfer collection items
*ItemsApi* | [**burnCollectionItem**](docs/Api/ItemsApi.md#burncollectionitem) | **POST** /v1/collections/{collectionId}/items/{collectionItemId}/burns | Burn collection item
*ItemsApi* | [**createCollection**](docs/Api/ItemsApi.md#createcollection) | **POST** /v1/collections | Create collection
*ItemsApi* | [**createCollectionItem**](docs/Api/ItemsApi.md#createcollectionitem) | **POST** /v1/collections/{collectionId}/items | Create collection item
*ItemsApi* | [**getCollectionApproval**](docs/Api/ItemsApi.md#getcollectionapproval) | **GET** /v1/collections/{collectionId}/approvals | Get collection approval
*ItemsApi* | [**getCollectionItem**](docs/Api/ItemsApi.md#getcollectionitem) | **GET** /v1/collections/{collectionId}/items/{collectionItemId} | Get collection item
*ItemsApi* | [**getCollectionItemBalance**](docs/Api/ItemsApi.md#getcollectionitembalance) | **GET** /v1/collections/{collectionId}/items/{collectionItemId}/balances | Get collection item balance
*ItemsApi* | [**getCollectionItemBalances**](docs/Api/ItemsApi.md#getcollectionitembalances) | **GET** /v1/collections/{collectionId}/balances | Get collection item balances
*ItemsApi* | [**getCollectionItemSupplies**](docs/Api/ItemsApi.md#getcollectionitemsupplies) | **GET** /v1/collections/{collectionId}/supplies | Get collection item supplies
*ItemsApi* | [**getCollectionItemSupply**](docs/Api/ItemsApi.md#getcollectionitemsupply) | **GET** /v1/collections/{collectionId}/items/{collectionItemId}/supplies | Get collection item supply
*ItemsApi* | [**getCollectionItemTimelock**](docs/Api/ItemsApi.md#getcollectionitemtimelock) | **GET** /v1/collections/{collectionId}/items/{collectionItemId}/timelocks | Get collection item timelock
*ItemsApi* | [**getCollectionItems**](docs/Api/ItemsApi.md#getcollectionitems) | **GET** /v1/collections/{collectionId}/items | Get collection items
*ItemsApi* | [**getCollectionRole**](docs/Api/ItemsApi.md#getcollectionrole) | **GET** /v1/collections/{collectionId}/roles | Get collection role
*ItemsApi* | [**getCollections**](docs/Api/ItemsApi.md#getcollections) | **GET** /v1/collections | Get collections
*ItemsApi* | [**grantCollectionRole**](docs/Api/ItemsApi.md#grantcollectionrole) | **POST** /v1/collections/{collectionId}/roles | Grant collection role
*ItemsApi* | [**mintCollectionItem**](docs/Api/ItemsApi.md#mintcollectionitem) | **POST** /v1/collections/{collectionId}/items/{collectionItemId}/mints | Mint collection item
*ItemsApi* | [**revokeCollectionRole**](docs/Api/ItemsApi.md#revokecollectionrole) | **DELETE** /v1/collections/{collectionId}/roles | Revoke collection role
*ItemsApi* | [**setCollectionApproval**](docs/Api/ItemsApi.md#setcollectionapproval) | **POST** /v1/collections/{collectionId}/approvals | Set collection approval
*ItemsApi* | [**setCollectionItemTimelock**](docs/Api/ItemsApi.md#setcollectionitemtimelock) | **POST** /v1/collections/{collectionId}/items/{collectionItemId}/timelocks | Set collection item timelock
*ItemsApi* | [**transferCollectionItem**](docs/Api/ItemsApi.md#transfercollectionitem) | **POST** /v1/collections/{collectionId}/items/{collectionItemId}/transfers | Transfer collection item
*PlayersApi* | [**authPlayer**](docs/Api/PlayersApi.md#authplayer) | **GET** /v1/players/auth | Authenticate player
*PlayersApi* | [**createPlayer**](docs/Api/PlayersApi.md#createplayer) | **POST** /v1/players | Create player
*PlayersApi* | [**getPlayer**](docs/Api/PlayersApi.md#getplayer) | **GET** /v1/players/{playerId} | Get player
*PlayersApi* | [**getPlayerData**](docs/Api/PlayersApi.md#getplayerdata) | **GET** /v1/players/{playerId}/data | Get player data
*PlayersApi* | [**getPlayers**](docs/Api/PlayersApi.md#getplayers) | **GET** /v1/players | Get players
*PlayersApi* | [**setPlayerData**](docs/Api/PlayersApi.md#setplayerdata) | **POST** /v1/players/{playerId}/data | Set player data
*PlayersApi* | [**updatePlayer**](docs/Api/PlayersApi.md#updateplayer) | **PATCH** /v1/players/{playerId} | Update player
*TransactionsApi* | [**getTransaction**](docs/Api/TransactionsApi.md#gettransaction) | **GET** /v1/transactions/{transactionId} | Get transaction
*WalletsApi* | [**getWalletBalances**](docs/Api/WalletsApi.md#getwalletbalances) | **GET** /v1/wallets/{walletId}/balances | Get wallet balances
*WalletsApi* | [**getWalletTransactions**](docs/Api/WalletsApi.md#getwallettransactions) | **GET** /v1/wallets/{walletId}/transactions | Get wallet transactions

## Models

- [AuthGame200Response](docs/Model/AuthGame200Response.md)
- [AuthGame200ResponseAllOf](docs/Model/AuthGame200ResponseAllOf.md)
- [AuthGame200ResponseAllOf1](docs/Model/AuthGame200ResponseAllOf1.md)
- [AuthPlayer200Response](docs/Model/AuthPlayer200Response.md)
- [BatchMintCollectionItemsRequest](docs/Model/BatchMintCollectionItemsRequest.md)
- [BatchTransferCollectionItemsRequest](docs/Model/BatchTransferCollectionItemsRequest.md)
- [BatchTransferCurrencyRequest](docs/Model/BatchTransferCurrencyRequest.md)
- [BurnCollectionItemRequest](docs/Model/BurnCollectionItemRequest.md)
- [BurnCurrencyRequest](docs/Model/BurnCurrencyRequest.md)
- [CollectionModel](docs/Model/CollectionModel.md)
- [ContractModel](docs/Model/ContractModel.md)
- [CreateCollection200Response](docs/Model/CreateCollection200Response.md)
- [CreateCollection200ResponseAllOf](docs/Model/CreateCollection200ResponseAllOf.md)
- [CreateCollection200ResponseAllOfContract](docs/Model/CreateCollection200ResponseAllOfContract.md)
- [CreateCollection200ResponseAllOfContractAllOf](docs/Model/CreateCollection200ResponseAllOfContractAllOf.md)
- [CreateCollectionItemRequest](docs/Model/CreateCollectionItemRequest.md)
- [CreateCollectionItemRequestAttributesInner](docs/Model/CreateCollectionItemRequestAttributesInner.md)
- [CreateCollectionRequest](docs/Model/CreateCollectionRequest.md)
- [CreateContractRequest](docs/Model/CreateContractRequest.md)
- [CreateCurrency200Response](docs/Model/CreateCurrency200Response.md)
- [CreateCurrencyRequest](docs/Model/CreateCurrencyRequest.md)
- [CreateExchange200Response](docs/Model/CreateExchange200Response.md)
- [CreateExchangeRequest](docs/Model/CreateExchangeRequest.md)
- [CreateGameRequest](docs/Model/CreateGameRequest.md)
- [CreatePlayerRequest](docs/Model/CreatePlayerRequest.md)
- [CurrencyModel](docs/Model/CurrencyModel.md)
- [ExchangeModel](docs/Model/ExchangeModel.md)
- [ExchangeOffer](docs/Model/ExchangeOffer.md)
- [GameModel](docs/Model/GameModel.md)
- [GetCollections200ResponseInner](docs/Model/GetCollections200ResponseInner.md)
- [GetCollections200ResponseInnerAllOf](docs/Model/GetCollections200ResponseInnerAllOf.md)
- [GetCurrencies200ResponseInner](docs/Model/GetCurrencies200ResponseInner.md)
- [GetCurrencies200ResponseInnerAllOf](docs/Model/GetCurrencies200ResponseInnerAllOf.md)
- [GetCurrencyFees200Response](docs/Model/GetCurrencyFees200Response.md)
- [GetExchanges200ResponseInner](docs/Model/GetExchanges200ResponseInner.md)
- [GetPlayerData200Response](docs/Model/GetPlayerData200Response.md)
- [GrantCollectionRoleRequest](docs/Model/GrantCollectionRoleRequest.md)
- [GrantCurrencyRoleRequest](docs/Model/GrantCurrencyRoleRequest.md)
- [MintCollectionItemRequest](docs/Model/MintCollectionItemRequest.md)
- [MintCurrencyRequest](docs/Model/MintCurrencyRequest.md)
- [PlayerModel](docs/Model/PlayerModel.md)
- [PublicGame](docs/Model/PublicGame.md)
- [PublicPlayer](docs/Model/PublicPlayer.md)
- [PublicPlayerWallet](docs/Model/PublicPlayerWallet.md)
- [RevokeCollectionRoleRequest](docs/Model/RevokeCollectionRoleRequest.md)
- [SetCollectionApprovalRequest](docs/Model/SetCollectionApprovalRequest.md)
- [SetCollectionItemTimelockRequest](docs/Model/SetCollectionItemTimelockRequest.md)
- [SetCurrencyFeesRequest](docs/Model/SetCurrencyFeesRequest.md)
- [SetExchangeOfferRequest](docs/Model/SetExchangeOfferRequest.md)
- [SetPlayerDataRequest](docs/Model/SetPlayerDataRequest.md)
- [TransactionModel](docs/Model/TransactionModel.md)
- [TransferCollectionItemRequest](docs/Model/TransferCollectionItemRequest.md)
- [TransferCurrencyRequest](docs/Model/TransferCurrencyRequest.md)
- [UpdateGameRequest](docs/Model/UpdateGameRequest.md)
- [UpdatePlayerRequest](docs/Model/UpdatePlayerRequest.md)
- [WalletModel](docs/Model/WalletModel.md)
- [WithdrawFromExchangeRequest](docs/Model/WithdrawFromExchangeRequest.md)
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

- API version: `1.2.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
