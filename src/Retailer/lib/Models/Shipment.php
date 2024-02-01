<?php
/**
 * Shipment
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
 * Shipment Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipmentId' => 'string',
        'shipmentDateTime' => '\DateTime',
        'shipmentReference' => 'string',
        'pickupPoint' => 'bool',
        'order' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentOrder',
        'shipmentDetails' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentDetails',
        'billingDetails' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BillingDetails',
        'shipmentItems' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentItem[]',
        'transport' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentTransport'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipmentId' => null,
        'shipmentDateTime' => 'date-time',
        'shipmentReference' => null,
        'pickupPoint' => null,
        'order' => null,
        'shipmentDetails' => null,
        'billingDetails' => null,
        'shipmentItems' => null,
        'transport' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipmentId' => false,
        'shipmentDateTime' => false,
        'shipmentReference' => false,
        'pickupPoint' => false,
        'order' => false,
        'shipmentDetails' => false,
        'billingDetails' => false,
        'shipmentItems' => false,
        'transport' => false
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
        'shipmentId' => 'shipmentId',
        'shipmentDateTime' => 'shipmentDateTime',
        'shipmentReference' => 'shipmentReference',
        'pickupPoint' => 'pickupPoint',
        'order' => 'order',
        'shipmentDetails' => 'shipmentDetails',
        'billingDetails' => 'billingDetails',
        'shipmentItems' => 'shipmentItems',
        'transport' => 'transport'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentId' => 'setShipmentId',
        'shipmentDateTime' => 'setShipmentDateTime',
        'shipmentReference' => 'setShipmentReference',
        'pickupPoint' => 'setPickupPoint',
        'order' => 'setOrder',
        'shipmentDetails' => 'setShipmentDetails',
        'billingDetails' => 'setBillingDetails',
        'shipmentItems' => 'setShipmentItems',
        'transport' => 'setTransport'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentId' => 'getShipmentId',
        'shipmentDateTime' => 'getShipmentDateTime',
        'shipmentReference' => 'getShipmentReference',
        'pickupPoint' => 'getPickupPoint',
        'order' => 'getOrder',
        'shipmentDetails' => 'getShipmentDetails',
        'billingDetails' => 'getBillingDetails',
        'shipmentItems' => 'getShipmentItems',
        'transport' => 'getTransport'
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
        $this->setIfExists('shipmentId', $data ?? [], null);
        $this->setIfExists('shipmentDateTime', $data ?? [], null);
        $this->setIfExists('shipmentReference', $data ?? [], null);
        $this->setIfExists('pickupPoint', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('shipmentDetails', $data ?? [], null);
        $this->setIfExists('billingDetails', $data ?? [], null);
        $this->setIfExists('shipmentItems', $data ?? [], null);
        $this->setIfExists('transport', $data ?? [], null);
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

        if ($this->container['shipmentId'] === null) {
            $invalidProperties[] = "'shipmentId' can't be null";
        }
        if ($this->container['shipmentReference'] === null) {
            $invalidProperties[] = "'shipmentReference' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['shipmentItems'] === null) {
            $invalidProperties[] = "'shipmentItems' can't be null";
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
     * Gets shipmentId
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string $shipmentId A unique identifier for this shipment.
     *
     * @return self
     */
    public function setShipmentId($shipmentId)
    {
        if (is_null($shipmentId)) {
            throw new \InvalidArgumentException('non-nullable shipmentId cannot be null');
        }
        $this->container['shipmentId'] = $shipmentId;

        return $this;
    }

    /**
     * Gets shipmentDateTime
     *
     * @return \DateTime|null
     */
    public function getShipmentDateTime()
    {
        return $this->container['shipmentDateTime'];
    }

    /**
     * Sets shipmentDateTime
     *
     * @param \DateTime|null $shipmentDateTime The date and time in ISO 8601 format when the order item was shipped.
     *
     * @return self
     */
    public function setShipmentDateTime($shipmentDateTime)
    {
        if (is_null($shipmentDateTime)) {
            throw new \InvalidArgumentException('non-nullable shipmentDateTime cannot be null');
        }
        $this->container['shipmentDateTime'] = $shipmentDateTime;

        return $this;
    }

    /**
     * Gets shipmentReference
     *
     * @return string
     */
    public function getShipmentReference()
    {
        return $this->container['shipmentReference'];
    }

    /**
     * Sets shipmentReference
     *
     * @param string $shipmentReference Reference supplied by the user when this item was shipped.
     *
     * @return self
     */
    public function setShipmentReference($shipmentReference)
    {
        if (is_null($shipmentReference)) {
            throw new \InvalidArgumentException('non-nullable shipmentReference cannot be null');
        }
        $this->container['shipmentReference'] = $shipmentReference;

        return $this;
    }

    /**
     * Gets pickupPoint
     *
     * @return bool|null
     */
    public function getPickupPoint()
    {
        return $this->container['pickupPoint'];
    }

    /**
     * Sets pickupPoint
     *
     * @param bool|null $pickupPoint Indicates whether this order is shipped to a Pick Up Point.
     *
     * @return self
     */
    public function setPickupPoint($pickupPoint)
    {
        if (is_null($pickupPoint)) {
            throw new \InvalidArgumentException('non-nullable pickupPoint cannot be null');
        }
        $this->container['pickupPoint'] = $pickupPoint;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentOrder $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets shipmentDetails
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentDetails|null
     */
    public function getShipmentDetails()
    {
        return $this->container['shipmentDetails'];
    }

    /**
     * Sets shipmentDetails
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentDetails|null $shipmentDetails shipmentDetails
     *
     * @return self
     */
    public function setShipmentDetails($shipmentDetails)
    {
        if (is_null($shipmentDetails)) {
            throw new \InvalidArgumentException('non-nullable shipmentDetails cannot be null');
        }
        $this->container['shipmentDetails'] = $shipmentDetails;

        return $this;
    }

    /**
     * Gets billingDetails
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BillingDetails|null
     */
    public function getBillingDetails()
    {
        return $this->container['billingDetails'];
    }

    /**
     * Sets billingDetails
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\BillingDetails|null $billingDetails billingDetails
     *
     * @return self
     */
    public function setBillingDetails($billingDetails)
    {
        if (is_null($billingDetails)) {
            throw new \InvalidArgumentException('non-nullable billingDetails cannot be null');
        }
        $this->container['billingDetails'] = $billingDetails;

        return $this;
    }

    /**
     * Gets shipmentItems
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentItem[]
     */
    public function getShipmentItems()
    {
        return $this->container['shipmentItems'];
    }

    /**
     * Sets shipmentItems
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentItem[] $shipmentItems shipmentItems
     *
     * @return self
     */
    public function setShipmentItems($shipmentItems)
    {
        if (is_null($shipmentItems)) {
            throw new \InvalidArgumentException('non-nullable shipmentItems cannot be null');
        }
        $this->container['shipmentItems'] = $shipmentItems;

        return $this;
    }

    /**
     * Gets transport
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentTransport|null
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ShipmentTransport|null $transport transport
     *
     * @return self
     */
    public function setTransport($transport)
    {
        if (is_null($transport)) {
            throw new \InvalidArgumentException('non-nullable transport cannot be null');
        }
        $this->container['transport'] = $transport;

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


