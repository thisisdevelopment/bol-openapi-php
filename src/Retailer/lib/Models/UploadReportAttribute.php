<?php
/**
 * UploadReportAttribute
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
 * UploadReportAttribute Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UploadReportAttribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UploadReportAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'values' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UploadReportValue[]',
        'status' => 'string',
        'subStatus' => 'string',
        'subStatusDescription' => 'string'
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
        'values' => null,
        'status' => null,
        'subStatus' => null,
        'subStatusDescription' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'values' => false,
        'status' => false,
        'subStatus' => false,
        'subStatusDescription' => false
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
        'values' => 'values',
        'status' => 'status',
        'subStatus' => 'subStatus',
        'subStatusDescription' => 'subStatusDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'values' => 'setValues',
        'status' => 'setStatus',
        'subStatus' => 'setSubStatus',
        'subStatusDescription' => 'setSubStatusDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'values' => 'getValues',
        'status' => 'getStatus',
        'subStatus' => 'getSubStatus',
        'subStatusDescription' => 'getSubStatusDescription'
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

    public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    public const STATUS_DECLINED = 'DECLINED';
    public const STATUS_PUBLISHED = 'PUBLISHED';
    public const SUB_STATUS_BLOCKED_BY_RATE_LIMITER = 'BLOCKED_BY_RATE_LIMITER';
    public const SUB_STATUS_CREATED = 'CREATED';
    public const SUB_STATUS_DEPRECATED = 'DEPRECATED';
    public const SUB_STATUS_IDENTICAL_VALUE_AS_BEFORE = 'IDENTICAL_VALUE_AS_BEFORE';
    public const SUB_STATUS_MATCH_TO_PRODUCT_FAILED = 'MATCH_TO_PRODUCT_FAILED';
    public const SUB_STATUS_NOT_CHANGED = 'NOT_CHANGED';
    public const SUB_STATUS_NOT_RECENT = 'NOT_RECENT';
    public const SUB_STATUS_PROCESSING_STARTED = 'PROCESSING_STARTED';
    public const SUB_STATUS_RECEIVED = 'RECEIVED';
    public const SUB_STATUS_REJECTED = 'REJECTED';
    public const SUB_STATUS_REJECTED_BY_BRAND_AUTHORITY = 'REJECTED_BY_BRAND_AUTHORITY';
    public const SUB_STATUS_REJECTED_BY_LOGISTIC = 'REJECTED_BY_LOGISTIC';
    public const SUB_STATUS_REJECTED_NO_DATA = 'REJECTED_NO_DATA';
    public const SUB_STATUS_REJECTED_UNPROCESSABLE = 'REJECTED_UNPROCESSABLE';
    public const SUB_STATUS_SELECTED = 'SELECTED';
    public const SUB_STATUS_SELECTED_BY_BRAND_AUTHORITY = 'SELECTED_BY_BRAND_AUTHORITY';
    public const SUB_STATUS_SELECTED_BY_LOGISTIC = 'SELECTED_BY_LOGISTIC';
    public const SUB_STATUS_SELECTION_DELETED = 'SELECTION_DELETED';
    public const SUB_STATUS_SELECTION_MERGED = 'SELECTION_MERGED';
    public const SUB_STATUS_TIMED_OUT = 'TIMED_OUT';
    public const SUB_STATUS_UPDATED = 'UPDATED';
    public const SUB_STATUS_UPLOADED = 'UPLOADED';
    public const SUB_STATUS_UNKNOWN = 'UNKNOWN';
    public const SUB_STATUS_VALID_EAN = 'VALID_EAN';
    public const SUB_STATUS_VALIDATED = 'VALIDATED';
    public const SUB_STATUS_VALIDATION_FAILED = 'VALIDATION_FAILED';
    public const SUB_STATUS_VALIDATION_FAILED_DISABLED_GPC_CODE = 'VALIDATION_FAILED_DISABLED_GPC_CODE';
    public const SUB_STATUS_VALIDATION_FAILED_DOES_NOT_EXIST = 'VALIDATION_FAILED_DOES_NOT_EXIST';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_DATE = 'VALIDATION_FAILED_INVALID_DATE';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_EAN = 'VALIDATION_FAILED_INVALID_EAN';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_FRACTION = 'VALIDATION_FAILED_INVALID_FRACTION';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_GPC_CODE = 'VALIDATION_FAILED_INVALID_GPC_CODE';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_INTEGER = 'VALIDATION_FAILED_INVALID_INTEGER';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_ISODATE = 'VALIDATION_FAILED_INVALID_ISODATE';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_ISODATETIME = 'VALIDATION_FAILED_INVALID_ISODATETIME';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_LOV_VALUE = 'VALIDATION_FAILED_INVALID_LOV_VALUE';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_MULTIPLE_VALUES = 'VALIDATION_FAILED_INVALID_MULTIPLE_VALUES';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_NO_VALUES = 'VALIDATION_FAILED_INVALID_NO_VALUES';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_NUMBER = 'VALIDATION_FAILED_INVALID_NUMBER';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_NUMERIC_TEXT = 'VALIDATION_FAILED_INVALID_NUMERIC_TEXT';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_TEXT = 'VALIDATION_FAILED_INVALID_TEXT';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_UNIT = 'VALIDATION_FAILED_INVALID_UNIT';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_URL = 'VALIDATION_FAILED_INVALID_URL';
    public const SUB_STATUS_VALIDATION_FAILED_INVALID_VALUES = 'VALIDATION_FAILED_INVALID_VALUES';
    public const SUB_STATUS_VALIDATION_FAILED_NOT_ALLOWED = 'VALIDATION_FAILED_NOT_ALLOWED';
    public const SUB_STATUS_VALIDATION_FAILED_UNKNOWN_BASETYPE = 'VALIDATION_FAILED_UNKNOWN_BASETYPE';
    public const SUB_STATUS_WAITING_FOR_GLOBAL_ID = 'WAITING_FOR_GLOBAL_ID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_DECLINED,
            self::STATUS_PUBLISHED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubStatusAllowableValues()
    {
        return [
            self::SUB_STATUS_BLOCKED_BY_RATE_LIMITER,
            self::SUB_STATUS_CREATED,
            self::SUB_STATUS_DEPRECATED,
            self::SUB_STATUS_IDENTICAL_VALUE_AS_BEFORE,
            self::SUB_STATUS_MATCH_TO_PRODUCT_FAILED,
            self::SUB_STATUS_NOT_CHANGED,
            self::SUB_STATUS_NOT_RECENT,
            self::SUB_STATUS_PROCESSING_STARTED,
            self::SUB_STATUS_RECEIVED,
            self::SUB_STATUS_REJECTED,
            self::SUB_STATUS_REJECTED_BY_BRAND_AUTHORITY,
            self::SUB_STATUS_REJECTED_BY_LOGISTIC,
            self::SUB_STATUS_REJECTED_NO_DATA,
            self::SUB_STATUS_REJECTED_UNPROCESSABLE,
            self::SUB_STATUS_SELECTED,
            self::SUB_STATUS_SELECTED_BY_BRAND_AUTHORITY,
            self::SUB_STATUS_SELECTED_BY_LOGISTIC,
            self::SUB_STATUS_SELECTION_DELETED,
            self::SUB_STATUS_SELECTION_MERGED,
            self::SUB_STATUS_TIMED_OUT,
            self::SUB_STATUS_UPDATED,
            self::SUB_STATUS_UPLOADED,
            self::SUB_STATUS_UNKNOWN,
            self::SUB_STATUS_VALID_EAN,
            self::SUB_STATUS_VALIDATED,
            self::SUB_STATUS_VALIDATION_FAILED,
            self::SUB_STATUS_VALIDATION_FAILED_DISABLED_GPC_CODE,
            self::SUB_STATUS_VALIDATION_FAILED_DOES_NOT_EXIST,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_DATE,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_EAN,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_FRACTION,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_GPC_CODE,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_INTEGER,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_ISODATE,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_ISODATETIME,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_LOV_VALUE,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_MULTIPLE_VALUES,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_NO_VALUES,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_NUMBER,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_NUMERIC_TEXT,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_TEXT,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_UNIT,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_URL,
            self::SUB_STATUS_VALIDATION_FAILED_INVALID_VALUES,
            self::SUB_STATUS_VALIDATION_FAILED_NOT_ALLOWED,
            self::SUB_STATUS_VALIDATION_FAILED_UNKNOWN_BASETYPE,
            self::SUB_STATUS_WAITING_FOR_GLOBAL_ID,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('subStatus', $data ?? [], null);
        $this->setIfExists('subStatusDescription', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubStatusAllowableValues();
        if (!is_null($this->container['subStatus']) && !in_array($this->container['subStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subStatus', must be one of '%s'",
                $this->container['subStatus'],
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The identifier of the attribute for which the value has changed.
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
     * Gets values
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UploadReportValue[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\UploadReportValue[] $values values
     *
     * @return self
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The processing state of the submitted attribute.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subStatus
     *
     * @return string|null
     */
    public function getSubStatus()
    {
        return $this->container['subStatus'];
    }

    /**
     * Sets subStatus
     *
     * @param string|null $subStatus The reason code explaining why the value was rejected.
     *
     * @return self
     */
    public function setSubStatus($subStatus)
    {
        if (is_null($subStatus)) {
            throw new \InvalidArgumentException('non-nullable subStatus cannot be null');
        }
        $allowedValues = $this->getSubStatusAllowableValues();
        if (!in_array($subStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subStatus', must be one of '%s'",
                    $subStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subStatus'] = $subStatus;

        return $this;
    }

    /**
     * Gets subStatusDescription
     *
     * @return string|null
     */
    public function getSubStatusDescription()
    {
        return $this->container['subStatusDescription'];
    }

    /**
     * Sets subStatusDescription
     *
     * @param string|null $subStatusDescription The reason explaining why the value was rejected.
     *
     * @return self
     */
    public function setSubStatusDescription($subStatusDescription)
    {
        if (is_null($subStatusDescription)) {
            throw new \InvalidArgumentException('non-nullable subStatusDescription cannot be null');
        }
        $this->container['subStatusDescription'] = $subStatusDescription;

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


