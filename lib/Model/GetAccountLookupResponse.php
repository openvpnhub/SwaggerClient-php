<?php
/**
 * GetAccountLookupResponse
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
 * GetAccountLookupResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetAccountLookupResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetAccountLookupResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_iso' => 'string',
        'account_number_normalized' => 'string',
        'items' => '\Swagger\Client\Model\AccountLookup[]',
        'result_code' => 'int',
        'error_codes' => '\Swagger\Client\Model\Error[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_iso' => null,
        'account_number_normalized' => null,
        'items' => null,
        'result_code' => 'int32',
        'error_codes' => null
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
        'country_iso' => 'CountryIso',
        'account_number_normalized' => 'AccountNumberNormalized',
        'items' => 'Items',
        'result_code' => 'ResultCode',
        'error_codes' => 'ErrorCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_iso' => 'setCountryIso',
        'account_number_normalized' => 'setAccountNumberNormalized',
        'items' => 'setItems',
        'result_code' => 'setResultCode',
        'error_codes' => 'setErrorCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_iso' => 'getCountryIso',
        'account_number_normalized' => 'getAccountNumberNormalized',
        'items' => 'getItems',
        'result_code' => 'getResultCode',
        'error_codes' => 'getErrorCodes'
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
        $this->container['country_iso'] = isset($data['country_iso']) ? $data['country_iso'] : null;
        $this->container['account_number_normalized'] = isset($data['account_number_normalized']) ? $data['account_number_normalized'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['result_code'] = isset($data['result_code']) ? $data['result_code'] : null;
        $this->container['error_codes'] = isset($data['error_codes']) ? $data['error_codes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['result_code'] === null) {
            $invalidProperties[] = "'result_code' can't be null";
        }
        if ($this->container['error_codes'] === null) {
            $invalidProperties[] = "'error_codes' can't be null";
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
     * @param string $country_iso The country of the account number
     *
     * @return $this
     */
    public function setCountryIso($country_iso)
    {
        $this->container['country_iso'] = $country_iso;

        return $this;
    }

    /**
     * Gets account_number_normalized
     *
     * @return string
     */
    public function getAccountNumberNormalized()
    {
        return $this->container['account_number_normalized'];
    }

    /**
     * Sets account_number_normalized
     *
     * @param string $account_number_normalized We attempt to normalize phone numbers following the public telecommunication numbering plan <a href=\"https://en.wikipedia.org/wiki/E.164\" target=\"_blank\">E.164</a>, if we succeed the normalized number will be returned in this field formatted as E164 without leading '+'
     *
     * @return $this
     */
    public function setAccountNumberNormalized($account_number_normalized)
    {
        $this->container['account_number_normalized'] = $account_number_normalized;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\AccountLookup[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\AccountLookup[] $items This will contain provider information associated to the account number. If we can succesfully lookup the account number               the list will contain the info for products associated to it.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets result_code
     *
     * @return int
     */
    public function getResultCode()
    {
        return $this->container['result_code'];
    }

    /**
     * Sets result_code
     *
     * @param int $result_code result_code
     *
     * @return $this
     */
    public function setResultCode($result_code)
    {
        $this->container['result_code'] = $result_code;

        return $this;
    }

    /**
     * Gets error_codes
     *
     * @return \Swagger\Client\Model\Error[]
     */
    public function getErrorCodes()
    {
        return $this->container['error_codes'];
    }

    /**
     * Sets error_codes
     *
     * @param \Swagger\Client\Model\Error[] $error_codes error_codes
     *
     * @return $this
     */
    public function setErrorCodes($error_codes)
    {
        $this->container['error_codes'] = $error_codes;

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

