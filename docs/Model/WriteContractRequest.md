# # WriteContractRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**func** | **string** | A contract function name. This can be any valid function from the the ABI of the contract you are interacting with. For example, &#x60;mint&#x60;. |
**args** | [**\MetaFab\Model\WriteContractRequestArgsInner[]**](WriteContractRequestArgsInner.md) | An array of args. This is optional and only necessary if the function being invoked requires arguments per the contract ABI. For example, &#x60;[123, \&quot;Hello\&quot;, false]&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
