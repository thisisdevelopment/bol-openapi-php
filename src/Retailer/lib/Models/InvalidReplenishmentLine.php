<?php
/**
 * InvalidReplenishmentLine
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v8 - Retailer API
 *
 * The bol.com API for retailers.  # Authentication Our API requires authentication via OAuth2. The detailed steps to authenticate are explained [here](https://api.bol.com/retailer/public/Retailer-API/authentication.html)   # Demo scenarios Our API specification includes examples of the responses you can expect. For more information as well as more examples, we refer you to the following resources:   - [Demo environment](https://api.bol.com/retailer/public/Retailer-API/demo/demo.html) - [Demo scenarios](https://api.bol.com/retailer/public/Retailer-API/demo/v8-index.html)
 *
 * The version of the OpenAPI document: 8.x
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ThisIsDevelopment\OpenApi\Bol\Retailer\Models;

use \ArrayAccess;
use \ThisIsDevelopment\OpenApi\Bol\Retailer\ObjectSerializer;

/**
 * InvalidReplenishmentLine Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InvalidReplenishmentLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvalidReplenishmentLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'quantityAnnounced' => 'int',
        'quantityReceived' => 'int',
        'quantityInProgress' => 'int',
        'quantityWithGradedState' => 'int',
        'quantityWithRegularState' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'quantityAnnounced' => 'int32',
        'quantityReceived' => 'int32',
        'quantityInProgress' => 'int32',
        'quantityWithGradedState' => 'int32',
        'quantityWithRegularState' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'quantityAnnounced' => false,
        'quantityReceived' => false,
        'quantityInProgress' => false,
        'quantityWithGradedState' => false,
        'quantityWithRegularState' => false
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
        'type' => 'type',
        'quantityAnnounced' => 'quantityAnnounced',
        'quantityReceived' => 'quantityReceived',
        'quantityInProgress' => 'quantityInProgress',
        'quantityWithGradedState' => 'quantityWithGradedState',
        'quantityWithRegularState' => 'quantityWithRegularState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'quantityAnnounced' => 'setQuantityAnnounced',
        'quantityReceived' => 'setQuantityReceived',
        'quantityInProgress' => 'setQuantityInProgress',
        'quantityWithGradedState' => 'setQuantityWithGradedState',
        'quantityWithRegularState' => 'setQuantityWithRegularState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'quantityAnnounced' => 'getQuantityAnnounced',
        'quantityReceived' => 'getQuantityReceived',
        'quantityInProgress' => 'getQuantityInProgress',
        'quantityWithGradedState' => 'getQuantityWithGradedState',
        'quantityWithRegularState' => 'getQuantityWithRegularState'
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

    public const TYPE_FBB_PRODUCT = 'UNKNOWN_FBB_PRODUCT';
    public const TYPE_EAN_INVENTORY_RELATION = 'UNKNOWN_EAN_INVENTORY_RELATION';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FBB_PRODUCT,
            self::TYPE_EAN_INVENTORY_RELATION,
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('quantityAnnounced', $data ?? [], null);
        $this->setIfExists('quantityReceived', $data ?? [], null);
        $this->setIfExists('quantityInProgress', $data ?? [], null);
        $this->setIfExists('quantityWithGradedState', $data ?? [], null);
        $this->setIfExists('quantityWithRegularState', $data ?? [], null);
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quantityAnnounced'] === null) {
            $invalidProperties[] = "'quantityAnnounced' can't be null";
        }
        if ($this->container['quantityReceived'] === null) {
            $invalidProperties[] = "'quantityReceived' can't be null";
        }
        if ($this->container['quantityInProgress'] === null) {
            $invalidProperties[] = "'quantityInProgress' can't be null";
        }
        if ($this->container['quantityWithGradedState'] === null) {
            $invalidProperties[] = "'quantityWithGradedState' can't be null";
        }
        if ($this->container['quantityWithRegularState'] === null) {
            $invalidProperties[] = "'quantityWithRegularState' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of invalid replenishment line, in case the BSKU and/or EAN cannot be determined for this replenishment line.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets quantityAnnounced
     *
     * @return int
     */
    public function getQuantityAnnounced()
    {
        return $this->container['quantityAnnounced'];
    }

    /**
     * Sets quantityAnnounced
     *
     * @param int $quantityAnnounced The amount of announced quantity for this replenishment line.
     *
     * @return self
     */
    public function setQuantityAnnounced($quantityAnnounced)
    {
        if (is_null($quantityAnnounced)) {
            throw new \InvalidArgumentException('non-nullable quantityAnnounced cannot be null');
        }
        $this->container['quantityAnnounced'] = $quantityAnnounced;

        return $this;
    }

    /**
     * Gets quantityReceived
     *
     * @return int
     */
    public function getQuantityReceived()
    {
        return $this->container['quantityReceived'];
    }

    /**
     * Sets quantityReceived
     *
     * @param int $quantityReceived The amount of received quantity for this replenishment line.
     *
     * @return self
     */
    public function setQuantityReceived($quantityReceived)
    {
        if (is_null($quantityReceived)) {
            throw new \InvalidArgumentException('non-nullable quantityReceived cannot be null');
        }
        $this->container['quantityReceived'] = $quantityReceived;

        return $this;
    }

    /**
     * Gets quantityInProgress
     *
     * @return int
     */
    public function getQuantityInProgress()
    {
        return $this->container['quantityInProgress'];
    }

    /**
     * Sets quantityInProgress
     *
     * @param int $quantityInProgress The amount of quantity that is still in progress at the warehouse for this replenishment line.
     *
     * @return self
     */
    public function setQuantityInProgress($quantityInProgress)
    {
        if (is_null($quantityInProgress)) {
            throw new \InvalidArgumentException('non-nullable quantityInProgress cannot be null');
        }
        $this->container['quantityInProgress'] = $quantityInProgress;

        return $this;
    }

    /**
     * Gets quantityWithGradedState
     *
     * @return int
     */
    public function getQuantityWithGradedState()
    {
        return $this->container['quantityWithGradedState'];
    }

    /**
     * Sets quantityWithGradedState
     *
     * @param int $quantityWithGradedState The quantity within this shipment line that has a graded (unsalable) state.
     *
     * @return self
     */
    public function setQuantityWithGradedState($quantityWithGradedState)
    {
        if (is_null($quantityWithGradedState)) {
            throw new \InvalidArgumentException('non-nullable quantityWithGradedState cannot be null');
        }
        $this->container['quantityWithGradedState'] = $quantityWithGradedState;

        return $this;
    }

    /**
     * Gets quantityWithRegularState
     *
     * @return int
     */
    public function getQuantityWithRegularState()
    {
        return $this->container['quantityWithRegularState'];
    }

    /**
     * Sets quantityWithRegularState
     *
     * @param int $quantityWithRegularState The quantity within this shipment line that has a regular (salable) state.
     *
     * @return self
     */
    public function setQuantityWithRegularState($quantityWithRegularState)
    {
        if (is_null($quantityWithRegularState)) {
            throw new \InvalidArgumentException('non-nullable quantityWithRegularState cannot be null');
        }
        $this->container['quantityWithRegularState'] = $quantityWithRegularState;

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


