<?php
/**
 * CreateCampaignRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Advertiser
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * v8 - Advertising API
 *
 * The bol.com API for advertisers.  # Authentication Our API requires authentication via OAuth2. The detailed steps to authenticate are explained [here](https://api.bol.com/retailer/public/Retailer-API/authentication.html)   # Demo scenarios Our API specification includes examples of the responses you can expect. For more information as well as more examples, we refer you to the following resources:   - [Demo environment](https://api.bol.com/retailer/public/Retailer-API/demo/demo.html) - [Demo scenarios](https://api.bol.com/retailer/public/Retailer-API/demo/v8-index.html)
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

namespace ThisIsDevelopment\OpenApi\Bol\Advertiser\Models;

use \ArrayAccess;
use \ThisIsDevelopment\OpenApi\Bol\Advertiser\ObjectSerializer;

/**
 * CreateCampaignRequest Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Advertiser
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateCampaignRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateCampaignRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'startDate' => 'string',
        'endDate' => 'string',
        'state' => 'string',
        'targetingType' => 'string',
        'dailyBudget' => 'float',
        'totalBudget' => 'float',
        'countries' => '\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CampaignCountry[]',
        'bidding' => '\ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateBiddingModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'startDate' => null,
        'endDate' => null,
        'state' => null,
        'targetingType' => null,
        'dailyBudget' => null,
        'totalBudget' => null,
        'countries' => null,
        'bidding' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'startDate' => false,
        'endDate' => false,
        'state' => false,
        'targetingType' => false,
        'dailyBudget' => false,
        'totalBudget' => false,
        'countries' => false,
        'bidding' => false
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
        'name' => 'name',
        'startDate' => 'startDate',
        'endDate' => 'endDate',
        'state' => 'state',
        'targetingType' => 'targetingType',
        'dailyBudget' => 'dailyBudget',
        'totalBudget' => 'totalBudget',
        'countries' => 'countries',
        'bidding' => 'bidding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'state' => 'setState',
        'targetingType' => 'setTargetingType',
        'dailyBudget' => 'setDailyBudget',
        'totalBudget' => 'setTotalBudget',
        'countries' => 'setCountries',
        'bidding' => 'setBidding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'state' => 'getState',
        'targetingType' => 'getTargetingType',
        'dailyBudget' => 'getDailyBudget',
        'totalBudget' => 'getTotalBudget',
        'countries' => 'getCountries',
        'bidding' => 'getBidding'
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

    public const STATE_ENABLED = 'ENABLED';
    public const STATE_PAUSED = 'PAUSED';
    public const STATE_ARCHIVED = 'ARCHIVED';
    public const TARGETING_TYPE_AUTO = 'AUTO';
    public const TARGETING_TYPE_MANUAL = 'MANUAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ENABLED,
            self::STATE_PAUSED,
            self::STATE_ARCHIVED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetingTypeAllowableValues()
    {
        return [
            self::TARGETING_TYPE_AUTO,
            self::TARGETING_TYPE_MANUAL,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('targetingType', $data ?? [], null);
        $this->setIfExists('dailyBudget', $data ?? [], null);
        $this->setIfExists('totalBudget', $data ?? [], null);
        $this->setIfExists('countries', $data ?? [], null);
        $this->setIfExists('bidding', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['targetingType'] === null) {
            $invalidProperties[] = "'targetingType' can't be null";
        }
        $allowedValues = $this->getTargetingTypeAllowableValues();
        if (!is_null($this->container['targetingType']) && !in_array($this->container['targetingType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'targetingType', must be one of '%s'",
                $this->container['targetingType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['dailyBudget']) && ($this->container['dailyBudget'] > 100000)) {
            $invalidProperties[] = "invalid value for 'dailyBudget', must be smaller than or equal to 100000.";
        }

        if (!is_null($this->container['dailyBudget']) && ($this->container['dailyBudget'] < 0)) {
            $invalidProperties[] = "invalid value for 'dailyBudget', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['totalBudget']) && ($this->container['totalBudget'] > 9223372036854776000)) {
            $invalidProperties[] = "invalid value for 'totalBudget', must be smaller than or equal to 9223372036854776000.";
        }

        if (!is_null($this->container['totalBudget']) && ($this->container['totalBudget'] < 0)) {
            $invalidProperties[] = "invalid value for 'totalBudget', must be bigger than or equal to 0.";
        }

        if ($this->container['countries'] === null) {
            $invalidProperties[] = "'countries' can't be null";
        }
        if ((count($this->container['countries']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'countries', number of items must be less than or equal to 2147483647.";
        }

        if ((count($this->container['countries']) < 1)) {
            $invalidProperties[] = "invalid value for 'countries', number of items must be greater than or equal to 1.";
        }

        if ($this->container['bidding'] === null) {
            $invalidProperties[] = "'bidding' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the campaign.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param string $startDate The start date of the campaign. Must be a current or future date and will always be one full day.
     *
     * @return self
     */
    public function setStartDate($startDate)
    {
        if (is_null($startDate)) {
            throw new \InvalidArgumentException('non-nullable startDate cannot be null');
        }
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param string|null $endDate The end date of the campaign. Must be a future date that is at least one day after the start date of the campaign, and will always be one full day.
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        if (is_null($endDate)) {
            throw new \InvalidArgumentException('non-nullable endDate cannot be null');
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state of the campaign.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets targetingType
     *
     * @return string
     */
    public function getTargetingType()
    {
        return $this->container['targetingType'];
    }

    /**
     * Sets targetingType
     *
     * @param string $targetingType The type of keyword targeting for the campaign.
     *
     * @return self
     */
    public function setTargetingType($targetingType)
    {
        if (is_null($targetingType)) {
            throw new \InvalidArgumentException('non-nullable targetingType cannot be null');
        }
        $allowedValues = $this->getTargetingTypeAllowableValues();
        if (!in_array($targetingType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'targetingType', must be one of '%s'",
                    $targetingType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['targetingType'] = $targetingType;

        return $this;
    }

    /**
     * Gets dailyBudget
     *
     * @return float|null
     */
    public function getDailyBudget()
    {
        return $this->container['dailyBudget'];
    }

    /**
     * Sets dailyBudget
     *
     * @param float|null $dailyBudget The maximum amount that can be spend in one day for this campaign. The amount should always have two decimals precision.
     *
     * @return self
     */
    public function setDailyBudget($dailyBudget)
    {
        if (is_null($dailyBudget)) {
            throw new \InvalidArgumentException('non-nullable dailyBudget cannot be null');
        }

        if (($dailyBudget > 100000)) {
            throw new \InvalidArgumentException('invalid value for $dailyBudget when calling CreateCampaignRequest., must be smaller than or equal to 100000.');
        }
        if (($dailyBudget < 0)) {
            throw new \InvalidArgumentException('invalid value for $dailyBudget when calling CreateCampaignRequest., must be bigger than or equal to 0.');
        }

        $this->container['dailyBudget'] = $dailyBudget;

        return $this;
    }

    /**
     * Gets totalBudget
     *
     * @return float|null
     */
    public function getTotalBudget()
    {
        return $this->container['totalBudget'];
    }

    /**
     * Sets totalBudget
     *
     * @param float|null $totalBudget The total budget that can be spend for this campaign. The amount should always have two decimals precision.
     *
     * @return self
     */
    public function setTotalBudget($totalBudget)
    {
        if (is_null($totalBudget)) {
            throw new \InvalidArgumentException('non-nullable totalBudget cannot be null');
        }

        if (($totalBudget > 9223372036854776000)) {
            throw new \InvalidArgumentException('invalid value for $totalBudget when calling CreateCampaignRequest., must be smaller than or equal to 9223372036854776000.');
        }
        if (($totalBudget < 0)) {
            throw new \InvalidArgumentException('invalid value for $totalBudget when calling CreateCampaignRequest., must be bigger than or equal to 0.');
        }

        $this->container['totalBudget'] = $totalBudget;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CampaignCountry[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CampaignCountry[] $countries countries
     *
     * @return self
     */
    public function setCountries($countries)
    {
        if (is_null($countries)) {
            throw new \InvalidArgumentException('non-nullable countries cannot be null');
        }

        if ((count($countries) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $countries when calling CreateCampaignRequest., number of items must be less than or equal to 2147483647.');
        }
        if ((count($countries) < 1)) {
            throw new \InvalidArgumentException('invalid length for $countries when calling CreateCampaignRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets bidding
     *
     * @return \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateBiddingModel
     */
    public function getBidding()
    {
        return $this->container['bidding'];
    }

    /**
     * Sets bidding
     *
     * @param \ThisIsDevelopment\OpenApi\Bol\Advertiser\Models\CreateBiddingModel $bidding bidding
     *
     * @return self
     */
    public function setBidding($bidding)
    {
        if (is_null($bidding)) {
            throw new \InvalidArgumentException('non-nullable bidding cannot be null');
        }
        $this->container['bidding'] = $bidding;

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


