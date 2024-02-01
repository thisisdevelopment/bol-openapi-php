<?php
/**
 * ChangeTransportRequest
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
 * ChangeTransportRequest Class Doc Comment
 *
 * @category Class
 * @description The change transport requested by the user.
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChangeTransportRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChangeTransportRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transporterCode' => 'string',
        'trackAndTrace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transporterCode' => null,
        'trackAndTrace' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transporterCode' => false,
        'trackAndTrace' => false
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
        'transporterCode' => 'transporterCode',
        'trackAndTrace' => 'trackAndTrace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transporterCode' => 'setTransporterCode',
        'trackAndTrace' => 'setTrackAndTrace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transporterCode' => 'getTransporterCode',
        'trackAndTrace' => 'getTrackAndTrace'
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

    public const TRANSPORTER_CODE_AMPERE = 'AMPERE';
    public const TRANSPORTER_CODE_BPOST_BE = 'BPOST_BE';
    public const TRANSPORTER_CODE_BPOST_BRIEF = 'BPOST_BRIEF';
    public const TRANSPORTER_CODE_BRIEFPOST = 'BRIEFPOST';
    public const TRANSPORTER_CODE_BUDBEE = 'BUDBEE';
    public const TRANSPORTER_CODE_COURIER = 'COURIER';
    public const TRANSPORTER_CODE_CYCLOON = 'CYCLOON';
    public const TRANSPORTER_CODE_DHL = 'DHL';
    public const TRANSPORTER_CODE_DHL_GLOBAL_MAIL = 'DHL-GLOBAL-MAIL';
    public const TRANSPORTER_CODE_DHL_SD = 'DHL-SD';
    public const TRANSPORTER_CODE_DHLFORYOU = 'DHLFORYOU';
    public const TRANSPORTER_CODE_DHL_DE = 'DHL_DE';
    public const TRANSPORTER_CODE_DPD_BE = 'DPD-BE';
    public const TRANSPORTER_CODE_DPD_NL = 'DPD-NL';
    public const TRANSPORTER_CODE_DYL = 'DYL';
    public const TRANSPORTER_CODE_FEDEX_BE = 'FEDEX_BE';
    public const TRANSPORTER_CODE_FEDEX_NL = 'FEDEX_NL';
    public const TRANSPORTER_CODE_GLS = 'GLS';
    public const TRANSPORTER_CODE_OTHER = 'OTHER';
    public const TRANSPORTER_CODE_PACKS = 'PACKS';
    public const TRANSPORTER_CODE_PARCEL_NL = 'PARCEL-NL';
    public const TRANSPORTER_CODE_PES = 'PES';
    public const TRANSPORTER_CODE_TNT = 'TNT';
    public const TRANSPORTER_CODE_TNT_EXPRESS = 'TNT-EXPRESS';
    public const TRANSPORTER_CODE_TNT_EXTRA = 'TNT-EXTRA';
    public const TRANSPORTER_CODE_TNT_BRIEF = 'TNT_BRIEF';
    public const TRANSPORTER_CODE_TRANSMISSION = 'TRANSMISSION';
    public const TRANSPORTER_CODE_TRUNKRS = 'TRUNKRS';
    public const TRANSPORTER_CODE_TSN = 'TSN';
    public const TRANSPORTER_CODE_UPS = 'UPS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransporterCodeAllowableValues()
    {
        return [
            self::TRANSPORTER_CODE_AMPERE,
            self::TRANSPORTER_CODE_BPOST_BE,
            self::TRANSPORTER_CODE_BPOST_BRIEF,
            self::TRANSPORTER_CODE_BRIEFPOST,
            self::TRANSPORTER_CODE_BUDBEE,
            self::TRANSPORTER_CODE_COURIER,
            self::TRANSPORTER_CODE_CYCLOON,
            self::TRANSPORTER_CODE_DHL,
            self::TRANSPORTER_CODE_DHL_GLOBAL_MAIL,
            self::TRANSPORTER_CODE_DHL_SD,
            self::TRANSPORTER_CODE_DHLFORYOU,
            self::TRANSPORTER_CODE_DHL_DE,
            self::TRANSPORTER_CODE_DPD_BE,
            self::TRANSPORTER_CODE_DPD_NL,
            self::TRANSPORTER_CODE_DYL,
            self::TRANSPORTER_CODE_FEDEX_BE,
            self::TRANSPORTER_CODE_FEDEX_NL,
            self::TRANSPORTER_CODE_GLS,
            self::TRANSPORTER_CODE_OTHER,
            self::TRANSPORTER_CODE_PACKS,
            self::TRANSPORTER_CODE_PARCEL_NL,
            self::TRANSPORTER_CODE_PES,
            self::TRANSPORTER_CODE_TNT,
            self::TRANSPORTER_CODE_TNT_EXPRESS,
            self::TRANSPORTER_CODE_TNT_EXTRA,
            self::TRANSPORTER_CODE_TNT_BRIEF,
            self::TRANSPORTER_CODE_TRANSMISSION,
            self::TRANSPORTER_CODE_TRUNKRS,
            self::TRANSPORTER_CODE_TSN,
            self::TRANSPORTER_CODE_UPS,
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
        $this->setIfExists('transporterCode', $data ?? [], null);
        $this->setIfExists('trackAndTrace', $data ?? [], null);
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

        $allowedValues = $this->getTransporterCodeAllowableValues();
        if (!is_null($this->container['transporterCode']) && !in_array($this->container['transporterCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transporterCode', must be one of '%s'",
                $this->container['transporterCode'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['trackAndTrace'] === null) {
            $invalidProperties[] = "'trackAndTrace' can't be null";
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
     * Gets transporterCode
     *
     * @return string|null
     */
    public function getTransporterCode()
    {
        return $this->container['transporterCode'];
    }

    /**
     * Sets transporterCode
     *
     * @param string|null $transporterCode transporterCode
     *
     * @return self
     */
    public function setTransporterCode($transporterCode)
    {
        if (is_null($transporterCode)) {
            throw new \InvalidArgumentException('non-nullable transporterCode cannot be null');
        }
        $allowedValues = $this->getTransporterCodeAllowableValues();
        if (!in_array($transporterCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transporterCode', must be one of '%s'",
                    $transporterCode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transporterCode'] = $transporterCode;

        return $this;
    }

    /**
     * Gets trackAndTrace
     *
     * @return string
     */
    public function getTrackAndTrace()
    {
        return $this->container['trackAndTrace'];
    }

    /**
     * Sets trackAndTrace
     *
     * @param string $trackAndTrace The track and trace code that is associated with this transport.
     *
     * @return self
     */
    public function setTrackAndTrace($trackAndTrace)
    {
        if (is_null($trackAndTrace)) {
            throw new \InvalidArgumentException('non-nullable trackAndTrace cannot be null');
        }
        $this->container['trackAndTrace'] = $trackAndTrace;

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


