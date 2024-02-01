<?php
/**
 * Commission
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
 * Commission Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Commission implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Commission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ean' => 'string',
        'condition' => 'string',
        'unitPrice' => 'float',
        'fixedAmount' => 'float',
        'percentage' => 'float',
        'totalCost' => 'float',
        'totalCostWithoutReduction' => 'float',
        'reductions' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Reduction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ean' => null,
        'condition' => null,
        'unitPrice' => null,
        'fixedAmount' => null,
        'percentage' => null,
        'totalCost' => null,
        'totalCostWithoutReduction' => null,
        'reductions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ean' => false,
        'condition' => false,
        'unitPrice' => false,
        'fixedAmount' => false,
        'percentage' => false,
        'totalCost' => false,
        'totalCostWithoutReduction' => false,
        'reductions' => false
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
        'ean' => 'ean',
        'condition' => 'condition',
        'unitPrice' => 'unitPrice',
        'fixedAmount' => 'fixedAmount',
        'percentage' => 'percentage',
        'totalCost' => 'totalCost',
        'totalCostWithoutReduction' => 'totalCostWithoutReduction',
        'reductions' => 'reductions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ean' => 'setEan',
        'condition' => 'setCondition',
        'unitPrice' => 'setUnitPrice',
        'fixedAmount' => 'setFixedAmount',
        'percentage' => 'setPercentage',
        'totalCost' => 'setTotalCost',
        'totalCostWithoutReduction' => 'setTotalCostWithoutReduction',
        'reductions' => 'setReductions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ean' => 'getEan',
        'condition' => 'getCondition',
        'unitPrice' => 'getUnitPrice',
        'fixedAmount' => 'getFixedAmount',
        'percentage' => 'getPercentage',
        'totalCost' => 'getTotalCost',
        'totalCostWithoutReduction' => 'getTotalCostWithoutReduction',
        'reductions' => 'getReductions'
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
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('fixedAmount', $data ?? [], null);
        $this->setIfExists('percentage', $data ?? [], null);
        $this->setIfExists('totalCost', $data ?? [], null);
        $this->setIfExists('totalCostWithoutReduction', $data ?? [], null);
        $this->setIfExists('reductions', $data ?? [], null);
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

        if ($this->container['ean'] === null) {
            $invalidProperties[] = "'ean' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['unitPrice'] === null) {
            $invalidProperties[] = "'unitPrice' can't be null";
        }
        if ($this->container['fixedAmount'] === null) {
            $invalidProperties[] = "'fixedAmount' can't be null";
        }
        if ($this->container['percentage'] === null) {
            $invalidProperties[] = "'percentage' can't be null";
        }
        if ($this->container['totalCost'] === null) {
            $invalidProperties[] = "'totalCost' can't be null";
        }
        if ($this->container['reductions'] === null) {
            $invalidProperties[] = "'reductions' can't be null";
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
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition The condition of the offer.
     *
     * @return self
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param float $unitPrice The intended selling price per single unit up to 2 decimals precision, including VAT.
     *
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        if (is_null($unitPrice)) {
            throw new \InvalidArgumentException('non-nullable unitPrice cannot be null');
        }
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets fixedAmount
     *
     * @return float
     */
    public function getFixedAmount()
    {
        return $this->container['fixedAmount'];
    }

    /**
     * Sets fixedAmount
     *
     * @param float $fixedAmount A fixed commission fee, including VAT.
     *
     * @return self
     */
    public function setFixedAmount($fixedAmount)
    {
        if (is_null($fixedAmount)) {
            throw new \InvalidArgumentException('non-nullable fixedAmount cannot be null');
        }
        $this->container['fixedAmount'] = $fixedAmount;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param float $percentage A percentage of commission, based on the intended selling price per unit, including VAT.
     *
     * @return self
     */
    public function setPercentage($percentage)
    {
        if (is_null($percentage)) {
            throw new \InvalidArgumentException('non-nullable percentage cannot be null');
        }
        $this->container['percentage'] = $percentage;

        return $this;
    }

    /**
     * Gets totalCost
     *
     * @return float
     */
    public function getTotalCost()
    {
        return $this->container['totalCost'];
    }

    /**
     * Sets totalCost
     *
     * @param float $totalCost The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers.
     *
     * @return self
     */
    public function setTotalCost($totalCost)
    {
        if (is_null($totalCost)) {
            throw new \InvalidArgumentException('non-nullable totalCost cannot be null');
        }
        $this->container['totalCost'] = $totalCost;

        return $this;
    }

    /**
     * Gets totalCostWithoutReduction
     *
     * @return float|null
     */
    public function getTotalCostWithoutReduction()
    {
        return $this->container['totalCostWithoutReduction'];
    }

    /**
     * Sets totalCostWithoutReduction
     *
     * @param float|null $totalCostWithoutReduction The total commission for selling this product at bol.com without reductions including VAT.
     *
     * @return self
     */
    public function setTotalCostWithoutReduction($totalCostWithoutReduction)
    {
        if (is_null($totalCostWithoutReduction)) {
            throw new \InvalidArgumentException('non-nullable totalCostWithoutReduction cannot be null');
        }
        $this->container['totalCostWithoutReduction'] = $totalCostWithoutReduction;

        return $this;
    }

    /**
     * Gets reductions
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Reduction[]
     */
    public function getReductions()
    {
        return $this->container['reductions'];
    }

    /**
     * Sets reductions
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\Reduction[] $reductions reductions
     *
     * @return self
     */
    public function setReductions($reductions)
    {
        if (is_null($reductions)) {
            throw new \InvalidArgumentException('non-nullable reductions cannot be null');
        }
        $this->container['reductions'] = $reductions;

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


