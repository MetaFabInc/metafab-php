<?php
/**
 * AuthProfile200Response
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
 * The version of the OpenAPI document: 1.5.1
 * Contact: metafabproject@gmail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * AuthProfile200Response Class Doc Comment
 *
 * @category Class
 * @package  MetaFab
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuthProfile200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'authProfile_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'ecosystem_id' => 'string',
        'wallet_id' => 'string',
        'connected_wallet_id' => 'string',
        'username' => 'string',
        'access_token' => 'string',
        'updated_at' => 'string',
        'created_at' => 'string',
        'wallet_decrypt_key' => 'string',
        'wallet' => '\MetaFab\Model\WalletModel',
        'custodial_wallet' => '\MetaFab\Model\WalletModel'
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
        'ecosystem_id' => null,
        'wallet_id' => null,
        'connected_wallet_id' => null,
        'username' => null,
        'access_token' => null,
        'updated_at' => null,
        'created_at' => null,
        'wallet_decrypt_key' => null,
        'wallet' => null,
        'custodial_wallet' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'ecosystem_id' => false,
		'wallet_id' => false,
		'connected_wallet_id' => false,
		'username' => false,
		'access_token' => false,
		'updated_at' => false,
		'created_at' => false,
		'wallet_decrypt_key' => false,
		'wallet' => false,
		'custodial_wallet' => false
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
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
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
        'ecosystem_id' => 'ecosystemId',
        'wallet_id' => 'walletId',
        'connected_wallet_id' => 'connectedWalletId',
        'username' => 'username',
        'access_token' => 'accessToken',
        'updated_at' => 'updatedAt',
        'created_at' => 'createdAt',
        'wallet_decrypt_key' => 'walletDecryptKey',
        'wallet' => 'wallet',
        'custodial_wallet' => 'custodialWallet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ecosystem_id' => 'setEcosystemId',
        'wallet_id' => 'setWalletId',
        'connected_wallet_id' => 'setConnectedWalletId',
        'username' => 'setUsername',
        'access_token' => 'setAccessToken',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'wallet_decrypt_key' => 'setWalletDecryptKey',
        'wallet' => 'setWallet',
        'custodial_wallet' => 'setCustodialWallet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ecosystem_id' => 'getEcosystemId',
        'wallet_id' => 'getWalletId',
        'connected_wallet_id' => 'getConnectedWalletId',
        'username' => 'getUsername',
        'access_token' => 'getAccessToken',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'wallet_decrypt_key' => 'getWalletDecryptKey',
        'wallet' => 'getWallet',
        'custodial_wallet' => 'getCustodialWallet'
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
        $this->setIfExists('ecosystem_id', $data ?? [], null);
        $this->setIfExists('wallet_id', $data ?? [], null);
        $this->setIfExists('connected_wallet_id', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('access_token', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('wallet_decrypt_key', $data ?? [], null);
        $this->setIfExists('wallet', $data ?? [], null);
        $this->setIfExists('custodial_wallet', $data ?? [], null);
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
     * Gets ecosystem_id
     *
     * @return string|null
     */
    public function getEcosystemId()
    {
        return $this->container['ecosystem_id'];
    }

    /**
     * Sets ecosystem_id
     *
     * @param string|null $ecosystem_id This field has not had a description added.
     *
     * @return self
     */
    public function setEcosystemId($ecosystem_id)
    {

        if (is_null($ecosystem_id)) {
            throw new \InvalidArgumentException('non-nullable ecosystem_id cannot be null');
        }

        $this->container['ecosystem_id'] = $ecosystem_id;

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
     * Gets connected_wallet_id
     *
     * @return string|null
     */
    public function getConnectedWalletId()
    {
        return $this->container['connected_wallet_id'];
    }

    /**
     * Sets connected_wallet_id
     *
     * @param string|null $connected_wallet_id This field has not had a description added.
     *
     * @return self
     */
    public function setConnectedWalletId($connected_wallet_id)
    {

        if (is_null($connected_wallet_id)) {
            throw new \InvalidArgumentException('non-nullable connected_wallet_id cannot be null');
        }

        $this->container['connected_wallet_id'] = $connected_wallet_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username This field has not had a description added.
     *
     * @return self
     */
    public function setUsername($username)
    {

        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }

        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets access_token
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string|null $access_token This field has not had a description added.
     *
     * @return self
     */
    public function setAccessToken($access_token)
    {

        if (is_null($access_token)) {
            throw new \InvalidArgumentException('non-nullable access_token cannot be null');
        }

        $this->container['access_token'] = $access_token;

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
     * Gets wallet_decrypt_key
     *
     * @return string|null
     */
    public function getWalletDecryptKey()
    {
        return $this->container['wallet_decrypt_key'];
    }

    /**
     * Sets wallet_decrypt_key
     *
     * @param string|null $wallet_decrypt_key This field has not had a description added.
     *
     * @return self
     */
    public function setWalletDecryptKey($wallet_decrypt_key)
    {

        if (is_null($wallet_decrypt_key)) {
            throw new \InvalidArgumentException('non-nullable wallet_decrypt_key cannot be null');
        }

        $this->container['wallet_decrypt_key'] = $wallet_decrypt_key;

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
     * Gets custodial_wallet
     *
     * @return \MetaFab\Model\WalletModel|null
     */
    public function getCustodialWallet()
    {
        return $this->container['custodial_wallet'];
    }

    /**
     * Sets custodial_wallet
     *
     * @param \MetaFab\Model\WalletModel|null $custodial_wallet custodial_wallet
     *
     * @return self
     */
    public function setCustodialWallet($custodial_wallet)
    {

        if (is_null($custodial_wallet)) {
            throw new \InvalidArgumentException('non-nullable custodial_wallet cannot be null');
        }

        $this->container['custodial_wallet'] = $custodial_wallet;

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

