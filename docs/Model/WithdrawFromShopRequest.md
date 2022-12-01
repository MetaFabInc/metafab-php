# # WithdrawFromShopRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | A valid EVM based address to withdraw to. For example, &#x60;0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D&#x60;. | [optional]
**wallet_id** | **string** | Any wallet id within the MetaFab ecosystem to withdraw to. | [optional]
**currency_address** | **string** | The address of the currency (ERC20) token to withdraw from the shop. If no currencyAddress or currencyId, and no collectionAddress or collectionId are provided, the native token held by the shop will be withdrawn. | [optional]
**currency_id** | **string** | A valid MetaFab currency id that represents the currency token to withdraw from the shop. &#x60;currencyAddress&#x60; or &#x60;currencyId&#x60; can be provided when withdrawing currency. | [optional]
**collection_address** | **string** | The address of the collection (ERC1155) for the items to withdraw from the shop. If no currencyAddress and no collectionAddress is provided, the native token held by the shop will be withdrawn. | [optional]
**collection_id** | **string** | A valid MetaFab collection id that represents the collection for the items to withdraw from the shop. &#x60;collectionAddress&#x60; or &#x60;collectionId&#x60; can be provided when withdrawing items. | [optional]
**item_ids** | **int[]** | The specific itemIds of the provided collection to withdraw from the shop. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
