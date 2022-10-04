# # UpdatePlayerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_password** | **string** | The player&#39;s current password. Must be provided if setting &#x60;newPassword&#x60;. | [optional]
**new_password** | **string** | A new password. The player&#39;s old password will no longer be valid. | [optional]
**reset_access_token** | **bool** | Revokes the player&#39;s previous access token and returns a new one if true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
