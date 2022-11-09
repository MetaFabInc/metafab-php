# MetaFab\PlayersApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authPlayer()**](PlayersApi.md#authPlayer) | **GET** /v1/players/auth | Authenticate player |
| [**createPlayer()**](PlayersApi.md#createPlayer) | **POST** /v1/players | Create player |
| [**getPlayer()**](PlayersApi.md#getPlayer) | **GET** /v1/players/{playerId} | Get player |
| [**getPlayerData()**](PlayersApi.md#getPlayerData) | **GET** /v1/players/{playerId}/data | Get player data |
| [**getPlayers()**](PlayersApi.md#getPlayers) | **GET** /v1/players | Get players |
| [**setPlayerData()**](PlayersApi.md#setPlayerData) | **POST** /v1/players/{playerId}/data | Set player data |
| [**updatePlayer()**](PlayersApi.md#updatePlayer) | **PATCH** /v1/players/{playerId} | Update player |


## `authPlayer()`

```php
authPlayer($x_game_key): \MetaFab\Model\AuthPlayer200Response
```

Authenticate player

Returns an existing player object containing access token, wallet, and other details for a game when provided a valid username and password login using Basic Auth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MetaFab\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MetaFab\Api\PlayersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_game_key = game_pk_4SOqpDi8pQdnQgfCOBW29qR8YmwOhxVPz5iHoMgUEJLDdPXgwLuHqZf8ewo2GajZ; // string | The `publishedKey` of a specific game. This can be shared or included in game clients, websites, etc.

try {
    $result = $apiInstance->authPlayer($x_game_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayersApi->authPlayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_game_key** | **string**| The &#x60;publishedKey&#x60; of a specific game. This can be shared or included in game clients, websites, etc. | |

### Return type

[**\MetaFab\Model\AuthPlayer200Response**](../Model/AuthPlayer200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPlayer()`

```php
createPlayer($x_game_key, $create_player_request): \MetaFab\Model\AuthPlayer200Response
```

Create player

Create a new player for a game. Players are automatically associated with an internally managed wallet.  Player access tokens can be used to directly interact with any MetaFab managed contracts, currencies, items collections, marketplaces and more. Player interactions are also gasless by default, completely removing all crypto friction for players to engage with your MetaFab supported games.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\PlayersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_game_key = game_pk_4SOqpDi8pQdnQgfCOBW29qR8YmwOhxVPz5iHoMgUEJLDdPXgwLuHqZf8ewo2GajZ; // string | The `publishedKey` of a specific game. This can be shared or included in game clients, websites, etc.
$create_player_request = new \MetaFab\Model\CreatePlayerRequest(); // \MetaFab\Model\CreatePlayerRequest

try {
    $result = $apiInstance->createPlayer($x_game_key, $create_player_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayersApi->createPlayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_game_key** | **string**| The &#x60;publishedKey&#x60; of a specific game. This can be shared or included in game clients, websites, etc. | |
| **create_player_request** | [**\MetaFab\Model\CreatePlayerRequest**](../Model/CreatePlayerRequest.md)|  | |

### Return type

[**\MetaFab\Model\AuthPlayer200Response**](../Model/AuthPlayer200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlayer()`

```php
getPlayer($player_id): \MetaFab\Model\PublicPlayer
```

Get player

Returns a player object for the provided player id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\PlayersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$player_id = 'player_id_example'; // string | Any player id within the MetaFab ecosystem.

try {
    $result = $apiInstance->getPlayer($player_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayersApi->getPlayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **player_id** | **string**| Any player id within the MetaFab ecosystem. | |

### Return type

[**\MetaFab\Model\PublicPlayer**](../Model/PublicPlayer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlayerData()`

```php
getPlayerData($player_id): \MetaFab\Model\GetPlayerData200Response
```

Get player data

Returns the latest public and protected data as an object for the provided playerId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\PlayersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$player_id = 'player_id_example'; // string | Any player id within the MetaFab ecosystem.

try {
    $result = $apiInstance->getPlayerData($player_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayersApi->getPlayerData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **player_id** | **string**| Any player id within the MetaFab ecosystem. | |

### Return type

[**\MetaFab\Model\GetPlayerData200Response**](../Model/GetPlayerData200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlayers()`

```php
getPlayers($x_authorization): \MetaFab\Model\PublicPlayer[]
```

Get players

Returns all players for the authenticated game as an array of player objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\PlayersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.

try {
    $result = $apiInstance->getPlayers($x_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayersApi->getPlayers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |

### Return type

[**\MetaFab\Model\PublicPlayer[]**](../Model/PublicPlayer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPlayerData()`

```php
setPlayerData($player_id, $x_authorization, $set_player_data_request): \MetaFab\Model\GetPlayerData200Response
```

Set player data

Creates or updates public and/or protected data for the provided playerId. Data updates are performed using deep merging. This means that when you update any top level or nested properties specific to player public or protected data, you only need to include the properties you are making changes to. Any existing properties not included in request body arguments will be retained on the player data object.  Please note, When writing an array type for a player, arrays do not follow the deep merge approach. If you add or remove an item from an array, the entire array must be passed as an argument when updating the related property for player public or protected data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\PlayersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$player_id = 'player_id_example'; // string | Any player id within the MetaFab ecosystem.
$x_authorization = ["game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP","player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP"]; // string | The `secretKey` of a specific game or the `accessToken` of a specific player.
$set_player_data_request = new \MetaFab\Model\SetPlayerDataRequest(); // \MetaFab\Model\SetPlayerDataRequest

try {
    $result = $apiInstance->setPlayerData($player_id, $x_authorization, $set_player_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayersApi->setPlayerData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **player_id** | **string**| Any player id within the MetaFab ecosystem. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of a specific game or the &#x60;accessToken&#x60; of a specific player. | |
| **set_player_data_request** | [**\MetaFab\Model\SetPlayerDataRequest**](../Model/SetPlayerDataRequest.md)|  | |

### Return type

[**\MetaFab\Model\GetPlayerData200Response**](../Model/GetPlayerData200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlayer()`

```php
updatePlayer($player_id, $x_authorization, $update_player_request): \MetaFab\Model\PlayerModel
```

Update player

Update various fields specific to a player. Such as changing its password and resetting its access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\PlayersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$player_id = 'player_id_example'; // string | Any player id within the MetaFab ecosystem.
$x_authorization = player_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `accessToken` of the authenticating player.
$update_player_request = new \MetaFab\Model\UpdatePlayerRequest(); // \MetaFab\Model\UpdatePlayerRequest

try {
    $result = $apiInstance->updatePlayer($player_id, $x_authorization, $update_player_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayersApi->updatePlayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **player_id** | **string**| Any player id within the MetaFab ecosystem. | |
| **x_authorization** | **string**| The &#x60;accessToken&#x60; of the authenticating player. | |
| **update_player_request** | [**\MetaFab\Model\UpdatePlayerRequest**](../Model/UpdatePlayerRequest.md)|  | |

### Return type

[**\MetaFab\Model\PlayerModel**](../Model/PlayerModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
