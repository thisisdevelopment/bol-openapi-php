<?php
/**
 * ReducedOrderItem
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v9 - Retailer API
 *
 * The bol.com API for retailers.  # Authentication Our API requires authentication via OAuth2. The detailed steps to authenticate are explained [here](https://api.bol.com/retailer/public/Retailer-API/authentication.html)   # Demo scenarios Our API specification includes examples of the responses you can expect. For more information as well as more examples, we refer you to the following resources:   - [Demo environment](https://api.bol.com/retailer/public/Retailer-API/demo/demo.html) - [Demo scenarios](https://api.bol.com/retailer/public/Retailer-API/demo/v9-index.html)
 *
 * The version of the OpenAPI document: 9.x
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
 * ReducedOrderItem Class Doc Comment
 *
 * @category Class
 * @description An order item.
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReducedOrderItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReducedOrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orderItemId' => 'string',
        'ean' => 'string',
        'fulfilmentMethod' => 'string',
        'fulfilmentStatus' => 'string',
        'quantity' => 'int',
        'quantityShipped' => 'int',
        'quantityCancelled' => 'int',
        'cancellationRequest' => 'bool',
        'latestChangedDateTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orderItemId' => null,
        'ean' => null,
        'fulfilmentMethod' => null,
        'fulfilmentStatus' => null,
        'quantity' => 'int32',
        'quantityShipped' => 'int32',
        'quantityCancelled' => 'int32',
        'cancellationRequest' => null,
        'latestChangedDateTime' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orderItemId' => false,
        'ean' => false,
        'fulfilmentMethod' => false,
        'fulfilmentStatus' => false,
        'quantity' => false,
        'quantityShipped' => false,
        'quantityCancelled' => false,
        'cancellationRequest' => false,
        'latestChangedDateTime' => false
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
        'orderItemId' => 'orderItemId',
        'ean' => 'ean',
        'fulfilmentMethod' => 'fulfilmentMethod',
        'fulfilmentStatus' => 'fulfilmentStatus',
        'quantity' => 'quantity',
        'quantityShipped' => 'quantityShipped',
        'quantityCancelled' => 'quantityCancelled',
        'cancellationRequest' => 'cancellationRequest',
        'latestChangedDateTime' => 'latestChangedDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderItemId' => 'setOrderItemId',
        'ean' => 'setEan',
        'fulfilmentMethod' => 'setFulfilmentMethod',
        'fulfilmentStatus' => 'setFulfilmentStatus',
        'quantity' => 'setQuantity',
        'quantityShipped' => 'setQuantityShipped',
        'quantityCancelled' => 'setQuantityCancelled',
        'cancellationRequest' => 'setCancellationRequest',
        'latestChangedDateTime' => 'setLatestChangedDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderItemId' => 'getOrderItemId',
        'ean' => 'getEan',
        'fulfilmentMethod' => 'getFulfilmentMethod',
        'fulfilmentStatus' => 'getFulfilmentStatus',
        'quantity' => 'getQuantity',
        'quantityShipped' => 'getQuantityShipped',
        'quantityCancelled' => 'getQuantityCancelled',
        'cancellationRequest' => 'getCancellationRequest',
        'latestChangedDateTime' => 'getLatestChangedDateTime'
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
        $this->setIfExists('orderItemId', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('fulfilmentMethod', $data ?? [], null);
        $this->setIfExists('fulfilmentStatus', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('quantityShipped', $data ?? [], null);
        $this->setIfExists('quantityCancelled', $data ?? [], null);
        $this->setIfExists('cancellationRequest', $data ?? [], null);
        $this->setIfExists('latestChangedDateTime', $data ?? [], null);
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

        if ($this->container['orderItemId'] === null) {
            $invalidProperties[] = "'orderItemId' can't be null";
        }
        if ($this->container['ean'] === null) {
            $invalidProperties[] = "'ean' can't be null";
        }
        if ($this->container['fulfilmentMethod'] === null) {
            $invalidProperties[] = "'fulfilmentMethod' can't be null";
        }
        if ($this->container['fulfilmentStatus'] === null) {
            $invalidProperties[] = "'fulfilmentStatus' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['quantityShipped'] === null) {
            $invalidProperties[] = "'quantityShipped' can't be null";
        }
        if ($this->container['quantityCancelled'] === null) {
            $invalidProperties[] = "'quantityCancelled' can't be null";
        }
        if ($this->container['cancellationRequest'] === null) {
            $invalidProperties[] = "'cancellationRequest' can't be null";
        }
        if ($this->container['latestChangedDateTime'] === null) {
            $invalidProperties[] = "'latestChangedDateTime' can't be null";
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
     * Gets orderItemId
     *
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->container['orderItemId'];
    }

    /**
     * Sets orderItemId
     *
     * @param string $orderItemId The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @return self
     */
    public function setOrderItemId($orderItemId)
    {
        if (is_null($orderItemId)) {
            throw new \InvalidArgumentException('non-nullable orderItemId cannot be null');
        }
        $this->container['orderItemId'] = $orderItemId;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean The EAN number associated with this product.
     *
     * @return self
     */
    public function setEan($ean)
    {
        if (is_null($ean)) {
            throw new \InvalidArgumentException('non-nullable ean cannot be null');
        }
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets fulfilmentMethod
     *
     * @return string
     */
    public function getFulfilmentMethod()
    {
        return $this->container['fulfilmentMethod'];
    }

    /**
     * Sets fulfilmentMethod
     *
     * @param string $fulfilmentMethod The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @return self
     */
    public function setFulfilmentMethod($fulfilmentMethod)
    {
        if (is_null($fulfilmentMethod)) {
            throw new \InvalidArgumentException('non-nullable fulfilmentMethod cannot be null');
        }
        $this->container['fulfilmentMethod'] = $fulfilmentMethod;

        return $this;
    }

    /**
     * Gets fulfilmentStatus
     *
     * @return string
     */
    public function getFulfilmentStatus()
    {
        return $this->container['fulfilmentStatus'];
    }

    /**
     * Sets fulfilmentStatus
     *
     * @param string $fulfilmentStatus To filter on order status. You can filter on either all orders independent from their status, open orders (excluding shipped and cancelled orders), and shipped orders.
     *
     * @return self
     */
    public function setFulfilmentStatus($fulfilmentStatus)
    {
        if (is_null($fulfilmentStatus)) {
            throw new \InvalidArgumentException('non-nullable fulfilmentStatus cannot be null');
        }
        $this->container['fulfilmentStatus'] = $fulfilmentStatus;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Amount of ordered products for this order item id.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantityShipped
     *
     * @return int
     */
    public function getQuantityShipped()
    {
        return $this->container['quantityShipped'];
    }

    /**
     * Sets quantityShipped
     *
     * @param int $quantityShipped Amount of shipped products for this order item id.
     *
     * @return self
     */
    public function setQuantityShipped($quantityShipped)
    {
        if (is_null($quantityShipped)) {
            throw new \InvalidArgumentException('non-nullable quantityShipped cannot be null');
        }
        $this->container['quantityShipped'] = $quantityShipped;

        return $this;
    }

    /**
     * Gets quantityCancelled
     *
     * @return int
     */
    public function getQuantityCancelled()
    {
        return $this->container['quantityCancelled'];
    }

    /**
     * Sets quantityCancelled
     *
     * @param int $quantityCancelled Amount of cancelled products for this order item id.
     *
     * @return self
     */
    public function setQuantityCancelled($quantityCancelled)
    {
        if (is_null($quantityCancelled)) {
            throw new \InvalidArgumentException('non-nullable quantityCancelled cannot be null');
        }
        $this->container['quantityCancelled'] = $quantityCancelled;

        return $this;
    }

    /**
     * Gets cancellationRequest
     *
     * @return bool
     */
    public function getCancellationRequest()
    {
        return $this->container['cancellationRequest'];
    }

    /**
     * Sets cancellationRequest
     *
     * @param bool $cancellationRequest Indicates whether the order was cancelled on request of the customer before the retailer has shipped it.
     *
     * @return self
     */
    public function setCancellationRequest($cancellationRequest)
    {
        if (is_null($cancellationRequest)) {
            throw new \InvalidArgumentException('non-nullable cancellationRequest cannot be null');
        }
        $this->container['cancellationRequest'] = $cancellationRequest;

        return $this;
    }

    /**
     * Gets latestChangedDateTime
     *
     * @return \DateTime
     */
    public function getLatestChangedDateTime()
    {
        return $this->container['latestChangedDateTime'];
    }

    /**
     * Sets latestChangedDateTime
     *
     * @param \DateTime $latestChangedDateTime The date and time in ISO 8601 format when the orderItem was last changed.
     *
     * @return self
     */
    public function setLatestChangedDateTime($latestChangedDateTime)
    {
        if (is_null($latestChangedDateTime)) {
            throw new \InvalidArgumentException('non-nullable latestChangedDateTime cannot be null');
        }
        $this->container['latestChangedDateTime'] = $latestChangedDateTime;

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


