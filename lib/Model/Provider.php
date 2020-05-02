<?php
/**
 * Provider
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ding API
 *
 * The Ding API is a Level 0 REST web service.  We have used the <a href=\"http://swagger.io\">swagger</a> standard to describe this service. As a result, we are able to provide this interactive documentation page. For further information, you may view the <a href=\"/api/description\">additional documentation</a>; read our <a href=\"/api/faq\">FAQ</a> or contact partnersupport@ding.com
 *
 * OpenAPI spec version: V1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Provider Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Provider implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Provider';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'provider_code' => 'string',
        'country_iso' => 'string',
        'name' => 'string',
        'short_name' => 'string',
        'validation_regex' => 'string',
        'customer_care_number' => 'string',
        'region_codes' => 'string[]',
        'logo_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'provider_code' => null,
        'country_iso' => null,
        'name' => null,
        'short_name' => null,
        'validation_regex' => null,
        'customer_care_number' => null,
        'region_codes' => null,
        'logo_url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'provider_code' => 'ProviderCode',
        'country_iso' => 'CountryIso',
        'name' => 'Name',
        'short_name' => 'ShortName',
        'validation_regex' => 'ValidationRegex',
        'customer_care_number' => 'CustomerCareNumber',
        'region_codes' => 'RegionCodes',
        'logo_url' => 'LogoUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'provider_code' => 'setProviderCode',
        'country_iso' => 'setCountryIso',
        'name' => 'setName',
        'short_name' => 'setShortName',
        'validation_regex' => 'setValidationRegex',
        'customer_care_number' => 'setCustomerCareNumber',
        'region_codes' => 'setRegionCodes',
        'logo_url' => 'setLogoUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'provider_code' => 'getProviderCode',
        'country_iso' => 'getCountryIso',
        'name' => 'getName',
        'short_name' => 'getShortName',
        'validation_regex' => 'getValidationRegex',
        'customer_care_number' => 'getCustomerCareNumber',
        'region_codes' => 'getRegionCodes',
        'logo_url' => 'getLogoUrl'
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
        return self::$swaggerModelName;
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
        $this->container['provider_code'] = isset($data['provider_code']) ? $data['provider_code'] : null;
        $this->container['country_iso'] = isset($data['country_iso']) ? $data['country_iso'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
        $this->container['validation_regex'] = isset($data['validation_regex']) ? $data['validation_regex'] : null;
        $this->container['customer_care_number'] = isset($data['customer_care_number']) ? $data['customer_care_number'] : null;
        $this->container['region_codes'] = isset($data['region_codes']) ? $data['region_codes'] : null;
        $this->container['logo_url'] = isset($data['logo_url']) ? $data['logo_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['provider_code'] === null) {
            $invalidProperties[] = "'provider_code' can't be null";
        }
        if ($this->container['country_iso'] === null) {
            $invalidProperties[] = "'country_iso' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['validation_regex'] === null) {
            $invalidProperties[] = "'validation_regex' can't be null";
        }
        if ($this->container['region_codes'] === null) {
            $invalidProperties[] = "'region_codes' can't be null";
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
     * Gets provider_code
     *
     * @return string
     */
    public function getProviderCode()
    {
        return $this->container['provider_code'];
    }

    /**
     * Sets provider_code
     *
     * @param string $provider_code Uniquely identifies a provider
     *
     * @return $this
     */
    public function setProviderCode($provider_code)
    {
        $this->container['provider_code'] = $provider_code;

        return $this;
    }

    /**
     * Gets country_iso
     *
     * @return string
     */
    public function getCountryIso()
    {
        return $this->container['country_iso'];
    }

    /**
     * Sets country_iso
     *
     * @param string $country_iso The country within which the provider operates
     *
     * @return $this
     */
    public function setCountryIso($country_iso)
    {
        $this->container['country_iso'] = $country_iso;

        return $this;
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
     * @param string $name The English trading name of the provider.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string $short_name A shorter version of the Name suitable for use in space restricted UI elements
     *
     * @return $this
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets validation_regex
     *
     * @return string
     */
    public function getValidationRegex()
    {
        return $this->container['validation_regex'];
    }

    /**
     * Sets validation_regex
     *
     * @param string $validation_regex Account numbers must match the ValidationRegex
     *
     * @return $this
     */
    public function setValidationRegex($validation_regex)
    {
        $this->container['validation_regex'] = $validation_regex;

        return $this;
    }

    /**
     * Gets customer_care_number
     *
     * @return string
     */
    public function getCustomerCareNumber()
    {
        return $this->container['customer_care_number'];
    }

    /**
     * Sets customer_care_number
     *
     * @param string $customer_care_number Customer care number of the provider
     *
     * @return $this
     */
    public function setCustomerCareNumber($customer_care_number)
    {
        $this->container['customer_care_number'] = $customer_care_number;

        return $this;
    }

    /**
     * Gets region_codes
     *
     * @return string[]
     */
    public function getRegionCodes()
    {
        return $this->container['region_codes'];
    }

    /**
     * Sets region_codes
     *
     * @param string[] $region_codes Regions supported by the provider within the country
     *
     * @return $this
     */
    public function setRegionCodes($region_codes)
    {
        $this->container['region_codes'] = $region_codes;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string $logo_url Link to image of the provider logo
     *
     * @return $this
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


