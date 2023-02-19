# # ProfilePermissionsValue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The target chain for the contract and related permissions. | [optional]
**scopes** | **string[]** | An optional array of valid permissioning scopes. | [optional]
**functions** | **string[]** | An optional array of contract functions to request permission for. | [optional]
**erc20_limit** | **int** | A maximum lifetime limit of erc20 that can be tranferred for this contract address. | [optional]
**erc1155_limits** | **array<string,int>** | An object mapping erc1155 ids to maximum lifetime transfer limits of each permitted item id supplied for this contract address. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
