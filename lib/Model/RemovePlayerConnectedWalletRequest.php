<?php
/**
 * RemovePlayerConnectedWalletRequest
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
 * RemovePlayerConnectedWalletRequest Class Doc Comment
 *
 * @category Class
 * @package  MetaFab
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RemovePlayerConnectedWalletRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'removePlayerConnectedWallet_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'nonce' => 'int',
        'signature' => 'string',
        'chain' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'nonce' => null,
        'signature' => null,
        'chain' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
		'nonce' => false,
		'signature' => false,
		'chain' => false
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
        'address' => 'address',
        'nonce' => 'nonce',
        'signature' => 'signature',
        'chain' => 'chain'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'nonce' => 'setNonce',
        'signature' => 'setSignature',
        'chain' => 'setChain'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'nonce' => 'getNonce',
        'signature' => 'getSignature',
        'chain' => 'getChain'
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

    public const CHAIN_ARBITRUM = 'ARBITRUM';
    public const CHAIN_ARBITRUMGOERLI = 'ARBITRUMGOERLI';
    public const CHAIN_ARBITRUMNOVA = 'ARBITRUMNOVA';
    public const CHAIN_AVALANCHE = 'AVALANCHE';
    public const CHAIN_AVALANCHEFUJI = 'AVALANCHEFUJI';
    public const CHAIN_ETHEREUM = 'ETHEREUM';
    public const CHAIN_FANTOM = 'FANTOM';
    public const CHAIN_FANTOMTEST = 'FANTOMTEST';
    public const CHAIN_GOERLI = 'GOERLI';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_MATICMUMBAI = 'MATICMUMBAI';
    public const CHAIN_THUNDERCORE = 'THUNDERCORE';
    public const CHAIN_THUNDERCORETESTNET = 'THUNDERCORETESTNET';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChainAllowableValues()
    {
        return [
            self::CHAIN_ARBITRUM,
            self::CHAIN_ARBITRUMGOERLI,
            self::CHAIN_ARBITRUMNOVA,
            self::CHAIN_AVALANCHE,
            self::CHAIN_AVALANCHEFUJI,
            self::CHAIN_ETHEREUM,
            self::CHAIN_FANTOM,
            self::CHAIN_FANTOMTEST,
            self::CHAIN_GOERLI,
            self::CHAIN_MATIC,
            self::CHAIN_MATICMUMBAI,
            self::CHAIN_THUNDERCORE,
            self::CHAIN_THUNDERCORETESTNET,
        ];
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('signature', $data ?? [], null);
        $this->setIfExists('chain', $data ?? [], null);
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

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['nonce'] === null) {
            $invalidProperties[] = "'nonce' can't be null";
        }
        if ($this->container['signature'] === null) {
            $invalidProperties[] = "'signature' can't be null";
        }
        if ($this->container['chain'] === null) {
            $invalidProperties[] = "'chain' can't be null";
        }
        $allowedValues = $this->getChainAllowableValues();
        if (!is_null($this->container['chain']) && !in_array($this->container['chain'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'chain', must be one of '%s'",
                $this->container['chain'],
                implode("', '", $allowedValues)
            );
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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address The address of the external wallet to remove from a player.
     *
     * @return self
     */
    public function setAddress($address)
    {

        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return int
     */
    public function getNonce()
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param int $nonce Any positive integer that hasn't been used previously to connect or disconnect this external wallet. Must be the same nonce used to generate the `signature`.
     *
     * @return self
     */
    public function setNonce($nonce)
    {

        if (is_null($nonce)) {
            throw new \InvalidArgumentException('non-nullable nonce cannot be null');
        }

        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature A signature string generated by signing a keccak256 hash generated with abiCoder encode arguments of `[ 'bytes32', 'address', 'bool', 'address', 'uint256' ]` and `[ keccak256(gameId), delegate wallet unapproved (player's custodial wallet address), false, external wallet address, any unused nonce number ]`.
     *
     * @return self
     */
    public function setSignature($signature)
    {

        if (is_null($signature)) {
            throw new \InvalidArgumentException('non-nullable signature cannot be null');
        }

        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets chain
     *
     * @return string
     */
    public function getChain()
    {
        return $this->container['chain'];
    }

    /**
     * Sets chain
     *
     * @param string $chain The blockchain you want to remove this wallet connection on. If you need to remove it on multiple blockchains, make multiple requests using different `chain` arguments. Support for new blockchains are added over time.
     *
     * @return self
     */
    public function setChain($chain)
    {
        $allowedValues = $this->getChainAllowableValues();
        if (!in_array($chain, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'chain', must be one of '%s'",
                    $chain,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($chain)) {
            throw new \InvalidArgumentException('non-nullable chain cannot be null');
        }

        $this->container['chain'] = $chain;

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


