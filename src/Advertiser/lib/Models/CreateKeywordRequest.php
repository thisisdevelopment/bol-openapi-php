<?php
/**
 * CreateKeywordRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Advertiser
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v9 - Advertising API
 *
 * The bol.com API for advertisers.  # Authentication Our API requires authentication via OAuth2. The detailed steps to authenticate are explained [here](https://api.bol.com/retailer/public/Retailer-API/authentication.html)   # Demo scenarios Our API specification includes examples of the responses you can expect. For more information as well as more examples, we refer you to the following resources:   - [Demo environment](https://api.bol.com/retailer/public/Retailer-API/demo/demo.html) - [Demo scenarios](https://api.bol.com/retailer/public/Retailer-API/demo/v9-index.html)
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

namespace ThisIsDevelopment\OpenApi\Bol\Advertiser\Models;

use \ArrayAccess;
use \ThisIsDevelopment\OpenApi\Bol\Advertiser\ObjectSerializer;

/**
 * CreateKeywordRequest Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Advertiser
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateKeywordRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateKeywordRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adGroupId' => 'string',
        'keywordText' => 'string',
        'matchType' => 'string',
        'bid' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adGroupId' => null,
        'keywordText' => null,
        'matchType' => null,
        'bid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'adGroupId' => false,
        'keywordText' => false,
        'matchType' => false,
        'bid' => false
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
        'adGroupId' => 'adGroupId',
        'keywordText' => 'keywordText',
        'matchType' => 'matchType',
        'bid' => 'bid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adGroupId' => 'setAdGroupId',
        'keywordText' => 'setKeywordText',
        'matchType' => 'setMatchType',
        'bid' => 'setBid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adGroupId' => 'getAdGroupId',
        'keywordText' => 'getKeywordText',
        'matchType' => 'getMatchType',
        'bid' => 'getBid'
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

    public const MATCH_TYPE_EXACT = 'EXACT';
    public const MATCH_TYPE_PHRASE = 'PHRASE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMatchTypeAllowableValues()
    {
        return [
            self::MATCH_TYPE_EXACT,
            self::MATCH_TYPE_PHRASE,
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
        $this->setIfExists('adGroupId', $data ?? [], null);
        $this->setIfExists('keywordText', $data ?? [], null);
        $this->setIfExists('matchType', $data ?? [], null);
        $this->setIfExists('bid', $data ?? [], null);
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

        if ($this->container['adGroupId'] === null) {
            $invalidProperties[] = "'adGroupId' can't be null";
        }
        if ($this->container['keywordText'] === null) {
            $invalidProperties[] = "'keywordText' can't be null";
        }
        if ($this->container['matchType'] === null) {
            $invalidProperties[] = "'matchType' can't be null";
        }
        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!is_null($this->container['matchType']) && !in_array($this->container['matchType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'matchType', must be one of '%s'",
                $this->container['matchType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['bid']) && ($this->container['bid'] < 0)) {
            $invalidProperties[] = "invalid value for 'bid', must be bigger than or equal to 0.";
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
     * Gets adGroupId
     *
     * @return string
     */
    public function getAdGroupId()
    {
        return $this->container['adGroupId'];
    }

    /**
     * Sets adGroupId
     *
     * @param string $adGroupId The identifier of the parent ad group.
     *
     * @return self
     */
    public function setAdGroupId($adGroupId)
    {
        if (is_null($adGroupId)) {
            throw new \InvalidArgumentException('non-nullable adGroupId cannot be null');
        }
        $this->container['adGroupId'] = $adGroupId;

        return $this;
    }

    /**
     * Gets keywordText
     *
     * @return string
     */
    public function getKeywordText()
    {
        return $this->container['keywordText'];
    }

    /**
     * Sets keywordText
     *
     * @param string $keywordText The text or phrase used in the keyword that caused the ad to be displayed to the user.
     *
     * @return self
     */
    public function setKeywordText($keywordText)
    {
        if (is_null($keywordText)) {
            throw new \InvalidArgumentException('non-nullable keywordText cannot be null');
        }
        $this->container['keywordText'] = $keywordText;

        return $this;
    }

    /**
     * Gets matchType
     *
     * @return string
     */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
     * Sets matchType
     *
     * @param string $matchType The match type that relates the keyword and the search term.
     *
     * @return self
     */
    public function setMatchType($matchType)
    {
        if (is_null($matchType)) {
            throw new \InvalidArgumentException('non-nullable matchType cannot be null');
        }
        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!in_array($matchType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'matchType', must be one of '%s'",
                    $matchType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['matchType'] = $matchType;

        return $this;
    }

    /**
     * Gets bid
     *
     * @return float|null
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid
     *
     * @param float|null $bid The bid price. The price should always have two decimals of precision.
     *
     * @return self
     */
    public function setBid($bid)
    {
        if (is_null($bid)) {
            throw new \InvalidArgumentException('non-nullable bid cannot be null');
        }

        if (($bid < 0)) {
            throw new \InvalidArgumentException('invalid value for $bid when calling CreateKeywordRequest., must be bigger than or equal to 0.');
        }

        $this->container['bid'] = $bid;

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


