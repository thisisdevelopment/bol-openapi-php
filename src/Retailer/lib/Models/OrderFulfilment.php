<?php
/**
 * OrderFulfilment
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
 * OrderFulfilment Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderFulfilment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderFulfilment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'method' => 'string',
        'distributionParty' => 'string',
        'latestDeliveryDate' => '\DateTime',
        'exactDeliveryDate' => '\DateTime',
        'expiryDate' => '\DateTime',
        'timeFrameType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'method' => null,
        'distributionParty' => null,
        'latestDeliveryDate' => 'date',
        'exactDeliveryDate' => 'date',
        'expiryDate' => 'date',
        'timeFrameType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'method' => false,
        'distributionParty' => false,
        'latestDeliveryDate' => false,
        'exactDeliveryDate' => false,
        'expiryDate' => false,
        'timeFrameType' => false
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
        'method' => 'method',
        'distributionParty' => 'distributionParty',
        'latestDeliveryDate' => 'latestDeliveryDate',
        'exactDeliveryDate' => 'exactDeliveryDate',
        'expiryDate' => 'expiryDate',
        'timeFrameType' => 'timeFrameType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'method' => 'setMethod',
        'distributionParty' => 'setDistributionParty',
        'latestDeliveryDate' => 'setLatestDeliveryDate',
        'exactDeliveryDate' => 'setExactDeliveryDate',
        'expiryDate' => 'setExpiryDate',
        'timeFrameType' => 'setTimeFrameType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'method' => 'getMethod',
        'distributionParty' => 'getDistributionParty',
        'latestDeliveryDate' => 'getLatestDeliveryDate',
        'exactDeliveryDate' => 'getExactDeliveryDate',
        'expiryDate' => 'getExpiryDate',
        'timeFrameType' => 'getTimeFrameType'
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

    public const DISTRIBUTION_PARTY_RETAILER = 'RETAILER';
    public const DISTRIBUTION_PARTY_BOL = 'BOL';
    public const TIME_FRAME_TYPE_REGULAR = 'REGULAR';
    public const TIME_FRAME_TYPE_EVENING = 'EVENING';
    public const TIME_FRAME_TYPE_APPOINTMENT = 'APPOINTMENT';
    public const TIME_FRAME_TYPE_SAMEDAY = 'SAMEDAY';
    public const TIME_FRAME_TYPE_SUNDAY = 'SUNDAY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDistributionPartyAllowableValues()
    {
        return [
            self::DISTRIBUTION_PARTY_RETAILER,
            self::DISTRIBUTION_PARTY_BOL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimeFrameTypeAllowableValues()
    {
        return [
            self::TIME_FRAME_TYPE_REGULAR,
            self::TIME_FRAME_TYPE_EVENING,
            self::TIME_FRAME_TYPE_APPOINTMENT,
            self::TIME_FRAME_TYPE_SAMEDAY,
            self::TIME_FRAME_TYPE_SUNDAY,
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
        $this->setIfExists('method', $data ?? [], null);
        $this->setIfExists('distributionParty', $data ?? [], null);
        $this->setIfExists('latestDeliveryDate', $data ?? [], null);
        $this->setIfExists('exactDeliveryDate', $data ?? [], null);
        $this->setIfExists('expiryDate', $data ?? [], null);
        $this->setIfExists('timeFrameType', $data ?? [], null);
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

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        $allowedValues = $this->getDistributionPartyAllowableValues();
        if (!is_null($this->container['distributionParty']) && !in_array($this->container['distributionParty'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'distributionParty', must be one of '%s'",
                $this->container['distributionParty'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['timeFrameType'] === null) {
            $invalidProperties[] = "'timeFrameType' can't be null";
        }
        $allowedValues = $this->getTimeFrameTypeAllowableValues();
        if (!is_null($this->container['timeFrameType']) && !in_array($this->container['timeFrameType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'timeFrameType', must be one of '%s'",
                $this->container['timeFrameType'],
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
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @return self
     */
    public function setMethod($method)
    {
        if (is_null($method)) {
            throw new \InvalidArgumentException('non-nullable method cannot be null');
        }
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets distributionParty
     *
     * @return string|null
     */
    public function getDistributionParty()
    {
        return $this->container['distributionParty'];
    }

    /**
     * Sets distributionParty
     *
     * @param string|null $distributionParty The party that manages the distribution, either bol.com or the retailer itself.
     *
     * @return self
     */
    public function setDistributionParty($distributionParty)
    {
        if (is_null($distributionParty)) {
            throw new \InvalidArgumentException('non-nullable distributionParty cannot be null');
        }
        $allowedValues = $this->getDistributionPartyAllowableValues();
        if (!in_array($distributionParty, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'distributionParty', must be one of '%s'",
                    $distributionParty,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['distributionParty'] = $distributionParty;

        return $this;
    }

    /**
     * Gets latestDeliveryDate
     *
     * @return \DateTime|null
     */
    public function getLatestDeliveryDate()
    {
        return $this->container['latestDeliveryDate'];
    }

    /**
     * Sets latestDeliveryDate
     *
     * @param \DateTime|null $latestDeliveryDate The ultimate delivery date at which this order must be delivered at the customer's shipping address. This field is empty in case the exactDeliveryDate is filled.
     *
     * @return self
     */
    public function setLatestDeliveryDate($latestDeliveryDate)
    {
        if (is_null($latestDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable latestDeliveryDate cannot be null');
        }
        $this->container['latestDeliveryDate'] = $latestDeliveryDate;

        return $this;
    }

    /**
     * Gets exactDeliveryDate
     *
     * @return \DateTime|null
     */
    public function getExactDeliveryDate()
    {
        return $this->container['exactDeliveryDate'];
    }

    /**
     * Sets exactDeliveryDate
     *
     * @param \DateTime|null $exactDeliveryDate The exact delivery date at which this order must be delivered at the customer's shipping address. This field is only filled when the customer chose an exact date for delivery. This field is empty in case the latestDeliveryDate is filled.
     *
     * @return self
     */
    public function setExactDeliveryDate($exactDeliveryDate)
    {
        if (is_null($exactDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable exactDeliveryDate cannot be null');
        }
        $this->container['exactDeliveryDate'] = $exactDeliveryDate;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return \DateTime|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param \DateTime|null $expiryDate The date this order item will automatically expire and thereby cancelling this order item from the order.
     *
     * @return self
     */
    public function setExpiryDate($expiryDate)
    {
        if (is_null($expiryDate)) {
            throw new \InvalidArgumentException('non-nullable expiryDate cannot be null');
        }
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets timeFrameType
     *
     * @return string
     */
    public function getTimeFrameType()
    {
        return $this->container['timeFrameType'];
    }

    /**
     * Sets timeFrameType
     *
     * @param string $timeFrameType Delivery option selected by the customer.
     *
     * @return self
     */
    public function setTimeFrameType($timeFrameType)
    {
        if (is_null($timeFrameType)) {
            throw new \InvalidArgumentException('non-nullable timeFrameType cannot be null');
        }
        $allowedValues = $this->getTimeFrameTypeAllowableValues();
        if (!in_array($timeFrameType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'timeFrameType', must be one of '%s'",
                    $timeFrameType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['timeFrameType'] = $timeFrameType;

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


