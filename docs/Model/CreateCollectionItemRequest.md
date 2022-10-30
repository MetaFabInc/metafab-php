# # CreateCollectionItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **float** | A unique itemId to use for this item within the collection. If an existing itemId is used, the current metadata will be overriden. Any number may be used.  The terms &#x60;itemId&#x60; and &#x60;collectionItemId&#x60; are used interchangeably and equivalent to one another throughout MetaFab documentation. |
**name** | **string** | The name of this item. |
**description** | **string** | A text description of this item. This is a great spot to include lore, game mechanics and more related to this item. |
**image_base64** | **string** | A base64 string of the image for this item. Either &#x60;imageBase64&#x60; or &#x60;imageUrl&#x60; must be provided. Supported image formats are &#x60;jpg&#x60;, &#x60;jpeg&#x60;, &#x60;png&#x60;, &#x60;gif&#x60;. Recommended size of 1:1 aspect ratio and no more than 1500x1500 pixels. | [optional]
**image_url** | **string** | An external url that resolves to an image to use for this item. This can also be set to an ipfs:// uri. Recommended size of 1:1 aspect ratio and no more than 1500x1500 pixels. | [optional]
**external_url** | **string** | An optional URL where players can go to learn more about this item specifically, or your game, or any other link. | [optional]
**attributes** | [**\MetaFab\Model\CreateCollectionItemRequestAttributesInner[]**](CreateCollectionItemRequestAttributesInner.md) | An array of objects that conform with the [metadata attributes standard that can be found here](https://docs.opensea.io/docs/metadata-standards#attributes) | [optional]
**data** | **object** | An arbitrary object of data attached to the top level metadata object. This is useful for including data or resource URLs specific to your game. Such as URLs that point to 3D models, music files, bitmaps, or anything else you need to reference. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
