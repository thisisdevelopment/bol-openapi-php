<?php
/**
 * ReducedReturnItem
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
 * ReducedReturnItem Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReducedReturnItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReducedReturnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rmaId' => 'string',
        'orderId' => 'string',
        'ean' => 'string',
        'expectedQuantity' => 'int',
        'returnReason' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnReason',
        'handled' => 'bool',
        'processingResults' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnProcessingResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rmaId' => null,
        'orderId' => null,
        'ean' => null,
        'expectedQuantity' => 'int32',
        'returnReason' => null,
        'handled' => null,
        'processingResults' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'rmaId' => false,
        'orderId' => false,
        'ean' => false,
        'expectedQuantity' => false,
        'returnReason' => false,
        'handled' => false,
        'processingResults' => false
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
        'rmaId' => 'rmaId',
        'orderId' => 'orderId',
        'ean' => 'ean',
        'expectedQuantity' => 'expectedQuantity',
        'returnReason' => 'returnReason',
        'handled' => 'handled',
        'processingResults' => 'processingResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rmaId' => 'setRmaId',
        'orderId' => 'setOrderId',
        'ean' => 'setEan',
        'expectedQuantity' => 'setExpectedQuantity',
        'returnReason' => 'setReturnReason',
        'handled' => 'setHandled',
        'processingResults' => 'setProcessingResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rmaId' => 'getRmaId',
        'orderId' => 'getOrderId',
        'ean' => 'getEan',
        'expectedQuantity' => 'getExpectedQuantity',
        'returnReason' => 'getReturnReason',
        'handled' => 'getHandled',
        'processingResults' => 'getProcessingResults'
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
        $this->setIfExists('rmaId', $data ?? [], null);
        $this->setIfExists('orderId', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('expectedQuantity', $data ?? [], null);
        $this->setIfExists('returnReason', $data ?? [], null);
        $this->setIfExists('handled', $data ?? [], null);
        $this->setIfExists('processingResults', $data ?? [], null);
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

        if ($this->container['rmaId'] === null) {
            $invalidProperties[] = "'rmaId' can't be null";
        }
        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
        if ($this->container['ean'] === null) {
            $invalidProperties[] = "'ean' can't be null";
        }
        if ($this->container['expectedQuantity'] === null) {
            $invalidProperties[] = "'expectedQuantity' can't be null";
        }
        if ($this->container['returnReason'] === null) {
            $invalidProperties[] = "'returnReason' can't be null";
        }
        if ($this->container['handled'] === null) {
            $invalidProperties[] = "'handled' can't be null";
        }
        if ($this->container['processingResults'] === null) {
            $invalidProperties[] = "'processingResults' can't be null";
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
     * Gets rmaId
     *
     * @return string
     */
    public function getRmaId()
    {
        return $this->container['rmaId'];
    }

    /**
     * Sets rmaId
     *
     * @param string $rmaId The RMA (Return Merchandise Authorization) identifier of the return.
     *
     * @return self
     */
    public function setRmaId($rmaId)
    {
        if (is_null($rmaId)) {
            throw new \InvalidArgumentException('non-nullable rmaId cannot be null');
        }
        $this->container['rmaId'] = $rmaId;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId The id of the customer order this return item is in.
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        if (is_null($orderId)) {
            throw new \InvalidArgumentException('non-nullable orderId cannot be null');
        }
        $this->container['orderId'] = $orderId;

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
     * Gets expectedQuantity
     *
     * @return int
     */
    public function getExpectedQuantity()
    {
        return $this->container['expectedQuantity'];
    }

    /**
     * Sets expectedQuantity
     *
     * @param int $expectedQuantity The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order.
     *
     * @return self
     */
    public function setExpectedQuantity($expectedQuantity)
    {
        if (is_null($expectedQuantity)) {
            throw new \InvalidArgumentException('non-nullable expectedQuantity cannot be null');
        }
        $this->container['expectedQuantity'] = $expectedQuantity;

        return $this;
    }

    /**
     * Gets returnReason
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnReason
     */
    public function getReturnReason()
    {
        return $this->container['returnReason'];
    }

    /**
     * Sets returnReason
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnReason $returnReason returnReason
     *
     * @return self
     */
    public function setReturnReason($returnReason)
    {
        if (is_null($returnReason)) {
            throw new \InvalidArgumentException('non-nullable returnReason cannot be null');
        }
        $this->container['returnReason'] = $returnReason;

        return $this;
    }

    /**
     * Gets handled
     *
     * @return bool
     */
    public function getHandled()
    {
        return $this->container['handled'];
    }

    /**
     * Sets handled
     *
     * @param bool $handled Indicates if this return item has been handled (by the retailer).
     *
     * @return self
     */
    public function setHandled($handled)
    {
        if (is_null($handled)) {
            throw new \InvalidArgumentException('non-nullable handled cannot be null');
        }
        $this->container['handled'] = $handled;

        return $this;
    }

    /**
     * Gets processingResults
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnProcessingResult[]
     */
    public function getProcessingResults()
    {
        return $this->container['processingResults'];
    }

    /**
     * Sets processingResults
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\ReturnProcessingResult[] $processingResults processingResults
     *
     * @return self
     */
    public function setProcessingResults($processingResults)
    {
        if (is_null($processingResults)) {
            throw new \InvalidArgumentException('non-nullable processingResults cannot be null');
        }
        $this->container['processingResults'] = $processingResults;

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

