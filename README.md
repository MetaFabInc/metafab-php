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
*ContractsApi* | [**transferContractOwnership**](docs/Api/ContractsApi.md#transfercontractownership) | **POST** /v1/contracts/{contractId}/owners | Transfer contract ownership
*ContractsApi* | [**upgradeContractTrustedForwarder**](docs/Api/ContractsApi.md#upgradecontracttrustedforwarder) | **POST** /v1/contracts/{contractId}/forwarders | Upgrade contract trusted forwarder
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
*EcosystemsApi* | [**approveEcosystemGame**](docs/Api/EcosystemsApi.md#approveecosystemgame) | **POST** /v1/ecosystems/{ecosystemId}/games | Approve ecosystem game
*EcosystemsApi* | [**authEcosystem**](docs/Api/EcosystemsApi.md#authecosystem) | **GET** /v1/ecosystems/auth | Authenticate ecosystem
*EcosystemsApi* | [**authProfile**](docs/Api/EcosystemsApi.md#authprofile) | **GET** /v1/profiles/auth | Authenticate profile
*EcosystemsApi* | [**authProfilePlayer**](docs/Api/EcosystemsApi.md#authprofileplayer) | **GET** /v1/profiles/{profileId}/games/{gameId}/players/auth | Authenticate profile player
*EcosystemsApi* | [**createEcosystem**](docs/Api/EcosystemsApi.md#createecosystem) | **POST** /v1/ecosystems | Create ecosystem
*EcosystemsApi* | [**createProfile**](docs/Api/EcosystemsApi.md#createprofile) | **POST** /v1/profiles | Create profile
*EcosystemsApi* | [**createProfilePlayer**](docs/Api/EcosystemsApi.md#createprofileplayer) | **POST** /v1/profiles/{profileId}/games/{gameId}/players | Create profile player
*EcosystemsApi* | [**getEcosystem**](docs/Api/EcosystemsApi.md#getecosystem) | **GET** /v1/ecosystems/{ecosystemId} | Get ecosystem
*EcosystemsApi* | [**getEcosystemGame**](docs/Api/EcosystemsApi.md#getecosystemgame) | **GET** /v1/ecosystems/{ecosystemId}/games/{gameId} | Get ecosystem game
*EcosystemsApi* | [**getEcosystemGames**](docs/Api/EcosystemsApi.md#getecosystemgames) | **GET** /v1/ecosystems/{ecosystemId}/games | Get ecosystem games
*EcosystemsApi* | [**getProfileGame**](docs/Api/EcosystemsApi.md#getprofilegame) | **GET** /v1/profiles/{profileId}/games/{gameId} | Get profile game
*EcosystemsApi* | [**getProfileGames**](docs/Api/EcosystemsApi.md#getprofilegames) | **GET** /v1/profiles/{profileId}/games | Get profile games
*EcosystemsApi* | [**unapproveEcosystemGame**](docs/Api/EcosystemsApi.md#unapproveecosystemgame) | **DELETE** /v1/ecosystems/{ecosystemId}/games/{gameId} | Unapprove ecosystem game
*EcosystemsApi* | [**updateEcosystem**](docs/Api/EcosystemsApi.md#updateecosystem) | **PATCH** /v1/ecosystems/{ecosystemId} | Update ecosystem
*EcosystemsApi* | [**updateProfile**](docs/Api/EcosystemsApi.md#updateprofile) | **PATCH** /v1/profiles/{profileId} | Update profile
*EcosystemsApi* | [**updateProfilePlayer**](docs/Api/EcosystemsApi.md#updateprofileplayer) | **PATCH** /v1/profiles/{profileId}/games/{gameId}/players/{playerId} | Update profile player
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
*LootboxesApi* | [**createLootboxManager**](docs/Api/LootboxesApi.md#createlootboxmanager) | **POST** /v1/lootboxManagers | Create lootbox manager
*LootboxesApi* | [**getLootboxManagerLootbox**](docs/Api/LootboxesApi.md#getlootboxmanagerlootbox) | **GET** /v1/lootboxManagers/{lootboxManagerId}/lootboxes/{lootboxManagerLootboxId} | Get lootbox manager lootbox
*LootboxesApi* | [**getLootboxManagerLootboxes**](docs/Api/LootboxesApi.md#getlootboxmanagerlootboxes) | **GET** /v1/lootboxManagers/{lootboxManagerId}/lootboxes | Get lootbox manager lootboxes
*LootboxesApi* | [**getLootboxManagers**](docs/Api/LootboxesApi.md#getlootboxmanagers) | **GET** /v1/lootboxManagers | Get lootbox managers
*LootboxesApi* | [**openLootboxManagerLootbox**](docs/Api/LootboxesApi.md#openlootboxmanagerlootbox) | **POST** /v1/lootboxManagers/{lootboxManagerId}/lootboxes/{lootboxManagerLootboxId}/opens | Open lootbox manager lootbox
*LootboxesApi* | [**removeLootboxManagerLootbox**](docs/Api/LootboxesApi.md#removelootboxmanagerlootbox) | **DELETE** /v1/lootboxManagers/{lootboxManagerId}/lootboxes/{lootboxManagerLootboxId} | Remove lootbox manager lootbox
*LootboxesApi* | [**setLootboxManagerLootbox**](docs/Api/LootboxesApi.md#setlootboxmanagerlootbox) | **POST** /v1/lootboxManagers/{lootboxManagerId}/lootboxes | Set lootbox manager lootbox
*PlayersApi* | [**authPlayer**](docs/Api/PlayersApi.md#authplayer) | **GET** /v1/players/auth | Authenticate player
*PlayersApi* | [**createPlayer**](docs/Api/PlayersApi.md#createplayer) | **POST** /v1/players | Create player
*PlayersApi* | [**getPlayer**](docs/Api/PlayersApi.md#getplayer) | **GET** /v1/players/{playerId} | Get player
*PlayersApi* | [**getPlayerData**](docs/Api/PlayersApi.md#getplayerdata) | **GET** /v1/players/{playerId}/data | Get player data
*PlayersApi* | [**getPlayers**](docs/Api/PlayersApi.md#getplayers) | **GET** /v1/players | Get players
*PlayersApi* | [**removePlayerConnectedWallet**](docs/Api/PlayersApi.md#removeplayerconnectedwallet) | **DELETE** /v1/players/{playerId}/wallets/{playerWalletId} | Remove player connected wallet
*PlayersApi* | [**setPlayerConnectedWallet**](docs/Api/PlayersApi.md#setplayerconnectedwallet) | **POST** /v1/players/{playerId}/wallets | Set player connected wallet
*PlayersApi* | [**setPlayerData**](docs/Api/PlayersApi.md#setplayerdata) | **POST** /v1/players/{playerId}/data | Set player data
*PlayersApi* | [**updatePlayer**](docs/Api/PlayersApi.md#updateplayer) | **PATCH** /v1/players/{playerId} | Update player
*ShopsApi* | [**createShop**](docs/Api/ShopsApi.md#createshop) | **POST** /v1/shops | Create shop
*ShopsApi* | [**getShopOffer**](docs/Api/ShopsApi.md#getshopoffer) | **GET** /v1/shops/{shopId}/offers/{shopOfferId} | Get shop offer
*ShopsApi* | [**getShopOffers**](docs/Api/ShopsApi.md#getshopoffers) | **GET** /v1/shops/{shopId}/offers | Get shop offers
*ShopsApi* | [**getShops**](docs/Api/ShopsApi.md#getshops) | **GET** /v1/shops | Get shops
*ShopsApi* | [**removeShopOffer**](docs/Api/ShopsApi.md#removeshopoffer) | **DELETE** /v1/shops/{shopId}/offers/{shopOfferId} | Remove shop offer
*ShopsApi* | [**setShopOffer**](docs/Api/ShopsApi.md#setshopoffer) | **POST** /v1/shops/{shopId}/offers | Set shop offer
*ShopsApi* | [**useShopOffer**](docs/Api/ShopsApi.md#useshopoffer) | **POST** /v1/shops/{shopId}/offers/{shopOfferId}/uses | Use shop offer
*ShopsApi* | [**withdrawFromShop**](docs/Api/ShopsApi.md#withdrawfromshop) | **POST** /v1/shops/{shopId}/withdrawals | Withdraw from shop
*TransactionsApi* | [**getTransaction**](docs/Api/TransactionsApi.md#gettransaction) | **GET** /v1/transactions/{transactionId} | Get transaction
*WalletsApi* | [**createWalletSignature**](docs/Api/WalletsApi.md#createwalletsignature) | **POST** /v1/wallets/{walletId}/signatures | Create wallet signature
*WalletsApi* | [**getWallet**](docs/Api/WalletsApi.md#getwallet) | **GET** /v1/wallets/{walletId} | Get wallet
*WalletsApi* | [**getWalletBalances**](docs/Api/WalletsApi.md#getwalletbalances) | **GET** /v1/wallets/{walletId}/balances | Get wallet balances
*WalletsApi* | [**getWalletTransactions**](docs/Api/WalletsApi.md#getwallettransactions) | **GET** /v1/wallets/{walletId}/transactions | Get wallet transactions

## Models

- [ApproveEcosystemGameRequest](docs/Model/ApproveEcosystemGameRequest.md)
- [AuthGame200Response](docs/Model/AuthGame200Response.md)
- [AuthGame200ResponseAllOf](docs/Model/AuthGame200ResponseAllOf.md)
- [AuthPlayer200Response](docs/Model/AuthPlayer200Response.md)
- [AuthPlayer200ResponseAllOf](docs/Model/AuthPlayer200ResponseAllOf.md)
- [AuthProfile200Response](docs/Model/AuthProfile200Response.md)
- [BatchMintCollectionItemsRequest](docs/Model/BatchMintCollectionItemsRequest.md)
- [BatchTransferCollectionItemsRequest](docs/Model/BatchTransferCollectionItemsRequest.md)
- [BatchTransferCurrencyRequest](docs/Model/BatchTransferCurrencyRequest.md)
- [BurnCollectionItemRequest](docs/Model/BurnCollectionItemRequest.md)
- [BurnCurrencyRequest](docs/Model/BurnCurrencyRequest.md)
- [CollectionItem](docs/Model/CollectionItem.md)
- [CollectionItemAttributesInner](docs/Model/CollectionItemAttributesInner.md)
- [CollectionItemAttributesInnerValue](docs/Model/CollectionItemAttributesInnerValue.md)
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
- [CreateEcosystemRequest](docs/Model/CreateEcosystemRequest.md)
- [CreateGameRequest](docs/Model/CreateGameRequest.md)
- [CreateLootboxManager200Response](docs/Model/CreateLootboxManager200Response.md)
- [CreateLootboxManagerRequest](docs/Model/CreateLootboxManagerRequest.md)
- [CreatePlayerRequest](docs/Model/CreatePlayerRequest.md)
- [CreateProfilePlayerRequest](docs/Model/CreateProfilePlayerRequest.md)
- [CreateProfileRequest](docs/Model/CreateProfileRequest.md)
- [CreateShop200Response](docs/Model/CreateShop200Response.md)
- [CreateShopRequest](docs/Model/CreateShopRequest.md)
- [CreateWalletSignatureRequest](docs/Model/CreateWalletSignatureRequest.md)
- [CurrencyModel](docs/Model/CurrencyModel.md)
- [EcosystemGameModel](docs/Model/EcosystemGameModel.md)
- [EcosystemModel](docs/Model/EcosystemModel.md)
- [GameModel](docs/Model/GameModel.md)
- [GetCollections200ResponseInner](docs/Model/GetCollections200ResponseInner.md)
- [GetCollections200ResponseInnerAllOf](docs/Model/GetCollections200ResponseInnerAllOf.md)
- [GetCurrencies200ResponseInner](docs/Model/GetCurrencies200ResponseInner.md)
- [GetCurrencyFees200Response](docs/Model/GetCurrencyFees200Response.md)
- [GetLootboxManagers200ResponseInner](docs/Model/GetLootboxManagers200ResponseInner.md)
- [GetPlayerData200Response](docs/Model/GetPlayerData200Response.md)
- [GetProfileGames200ResponseInner](docs/Model/GetProfileGames200ResponseInner.md)
- [GetShops200ResponseInner](docs/Model/GetShops200ResponseInner.md)
- [GrantCollectionRoleRequest](docs/Model/GrantCollectionRoleRequest.md)
- [GrantCurrencyRoleRequest](docs/Model/GrantCurrencyRoleRequest.md)
- [LootboxManagerLootbox](docs/Model/LootboxManagerLootbox.md)
- [LootboxManagerModel](docs/Model/LootboxManagerModel.md)
- [MintCollectionItemRequest](docs/Model/MintCollectionItemRequest.md)
- [MintCurrencyRequest](docs/Model/MintCurrencyRequest.md)
- [PlayerModel](docs/Model/PlayerModel.md)
- [ProfileModel](docs/Model/ProfileModel.md)
- [ProfilePermissionsValue](docs/Model/ProfilePermissionsValue.md)
- [PublicEcosystem](docs/Model/PublicEcosystem.md)
- [PublicGame](docs/Model/PublicGame.md)
- [PublicPlayer](docs/Model/PublicPlayer.md)
- [PublicPlayerCustodialWallet](docs/Model/PublicPlayerCustodialWallet.md)
- [PublicProfile](docs/Model/PublicProfile.md)
- [RemovePlayerConnectedWalletRequest](docs/Model/RemovePlayerConnectedWalletRequest.md)
- [RevokeCollectionRoleRequest](docs/Model/RevokeCollectionRoleRequest.md)
- [SetCollectionApprovalRequest](docs/Model/SetCollectionApprovalRequest.md)
- [SetCollectionItemTimelockRequest](docs/Model/SetCollectionItemTimelockRequest.md)
- [SetCurrencyFeesRequest](docs/Model/SetCurrencyFeesRequest.md)
- [SetLootboxManagerLootboxRequest](docs/Model/SetLootboxManagerLootboxRequest.md)
- [SetPlayerConnectedWallet200Response](docs/Model/SetPlayerConnectedWallet200Response.md)
- [SetPlayerConnectedWalletRequest](docs/Model/SetPlayerConnectedWalletRequest.md)
- [SetPlayerDataRequest](docs/Model/SetPlayerDataRequest.md)
- [SetShopOfferRequest](docs/Model/SetShopOfferRequest.md)
- [ShopModel](docs/Model/ShopModel.md)
- [ShopOffer](docs/Model/ShopOffer.md)
- [TransactionModel](docs/Model/TransactionModel.md)
- [TransferCollectionItemRequest](docs/Model/TransferCollectionItemRequest.md)
- [TransferContractOwnershipRequest](docs/Model/TransferContractOwnershipRequest.md)
- [TransferCurrencyRequest](docs/Model/TransferCurrencyRequest.md)
- [UpdateEcosystemRequest](docs/Model/UpdateEcosystemRequest.md)
- [UpdateGame200Response](docs/Model/UpdateGame200Response.md)
- [UpdateGame200ResponseAllOf](docs/Model/UpdateGame200ResponseAllOf.md)
- [UpdateGameRequest](docs/Model/UpdateGameRequest.md)
- [UpdatePlayer200Response](docs/Model/UpdatePlayer200Response.md)
- [UpdatePlayerRequest](docs/Model/UpdatePlayerRequest.md)
- [UpdateProfilePlayer200Response](docs/Model/UpdateProfilePlayer200Response.md)
- [UpdateProfilePlayer200ResponseAllOf](docs/Model/UpdateProfilePlayer200ResponseAllOf.md)
- [UpdateProfilePlayerRequest](docs/Model/UpdateProfilePlayerRequest.md)
- [UpdateProfileRequest](docs/Model/UpdateProfileRequest.md)
- [UpgradeContractTrustedForwarderRequest](docs/Model/UpgradeContractTrustedForwarderRequest.md)
- [WalletModel](docs/Model/WalletModel.md)
- [WithdrawFromShopRequest](docs/Model/WithdrawFromShopRequest.md)
- [WriteContractRequest](docs/Model/WriteContractRequest.md)
- [WriteContractRequestArgsInner](docs/Model/WriteContractRequestArgsInner.md)

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

- API version: `1.5.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
