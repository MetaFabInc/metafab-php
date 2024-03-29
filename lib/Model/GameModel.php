<?php
/**
 * GameModel
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
 * GameModel Class Doc Comment
 *
 * @category Class
 * @package  MetaFab
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GameModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GameModel';

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
        'redirect_uris' => 'object',
        'icon_image_url' => 'string',
        'cover_image_url' => 'string',
        'primary_color_hex' => 'string',
        'published_key' => 'string',
        'secret_key' => 'string',
        'verified' => 'bool',
        'updated_at' => 'string',
        'created_at' => 'string'
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
        'redirect_uris' => null,
        'icon_image_url' => null,
        'cover_image_url' => null,
        'primary_color_hex' => null,
        'published_key' => null,
        'secret_key' => null,
        'verified' => null,
        'updated_at' => null,
        'created_at' => null
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
		'redirect_uris' => false,
		'icon_image_url' => false,
		'cover_image_url' => false,
		'primary_color_hex' => false,
		'published_key' => false,
		'secret_key' => false,
		'verified' => false,
		'updated_at' => false,
		'created_at' => false
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
        'wallet_id' => 'walletId',
        'funding_wallet_id' => 'fundingWalletId',
        'email' => 'email',
        'name' => 'name',
        'rpcs' => 'rpcs',
        'redirect_uris' => 'redirectUris',
        'icon_image_url' => 'iconImageUrl',
        'cover_image_url' => 'coverImageUrl',
        'primary_color_hex' => 'primaryColorHex',
        'published_key' => 'publishedKey',
        'secret_key' => 'secretKey',
        'verified' => 'verified',
        'updated_at' => 'updatedAt',
        'created_at' => 'createdAt'
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
        'redirect_uris' => 'setRedirectUris',
        'icon_image_url' => 'setIconImageUrl',
        'cover_image_url' => 'setCoverImageUrl',
        'primary_color_hex' => 'setPrimaryColorHex',
        'published_key' => 'setPublishedKey',
        'secret_key' => 'setSecretKey',
        'verified' => 'setVerified',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt'
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
        'redirect_uris' => 'getRedirectUris',
        'icon_image_url' => 'getIconImageUrl',
        'cover_image_url' => 'getCoverImageUrl',
        'primary_color_hex' => 'getPrimaryColorHex',
        'published_key' => 'getPublishedKey',
        'secret_key' => 'getSecretKey',
        'verified' => 'getVerified',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt'
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
        $this->setIfExists('redirect_uris', $data ?? [], null);
        $this->setIfExists('icon_image_url', $data ?? [], null);
        $this->setIfExists('cover_image_url', $data ?? [], null);
        $this->setIfExists('primary_color_hex', $data ?? [], null);
        $this->setIfExists('published_key', $data ?? [], null);
        $this->setIfExists('secret_key', $data ?? [], null);
        $this->setIfExists('verified', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
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
     * Gets redirect_uris
     *
     * @return object|null
     */
    public function getRedirectUris()
    {
        return $this->container['redirect_uris'];
    }

    /**
     * Sets redirect_uris
     *
     * @param object|null $redirect_uris This field has not had a description added.
     *
     * @return self
     */
    public function setRedirectUris($redirect_uris)
    {

        if (is_null($redirect_uris)) {
            throw new \InvalidArgumentException('non-nullable redirect_uris cannot be null');
        }

        $this->container['redirect_uris'] = $redirect_uris;

        return $this;
    }

    /**
     * Gets icon_image_url
     *
     * @return string|null
     */
    public function getIconImageUrl()
    {
        return $this->container['icon_image_url'];
    }

    /**
     * Sets icon_image_url
     *
     * @param string|null $icon_image_url This field has not had a description added.
     *
     * @return self
     */
    public function setIconImageUrl($icon_image_url)
    {

        if (is_null($icon_image_url)) {
            throw new \InvalidArgumentException('non-nullable icon_image_url cannot be null');
        }

        $this->container['icon_image_url'] = $icon_image_url;

        return $this;
    }

    /**
     * Gets cover_image_url
     *
     * @return string|null
     */
    public function getCoverImageUrl()
    {
        return $this->container['cover_image_url'];
    }

    /**
     * Sets cover_image_url
     *
     * @param string|null $cover_image_url This field has not had a description added.
     *
     * @return self
     */
    public function setCoverImageUrl($cover_image_url)
    {

        if (is_null($cover_image_url)) {
            throw new \InvalidArgumentException('non-nullable cover_image_url cannot be null');
        }

        $this->container['cover_image_url'] = $cover_image_url;

        return $this;
    }

    /**
     * Gets primary_color_hex
     *
     * @return string|null
     */
    public function getPrimaryColorHex()
    {
        return $this->container['primary_color_hex'];
    }

    /**
     * Sets primary_color_hex
     *
     * @param string|null $primary_color_hex This field has not had a description added.
     *
     * @return self
     */
    public function setPrimaryColorHex($primary_color_hex)
    {

        if (is_null($primary_color_hex)) {
            throw new \InvalidArgumentException('non-nullable primary_color_hex cannot be null');
        }

        $this->container['primary_color_hex'] = $primary_color_hex;

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
     * Gets verified
     *
     * @return bool|null
     */
    public function getVerified()
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified
     *
     * @param bool|null $verified This field has not had a description added.
     *
     * @return self
     */
    public function setVerified($verified)
    {

        if (is_null($verified)) {
            throw new \InvalidArgumentException('non-nullable verified cannot be null');
        }

        $this->container['verified'] = $verified;

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


