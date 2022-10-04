# MetaFab\PlayersApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authPlayer()**](PlayersApi.md#authPlayer) | **GET** /v1/players | Authenticate player |
| [**createPlayer()**](PlayersApi.md#createPlayer) | **POST** /v1/players | Create player |
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
