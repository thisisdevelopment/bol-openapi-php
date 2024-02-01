<?php
/**
 * SearchTermPerformance
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
 * SearchTermPerformance Class Doc Comment
 *
 * @category Class
 * @package  ThisIsDevelopment\OpenApi\Bol\Advertiser
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SearchTermPerformance implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchTermPerformance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaignId' => 'string',
        'adGroupId' => 'string',
        'keywordText' => 'string',
        'searchTerm' => 'string',
        'impressions' => 'int',
        'sales' => 'float',
        'clicks' => 'int',
        'ctr' => 'float',
        'conversions' => 'int',
        'conversionRate' => 'float',
        'spent' => 'float',
        'cpc' => 'float',
        'acos' => 'float',
        'roas' => 'float',
        'averageWinningBid' => 'float',
        'searchVolume' => 'int',
        'keywordMatchType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'campaignId' => null,
        'adGroupId' => null,
        'keywordText' => null,
        'searchTerm' => null,
        'impressions' => 'int32',
        'sales' => null,
        'clicks' => 'int32',
        'ctr' => null,
        'conversions' => 'int32',
        'conversionRate' => null,
        'spent' => null,
        'cpc' => null,
        'acos' => null,
        'roas' => null,
        'averageWinningBid' => null,
        'searchVolume' => 'int32',
        'keywordMatchType' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'campaignId' => false,
        'adGroupId' => false,
        'keywordText' => false,
        'searchTerm' => false,
        'impressions' => false,
        'sales' => false,
        'clicks' => false,
        'ctr' => false,
        'conversions' => false,
        'conversionRate' => false,
        'spent' => false,
        'cpc' => false,
        'acos' => false,
        'roas' => false,
        'averageWinningBid' => false,
        'searchVolume' => false,
        'keywordMatchType' => false
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
        'campaignId' => 'campaignId',
        'adGroupId' => 'adGroupId',
        'keywordText' => 'keywordText',
        'searchTerm' => 'searchTerm',
        'impressions' => 'impressions',
        'sales' => 'sales',
        'clicks' => 'clicks',
        'ctr' => 'ctr',
        'conversions' => 'conversions',
        'conversionRate' => 'conversionRate',
        'spent' => 'spent',
        'cpc' => 'cpc',
        'acos' => 'acos',
        'roas' => 'roas',
        'averageWinningBid' => 'averageWinningBid',
        'searchVolume' => 'searchVolume',
        'keywordMatchType' => 'keywordMatchType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignId' => 'setCampaignId',
        'adGroupId' => 'setAdGroupId',
        'keywordText' => 'setKeywordText',
        'searchTerm' => 'setSearchTerm',
        'impressions' => 'setImpressions',
        'sales' => 'setSales',
        'clicks' => 'setClicks',
        'ctr' => 'setCtr',
        'conversions' => 'setConversions',
        'conversionRate' => 'setConversionRate',
        'spent' => 'setSpent',
        'cpc' => 'setCpc',
        'acos' => 'setAcos',
        'roas' => 'setRoas',
        'averageWinningBid' => 'setAverageWinningBid',
        'searchVolume' => 'setSearchVolume',
        'keywordMatchType' => 'setKeywordMatchType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignId' => 'getCampaignId',
        'adGroupId' => 'getAdGroupId',
        'keywordText' => 'getKeywordText',
        'searchTerm' => 'getSearchTerm',
        'impressions' => 'getImpressions',
        'sales' => 'getSales',
        'clicks' => 'getClicks',
        'ctr' => 'getCtr',
        'conversions' => 'getConversions',
        'conversionRate' => 'getConversionRate',
        'spent' => 'getSpent',
        'cpc' => 'getCpc',
        'acos' => 'getAcos',
        'roas' => 'getRoas',
        'averageWinningBid' => 'getAverageWinningBid',
        'searchVolume' => 'getSearchVolume',
        'keywordMatchType' => 'getKeywordMatchType'
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

    public const KEYWORD_MATCH_TYPE_EXACT = 'EXACT';
    public const KEYWORD_MATCH_TYPE_PHRASE = 'PHRASE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKeywordMatchTypeAllowableValues()
    {
        return [
            self::KEYWORD_MATCH_TYPE_EXACT,
            self::KEYWORD_MATCH_TYPE_PHRASE,
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
        $this->setIfExists('campaignId', $data ?? [], null);
        $this->setIfExists('adGroupId', $data ?? [], null);
        $this->setIfExists('keywordText', $data ?? [], null);
        $this->setIfExists('searchTerm', $data ?? [], null);
        $this->setIfExists('impressions', $data ?? [], null);
        $this->setIfExists('sales', $data ?? [], null);
        $this->setIfExists('clicks', $data ?? [], null);
        $this->setIfExists('ctr', $data ?? [], null);
        $this->setIfExists('conversions', $data ?? [], null);
        $this->setIfExists('conversionRate', $data ?? [], null);
        $this->setIfExists('spent', $data ?? [], null);
        $this->setIfExists('cpc', $data ?? [], null);
        $this->setIfExists('acos', $data ?? [], null);
        $this->setIfExists('roas', $data ?? [], null);
        $this->setIfExists('averageWinningBid', $data ?? [], null);
        $this->setIfExists('searchVolume', $data ?? [], null);
        $this->setIfExists('keywordMatchType', $data ?? [], null);
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
        $allowedValues = $this->getKeywordMatchTypeAllowableValues();
        if (!is_null($this->container['keywordMatchType']) && !in_array($this->container['keywordMatchType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'keywordMatchType', must be one of '%s'",
                $this->container['keywordMatchType'],
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
     * Gets campaignId
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param string|null $campaignId The identifier of the parent-campaign for this ad group.
     *
     * @return self
     */
    public function setCampaignId($campaignId)
    {
        if (is_null($campaignId)) {
            throw new \InvalidArgumentException('non-nullable campaignId cannot be null');
        }
        $this->container['campaignId'] = $campaignId;

        return $this;
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
     * @param string $adGroupId The identifier of the ad group.
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
     * @return string|null
     */
    public function getKeywordText()
    {
        return $this->container['keywordText'];
    }

    /**
     * Sets keywordText
     *
     * @param string|null $keywordText The text or phrase used in the keyword that caused the ad to be displayed to the user.
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
     * Gets searchTerm
     *
     * @return string|null
     */
    public function getSearchTerm()
    {
        return $this->container['searchTerm'];
    }

    /**
     * Sets searchTerm
     *
     * @param string|null $searchTerm The search term that is matched to the keyword that caused the ad to be displayed to the user.
     *
     * @return self
     */
    public function setSearchTerm($searchTerm)
    {
        if (is_null($searchTerm)) {
            throw new \InvalidArgumentException('non-nullable searchTerm cannot be null');
        }
        $this->container['searchTerm'] = $searchTerm;

        return $this;
    }

    /**
     * Gets impressions
     *
     * @return int|null
     */
    public function getImpressions()
    {
        return $this->container['impressions'];
    }

    /**
     * Sets impressions
     *
     * @param int|null $impressions The number of impressions from this search term for ads in the ad group.
     *
     * @return self
     */
    public function setImpressions($impressions)
    {
        if (is_null($impressions)) {
            throw new \InvalidArgumentException('non-nullable impressions cannot be null');
        }
        $this->container['impressions'] = $impressions;

        return $this;
    }

    /**
     * Gets sales
     *
     * @return float|null
     */
    public function getSales()
    {
        return $this->container['sales'];
    }

    /**
     * Sets sales
     *
     * @param float|null $sales The value of sales in EUR that happened up to 14 days after the visitor viewed an ad with this search term, with two decimals of precision.
     *
     * @return self
     */
    public function setSales($sales)
    {
        if (is_null($sales)) {
            throw new \InvalidArgumentException('non-nullable sales cannot be null');
        }
        $this->container['sales'] = $sales;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return int|null
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param int|null $clicks The number of clicks from this search term on ads in the ad group.
     *
     * @return self
     */
    public function setClicks($clicks)
    {
        if (is_null($clicks)) {
            throw new \InvalidArgumentException('non-nullable clicks cannot be null');
        }
        $this->container['clicks'] = $clicks;

        return $this;
    }

    /**
     * Gets ctr
     *
     * @return float|null
     */
    public function getCtr()
    {
        return $this->container['ctr'];
    }

    /**
     * Sets ctr
     *
     * @param float|null $ctr The Click-Through Rate is a ratio of clicks versus impressions from this search term, with four decimals of precision.
     *
     * @return self
     */
    public function setCtr($ctr)
    {
        if (is_null($ctr)) {
            throw new \InvalidArgumentException('non-nullable ctr cannot be null');
        }
        $this->container['ctr'] = $ctr;

        return $this;
    }

    /**
     * Gets conversions
     *
     * @return int|null
     */
    public function getConversions()
    {
        return $this->container['conversions'];
    }

    /**
     * Sets conversions
     *
     * @param int|null $conversions The number of product sales that resulted from visitors viewing ads with this keyword, up to 14 days after they viewed the ad.
     *
     * @return self
     */
    public function setConversions($conversions)
    {
        if (is_null($conversions)) {
            throw new \InvalidArgumentException('non-nullable conversions cannot be null');
        }
        $this->container['conversions'] = $conversions;

        return $this;
    }

    /**
     * Gets conversionRate
     *
     * @return float|null
     */
    public function getConversionRate()
    {
        return $this->container['conversionRate'];
    }

    /**
     * Sets conversionRate
     *
     * @param float|null $conversionRate The conversion rate is a ratio of the number of visitors who bought the product up to 14 days after viewing the ad, versus those who only viewed the ad, with four decimals of precision.
     *
     * @return self
     */
    public function setConversionRate($conversionRate)
    {
        if (is_null($conversionRate)) {
            throw new \InvalidArgumentException('non-nullable conversionRate cannot be null');
        }
        $this->container['conversionRate'] = $conversionRate;

        return $this;
    }

    /**
     * Gets spent
     *
     * @return float|null
     */
    public function getSpent()
    {
        return $this->container['spent'];
    }

    /**
     * Sets spent
     *
     * @param float|null $spent The amount spent on ads that used this search term in EUR, with two decimals of precision.
     *
     * @return self
     */
    public function setSpent($spent)
    {
        if (is_null($spent)) {
            throw new \InvalidArgumentException('non-nullable spent cannot be null');
        }
        $this->container['spent'] = $spent;

        return $this;
    }

    /**
     * Gets cpc
     *
     * @return float|null
     */
    public function getCpc()
    {
        return $this->container['cpc'];
    }

    /**
     * Sets cpc
     *
     * @param float|null $cpc The average Cost Per Clicks of ads that were viewed with this search term in EUR, with two decimals of precision.
     *
     * @return self
     */
    public function setCpc($cpc)
    {
        if (is_null($cpc)) {
            throw new \InvalidArgumentException('non-nullable cpc cannot be null');
        }
        $this->container['cpc'] = $cpc;

        return $this;
    }

    /**
     * Gets acos
     *
     * @return float|null
     */
    public function getAcos()
    {
        return $this->container['acos'];
    }

    /**
     * Sets acos
     *
     * @param float|null $acos The Advertising Cost Of Sale for the ads with this search term is a ratio of the ad spend versus sales revenue, with four decimals of precision.
     *
     * @return self
     */
    public function setAcos($acos)
    {
        if (is_null($acos)) {
            throw new \InvalidArgumentException('non-nullable acos cannot be null');
        }
        $this->container['acos'] = $acos;

        return $this;
    }

    /**
     * Gets roas
     *
     * @return float|null
     */
    public function getRoas()
    {
        return $this->container['roas'];
    }

    /**
     * Sets roas
     *
     * @param float|null $roas The Return on Advertising Spent for ads with this search term is a ratio of sales revenue versus ad spend, with four decimals of precision.
     *
     * @return self
     */
    public function setRoas($roas)
    {
        if (is_null($roas)) {
            throw new \InvalidArgumentException('non-nullable roas cannot be null');
        }
        $this->container['roas'] = $roas;

        return $this;
    }

    /**
     * Gets averageWinningBid
     *
     * @return float|null
     */
    public function getAverageWinningBid()
    {
        return $this->container['averageWinningBid'];
    }

    /**
     * Sets averageWinningBid
     *
     * @param float|null $averageWinningBid The value of the average winning bid for ads with this search term in an ad group in EUR, with two decimals of precision.
     *
     * @return self
     */
    public function setAverageWinningBid($averageWinningBid)
    {
        if (is_null($averageWinningBid)) {
            throw new \InvalidArgumentException('non-nullable averageWinningBid cannot be null');
        }
        $this->container['averageWinningBid'] = $averageWinningBid;

        return $this;
    }

    /**
     * Gets searchVolume
     *
     * @return int|null
     */
    public function getSearchVolume()
    {
        return $this->container['searchVolume'];
    }

    /**
     * Sets searchVolume
     *
     * @param int|null $searchVolume The number of searches on this search term.
     *
     * @return self
     */
    public function setSearchVolume($searchVolume)
    {
        if (is_null($searchVolume)) {
            throw new \InvalidArgumentException('non-nullable searchVolume cannot be null');
        }
        $this->container['searchVolume'] = $searchVolume;

        return $this;
    }

    /**
     * Gets keywordMatchType
     *
     * @return string|null
     */
    public function getKeywordMatchType()
    {
        return $this->container['keywordMatchType'];
    }

    /**
     * Sets keywordMatchType
     *
     * @param string|null $keywordMatchType The match type that relates the keyword and the search term.
     *
     * @return self
     */
    public function setKeywordMatchType($keywordMatchType)
    {
        if (is_null($keywordMatchType)) {
            throw new \InvalidArgumentException('non-nullable keywordMatchType cannot be null');
        }
        $allowedValues = $this->getKeywordMatchTypeAllowableValues();
        if (!in_array($keywordMatchType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'keywordMatchType', must be one of '%s'",
                    $keywordMatchType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['keywordMatchType'] = $keywordMatchType;

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


