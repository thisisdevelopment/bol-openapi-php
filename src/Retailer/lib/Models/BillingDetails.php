<?php
/**
 * BillingDetails
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
 * BillingDetails Class Doc Comment
 *
 * @category Class
 * @description The details of the customer that is responsible for the financial fulfillment of this order.
 * @package  ThisIsDevelopment\OpenApi\Bol\Retailer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BillingDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BillingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'salutation' => 'string',
        'firstName' => 'string',
        'surname' => 'string',
        'streetName' => 'string',
        'houseNumber' => 'string',
        'houseNumberExtension' => 'string',
        'extraAddressInformation' => 'string',
        'zipCode' => 'string',
        'city' => 'string',
        'countryCode' => 'string',
        'email' => 'string',
        'company' => 'string',
        'vatNumber' => 'string',
        'kvkNumber' => 'string',
        'orderReference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'salutation' => null,
        'firstName' => null,
        'surname' => null,
        'streetName' => null,
        'houseNumber' => null,
        'houseNumberExtension' => null,
        'extraAddressInformation' => null,
        'zipCode' => null,
        'city' => null,
        'countryCode' => null,
        'email' => null,
        'company' => null,
        'vatNumber' => null,
        'kvkNumber' => null,
        'orderReference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'salutation' => false,
        'firstName' => false,
        'surname' => false,
        'streetName' => false,
        'houseNumber' => false,
        'houseNumberExtension' => false,
        'extraAddressInformation' => false,
        'zipCode' => false,
        'city' => false,
        'countryCode' => false,
        'email' => false,
        'company' => false,
        'vatNumber' => false,
        'kvkNumber' => false,
        'orderReference' => false
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
        'salutation' => 'salutation',
        'firstName' => 'firstName',
        'surname' => 'surname',
        'streetName' => 'streetName',
        'houseNumber' => 'houseNumber',
        'houseNumberExtension' => 'houseNumberExtension',
        'extraAddressInformation' => 'extraAddressInformation',
        'zipCode' => 'zipCode',
        'city' => 'city',
        'countryCode' => 'countryCode',
        'email' => 'email',
        'company' => 'company',
        'vatNumber' => 'vatNumber',
        'kvkNumber' => 'kvkNumber',
        'orderReference' => 'orderReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'salutation' => 'setSalutation',
        'firstName' => 'setFirstName',
        'surname' => 'setSurname',
        'streetName' => 'setStreetName',
        'houseNumber' => 'setHouseNumber',
        'houseNumberExtension' => 'setHouseNumberExtension',
        'extraAddressInformation' => 'setExtraAddressInformation',
        'zipCode' => 'setZipCode',
        'city' => 'setCity',
        'countryCode' => 'setCountryCode',
        'email' => 'setEmail',
        'company' => 'setCompany',
        'vatNumber' => 'setVatNumber',
        'kvkNumber' => 'setKvkNumber',
        'orderReference' => 'setOrderReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'salutation' => 'getSalutation',
        'firstName' => 'getFirstName',
        'surname' => 'getSurname',
        'streetName' => 'getStreetName',
        'houseNumber' => 'getHouseNumber',
        'houseNumberExtension' => 'getHouseNumberExtension',
        'extraAddressInformation' => 'getExtraAddressInformation',
        'zipCode' => 'getZipCode',
        'city' => 'getCity',
        'countryCode' => 'getCountryCode',
        'email' => 'getEmail',
        'company' => 'getCompany',
        'vatNumber' => 'getVatNumber',
        'kvkNumber' => 'getKvkNumber',
        'orderReference' => 'getOrderReference'
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

    public const SALUTATION_MALE = 'MALE';
    public const SALUTATION_FEMALE = 'FEMALE';
    public const SALUTATION_UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSalutationAllowableValues()
    {
        return [
            self::SALUTATION_MALE,
            self::SALUTATION_FEMALE,
            self::SALUTATION_UNKNOWN,
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
        $this->setIfExists('salutation', $data ?? [], null);
        $this->setIfExists('firstName', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('streetName', $data ?? [], null);
        $this->setIfExists('houseNumber', $data ?? [], null);
        $this->setIfExists('houseNumberExtension', $data ?? [], null);
        $this->setIfExists('extraAddressInformation', $data ?? [], null);
        $this->setIfExists('zipCode', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('countryCode', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('vatNumber', $data ?? [], null);
        $this->setIfExists('kvkNumber', $data ?? [], null);
        $this->setIfExists('orderReference', $data ?? [], null);
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

        if ($this->container['salutation'] === null) {
            $invalidProperties[] = "'salutation' can't be null";
        }
        $allowedValues = $this->getSalutationAllowableValues();
        if (!is_null($this->container['salutation']) && !in_array($this->container['salutation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'salutation', must be one of '%s'",
                $this->container['salutation'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['firstName'] === null) {
            $invalidProperties[] = "'firstName' can't be null";
        }
        if ($this->container['surname'] === null) {
            $invalidProperties[] = "'surname' can't be null";
        }
        if ($this->container['streetName'] === null) {
            $invalidProperties[] = "'streetName' can't be null";
        }
        if ($this->container['houseNumber'] === null) {
            $invalidProperties[] = "'houseNumber' can't be null";
        }
        if ($this->container['zipCode'] === null) {
            $invalidProperties[] = "'zipCode' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
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
     * Gets salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string $salutation The salutation of the customer.
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        if (is_null($salutation)) {
            throw new \InvalidArgumentException('non-nullable salutation cannot be null');
        }
        $allowedValues = $this->getSalutationAllowableValues();
        if (!in_array($salutation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'salutation', must be one of '%s'",
                    $salutation,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName The first name of the customer.
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        if (is_null($firstName)) {
            throw new \InvalidArgumentException('non-nullable firstName cannot be null');
        }
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string $surname The surname of the customer.
     *
     * @return self
     */
    public function setSurname($surname)
    {
        if (is_null($surname)) {
            throw new \InvalidArgumentException('non-nullable surname cannot be null');
        }
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets streetName
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['streetName'];
    }

    /**
     * Sets streetName
     *
     * @param string $streetName The street name.
     *
     * @return self
     */
    public function setStreetName($streetName)
    {
        if (is_null($streetName)) {
            throw new \InvalidArgumentException('non-nullable streetName cannot be null');
        }
        $this->container['streetName'] = $streetName;

        return $this;
    }

    /**
     * Gets houseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->container['houseNumber'];
    }

    /**
     * Sets houseNumber
     *
     * @param string $houseNumber The house number.
     *
     * @return self
     */
    public function setHouseNumber($houseNumber)
    {
        if (is_null($houseNumber)) {
            throw new \InvalidArgumentException('non-nullable houseNumber cannot be null');
        }
        $this->container['houseNumber'] = $houseNumber;

        return $this;
    }

    /**
     * Gets houseNumberExtension
     *
     * @return string|null
     */
    public function getHouseNumberExtension()
    {
        return $this->container['houseNumberExtension'];
    }

    /**
     * Sets houseNumberExtension
     *
     * @param string|null $houseNumberExtension The extension on the house number.
     *
     * @return self
     */
    public function setHouseNumberExtension($houseNumberExtension)
    {
        if (is_null($houseNumberExtension)) {
            throw new \InvalidArgumentException('non-nullable houseNumberExtension cannot be null');
        }
        $this->container['houseNumberExtension'] = $houseNumberExtension;

        return $this;
    }

    /**
     * Gets extraAddressInformation
     *
     * @return string|null
     */
    public function getExtraAddressInformation()
    {
        return $this->container['extraAddressInformation'];
    }

    /**
     * Sets extraAddressInformation
     *
     * @param string|null $extraAddressInformation Additional information related to the address that helps in delivering the package.
     *
     * @return self
     */
    public function setExtraAddressInformation($extraAddressInformation)
    {
        if (is_null($extraAddressInformation)) {
            throw new \InvalidArgumentException('non-nullable extraAddressInformation cannot be null');
        }
        $this->container['extraAddressInformation'] = $extraAddressInformation;

        return $this;
    }

    /**
     * Gets zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zipCode'];
    }

    /**
     * Sets zipCode
     *
     * @param string $zipCode The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
     *
     * @return self
     */
    public function setZipCode($zipCode)
    {
        if (is_null($zipCode)) {
            throw new \InvalidArgumentException('non-nullable zipCode cannot be null');
        }
        $this->container['zipCode'] = $zipCode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The name of the city.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode The country code.
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        if (is_null($countryCode)) {
            throw new \InvalidArgumentException('non-nullable countryCode cannot be null');
        }
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email A scrambled email address that can be used to contact the customer.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company The company name.
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets vatNumber
     *
     * @return string|null
     */
    public function getVatNumber()
    {
        return $this->container['vatNumber'];
    }

    /**
     * Sets vatNumber
     *
     * @param string|null $vatNumber The Value Added Tax (VAT) / BTW number for business sellers situated in the Netherlands.
     *
     * @return self
     */
    public function setVatNumber($vatNumber)
    {
        if (is_null($vatNumber)) {
            throw new \InvalidArgumentException('non-nullable vatNumber cannot be null');
        }
        $this->container['vatNumber'] = $vatNumber;

        return $this;
    }

    /**
     * Gets kvkNumber
     *
     * @return string|null
     */
    public function getKvkNumber()
    {
        return $this->container['kvkNumber'];
    }

    /**
     * Sets kvkNumber
     *
     * @param string|null $kvkNumber The Kamer van Koophandel (kvk) number for organizations situated in the Netherlands or ondernemingsnummer for organizations situated in Belgium.
     *
     * @return self
     */
    public function setKvkNumber($kvkNumber)
    {
        if (is_null($kvkNumber)) {
            throw new \InvalidArgumentException('non-nullable kvkNumber cannot be null');
        }
        $this->container['kvkNumber'] = $kvkNumber;

        return $this;
    }

    /**
     * Gets orderReference
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->container['orderReference'];
    }

    /**
     * Sets orderReference
     *
     * @param string|null $orderReference The order reference specified by the customer when ordering a product.
     *
     * @return self
     */
    public function setOrderReference($orderReference)
    {
        if (is_null($orderReference)) {
            throw new \InvalidArgumentException('non-nullable orderReference cannot be null');
        }
        $this->container['orderReference'] = $orderReference;

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


