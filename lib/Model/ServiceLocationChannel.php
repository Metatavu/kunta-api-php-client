<?php
/**
 * ServiceLocationChannel
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
 * OpenAPI spec version: 0.0.1
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
 * ServiceLocationChannel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     KuntaAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ServiceLocationChannel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ServiceLocationChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'type' => 'string',
        'organizationId' => 'string',
        'names' => '\KuntaAPI\Model\LocalizedValue[]',
        'descriptions' => '\KuntaAPI\Model\LocalizedValue[]',
        'serviceAreaRestricted' => 'bool',
        'supportContacts' => '\KuntaAPI\Model\SupportContact[]',
        'email' => 'string',
        'phone' => 'string',
        'languages' => 'string[]',
        'fax' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'coordinateSystem' => 'string',
        'coordinatesSetManually' => 'bool',
        'phoneServiceCharge' => 'bool',
        'webPages' => '\KuntaAPI\Model\WebPage[]',
        'serviceAreas' => 'string[]',
        'phoneChargeDescriptions' => '\KuntaAPI\Model\LocalizedValue[]',
        'addresses' => '\KuntaAPI\Model\Address[]',
        'chargeTypes' => 'string[]',
        'serviceHours' => '\KuntaAPI\Model\ServiceHour[]',
        'publishingStatus' => 'string'
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
        'id' => 'id',
        'type' => 'type',
        'organizationId' => 'organizationId',
        'names' => 'names',
        'descriptions' => 'descriptions',
        'serviceAreaRestricted' => 'serviceAreaRestricted',
        'supportContacts' => 'supportContacts',
        'email' => 'email',
        'phone' => 'phone',
        'languages' => 'languages',
        'fax' => 'fax',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'coordinateSystem' => 'coordinateSystem',
        'coordinatesSetManually' => 'coordinatesSetManually',
        'phoneServiceCharge' => 'phoneServiceCharge',
        'webPages' => 'webPages',
        'serviceAreas' => 'serviceAreas',
        'phoneChargeDescriptions' => 'phoneChargeDescriptions',
        'addresses' => 'addresses',
        'chargeTypes' => 'chargeTypes',
        'serviceHours' => 'serviceHours',
        'publishingStatus' => 'publishingStatus'
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
        'id' => 'setId',
        'type' => 'setType',
        'organizationId' => 'setOrganizationId',
        'names' => 'setNames',
        'descriptions' => 'setDescriptions',
        'serviceAreaRestricted' => 'setServiceAreaRestricted',
        'supportContacts' => 'setSupportContacts',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'languages' => 'setLanguages',
        'fax' => 'setFax',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'coordinateSystem' => 'setCoordinateSystem',
        'coordinatesSetManually' => 'setCoordinatesSetManually',
        'phoneServiceCharge' => 'setPhoneServiceCharge',
        'webPages' => 'setWebPages',
        'serviceAreas' => 'setServiceAreas',
        'phoneChargeDescriptions' => 'setPhoneChargeDescriptions',
        'addresses' => 'setAddresses',
        'chargeTypes' => 'setChargeTypes',
        'serviceHours' => 'setServiceHours',
        'publishingStatus' => 'setPublishingStatus'
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
        'id' => 'getId',
        'type' => 'getType',
        'organizationId' => 'getOrganizationId',
        'names' => 'getNames',
        'descriptions' => 'getDescriptions',
        'serviceAreaRestricted' => 'getServiceAreaRestricted',
        'supportContacts' => 'getSupportContacts',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'languages' => 'getLanguages',
        'fax' => 'getFax',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'coordinateSystem' => 'getCoordinateSystem',
        'coordinatesSetManually' => 'getCoordinatesSetManually',
        'phoneServiceCharge' => 'getPhoneServiceCharge',
        'webPages' => 'getWebPages',
        'serviceAreas' => 'getServiceAreas',
        'phoneChargeDescriptions' => 'getPhoneChargeDescriptions',
        'addresses' => 'getAddresses',
        'chargeTypes' => 'getChargeTypes',
        'serviceHours' => 'getServiceHours',
        'publishingStatus' => 'getPublishingStatus'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['descriptions'] = isset($data['descriptions']) ? $data['descriptions'] : null;
        $this->container['serviceAreaRestricted'] = isset($data['serviceAreaRestricted']) ? $data['serviceAreaRestricted'] : null;
        $this->container['supportContacts'] = isset($data['supportContacts']) ? $data['supportContacts'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['coordinateSystem'] = isset($data['coordinateSystem']) ? $data['coordinateSystem'] : null;
        $this->container['coordinatesSetManually'] = isset($data['coordinatesSetManually']) ? $data['coordinatesSetManually'] : null;
        $this->container['phoneServiceCharge'] = isset($data['phoneServiceCharge']) ? $data['phoneServiceCharge'] : null;
        $this->container['webPages'] = isset($data['webPages']) ? $data['webPages'] : null;
        $this->container['serviceAreas'] = isset($data['serviceAreas']) ? $data['serviceAreas'] : null;
        $this->container['phoneChargeDescriptions'] = isset($data['phoneChargeDescriptions']) ? $data['phoneChargeDescriptions'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['chargeTypes'] = isset($data['chargeTypes']) ? $data['chargeTypes'] : null;
        $this->container['serviceHours'] = isset($data['serviceHours']) ? $data['serviceHours'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets organizationId
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     * @param string $organizationId
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets names
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getNames()
    {
        return $this->container['names'];
    }

    /**
     * Sets names
     * @param \KuntaAPI\Model\LocalizedValue[] $names
     * @return $this
     */
    public function setNames($names)
    {
        $this->container['names'] = $names;

        return $this;
    }

    /**
     * Gets descriptions
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getDescriptions()
    {
        return $this->container['descriptions'];
    }

    /**
     * Sets descriptions
     * @param \KuntaAPI\Model\LocalizedValue[] $descriptions
     * @return $this
     */
    public function setDescriptions($descriptions)
    {
        $this->container['descriptions'] = $descriptions;

        return $this;
    }

    /**
     * Gets serviceAreaRestricted
     * @return bool
     */
    public function getServiceAreaRestricted()
    {
        return $this->container['serviceAreaRestricted'];
    }

    /**
     * Sets serviceAreaRestricted
     * @param bool $serviceAreaRestricted
     * @return $this
     */
    public function setServiceAreaRestricted($serviceAreaRestricted)
    {
        $this->container['serviceAreaRestricted'] = $serviceAreaRestricted;

        return $this;
    }

    /**
     * Gets supportContacts
     * @return \KuntaAPI\Model\SupportContact[]
     */
    public function getSupportContacts()
    {
        return $this->container['supportContacts'];
    }

    /**
     * Sets supportContacts
     * @param \KuntaAPI\Model\SupportContact[] $supportContacts
     * @return $this
     */
    public function setSupportContacts($supportContacts)
    {
        $this->container['supportContacts'] = $supportContacts;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets languages
     * @return string[]
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     * @param string[] $languages
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets fax
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     * @param string $fax
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
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
     * @param string $latitude
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
     * @param string $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets coordinateSystem
     * @return string
     */
    public function getCoordinateSystem()
    {
        return $this->container['coordinateSystem'];
    }

    /**
     * Sets coordinateSystem
     * @param string $coordinateSystem
     * @return $this
     */
    public function setCoordinateSystem($coordinateSystem)
    {
        $this->container['coordinateSystem'] = $coordinateSystem;

        return $this;
    }

    /**
     * Gets coordinatesSetManually
     * @return bool
     */
    public function getCoordinatesSetManually()
    {
        return $this->container['coordinatesSetManually'];
    }

    /**
     * Sets coordinatesSetManually
     * @param bool $coordinatesSetManually
     * @return $this
     */
    public function setCoordinatesSetManually($coordinatesSetManually)
    {
        $this->container['coordinatesSetManually'] = $coordinatesSetManually;

        return $this;
    }

    /**
     * Gets phoneServiceCharge
     * @return bool
     */
    public function getPhoneServiceCharge()
    {
        return $this->container['phoneServiceCharge'];
    }

    /**
     * Sets phoneServiceCharge
     * @param bool $phoneServiceCharge
     * @return $this
     */
    public function setPhoneServiceCharge($phoneServiceCharge)
    {
        $this->container['phoneServiceCharge'] = $phoneServiceCharge;

        return $this;
    }

    /**
     * Gets webPages
     * @return \KuntaAPI\Model\WebPage[]
     */
    public function getWebPages()
    {
        return $this->container['webPages'];
    }

    /**
     * Sets webPages
     * @param \KuntaAPI\Model\WebPage[] $webPages
     * @return $this
     */
    public function setWebPages($webPages)
    {
        $this->container['webPages'] = $webPages;

        return $this;
    }

    /**
     * Gets serviceAreas
     * @return string[]
     */
    public function getServiceAreas()
    {
        return $this->container['serviceAreas'];
    }

    /**
     * Sets serviceAreas
     * @param string[] $serviceAreas
     * @return $this
     */
    public function setServiceAreas($serviceAreas)
    {
        $this->container['serviceAreas'] = $serviceAreas;

        return $this;
    }

    /**
     * Gets phoneChargeDescriptions
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getPhoneChargeDescriptions()
    {
        return $this->container['phoneChargeDescriptions'];
    }

    /**
     * Sets phoneChargeDescriptions
     * @param \KuntaAPI\Model\LocalizedValue[] $phoneChargeDescriptions
     * @return $this
     */
    public function setPhoneChargeDescriptions($phoneChargeDescriptions)
    {
        $this->container['phoneChargeDescriptions'] = $phoneChargeDescriptions;

        return $this;
    }

    /**
     * Gets addresses
     * @return \KuntaAPI\Model\Address[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     * @param \KuntaAPI\Model\Address[] $addresses
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets chargeTypes
     * @return string[]
     */
    public function getChargeTypes()
    {
        return $this->container['chargeTypes'];
    }

    /**
     * Sets chargeTypes
     * @param string[] $chargeTypes
     * @return $this
     */
    public function setChargeTypes($chargeTypes)
    {
        $this->container['chargeTypes'] = $chargeTypes;

        return $this;
    }

    /**
     * Gets serviceHours
     * @return \KuntaAPI\Model\ServiceHour[]
     */
    public function getServiceHours()
    {
        return $this->container['serviceHours'];
    }

    /**
     * Sets serviceHours
     * @param \KuntaAPI\Model\ServiceHour[] $serviceHours
     * @return $this
     */
    public function setServiceHours($serviceHours)
    {
        $this->container['serviceHours'] = $serviceHours;

        return $this;
    }

    /**
     * Gets publishingStatus
     * @return string
     */
    public function getPublishingStatus()
    {
        return $this->container['publishingStatus'];
    }

    /**
     * Sets publishingStatus
     * @param string $publishingStatus
     * @return $this
     */
    public function setPublishingStatus($publishingStatus)
    {
        $this->container['publishingStatus'] = $publishingStatus;

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


