# # LootboxManagerLootbox

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The id of this lootbox. | [optional]
**input_collection** | **string** | The address of the ERC1155 or MetaFab game items contract for input items required by this lootbox. | [optional]
**input_collection_item_ids** | **int[]** | An array of item ids from the input collection that are required for this lootbox. | [optional]
**input_collection_item_amounts** | **int[]** | An array of amounts for each item id for the input collection that are required to open this lootbox. | [optional]
**output_collection** | **string** | The address of the ERC1155 of MetaFab game items contract for possible output items given by this lootbox. | [optional]
**output_collection_item_ids** | **int[]** | An array of item ids from the output collection that are possibly given by this lootbox. | [optional]
**output_collection_item_amounts** | **int[]** | An array of amounts for each item id for the output collection that are possibly given by this lootbox. | [optional]
**output_collection_item_weights** | **int[]** | An array of weights for each item id for the output collection that are possibly given by this lootbox. | [optional]
**output_total_items** | **int** | The number of items randomly selected when this lootbox is opened. | [optional]
**last_updated_at** | **int** | A unix timestamp in seconds that represents the last time this offer was set or updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
