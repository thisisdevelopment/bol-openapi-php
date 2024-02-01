<?php
/**
 * LoadCarrier
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v10 - Retailer API
 *
 * The bol.com API for retailers.  # Authentication Our API requires authentication via OAuth2. The detailed steps to authenticate are explained [here](https://api.bol.com/retailer/public/Retailer-API/authentication.html)   # Demo scenarios Our API specification includes examples of the responses you can expect. For more information as well as more examples, we refer you to the following resources:   - [Demo environment](https://api.bol.com/retailer/public/Retailer-API/demo/demo.html) - [Demo scenarios](https://api.bol.com/retailer/public/Retailer-API/demo/v10-index.html)
 *
 * The version of the OpenAPI document: 10.x
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
 * LoadCarrier Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoadCarrier implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoadCarrier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sscc' => 'string',
        'transportLabelTrackAndTrace' => 'string',
        'transportState' => 'string',
        'transportStateUpdateDateTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sscc' => null,
        'transportLabelTrackAndTrace' => null,
        'transportState' => null,
        'transportStateUpdateDateTime' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sscc' => false,
        'transportLabelTrackAndTrace' => false,
        'transportState' => false,
        'transportStateUpdateDateTime' => false
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
        'sscc' => 'sscc',
        'transportLabelTrackAndTrace' => 'transportLabelTrackAndTrace',
        'transportState' => 'transportState',
        'transportStateUpdateDateTime' => 'transportStateUpdateDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sscc' => 'setSscc',
        'transportLabelTrackAndTrace' => 'setTransportLabelTrackAndTrace',
        'transportState' => 'setTransportState',
        'transportStateUpdateDateTime' => 'setTransportStateUpdateDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sscc' => 'getSscc',
        'transportLabelTrackAndTrace' => 'getTransportLabelTrackAndTrace',
        'transportState' => 'getTransportState',
        'transportStateUpdateDateTime' => 'getTransportStateUpdateDateTime'
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

    public const TRANSPORT_STATE_ANNOUNCED = 'ANNOUNCED';
    public const TRANSPORT_STATE_PICKED_UP = 'PICKED_UP';
    public const TRANSPORT_STATE_UNDERWAY = 'UNDERWAY';
    public const TRANSPORT_STATE_DELAYED = 'DELAYED';
    public const TRANSPORT_STATE_ARRIVED = 'ARRIVED';
    public const TRANSPORT_STATE_ERROR = 'ERROR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportStateAllowableValues()
    {
        return [
            self::TRANSPORT_STATE_ANNOUNCED,
            self::TRANSPORT_STATE_PICKED_UP,
            self::TRANSPORT_STATE_UNDERWAY,
            self::TRANSPORT_STATE_DELAYED,
            self::TRANSPORT_STATE_ARRIVED,
            self::TRANSPORT_STATE_ERROR,
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
        $this->setIfExists('sscc', $data ?? [], null);
        $this->setIfExists('transportLabelTrackAndTrace', $data ?? [], null);
        $this->setIfExists('transportState', $data ?? [], null);
        $this->setIfExists('transportStateUpdateDateTime', $data ?? [], null);
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

        if ($this->container['transportState'] === null) {
            $invalidProperties[] = "'transportState' can't be null";
        }
        $allowedValues = $this->getTransportStateAllowableValues();
        if (!is_null($this->container['transportState']) && !in_array($this->container['transportState'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transportState', must be one of '%s'",
                $this->container['transportState'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['transportStateUpdateDateTime'] === null) {
            $invalidProperties[] = "'transportStateUpdateDateTime' can't be null";
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
     * Gets sscc
     *
     * @return string|null
     */
    public function getSscc()
    {
        return $this->container['sscc'];
    }

    /**
     * Sets sscc
     *
     * @param string|null $sscc The Serial Shipping Container Code (SSCC) for this load carrier.
     *
     * @return self
     */
    public function setSscc($sscc)
    {
        if (is_null($sscc)) {
            throw new \InvalidArgumentException('non-nullable sscc cannot be null');
        }
        $this->container['sscc'] = $sscc;

        return $this;
    }

    /**
     * Gets transportLabelTrackAndTrace
     *
     * @return string|null
     */
    public function getTransportLabelTrackAndTrace()
    {
        return $this->container['transportLabelTrackAndTrace'];
    }

    /**
     * Sets transportLabelTrackAndTrace
     *
     * @param string|null $transportLabelTrackAndTrace The track and trace code for this load carrier.
     *
     * @return self
     */
    public function setTransportLabelTrackAndTrace($transportLabelTrackAndTrace)
    {
        if (is_null($transportLabelTrackAndTrace)) {
            throw new \InvalidArgumentException('non-nullable transportLabelTrackAndTrace cannot be null');
        }
        $this->container['transportLabelTrackAndTrace'] = $transportLabelTrackAndTrace;

        return $this;
    }

    /**
     * Gets transportState
     *
     * @return string
     */
    public function getTransportState()
    {
        return $this->container['transportState'];
    }

    /**
     * Sets transportState
     *
     * @param string $transportState The current state of the transport for this load carrier.
     *
     * @return self
     */
    public function setTransportState($transportState)
    {
        if (is_null($transportState)) {
            throw new \InvalidArgumentException('non-nullable transportState cannot be null');
        }
        $allowedValues = $this->getTransportStateAllowableValues();
        if (!in_array($transportState, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transportState', must be one of '%s'",
                    $transportState,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transportState'] = $transportState;

        return $this;
    }

    /**
     * Gets transportStateUpdateDateTime
     *
     * @return \DateTime
     */
    public function getTransportStateUpdateDateTime()
    {
        return $this->container['transportStateUpdateDateTime'];
    }

    /**
     * Sets transportStateUpdateDateTime
     *
     * @param \DateTime $transportStateUpdateDateTime The date and time in ISO 8601 format when the latest update for this transport was received.
     *
     * @return self
     */
    public function setTransportStateUpdateDateTime($transportStateUpdateDateTime)
    {
        if (is_null($transportStateUpdateDateTime)) {
            throw new \InvalidArgumentException('non-nullable transportStateUpdateDateTime cannot be null');
        }
        $this->container['transportStateUpdateDateTime'] = $transportStateUpdateDateTime;

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


