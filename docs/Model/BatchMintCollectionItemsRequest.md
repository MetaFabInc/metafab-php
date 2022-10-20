# # BatchMintCollectionItemsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | A valid EVM based address to create (mint) the items for. For example, &#x60;0x39cb70F972E0EE920088AeF97Dbe5c6251a9c25D&#x60;. | [optional]
**item_ids** | **float[]** | An array of unique itemIds to create (mint). |
**quantities** | **float[]** | An array of the quantities of each of the unique itemIds provided to create (mint). The quantity of each itemId in itemIds should be at the same index as the specific itemId in the itemIds array. For example, quantities[2] defines the quantity to mint for itemIds[2], etc. |
**wallet_id** | **string** | Any wallet id within the MetaFab ecosystem to create (mint) the items for. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
