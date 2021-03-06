<?php
/**
 * Address
 *
 * PHP version 5
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kunta API
 *
 * Solution to combine municipality services under single API.
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace KuntaAPI\Model;

use \ArrayAccess;

/**
 * Address Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     KuntaAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Address implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'latitude' => 'string',
        'longitude' => 'string',
        'coordinates' => '\KuntaAPI\Model\Coordinates',
        'coordinateState' => 'string',
        'type' => 'string',
        'subtype' => 'string',
        'postOfficeBox' => '\KuntaAPI\Model\LocalizedValue[]',
        'postalCode' => 'string',
        'postOffice' => '\KuntaAPI\Model\LocalizedValue[]',
        'streetAddress' => '\KuntaAPI\Model\LocalizedValue[]',
        'streetNumber' => 'string',
        'municipality' => '\KuntaAPI\Model\Municipality',
        'country' => 'string',
        'locationAbroad' => '\KuntaAPI\Model\LocalizedValue[]',
        'multipointLocation' => '\KuntaAPI\Model\Address[]',
        'additionalInformations' => '\KuntaAPI\Model\LocalizedValue[]',
        'entrances' => '\KuntaAPI\Model\AddressEntrance[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'coordinates' => 'coordinates',
        'coordinateState' => 'coordinateState',
        'type' => 'type',
        'subtype' => 'subtype',
        'postOfficeBox' => 'postOfficeBox',
        'postalCode' => 'postalCode',
        'postOffice' => 'postOffice',
        'streetAddress' => 'streetAddress',
        'streetNumber' => 'streetNumber',
        'municipality' => 'municipality',
        'country' => 'country',
        'locationAbroad' => 'locationAbroad',
        'multipointLocation' => 'multipointLocation',
        'additionalInformations' => 'additionalInformations',
        'entrances' => 'entrances'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'coordinates' => 'setCoordinates',
        'coordinateState' => 'setCoordinateState',
        'type' => 'setType',
        'subtype' => 'setSubtype',
        'postOfficeBox' => 'setPostOfficeBox',
        'postalCode' => 'setPostalCode',
        'postOffice' => 'setPostOffice',
        'streetAddress' => 'setStreetAddress',
        'streetNumber' => 'setStreetNumber',
        'municipality' => 'setMunicipality',
        'country' => 'setCountry',
        'locationAbroad' => 'setLocationAbroad',
        'multipointLocation' => 'setMultipointLocation',
        'additionalInformations' => 'setAdditionalInformations',
        'entrances' => 'setEntrances'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'coordinates' => 'getCoordinates',
        'coordinateState' => 'getCoordinateState',
        'type' => 'getType',
        'subtype' => 'getSubtype',
        'postOfficeBox' => 'getPostOfficeBox',
        'postalCode' => 'getPostalCode',
        'postOffice' => 'getPostOffice',
        'streetAddress' => 'getStreetAddress',
        'streetNumber' => 'getStreetNumber',
        'municipality' => 'getMunicipality',
        'country' => 'getCountry',
        'locationAbroad' => 'getLocationAbroad',
        'multipointLocation' => 'getMultipointLocation',
        'additionalInformations' => 'getAdditionalInformations',
        'entrances' => 'getEntrances'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['coordinates'] = isset($data['coordinates']) ? $data['coordinates'] : null;
        $this->container['coordinateState'] = isset($data['coordinateState']) ? $data['coordinateState'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['subtype'] = isset($data['subtype']) ? $data['subtype'] : null;
        $this->container['postOfficeBox'] = isset($data['postOfficeBox']) ? $data['postOfficeBox'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['postOffice'] = isset($data['postOffice']) ? $data['postOffice'] : null;
        $this->container['streetAddress'] = isset($data['streetAddress']) ? $data['streetAddress'] : null;
        $this->container['streetNumber'] = isset($data['streetNumber']) ? $data['streetNumber'] : null;
        $this->container['municipality'] = isset($data['municipality']) ? $data['municipality'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['locationAbroad'] = isset($data['locationAbroad']) ? $data['locationAbroad'] : null;
        $this->container['multipointLocation'] = isset($data['multipointLocation']) ? $data['multipointLocation'] : null;
        $this->container['additionalInformations'] = isset($data['additionalInformations']) ? $data['additionalInformations'] : null;
        $this->container['entrances'] = isset($data['entrances']) ? $data['entrances'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets latitude
     * @return string
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param string $latitude Service location latitude coordinate.
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return string
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param string $longitude Service location longitude coordinate.
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets coordinates
     * @return \KuntaAPI\Model\Coordinates
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     * @param \KuntaAPI\Model\Coordinates $coordinates
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets coordinateState
     * @return string
     */
    public function getCoordinateState()
    {
        return $this->container['coordinateState'];
    }

    /**
     * Sets coordinateState
     * @param string $coordinateState State of coordinates. Coordinates are fetched from a service provided by Maanmittauslaitos (WFS).  Possible values are: Loading, Ok, Failed, NotReceived, EmptyInputReceived, MultipleResultsReceived or WrongFormatReceived.
     * @return $this
     */
    public function setCoordinateState($coordinateState)
    {
        $this->container['coordinateState'] = $coordinateState;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Address type, Visiting or Postal.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets subtype
     * @return string
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     * @param string $subtype Address sub type, Single, Street, PostOfficeBox, Abroad or Multipoint or NoAddress.
     * @return $this
     */
    public function setSubtype($subtype)
    {
        $this->container['subtype'] = $subtype;

        return $this;
    }

    /**
     * Gets postOfficeBox
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getPostOfficeBox()
    {
        return $this->container['postOfficeBox'];
    }

    /**
     * Sets postOfficeBox
     * @param \KuntaAPI\Model\LocalizedValue[] $postOfficeBox Post office box like PL 310
     * @return $this
     */
    public function setPostOfficeBox($postOfficeBox)
    {
        $this->container['postOfficeBox'] = $postOfficeBox;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode Postal code, for example 00010.
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets postOffice
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getPostOffice()
    {
        return $this->container['postOffice'];
    }

    /**
     * Sets postOffice
     * @param \KuntaAPI\Model\LocalizedValue[] $postOffice List of localized Post offices, for example Helsinki, Helsingfors.
     * @return $this
     */
    public function setPostOffice($postOffice)
    {
        $this->container['postOffice'] = $postOffice;

        return $this;
    }

    /**
     * Gets streetAddress
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getStreetAddress()
    {
        return $this->container['streetAddress'];
    }

    /**
     * Sets streetAddress
     * @param \KuntaAPI\Model\LocalizedValue[] $streetAddress List of localized street addresses.
     * @return $this
     */
    public function setStreetAddress($streetAddress)
    {
        $this->container['streetAddress'] = $streetAddress;

        return $this;
    }

    /**
     * Gets streetNumber
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->container['streetNumber'];
    }

    /**
     * Sets streetNumber
     * @param string $streetNumber Street number for street address.
     * @return $this
     */
    public function setStreetNumber($streetNumber)
    {
        $this->container['streetNumber'] = $streetNumber;

        return $this;
    }

    /**
     * Gets municipality
     * @return \KuntaAPI\Model\Municipality
     */
    public function getMunicipality()
    {
        return $this->container['municipality'];
    }

    /**
     * Sets municipality
     * @param \KuntaAPI\Model\Municipality $municipality
     * @return $this
     */
    public function setMunicipality($municipality)
    {
        $this->container['municipality'] = $municipality;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Country code (ISO 3166-1 alpha-2), for example FI.
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets locationAbroad
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getLocationAbroad()
    {
        return $this->container['locationAbroad'];
    }

    /**
     * Sets locationAbroad
     * @param \KuntaAPI\Model\LocalizedValue[] $locationAbroad Localized list of foreign address information.
     * @return $this
     */
    public function setLocationAbroad($locationAbroad)
    {
        $this->container['locationAbroad'] = $locationAbroad;

        return $this;
    }

    /**
     * Gets multipointLocation
     * @return \KuntaAPI\Model\Address[]
     */
    public function getMultipointLocation()
    {
        return $this->container['multipointLocation'];
    }

    /**
     * Sets multipointLocation
     * @param \KuntaAPI\Model\Address[] $multipointLocation Moving address. Includes several street addresses.
     * @return $this
     */
    public function setMultipointLocation($multipointLocation)
    {
        $this->container['multipointLocation'] = $multipointLocation;

        return $this;
    }

    /**
     * Gets additionalInformations
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getAdditionalInformations()
    {
        return $this->container['additionalInformations'];
    }

    /**
     * Sets additionalInformations
     * @param \KuntaAPI\Model\LocalizedValue[] $additionalInformations Localized list of additional information about the address.
     * @return $this
     */
    public function setAdditionalInformations($additionalInformations)
    {
        $this->container['additionalInformations'] = $additionalInformations;

        return $this;
    }

    /**
     * Gets entrances
     * @return \KuntaAPI\Model\AddressEntrance[]
     */
    public function getEntrances()
    {
        return $this->container['entrances'];
    }

    /**
     * Sets entrances
     * @param \KuntaAPI\Model\AddressEntrance[] $entrances Entrances for an address. Includes accessibility sentences.
     * @return $this
     */
    public function setEntrances($entrances)
    {
        $this->container['entrances'] = $entrances;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\KuntaAPI\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\KuntaAPI\ObjectSerializer::sanitizeForSerialization($this));
    }
}


