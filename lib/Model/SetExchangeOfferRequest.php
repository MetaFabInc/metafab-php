<?php
/**
 * SetExchangeOfferRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MetaFab
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MetaFab API
 *
 * Complete MetaFab API references and guides can be found at: https://trymetafab.com
 *
 * The version of the OpenAPI document: 1.1.43
 * Contact: metafabproject@gmail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MetaFab\Model;

use \ArrayAccess;
use \MetaFab\ObjectSerializer;

/**
 * SetExchangeOfferRequest Class Doc Comment
 *
 * @category Class
 * @package  MetaFab
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SetExchangeOfferRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'setExchangeOffer_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'input_collection_address' => 'string',
        'input_collection_id' => 'string',
        'input_collection_item_ids' => 'float[]',
        'input_collection_item_amounts' => 'float[]',
        'input_currency_address' => 'string',
        'input_currency_id' => 'string',
        'input_currency_amount' => 'float',
        'output_collection_address' => 'string',
        'output_collection_id' => 'string',
        'output_collection_item_ids' => 'float[]',
        'output_collection_item_amounts' => 'float[]',
        'output_currency_address' => 'string',
        'output_currency_id' => 'string',
        'output_currency_amount' => 'float',
        'max_uses' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'input_collection_address' => null,
        'input_collection_id' => null,
        'input_collection_item_ids' => null,
        'input_collection_item_amounts' => null,
        'input_currency_address' => null,
        'input_currency_id' => null,
        'input_currency_amount' => null,
        'output_collection_address' => null,
        'output_collection_id' => null,
        'output_collection_item_ids' => null,
        'output_collection_item_amounts' => null,
        'output_currency_address' => null,
        'output_currency_id' => null,
        'output_currency_amount' => null,
        'max_uses' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'input_collection_address' => false,
		'input_collection_id' => false,
		'input_collection_item_ids' => false,
		'input_collection_item_amounts' => false,
		'input_currency_address' => false,
		'input_currency_id' => false,
		'input_currency_amount' => false,
		'output_collection_address' => false,
		'output_collection_id' => false,
		'output_collection_item_ids' => false,
		'output_collection_item_amounts' => false,
		'output_currency_address' => false,
		'output_currency_id' => false,
		'output_currency_amount' => false,
		'max_uses' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'input_collection_address' => 'inputCollectionAddress',
        'input_collection_id' => 'inputCollectionId',
        'input_collection_item_ids' => 'inputCollectionItemIds',
        'input_collection_item_amounts' => 'inputCollectionItemAmounts',
        'input_currency_address' => 'inputCurrencyAddress',
        'input_currency_id' => 'inputCurrencyId',
        'input_currency_amount' => 'inputCurrencyAmount',
        'output_collection_address' => 'outputCollectionAddress',
        'output_collection_id' => 'outputCollectionId',
        'output_collection_item_ids' => 'outputCollectionItemIds',
        'output_collection_item_amounts' => 'outputCollectionItemAmounts',
        'output_currency_address' => 'outputCurrencyAddress',
        'output_currency_id' => 'outputCurrencyId',
        'output_currency_amount' => 'outputCurrencyAmount',
        'max_uses' => 'maxUses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'input_collection_address' => 'setInputCollectionAddress',
        'input_collection_id' => 'setInputCollectionId',
        'input_collection_item_ids' => 'setInputCollectionItemIds',
        'input_collection_item_amounts' => 'setInputCollectionItemAmounts',
        'input_currency_address' => 'setInputCurrencyAddress',
        'input_currency_id' => 'setInputCurrencyId',
        'input_currency_amount' => 'setInputCurrencyAmount',
        'output_collection_address' => 'setOutputCollectionAddress',
        'output_collection_id' => 'setOutputCollectionId',
        'output_collection_item_ids' => 'setOutputCollectionItemIds',
        'output_collection_item_amounts' => 'setOutputCollectionItemAmounts',
        'output_currency_address' => 'setOutputCurrencyAddress',
        'output_currency_id' => 'setOutputCurrencyId',
        'output_currency_amount' => 'setOutputCurrencyAmount',
        'max_uses' => 'setMaxUses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'input_collection_address' => 'getInputCollectionAddress',
        'input_collection_id' => 'getInputCollectionId',
        'input_collection_item_ids' => 'getInputCollectionItemIds',
        'input_collection_item_amounts' => 'getInputCollectionItemAmounts',
        'input_currency_address' => 'getInputCurrencyAddress',
        'input_currency_id' => 'getInputCurrencyId',
        'input_currency_amount' => 'getInputCurrencyAmount',
        'output_collection_address' => 'getOutputCollectionAddress',
        'output_collection_id' => 'getOutputCollectionId',
        'output_collection_item_ids' => 'getOutputCollectionItemIds',
        'output_collection_item_amounts' => 'getOutputCollectionItemAmounts',
        'output_currency_address' => 'getOutputCurrencyAddress',
        'output_currency_id' => 'getOutputCurrencyId',
        'output_currency_amount' => 'getOutputCurrencyAmount',
        'max_uses' => 'getMaxUses'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('input_collection_address', $data ?? [], null);
        $this->setIfExists('input_collection_id', $data ?? [], null);
        $this->setIfExists('input_collection_item_ids', $data ?? [], null);
        $this->setIfExists('input_collection_item_amounts', $data ?? [], null);
        $this->setIfExists('input_currency_address', $data ?? [], null);
        $this->setIfExists('input_currency_id', $data ?? [], null);
        $this->setIfExists('input_currency_amount', $data ?? [], null);
        $this->setIfExists('output_collection_address', $data ?? [], null);
        $this->setIfExists('output_collection_id', $data ?? [], null);
        $this->setIfExists('output_collection_item_ids', $data ?? [], null);
        $this->setIfExists('output_collection_item_amounts', $data ?? [], null);
        $this->setIfExists('output_currency_address', $data ?? [], null);
        $this->setIfExists('output_currency_id', $data ?? [], null);
        $this->setIfExists('output_currency_amount', $data ?? [], null);
        $this->setIfExists('max_uses', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id A unique offer id to use for this offer for the exchange. If an existing offer id is used, the current offer will be updated but the existing number of uses will be kept. If you want to reset the number of uses for an existing offer, first remove it using the remove offer endpoint, then set it.
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets input_collection_address
     *
     * @return string|null
     */
    public function getInputCollectionAddress()
    {
        return $this->container['input_collection_address'];
    }

    /**
     * Sets input_collection_address
     *
     * @param string|null $input_collection_address A valid EVM based ERC1155 or MetaFab game items contract address that represents the collection for input items required by this offer. `inputCollectionAddress` or `inputCollectionId` can optionally be provided.
     *
     * @return self
     */
    public function setInputCollectionAddress($input_collection_address)
    {

        if (is_null($input_collection_address)) {
            throw new \InvalidArgumentException('non-nullable input_collection_address cannot be null');
        }

        $this->container['input_collection_address'] = $input_collection_address;

        return $this;
    }

    /**
     * Gets input_collection_id
     *
     * @return string|null
     */
    public function getInputCollectionId()
    {
        return $this->container['input_collection_id'];
    }

    /**
     * Sets input_collection_id
     *
     * @param string|null $input_collection_id A valid MetaFab collection id that represents the collection for input items required by this offer. `inputCollectionAddress` or `inputCollectionId` can optionally be provided.
     *
     * @return self
     */
    public function setInputCollectionId($input_collection_id)
    {

        if (is_null($input_collection_id)) {
            throw new \InvalidArgumentException('non-nullable input_collection_id cannot be null');
        }

        $this->container['input_collection_id'] = $input_collection_id;

        return $this;
    }

    /**
     * Gets input_collection_item_ids
     *
     * @return float[]|null
     */
    public function getInputCollectionItemIds()
    {
        return $this->container['input_collection_item_ids'];
    }

    /**
     * Sets input_collection_item_ids
     *
     * @param float[]|null $input_collection_item_ids An array of item ids from the provided input collection that are required to use this offer. Input items are transferred from the wallet to the exchange contract upon using an offer.
     *
     * @return self
     */
    public function setInputCollectionItemIds($input_collection_item_ids)
    {

        if (is_null($input_collection_item_ids)) {
            throw new \InvalidArgumentException('non-nullable input_collection_item_ids cannot be null');
        }

        $this->container['input_collection_item_ids'] = $input_collection_item_ids;

        return $this;
    }

    /**
     * Gets input_collection_item_amounts
     *
     * @return float[]|null
     */
    public function getInputCollectionItemAmounts()
    {
        return $this->container['input_collection_item_amounts'];
    }

    /**
     * Sets input_collection_item_amounts
     *
     * @param float[]|null $input_collection_item_amounts An array of amounts for each item id from the provided input collection that are required to use this offer. Item amounts array indices are reflective of the amount required for a given item id at the same index.
     *
     * @return self
     */
    public function setInputCollectionItemAmounts($input_collection_item_amounts)
    {

        if (is_null($input_collection_item_amounts)) {
            throw new \InvalidArgumentException('non-nullable input_collection_item_amounts cannot be null');
        }

        $this->container['input_collection_item_amounts'] = $input_collection_item_amounts;

        return $this;
    }

    /**
     * Gets input_currency_address
     *
     * @return string|null
     */
    public function getInputCurrencyAddress()
    {
        return $this->container['input_currency_address'];
    }

    /**
     * Sets input_currency_address
     *
     * @param string|null $input_currency_address A valid EVM based ERC20 or MetaFab game currency contract address that for the currency required by this offer.
     *
     * @return self
     */
    public function setInputCurrencyAddress($input_currency_address)
    {

        if (is_null($input_currency_address)) {
            throw new \InvalidArgumentException('non-nullable input_currency_address cannot be null');
        }

        $this->container['input_currency_address'] = $input_currency_address;

        return $this;
    }

    /**
     * Gets input_currency_id
     *
     * @return string|null
     */
    public function getInputCurrencyId()
    {
        return $this->container['input_currency_id'];
    }

    /**
     * Sets input_currency_id
     *
     * @param string|null $input_currency_id A valid MetaFab currency id that represents the currency required by this offer.
     *
     * @return self
     */
    public function setInputCurrencyId($input_currency_id)
    {

        if (is_null($input_currency_id)) {
            throw new \InvalidArgumentException('non-nullable input_currency_id cannot be null');
        }

        $this->container['input_currency_id'] = $input_currency_id;

        return $this;
    }

    /**
     * Gets input_currency_amount
     *
     * @return float|null
     */
    public function getInputCurrencyAmount()
    {
        return $this->container['input_currency_amount'];
    }

    /**
     * Sets input_currency_amount
     *
     * @param float|null $input_currency_amount The amount of currency required by this offer. If an inputCurrencyAmount is provided without in input currency address or id, the native chain currency is used as the required currency.
     *
     * @return self
     */
    public function setInputCurrencyAmount($input_currency_amount)
    {

        if (is_null($input_currency_amount)) {
            throw new \InvalidArgumentException('non-nullable input_currency_amount cannot be null');
        }

        $this->container['input_currency_amount'] = $input_currency_amount;

        return $this;
    }

    /**
     * Gets output_collection_address
     *
     * @return string|null
     */
    public function getOutputCollectionAddress()
    {
        return $this->container['output_collection_address'];
    }

    /**
     * Sets output_collection_address
     *
     * @param string|null $output_collection_address A valid EVM based ERC1155 or MetaFab game items contract address that represents the collection for output items given by this offer. `outputCollectionAddress` or `outputCollectionId` can optionally be provided.
     *
     * @return self
     */
    public function setOutputCollectionAddress($output_collection_address)
    {

        if (is_null($output_collection_address)) {
            throw new \InvalidArgumentException('non-nullable output_collection_address cannot be null');
        }

        $this->container['output_collection_address'] = $output_collection_address;

        return $this;
    }

    /**
     * Gets output_collection_id
     *
     * @return string|null
     */
    public function getOutputCollectionId()
    {
        return $this->container['output_collection_id'];
    }

    /**
     * Sets output_collection_id
     *
     * @param string|null $output_collection_id A valid MetaFab collection id that represents the collection for output items given by this offer. `outputCollectionAddress` or `outputCollectionId` can optionally be provided.
     *
     * @return self
     */
    public function setOutputCollectionId($output_collection_id)
    {

        if (is_null($output_collection_id)) {
            throw new \InvalidArgumentException('non-nullable output_collection_id cannot be null');
        }

        $this->container['output_collection_id'] = $output_collection_id;

        return $this;
    }

    /**
     * Gets output_collection_item_ids
     *
     * @return float[]|null
     */
    public function getOutputCollectionItemIds()
    {
        return $this->container['output_collection_item_ids'];
    }

    /**
     * Sets output_collection_item_ids
     *
     * @param float[]|null $output_collection_item_ids An array of item ids from the provided output collection that are given by this offer. Output items are automatically minted if the exchange contract has the `minter` role for the output collection contract. Otherwise, they are transferred from the item balance held by the exchange contract.
     *
     * @return self
     */
    public function setOutputCollectionItemIds($output_collection_item_ids)
    {

        if (is_null($output_collection_item_ids)) {
            throw new \InvalidArgumentException('non-nullable output_collection_item_ids cannot be null');
        }

        $this->container['output_collection_item_ids'] = $output_collection_item_ids;

        return $this;
    }

    /**
     * Gets output_collection_item_amounts
     *
     * @return float[]|null
     */
    public function getOutputCollectionItemAmounts()
    {
        return $this->container['output_collection_item_amounts'];
    }

    /**
     * Sets output_collection_item_amounts
     *
     * @param float[]|null $output_collection_item_amounts An array of amounts for each item id from the provided output collection that are given by this offer. Item amounts array indices are reflective of the amount required for a given item id at the same index.
     *
     * @return self
     */
    public function setOutputCollectionItemAmounts($output_collection_item_amounts)
    {

        if (is_null($output_collection_item_amounts)) {
            throw new \InvalidArgumentException('non-nullable output_collection_item_amounts cannot be null');
        }

        $this->container['output_collection_item_amounts'] = $output_collection_item_amounts;

        return $this;
    }

    /**
     * Gets output_currency_address
     *
     * @return string|null
     */
    public function getOutputCurrencyAddress()
    {
        return $this->container['output_currency_address'];
    }

    /**
     * Sets output_currency_address
     *
     * @param string|null $output_currency_address A valid EVM based ERC20 or MetaFab game currency contract address that for the currency given by this offer. The output currency amount is automatically minted if the exchange contract has the `minter` role for the output currency contract. Otherwise, they are transferred from the currency balance held by the exchange contract.
     *
     * @return self
     */
    public function setOutputCurrencyAddress($output_currency_address)
    {

        if (is_null($output_currency_address)) {
            throw new \InvalidArgumentException('non-nullable output_currency_address cannot be null');
        }

        $this->container['output_currency_address'] = $output_currency_address;

        return $this;
    }

    /**
     * Gets output_currency_id
     *
     * @return string|null
     */
    public function getOutputCurrencyId()
    {
        return $this->container['output_currency_id'];
    }

    /**
     * Sets output_currency_id
     *
     * @param string|null $output_currency_id A valid MetaFab currency id for the currency given by this offer.
     *
     * @return self
     */
    public function setOutputCurrencyId($output_currency_id)
    {

        if (is_null($output_currency_id)) {
            throw new \InvalidArgumentException('non-nullable output_currency_id cannot be null');
        }

        $this->container['output_currency_id'] = $output_currency_id;

        return $this;
    }

    /**
     * Gets output_currency_amount
     *
     * @return float|null
     */
    public function getOutputCurrencyAmount()
    {
        return $this->container['output_currency_amount'];
    }

    /**
     * Sets output_currency_amount
     *
     * @param float|null $output_currency_amount The amount of currency given by this offer. If an outputCurrencyAmount is provided without an output currency address or id, the native chain currency is used as the given currency.
     *
     * @return self
     */
    public function setOutputCurrencyAmount($output_currency_amount)
    {

        if (is_null($output_currency_amount)) {
            throw new \InvalidArgumentException('non-nullable output_currency_amount cannot be null');
        }

        $this->container['output_currency_amount'] = $output_currency_amount;

        return $this;
    }

    /**
     * Gets max_uses
     *
     * @return float|null
     */
    public function getMaxUses()
    {
        return $this->container['max_uses'];
    }

    /**
     * Sets max_uses
     *
     * @param float|null $max_uses The maximum number of times this offer can be used in total. maxUses is collective across all uses of the offer. If 5 unique players use an offer, that counts as 5 offer uses. Exclude this or use 0 to allow unlimited uses.
     *
     * @return self
     */
    public function setMaxUses($max_uses)
    {

        if (is_null($max_uses)) {
            throw new \InvalidArgumentException('non-nullable max_uses cannot be null');
        }

        $this->container['max_uses'] = $max_uses;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


