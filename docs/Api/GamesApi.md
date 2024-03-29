# MetaFab\GamesApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authGame()**](GamesApi.md#authGame) | **GET** /v1/games/auth | Authenticate game |
| [**createGame()**](GamesApi.md#createGame) | **POST** /v1/games | Create game |
| [**getGame()**](GamesApi.md#getGame) | **GET** /v1/games/{gameId} | Get game |
| [**updateGame()**](GamesApi.md#updateGame) | **PATCH** /v1/games/{gameId} | Update game |


## `authGame()`

```php
authGame(): \MetaFab\Model\AuthGame200Response
```

Authenticate game

Returns an existing game object containing authorization keys and credentials when provided a valid email (in place of username) and password login using Basic Auth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MetaFab\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MetaFab\Api\GamesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authGame();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamesApi->authGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MetaFab\Model\AuthGame200Response**](../Model/AuthGame200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGame()`

```php
createGame($create_game_request): \MetaFab\Model\AuthGame200Response
```

Create game

Create a new game. A game is the root entity required for all API interactions. Contracts, currencies, items and more are deployed by games, player accounts are created and registered to games, etc.  To use any of MetaFab's services, you must first create a game through this endpoint.  After creating your game through this endpoint, a verification email will be sent to the email address used. Before you can access any of MetaFab's features, you'll need to click the link contained in the verification email to verify your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\GamesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_game_request = new \MetaFab\Model\CreateGameRequest(); // \MetaFab\Model\CreateGameRequest

try {
    $result = $apiInstance->createGame($create_game_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamesApi->createGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_game_request** | [**\MetaFab\Model\CreateGameRequest**](../Model/CreateGameRequest.md)|  | |

### Return type

[**\MetaFab\Model\AuthGame200Response**](../Model/AuthGame200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGame()`

```php
getGame($game_id): \MetaFab\Model\PublicGame
```

Get game

Returns a game object for the provided game id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\GamesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$game_id = 'game_id_example'; // string | Any game id within the MetaFab platform.

try {
    $result = $apiInstance->getGame($game_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamesApi->getGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **game_id** | **string**| Any game id within the MetaFab platform. | |

### Return type

[**\MetaFab\Model\PublicGame**](../Model/PublicGame.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGame()`

```php
updateGame($game_id, $x_authorization, $update_game_request): \MetaFab\Model\UpdateGame200Response
```

Update game

Update various fields specific to a game. Such as changing its password, resetting its published or secret key, or updating its RPCs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\GamesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$game_id = 'game_id_example'; // string | The game id of the authenticating game.
$x_authorization = game_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating game.
$update_game_request = new \MetaFab\Model\UpdateGameRequest(); // \MetaFab\Model\UpdateGameRequest

try {
    $result = $apiInstance->updateGame($game_id, $x_authorization, $update_game_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GamesApi->updateGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **game_id** | **string**| The game id of the authenticating game. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating game. | |
| **update_game_request** | [**\MetaFab\Model\UpdateGameRequest**](../Model/UpdateGameRequest.md)|  | |

### Return type

[**\MetaFab\Model\UpdateGame200Response**](../Model/UpdateGame200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
