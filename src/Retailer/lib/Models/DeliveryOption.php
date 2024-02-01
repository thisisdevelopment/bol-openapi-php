<?php
/**
 * DeliveryOption
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
 * DeliveryOption Class Doc Comment
 *
 * @category Class
 * @description A delivery option shows how and the costs of a transport for a shippable configuration
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DeliveryOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shippingLabelOfferId' => 'string',
        'recommended' => 'bool',
        'validUntilDate' => '\DateTime',
        'transporterCode' => 'string',
        'labelType' => 'string',
        'labelDisplayName' => 'string',
        'labelPrice' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\LabelPrice',
        'packageRestrictions' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PackageRestrictions',
        'handoverDetails' => '\ThisIsDevelopment\OpenApi\Bol\Retailer\Models\HandoverDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shippingLabelOfferId' => null,
        'recommended' => null,
        'validUntilDate' => 'date',
        'transporterCode' => null,
        'labelType' => null,
        'labelDisplayName' => null,
        'labelPrice' => null,
        'packageRestrictions' => null,
        'handoverDetails' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shippingLabelOfferId' => false,
        'recommended' => false,
        'validUntilDate' => false,
        'transporterCode' => false,
        'labelType' => false,
        'labelDisplayName' => false,
        'labelPrice' => false,
        'packageRestrictions' => false,
        'handoverDetails' => false
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
        'shippingLabelOfferId' => 'shippingLabelOfferId',
        'recommended' => 'recommended',
        'validUntilDate' => 'validUntilDate',
        'transporterCode' => 'transporterCode',
        'labelType' => 'labelType',
        'labelDisplayName' => 'labelDisplayName',
        'labelPrice' => 'labelPrice',
        'packageRestrictions' => 'packageRestrictions',
        'handoverDetails' => 'handoverDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shippingLabelOfferId' => 'setShippingLabelOfferId',
        'recommended' => 'setRecommended',
        'validUntilDate' => 'setValidUntilDate',
        'transporterCode' => 'setTransporterCode',
        'labelType' => 'setLabelType',
        'labelDisplayName' => 'setLabelDisplayName',
        'labelPrice' => 'setLabelPrice',
        'packageRestrictions' => 'setPackageRestrictions',
        'handoverDetails' => 'setHandoverDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shippingLabelOfferId' => 'getShippingLabelOfferId',
        'recommended' => 'getRecommended',
        'validUntilDate' => 'getValidUntilDate',
        'transporterCode' => 'getTransporterCode',
        'labelType' => 'getLabelType',
        'labelDisplayName' => 'getLabelDisplayName',
        'labelPrice' => 'getLabelPrice',
        'packageRestrictions' => 'getPackageRestrictions',
        'handoverDetails' => 'getHandoverDetails'
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

    public const LABEL_TYPE_PARCEL = 'PARCEL';
    public const LABEL_TYPE_MAILBOX = 'MAILBOX';
    public const LABEL_TYPE_MAILBOX_LIGHT = 'MAILBOX_LIGHT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelTypeAllowableValues()
    {
        return [
            self::LABEL_TYPE_PARCEL,
            self::LABEL_TYPE_MAILBOX,
            self::LABEL_TYPE_MAILBOX_LIGHT,
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
        $this->setIfExists('shippingLabelOfferId', $data ?? [], null);
        $this->setIfExists('recommended', $data ?? [], null);
        $this->setIfExists('validUntilDate', $data ?? [], null);
        $this->setIfExists('transporterCode', $data ?? [], null);
        $this->setIfExists('labelType', $data ?? [], null);
        $this->setIfExists('labelDisplayName', $data ?? [], null);
        $this->setIfExists('labelPrice', $data ?? [], null);
        $this->setIfExists('packageRestrictions', $data ?? [], null);
        $this->setIfExists('handoverDetails', $data ?? [], null);
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

        if ($this->container['shippingLabelOfferId'] === null) {
            $invalidProperties[] = "'shippingLabelOfferId' can't be null";
        }
        if ($this->container['recommended'] === null) {
            $invalidProperties[] = "'recommended' can't be null";
        }
        if ($this->container['transporterCode'] === null) {
            $invalidProperties[] = "'transporterCode' can't be null";
        }
        if ($this->container['labelType'] === null) {
            $invalidProperties[] = "'labelType' can't be null";
        }
        $allowedValues = $this->getLabelTypeAllowableValues();
        if (!is_null($this->container['labelType']) && !in_array($this->container['labelType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'labelType', must be one of '%s'",
                $this->container['labelType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['labelDisplayName'] === null) {
            $invalidProperties[] = "'labelDisplayName' can't be null";
        }
        if ($this->container['labelPrice'] === null) {
            $invalidProperties[] = "'labelPrice' can't be null";
        }
        if ($this->container['packageRestrictions'] === null) {
            $invalidProperties[] = "'packageRestrictions' can't be null";
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
     * Gets shippingLabelOfferId
     *
     * @return string
     */
    public function getShippingLabelOfferId()
    {
        return $this->container['shippingLabelOfferId'];
    }

    /**
     * Sets shippingLabelOfferId
     *
     * @param string $shippingLabelOfferId Unique identifier for the shipping label offer.
     *
     * @return self
     */
    public function setShippingLabelOfferId($shippingLabelOfferId)
    {
        if (is_null($shippingLabelOfferId)) {
            throw new \InvalidArgumentException('non-nullable shippingLabelOfferId cannot be null');
        }
        $this->container['shippingLabelOfferId'] = $shippingLabelOfferId;

        return $this;
    }

    /**
     * Gets recommended
     *
     * @return bool
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     *
     * @param bool $recommended Indicates whether this delivery option is recommended to be the best option to ship your order item(s) with.
     *
     * @return self
     */
    public function setRecommended($recommended)
    {
        if (is_null($recommended)) {
            throw new \InvalidArgumentException('non-nullable recommended cannot be null');
        }
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets validUntilDate
     *
     * @return \DateTime|null
     */
    public function getValidUntilDate()
    {
        return $this->container['validUntilDate'];
    }

    /**
     * Sets validUntilDate
     *
     * @param \DateTime|null $validUntilDate The date until the delivery option (incl total price) is valid.
     *
     * @return self
     */
    public function setValidUntilDate($validUntilDate)
    {
        if (is_null($validUntilDate)) {
            throw new \InvalidArgumentException('non-nullable validUntilDate cannot be null');
        }
        $this->container['validUntilDate'] = $validUntilDate;

        return $this;
    }

    /**
     * Gets transporterCode
     *
     * @return string
     */
    public function getTransporterCode()
    {
        return $this->container['transporterCode'];
    }

    /**
     * Sets transporterCode
     *
     * @param string $transporterCode A code representing the transporter which is being used for transportation.
     *
     * @return self
     */
    public function setTransporterCode($transporterCode)
    {
        if (is_null($transporterCode)) {
            throw new \InvalidArgumentException('non-nullable transporterCode cannot be null');
        }
        $this->container['transporterCode'] = $transporterCode;

        return $this;
    }

    /**
     * Gets labelType
     *
     * @return string
     */
    public function getLabelType()
    {
        return $this->container['labelType'];
    }

    /**
     * Sets labelType
     *
     * @param string $labelType The type of the label, representing the way an item is being transported. MAILBOX is a mailbox package with delivery scan. MAILBOX_LIGHT is a mailbox package without delivery scan. PARCEL is a normal package.
     *
     * @return self
     */
    public function setLabelType($labelType)
    {
        if (is_null($labelType)) {
            throw new \InvalidArgumentException('non-nullable labelType cannot be null');
        }
        $allowedValues = $this->getLabelTypeAllowableValues();
        if (!in_array($labelType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'labelType', must be one of '%s'",
                    $labelType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['labelType'] = $labelType;

        return $this;
    }

    /**
     * Gets labelDisplayName
     *
     * @return string
     */
    public function getLabelDisplayName()
    {
        return $this->container['labelDisplayName'];
    }

    /**
     * Sets labelDisplayName
     *
     * @param string $labelDisplayName The display name of the shipping label.
     *
     * @return self
     */
    public function setLabelDisplayName($labelDisplayName)
    {
        if (is_null($labelDisplayName)) {
            throw new \InvalidArgumentException('non-nullable labelDisplayName cannot be null');
        }
        $this->container['labelDisplayName'] = $labelDisplayName;

        return $this;
    }

    /**
     * Gets labelPrice
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\LabelPrice
     */
    public function getLabelPrice()
    {
        return $this->container['labelPrice'];
    }

    /**
     * Sets labelPrice
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\LabelPrice $labelPrice labelPrice
     *
     * @return self
     */
    public function setLabelPrice($labelPrice)
    {
        if (is_null($labelPrice)) {
            throw new \InvalidArgumentException('non-nullable labelPrice cannot be null');
        }
        $this->container['labelPrice'] = $labelPrice;

        return $this;
    }

    /**
     * Gets packageRestrictions
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PackageRestrictions
     */
    public function getPackageRestrictions()
    {
        return $this->container['packageRestrictions'];
    }

    /**
     * Sets packageRestrictions
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\PackageRestrictions $packageRestrictions packageRestrictions
     *
     * @return self
     */
    public function setPackageRestrictions($packageRestrictions)
    {
        if (is_null($packageRestrictions)) {
            throw new \InvalidArgumentException('non-nullable packageRestrictions cannot be null');
        }
        $this->container['packageRestrictions'] = $packageRestrictions;

        return $this;
    }

    /**
     * Gets handoverDetails
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\HandoverDetails|null
     */
    public function getHandoverDetails()
    {
        return $this->container['handoverDetails'];
    }

    /**
     * Sets handoverDetails
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Retailer\Models\HandoverDetails|null $handoverDetails handoverDetails
     *
     * @return self
     */
    public function setHandoverDetails($handoverDetails)
    {
        if (is_null($handoverDetails)) {
            throw new \InvalidArgumentException('non-nullable handoverDetails cannot be null');
        }
        $this->container['handoverDetails'] = $handoverDetails;

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


