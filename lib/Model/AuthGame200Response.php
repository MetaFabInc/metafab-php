<?php
/**
 * AuthGame200Response
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
 * The version of the OpenAPI document: 1.1.3
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
 * AuthGame200Response Class Doc Comment
 *
 * @category Class
 * @package  MetaFab
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuthGame200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'authGame_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'wallet_id' => 'string',
        'funding_wallet_id' => 'string',
        'email' => 'string',
        'name' => 'string',
        'rpcs' => 'object',
        'published_key' => 'string',
        'secret_key' => 'string',
        'updated_at' => 'string',
        'created_at' => 'string',
        'wallet' => '\MetaFab\Model\WalletModel',
        'funding_wallet' => '\MetaFab\Model\WalletModel'
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
        'wallet_id' => null,
        'funding_wallet_id' => null,
        'email' => null,
        'name' => null,
        'rpcs' => null,
        'published_key' => null,
        'secret_key' => null,
        'updated_at' => null,
        'created_at' => null,
        'wallet' => null,
        'funding_wallet' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'wallet_id' => false,
		'funding_wallet_id' => false,
		'email' => false,
		'name' => false,
		'rpcs' => false,
		'published_key' => false,
		'secret_key' => false,
		'updated_at' => false,
		'created_at' => false,
		'wallet' => false,
		'funding_wallet' => false
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
        'wallet_id' => 'walletId',
        'funding_wallet_id' => 'fundingWalletId',
        'email' => 'email',
        'name' => 'name',
        'rpcs' => 'rpcs',
        'published_key' => 'publishedKey',
        'secret_key' => 'secretKey',
        'updated_at' => 'updatedAt',
        'created_at' => 'createdAt',
        'wallet' => 'wallet',
        'funding_wallet' => 'fundingWallet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'wallet_id' => 'setWalletId',
        'funding_wallet_id' => 'setFundingWalletId',
        'email' => 'setEmail',
        'name' => 'setName',
        'rpcs' => 'setRpcs',
        'published_key' => 'setPublishedKey',
        'secret_key' => 'setSecretKey',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'wallet' => 'setWallet',
        'funding_wallet' => 'setFundingWallet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'wallet_id' => 'getWalletId',
        'funding_wallet_id' => 'getFundingWalletId',
        'email' => 'getEmail',
        'name' => 'getName',
        'rpcs' => 'getRpcs',
        'published_key' => 'getPublishedKey',
        'secret_key' => 'getSecretKey',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'wallet' => 'getWallet',
        'funding_wallet' => 'getFundingWallet'
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
        $this->setIfExists('wallet_id', $data ?? [], null);
        $this->setIfExists('funding_wallet_id', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('rpcs', $data ?? [], null);
        $this->setIfExists('published_key', $data ?? [], null);
        $this->setIfExists('secret_key', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('wallet', $data ?? [], null);
        $this->setIfExists('funding_wallet', $data ?? [], null);
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id This field has not had a description added.
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
     * Gets wallet_id
     *
     * @return string|null
     */
    public function getWalletId()
    {
        return $this->container['wallet_id'];
    }

    /**
     * Sets wallet_id
     *
     * @param string|null $wallet_id This field has not had a description added.
     *
     * @return self
     */
    public function setWalletId($wallet_id)
    {

        if (is_null($wallet_id)) {
            throw new \InvalidArgumentException('non-nullable wallet_id cannot be null');
        }

        $this->container['wallet_id'] = $wallet_id;

        return $this;
    }

    /**
     * Gets funding_wallet_id
     *
     * @return string|null
     */
    public function getFundingWalletId()
    {
        return $this->container['funding_wallet_id'];
    }

    /**
     * Sets funding_wallet_id
     *
     * @param string|null $funding_wallet_id This field has not had a description added.
     *
     * @return self
     */
    public function setFundingWalletId($funding_wallet_id)
    {

        if (is_null($funding_wallet_id)) {
            throw new \InvalidArgumentException('non-nullable funding_wallet_id cannot be null');
        }

        $this->container['funding_wallet_id'] = $funding_wallet_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email This field has not had a description added.
     *
     * @return self
     */
    public function setEmail($email)
    {

        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name This field has not had a description added.
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rpcs
     *
     * @return object|null
     */
    public function getRpcs()
    {
        return $this->container['rpcs'];
    }

    /**
     * Sets rpcs
     *
     * @param object|null $rpcs This field has not had a description added.
     *
     * @return self
     */
    public function setRpcs($rpcs)
    {

        if (is_null($rpcs)) {
            throw new \InvalidArgumentException('non-nullable rpcs cannot be null');
        }

        $this->container['rpcs'] = $rpcs;

        return $this;
    }

    /**
     * Gets published_key
     *
     * @return string|null
     */
    public function getPublishedKey()
    {
        return $this->container['published_key'];
    }

    /**
     * Sets published_key
     *
     * @param string|null $published_key This field has not had a description added.
     *
     * @return self
     */
    public function setPublishedKey($published_key)
    {

        if (is_null($published_key)) {
            throw new \InvalidArgumentException('non-nullable published_key cannot be null');
        }

        $this->container['published_key'] = $published_key;

        return $this;
    }

    /**
     * Gets secret_key
     *
     * @return string|null
     */
    public function getSecretKey()
    {
        return $this->container['secret_key'];
    }

    /**
     * Sets secret_key
     *
     * @param string|null $secret_key This field has not had a description added.
     *
     * @return self
     */
    public function setSecretKey($secret_key)
    {

        if (is_null($secret_key)) {
            throw new \InvalidArgumentException('non-nullable secret_key cannot be null');
        }

        $this->container['secret_key'] = $secret_key;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at This field has not had a description added.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {

        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }

        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at This field has not had a description added.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }

        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets wallet
     *
     * @return \MetaFab\Model\WalletModel|null
     */
    public function getWallet()
    {
        return $this->container['wallet'];
    }

    /**
     * Sets wallet
     *
     * @param \MetaFab\Model\WalletModel|null $wallet wallet
     *
     * @return self
     */
    public function setWallet($wallet)
    {

        if (is_null($wallet)) {
            throw new \InvalidArgumentException('non-nullable wallet cannot be null');
        }

        $this->container['wallet'] = $wallet;

        return $this;
    }

    /**
     * Gets funding_wallet
     *
     * @return \MetaFab\Model\WalletModel|null
     */
    public function getFundingWallet()
    {
        return $this->container['funding_wallet'];
    }

    /**
     * Sets funding_wallet
     *
     * @param \MetaFab\Model\WalletModel|null $funding_wallet funding_wallet
     *
     * @return self
     */
    public function setFundingWallet($funding_wallet)
    {

        if (is_null($funding_wallet)) {
            throw new \InvalidArgumentException('non-nullable funding_wallet cannot be null');
        }

        $this->container['funding_wallet'] = $funding_wallet;

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


