# MetaFab\EcosystemsApi

All URIs are relative to https://api.trymetafab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveEcosystemGame()**](EcosystemsApi.md#approveEcosystemGame) | **POST** /v1/ecosystems/{ecosystemId}/games | Approve ecosystem game |
| [**authEcosystem()**](EcosystemsApi.md#authEcosystem) | **GET** /v1/ecosystems/auth | Authenticate ecosystem |
| [**authProfile()**](EcosystemsApi.md#authProfile) | **GET** /v1/profiles/auth | Authenticate profile |
| [**authProfilePlayer()**](EcosystemsApi.md#authProfilePlayer) | **GET** /v1/profiles/{profileId}/games/{gameId}/players/auth | Authenticate profile player |
| [**createEcosystem()**](EcosystemsApi.md#createEcosystem) | **POST** /v1/ecosystems | Create ecosystem |
| [**createProfile()**](EcosystemsApi.md#createProfile) | **POST** /v1/profiles | Create profile |
| [**createProfilePlayer()**](EcosystemsApi.md#createProfilePlayer) | **POST** /v1/profiles/{profileId}/games/{gameId}/players | Create profile player |
| [**getEcosystem()**](EcosystemsApi.md#getEcosystem) | **GET** /v1/ecosystems/{ecosystemId} | Get ecosystem |
| [**getEcosystemGame()**](EcosystemsApi.md#getEcosystemGame) | **GET** /v1/ecosystems/{ecosystemId}/games/{gameId} | Get ecosystem game |
| [**getEcosystemGames()**](EcosystemsApi.md#getEcosystemGames) | **GET** /v1/ecosystems/{ecosystemId}/games | Get ecosystem games |
| [**getProfileGame()**](EcosystemsApi.md#getProfileGame) | **GET** /v1/profiles/{profileId}/games/{gameId} | Get profile game |
| [**getProfileGames()**](EcosystemsApi.md#getProfileGames) | **GET** /v1/profiles/{profileId}/games | Get profile games |
| [**unapproveEcosystemGame()**](EcosystemsApi.md#unapproveEcosystemGame) | **DELETE** /v1/ecosystems/{ecosystemId}/games/{gameId} | Unapprove ecosystem game |
| [**updateEcosystem()**](EcosystemsApi.md#updateEcosystem) | **PATCH** /v1/ecosystems/{ecosystemId} | Update ecosystem |
| [**updateProfile()**](EcosystemsApi.md#updateProfile) | **PATCH** /v1/profiles/{profileId} | Update profile |
| [**updateProfilePlayer()**](EcosystemsApi.md#updateProfilePlayer) | **PATCH** /v1/profiles/{profileId}/games/{gameId}/players/{playerId} | Update profile player |


## `approveEcosystemGame()`

```php
approveEcosystemGame($ecosystem_id, $x_authorization, $approve_ecosystem_game_request)
```

Approve ecosystem game

Approves a game for an ecosystem. By approving a game, it allows that game to integrate the ability for profile accounts from an ecosystem to login directly to the approved game and play. This also allows games to request access to assets held at the profile level for the game to frictionlessly interact with on behalf of the profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ecosystem_id = 'ecosystem_id_example'; // string | The ecosystem id of the authenticating ecosystem.
$x_authorization = ecosystem_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating ecosystem.
$approve_ecosystem_game_request = new \MetaFab\Model\ApproveEcosystemGameRequest(); // \MetaFab\Model\ApproveEcosystemGameRequest

try {
    $apiInstance->approveEcosystemGame($ecosystem_id, $x_authorization, $approve_ecosystem_game_request);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->approveEcosystemGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ecosystem_id** | **string**| The ecosystem id of the authenticating ecosystem. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating ecosystem. | |
| **approve_ecosystem_game_request** | [**\MetaFab\Model\ApproveEcosystemGameRequest**](../Model/ApproveEcosystemGameRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authEcosystem()`

```php
authEcosystem(): \MetaFab\Model\EcosystemModel
```

Authenticate ecosystem

Returns an existing ecosystem object containing authorization keys when provided a valid email (in place of username) and password login using Basic Auth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MetaFab\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authEcosystem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->authEcosystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MetaFab\Model\EcosystemModel**](../Model/EcosystemModel.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authProfile()`

```php
authProfile($x_ecosystem_key): \MetaFab\Model\AuthProfile200Response
```

Authenticate profile

Returns an existing profile object containing access token, wallet, and other details when provided a valid profile username and password login using Basic Auth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = MetaFab\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ecosystem_key = ecosystem_pk_a5sFpDi8pQdnQgfCOBW29qR8YmwOhxVPz5iHoMgUEJLDdPXgwLuHqZf8ewo2GajZ; // string | The `publishedKey` of a specific ecosystem. This can be shared or included in clients, websites, etc.

try {
    $result = $apiInstance->authProfile($x_ecosystem_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->authProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_ecosystem_key** | **string**| The &#x60;publishedKey&#x60; of a specific ecosystem. This can be shared or included in clients, websites, etc. | |

### Return type

[**\MetaFab\Model\AuthProfile200Response**](../Model/AuthProfile200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authProfilePlayer()`

```php
authProfilePlayer($profile_id, $game_id, $x_authorization, $x_wallet_decrypt_key, $x_username): \MetaFab\Model\AuthPlayer200Response
```

Authenticate profile player

Returns an existing player object containing access token, wallet, wallet decrypt key, profile authorization and other details for a game when provided profile authentication and the player's username.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = 'profile_id_example'; // string | The profile id of the authenticating profile.
$game_id = 'game_id_example'; // string | Any game id within the MetaFab platform.
$x_authorization = profile_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `accessToken` of the authenticating profile.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating profile. Required to decrypt and perform blockchain transactions with the profile wallet.
$x_username = arkdev; // string | The username of a player.

try {
    $result = $apiInstance->authProfilePlayer($profile_id, $game_id, $x_authorization, $x_wallet_decrypt_key, $x_username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->authProfilePlayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The profile id of the authenticating profile. | |
| **game_id** | **string**| Any game id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;accessToken&#x60; of the authenticating profile. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating profile. Required to decrypt and perform blockchain transactions with the profile wallet. | |
| **x_username** | **string**| The username of a player. | |

### Return type

[**\MetaFab\Model\AuthPlayer200Response**](../Model/AuthPlayer200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEcosystem()`

```php
createEcosystem($create_ecosystem_request): \MetaFab\Model\EcosystemModel
```

Create ecosystem

Create a new ecosystem. An ecosystem is a parent entity that many profiles live under for a given ecosystem of games. Ecosystems allow your players to create one profile within your ecosystem that allows a single account and wallet to be used across all of the approved games in your ecosystem that they play.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_ecosystem_request = new \MetaFab\Model\CreateEcosystemRequest(); // \MetaFab\Model\CreateEcosystemRequest

try {
    $result = $apiInstance->createEcosystem($create_ecosystem_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->createEcosystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ecosystem_request** | [**\MetaFab\Model\CreateEcosystemRequest**](../Model/CreateEcosystemRequest.md)|  | |

### Return type

[**\MetaFab\Model\EcosystemModel**](../Model/EcosystemModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProfile()`

```php
createProfile($x_ecosystem_key, $create_profile_request): \MetaFab\Model\AuthProfile200Response
```

Create profile

Create a new profile. Profiles are automatically associated with an internally managed wallet. Profiles can be thought of as a umbrella account that can be used to sign into and create player accounts across many games and have a singular asset store wallet at the profile level that can be used across all connected player accounts for games those player accounts are a part of.  Profiles are associated to a parent ecosystem of games. This allows an ecosystem to approve a permissioned set of games that can request authorized wallet permissions from profiles of players for their game.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_ecosystem_key = ecosystem_pk_a5sFpDi8pQdnQgfCOBW29qR8YmwOhxVPz5iHoMgUEJLDdPXgwLuHqZf8ewo2GajZ; // string | The `publishedKey` of a specific ecosystem. This can be shared or included in clients, websites, etc.
$create_profile_request = new \MetaFab\Model\CreateProfileRequest(); // \MetaFab\Model\CreateProfileRequest

try {
    $result = $apiInstance->createProfile($x_ecosystem_key, $create_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->createProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_ecosystem_key** | **string**| The &#x60;publishedKey&#x60; of a specific ecosystem. This can be shared or included in clients, websites, etc. | |
| **create_profile_request** | [**\MetaFab\Model\CreateProfileRequest**](../Model/CreateProfileRequest.md)|  | |

### Return type

[**\MetaFab\Model\AuthProfile200Response**](../Model/AuthProfile200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProfilePlayer()`

```php
createProfilePlayer($profile_id, $game_id, $x_authorization, $x_wallet_decrypt_key, $create_profile_player_request): \MetaFab\Model\AuthPlayer200Response
```

Create profile player

Creates a new player account for the provided game id linked to the authenticating profile. The created player account will default to using the parent profile's wallet for any transactions, wallet content balance checks and verifications, and more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = 'profile_id_example'; // string | The profile id of the authenticating profile.
$game_id = 'game_id_example'; // string | Any game id within the MetaFab platform.
$x_authorization = profile_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `accessToken` of the authenticating profile.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating profile. Required to decrypt and perform blockchain transactions with the profile wallet.
$create_profile_player_request = new \MetaFab\Model\CreateProfilePlayerRequest(); // \MetaFab\Model\CreateProfilePlayerRequest

try {
    $result = $apiInstance->createProfilePlayer($profile_id, $game_id, $x_authorization, $x_wallet_decrypt_key, $create_profile_player_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->createProfilePlayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The profile id of the authenticating profile. | |
| **game_id** | **string**| Any game id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;accessToken&#x60; of the authenticating profile. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating profile. Required to decrypt and perform blockchain transactions with the profile wallet. | |
| **create_profile_player_request** | [**\MetaFab\Model\CreateProfilePlayerRequest**](../Model/CreateProfilePlayerRequest.md)|  | |

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

## `getEcosystem()`

```php
getEcosystem($ecosystem_id): \MetaFab\Model\PublicEcosystem
```

Get ecosystem

Returns a ecosystem object for the provided ecosystem id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ecosystem_id = 'ecosystem_id_example'; // string | Any ecosystem id within the MetaFab platform.

try {
    $result = $apiInstance->getEcosystem($ecosystem_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->getEcosystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ecosystem_id** | **string**| Any ecosystem id within the MetaFab platform. | |

### Return type

[**\MetaFab\Model\PublicEcosystem**](../Model/PublicEcosystem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEcosystemGame()`

```php
getEcosystemGame($ecosystem_id, $game_id): \MetaFab\Model\PublicGame
```

Get ecosystem game

Returns a game object for the provided game id that the ecosystem has approved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ecosystem_id = 'ecosystem_id_example'; // string | Any ecosystem id within the MetaFab platform.
$game_id = 'game_id_example'; // string | Any game id within the MetaFab platform.

try {
    $result = $apiInstance->getEcosystemGame($ecosystem_id, $game_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->getEcosystemGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ecosystem_id** | **string**| Any ecosystem id within the MetaFab platform. | |
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

## `getEcosystemGames()`

```php
getEcosystemGames($ecosystem_id): \MetaFab\Model\PublicGame[]
```

Get ecosystem games

Returns an array of games the ecosystem has approved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ecosystem_id = 'ecosystem_id_example'; // string | Any ecosystem id within the MetaFab platform.

try {
    $result = $apiInstance->getEcosystemGames($ecosystem_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->getEcosystemGames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ecosystem_id** | **string**| Any ecosystem id within the MetaFab platform. | |

### Return type

[**\MetaFab\Model\PublicGame[]**](../Model/PublicGame.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfileGame()`

```php
getProfileGame($profile_id, $game_id, $x_authorization): \MetaFab\Model\GetProfileGames200ResponseInner
```

Get profile game

Returns a game this profile has connected player accounts for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = 'profile_id_example'; // string | The profile id of the authenticating profile.
$game_id = 'game_id_example'; // string | Any game id within the MetaFab platform.
$x_authorization = profile_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `accessToken` of the authenticating profile.

try {
    $result = $apiInstance->getProfileGame($profile_id, $game_id, $x_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->getProfileGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The profile id of the authenticating profile. | |
| **game_id** | **string**| Any game id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;accessToken&#x60; of the authenticating profile. | |

### Return type

[**\MetaFab\Model\GetProfileGames200ResponseInner**](../Model/GetProfileGames200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfileGames()`

```php
getProfileGames($profile_id, $x_authorization): \MetaFab\Model\GetProfileGames200ResponseInner[]
```

Get profile games

Returns an array of games the authorized profile has connected player accounts for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = 'profile_id_example'; // string | The profile id of the authenticating profile.
$x_authorization = profile_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `accessToken` of the authenticating profile.

try {
    $result = $apiInstance->getProfileGames($profile_id, $x_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->getProfileGames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The profile id of the authenticating profile. | |
| **x_authorization** | **string**| The &#x60;accessToken&#x60; of the authenticating profile. | |

### Return type

[**\MetaFab\Model\GetProfileGames200ResponseInner[]**](../Model/GetProfileGames200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unapproveEcosystemGame()`

```php
unapproveEcosystemGame($ecosystem_id, $game_id, $x_authorization)
```

Unapprove ecosystem game

Unapproves a game for an ecosystem. The game will no longer be able to allow profiles from the ecosystem to login. All profile permissions approved for the game will also be revoked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ecosystem_id = 'ecosystem_id_example'; // string | The ecosystem id of the authenticating ecosystem.
$game_id = 'game_id_example'; // string | Any game id within the MetaFab platform.
$x_authorization = ecosystem_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating ecosystem.

try {
    $apiInstance->unapproveEcosystemGame($ecosystem_id, $game_id, $x_authorization);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->unapproveEcosystemGame: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ecosystem_id** | **string**| The ecosystem id of the authenticating ecosystem. | |
| **game_id** | **string**| Any game id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating ecosystem. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEcosystem()`

```php
updateEcosystem($ecosystem_id, $x_authorization, $update_ecosystem_request): \MetaFab\Model\EcosystemModel
```

Update ecosystem

Update various fields specific to an ecosystem. Such as changing its password, resetting its published or secret key, or updating its approved games.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ecosystem_id = 'ecosystem_id_example'; // string | The ecosystem id of the authenticating ecosystem.
$x_authorization = ecosystem_sk_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `secretKey` of the authenticating ecosystem.
$update_ecosystem_request = new \MetaFab\Model\UpdateEcosystemRequest(); // \MetaFab\Model\UpdateEcosystemRequest

try {
    $result = $apiInstance->updateEcosystem($ecosystem_id, $x_authorization, $update_ecosystem_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->updateEcosystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ecosystem_id** | **string**| The ecosystem id of the authenticating ecosystem. | |
| **x_authorization** | **string**| The &#x60;secretKey&#x60; of the authenticating ecosystem. | |
| **update_ecosystem_request** | [**\MetaFab\Model\UpdateEcosystemRequest**](../Model/UpdateEcosystemRequest.md)|  | |

### Return type

[**\MetaFab\Model\EcosystemModel**](../Model/EcosystemModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProfile()`

```php
updateProfile($profile_id, $x_authorization, $update_profile_request): \MetaFab\Model\ProfileModel
```

Update profile

Update various fields specific to a profile. Such as changing its password and resetting its access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = 'profile_id_example'; // string | The profile id of the authenticating profile.
$x_authorization = profile_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `accessToken` of the authenticating profile.
$update_profile_request = new \MetaFab\Model\UpdateProfileRequest(); // \MetaFab\Model\UpdateProfileRequest

try {
    $result = $apiInstance->updateProfile($profile_id, $x_authorization, $update_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->updateProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The profile id of the authenticating profile. | |
| **x_authorization** | **string**| The &#x60;accessToken&#x60; of the authenticating profile. | |
| **update_profile_request** | [**\MetaFab\Model\UpdateProfileRequest**](../Model/UpdateProfileRequest.md)|  | |

### Return type

[**\MetaFab\Model\ProfileModel**](../Model/ProfileModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProfilePlayer()`

```php
updateProfilePlayer($profile_id, $game_id, $player_id, $x_authorization, $x_wallet_decrypt_key, $update_profile_player_request): \MetaFab\Model\UpdateProfilePlayer200Response
```

Update profile player

Update various fields specific to a player. Such as changing its permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MetaFab\Api\EcosystemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_id = 'profile_id_example'; // string | The profile id of the authenticating profile.
$game_id = 'game_id_example'; // string | Any game id within the MetaFab platform.
$player_id = 'player_id_example'; // string | Any player id within the MetaFab platform.
$x_authorization = profile_at_02z4Mv3c85Ig0gNowY9Dq0N2kjb1xwzr27ArLE0669RrRI6dLf822iPO26K1p1FP; // string | The `accessToken` of the authenticating profile.
$x_wallet_decrypt_key = AXNP8MKb+5SbBtHWrZu5KHh5/BomXY/dMRG/BDUn7a4=; // string | The `walletDecryptKey` of the authenticating profile. Required to decrypt and perform blockchain transactions with the profile wallet.
$update_profile_player_request = new \MetaFab\Model\UpdateProfilePlayerRequest(); // \MetaFab\Model\UpdateProfilePlayerRequest

try {
    $result = $apiInstance->updateProfilePlayer($profile_id, $game_id, $player_id, $x_authorization, $x_wallet_decrypt_key, $update_profile_player_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EcosystemsApi->updateProfilePlayer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| The profile id of the authenticating profile. | |
| **game_id** | **string**| Any game id within the MetaFab platform. | |
| **player_id** | **string**| Any player id within the MetaFab platform. | |
| **x_authorization** | **string**| The &#x60;accessToken&#x60; of the authenticating profile. | |
| **x_wallet_decrypt_key** | **string**| The &#x60;walletDecryptKey&#x60; of the authenticating profile. Required to decrypt and perform blockchain transactions with the profile wallet. | |
| **update_profile_player_request** | [**\MetaFab\Model\UpdateProfilePlayerRequest**](../Model/UpdateProfilePlayerRequest.md)|  | |

### Return type

[**\MetaFab\Model\UpdateProfilePlayer200Response**](../Model/UpdateProfilePlayer200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
