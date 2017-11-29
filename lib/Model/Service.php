<?php
/**
 * Service
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
 * Service Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     KuntaAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Service implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'type' => 'string',
        'statutoryDescriptionId' => 'string',
        'chargeType' => 'string',
        'names' => '\KuntaAPI\Model\LocalizedValue[]',
        'areaType' => 'string',
        'areas' => '\KuntaAPI\Model\Area[]',
        'descriptions' => '\KuntaAPI\Model\LocalizedValue[]',
        'languages' => 'string[]',
        'serviceClasses' => '\KuntaAPI\Model\OntologyItem[]',
        'ontologyTerms' => '\KuntaAPI\Model\OntologyItem[]',
        'targetGroups' => '\KuntaAPI\Model\OntologyItem[]',
        'lifeEvents' => '\KuntaAPI\Model\OntologyItem[]',
        'industrialClasses' => '\KuntaAPI\Model\OntologyItem[]',
        'legislation' => '\KuntaAPI\Model\Law[]',
        'keywords' => '\KuntaAPI\Model\LocalizedValue[]',
        'requirements' => '\KuntaAPI\Model\LocalizedValue[]',
        'publishingStatus' => 'string',
        'organizations' => '\KuntaAPI\Model\ServiceOrganization[]',
        'serviceVouchers' => '\KuntaAPI\Model\ServiceVoucher[]',
        'electronicServiceChannelIds' => 'string[]',
        'phoneServiceChannelIds' => 'string[]',
        'printableFormServiceChannelIds' => 'string[]',
        'serviceLocationServiceChannelIds' => 'string[]',
        'webPageServiceChannelIds' => 'string[]'
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
        'statutoryDescriptionId' => 'statutoryDescriptionId',
        'chargeType' => 'chargeType',
        'names' => 'names',
        'areaType' => 'areaType',
        'areas' => 'areas',
        'descriptions' => 'descriptions',
        'languages' => 'languages',
        'serviceClasses' => 'serviceClasses',
        'ontologyTerms' => 'ontologyTerms',
        'targetGroups' => 'targetGroups',
        'lifeEvents' => 'lifeEvents',
        'industrialClasses' => 'industrialClasses',
        'legislation' => 'legislation',
        'keywords' => 'keywords',
        'requirements' => 'requirements',
        'publishingStatus' => 'publishingStatus',
        'organizations' => 'organizations',
        'serviceVouchers' => 'serviceVouchers',
        'electronicServiceChannelIds' => 'electronicServiceChannelIds',
        'phoneServiceChannelIds' => 'phoneServiceChannelIds',
        'printableFormServiceChannelIds' => 'printableFormServiceChannelIds',
        'serviceLocationServiceChannelIds' => 'serviceLocationServiceChannelIds',
        'webPageServiceChannelIds' => 'webPageServiceChannelIds'
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
        'statutoryDescriptionId' => 'setStatutoryDescriptionId',
        'chargeType' => 'setChargeType',
        'names' => 'setNames',
        'areaType' => 'setAreaType',
        'areas' => 'setAreas',
        'descriptions' => 'setDescriptions',
        'languages' => 'setLanguages',
        'serviceClasses' => 'setServiceClasses',
        'ontologyTerms' => 'setOntologyTerms',
        'targetGroups' => 'setTargetGroups',
        'lifeEvents' => 'setLifeEvents',
        'industrialClasses' => 'setIndustrialClasses',
        'legislation' => 'setLegislation',
        'keywords' => 'setKeywords',
        'requirements' => 'setRequirements',
        'publishingStatus' => 'setPublishingStatus',
        'organizations' => 'setOrganizations',
        'serviceVouchers' => 'setServiceVouchers',
        'electronicServiceChannelIds' => 'setElectronicServiceChannelIds',
        'phoneServiceChannelIds' => 'setPhoneServiceChannelIds',
        'printableFormServiceChannelIds' => 'setPrintableFormServiceChannelIds',
        'serviceLocationServiceChannelIds' => 'setServiceLocationServiceChannelIds',
        'webPageServiceChannelIds' => 'setWebPageServiceChannelIds'
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
        'statutoryDescriptionId' => 'getStatutoryDescriptionId',
        'chargeType' => 'getChargeType',
        'names' => 'getNames',
        'areaType' => 'getAreaType',
        'areas' => 'getAreas',
        'descriptions' => 'getDescriptions',
        'languages' => 'getLanguages',
        'serviceClasses' => 'getServiceClasses',
        'ontologyTerms' => 'getOntologyTerms',
        'targetGroups' => 'getTargetGroups',
        'lifeEvents' => 'getLifeEvents',
        'industrialClasses' => 'getIndustrialClasses',
        'legislation' => 'getLegislation',
        'keywords' => 'getKeywords',
        'requirements' => 'getRequirements',
        'publishingStatus' => 'getPublishingStatus',
        'organizations' => 'getOrganizations',
        'serviceVouchers' => 'getServiceVouchers',
        'electronicServiceChannelIds' => 'getElectronicServiceChannelIds',
        'phoneServiceChannelIds' => 'getPhoneServiceChannelIds',
        'printableFormServiceChannelIds' => 'getPrintableFormServiceChannelIds',
        'serviceLocationServiceChannelIds' => 'getServiceLocationServiceChannelIds',
        'webPageServiceChannelIds' => 'getWebPageServiceChannelIds'
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
        $this->container['statutoryDescriptionId'] = isset($data['statutoryDescriptionId']) ? $data['statutoryDescriptionId'] : null;
        $this->container['chargeType'] = isset($data['chargeType']) ? $data['chargeType'] : null;
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['areaType'] = isset($data['areaType']) ? $data['areaType'] : null;
        $this->container['areas'] = isset($data['areas']) ? $data['areas'] : null;
        $this->container['descriptions'] = isset($data['descriptions']) ? $data['descriptions'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['serviceClasses'] = isset($data['serviceClasses']) ? $data['serviceClasses'] : null;
        $this->container['ontologyTerms'] = isset($data['ontologyTerms']) ? $data['ontologyTerms'] : null;
        $this->container['targetGroups'] = isset($data['targetGroups']) ? $data['targetGroups'] : null;
        $this->container['lifeEvents'] = isset($data['lifeEvents']) ? $data['lifeEvents'] : null;
        $this->container['industrialClasses'] = isset($data['industrialClasses']) ? $data['industrialClasses'] : null;
        $this->container['legislation'] = isset($data['legislation']) ? $data['legislation'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['requirements'] = isset($data['requirements']) ? $data['requirements'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
        $this->container['organizations'] = isset($data['organizations']) ? $data['organizations'] : null;
        $this->container['serviceVouchers'] = isset($data['serviceVouchers']) ? $data['serviceVouchers'] : null;
        $this->container['electronicServiceChannelIds'] = isset($data['electronicServiceChannelIds']) ? $data['electronicServiceChannelIds'] : null;
        $this->container['phoneServiceChannelIds'] = isset($data['phoneServiceChannelIds']) ? $data['phoneServiceChannelIds'] : null;
        $this->container['printableFormServiceChannelIds'] = isset($data['printableFormServiceChannelIds']) ? $data['printableFormServiceChannelIds'] : null;
        $this->container['serviceLocationServiceChannelIds'] = isset($data['serviceLocationServiceChannelIds']) ? $data['serviceLocationServiceChannelIds'] : null;
        $this->container['webPageServiceChannelIds'] = isset($data['webPageServiceChannelIds']) ? $data['webPageServiceChannelIds'] : null;
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
     * Gets statutoryDescriptionId
     * @return string
     */
    public function getStatutoryDescriptionId()
    {
        return $this->container['statutoryDescriptionId'];
    }

    /**
     * Sets statutoryDescriptionId
     * @param string $statutoryDescriptionId
     * @return $this
     */
    public function setStatutoryDescriptionId($statutoryDescriptionId)
    {
        $this->container['statutoryDescriptionId'] = $statutoryDescriptionId;

        return $this;
    }

    /**
     * Gets chargeType
     * @return string
     */
    public function getChargeType()
    {
        return $this->container['chargeType'];
    }

    /**
     * Sets chargeType
     * @param string $chargeType
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->container['chargeType'] = $chargeType;

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
     * Gets areaType
     * @return string
     */
    public function getAreaType()
    {
        return $this->container['areaType'];
    }

    /**
     * Sets areaType
     * @param string $areaType Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType).
     * @return $this
     */
    public function setAreaType($areaType)
    {
        $this->container['areaType'] = $areaType;

        return $this;
    }

    /**
     * Gets areas
     * @return \KuntaAPI\Model\Area[]
     */
    public function getAreas()
    {
        return $this->container['areas'];
    }

    /**
     * Sets areas
     * @param \KuntaAPI\Model\Area[] $areas List of service areas.
     * @return $this
     */
    public function setAreas($areas)
    {
        $this->container['areas'] = $areas;

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
     * Gets serviceClasses
     * @return \KuntaAPI\Model\OntologyItem[]
     */
    public function getServiceClasses()
    {
        return $this->container['serviceClasses'];
    }

    /**
     * Sets serviceClasses
     * @param \KuntaAPI\Model\OntologyItem[] $serviceClasses
     * @return $this
     */
    public function setServiceClasses($serviceClasses)
    {
        $this->container['serviceClasses'] = $serviceClasses;

        return $this;
    }

    /**
     * Gets ontologyTerms
     * @return \KuntaAPI\Model\OntologyItem[]
     */
    public function getOntologyTerms()
    {
        return $this->container['ontologyTerms'];
    }

    /**
     * Sets ontologyTerms
     * @param \KuntaAPI\Model\OntologyItem[] $ontologyTerms
     * @return $this
     */
    public function setOntologyTerms($ontologyTerms)
    {
        $this->container['ontologyTerms'] = $ontologyTerms;

        return $this;
    }

    /**
     * Gets targetGroups
     * @return \KuntaAPI\Model\OntologyItem[]
     */
    public function getTargetGroups()
    {
        return $this->container['targetGroups'];
    }

    /**
     * Sets targetGroups
     * @param \KuntaAPI\Model\OntologyItem[] $targetGroups
     * @return $this
     */
    public function setTargetGroups($targetGroups)
    {
        $this->container['targetGroups'] = $targetGroups;

        return $this;
    }

    /**
     * Gets lifeEvents
     * @return \KuntaAPI\Model\OntologyItem[]
     */
    public function getLifeEvents()
    {
        return $this->container['lifeEvents'];
    }

    /**
     * Sets lifeEvents
     * @param \KuntaAPI\Model\OntologyItem[] $lifeEvents
     * @return $this
     */
    public function setLifeEvents($lifeEvents)
    {
        $this->container['lifeEvents'] = $lifeEvents;

        return $this;
    }

    /**
     * Gets industrialClasses
     * @return \KuntaAPI\Model\OntologyItem[]
     */
    public function getIndustrialClasses()
    {
        return $this->container['industrialClasses'];
    }

    /**
     * Sets industrialClasses
     * @param \KuntaAPI\Model\OntologyItem[] $industrialClasses
     * @return $this
     */
    public function setIndustrialClasses($industrialClasses)
    {
        $this->container['industrialClasses'] = $industrialClasses;

        return $this;
    }

    /**
     * Gets legislation
     * @return \KuntaAPI\Model\Law[]
     */
    public function getLegislation()
    {
        return $this->container['legislation'];
    }

    /**
     * Sets legislation
     * @param \KuntaAPI\Model\Law[] $legislation List of laws related to the service.
     * @return $this
     */
    public function setLegislation($legislation)
    {
        $this->container['legislation'] = $legislation;

        return $this;
    }

    /**
     * Gets keywords
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     * @param \KuntaAPI\Model\LocalizedValue[] $keywords List of localized service keywords.
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets requirements
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     * @param \KuntaAPI\Model\LocalizedValue[] $requirements
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->container['requirements'] = $requirements;

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
     * @param string $publishingStatus Publishing status. Possible values are: Draft, Published, Deleted, Modified or OldPublished.
     * @return $this
     */
    public function setPublishingStatus($publishingStatus)
    {
        $this->container['publishingStatus'] = $publishingStatus;

        return $this;
    }

    /**
     * Gets organizations
     * @return \KuntaAPI\Model\ServiceOrganization[]
     */
    public function getOrganizations()
    {
        return $this->container['organizations'];
    }

    /**
     * Sets organizations
     * @param \KuntaAPI\Model\ServiceOrganization[] $organizations
     * @return $this
     */
    public function setOrganizations($organizations)
    {
        $this->container['organizations'] = $organizations;

        return $this;
    }

    /**
     * Gets serviceVouchers
     * @return \KuntaAPI\Model\ServiceVoucher[]
     */
    public function getServiceVouchers()
    {
        return $this->container['serviceVouchers'];
    }

    /**
     * Sets serviceVouchers
     * @param \KuntaAPI\Model\ServiceVoucher[] $serviceVouchers List of service vouchers.
     * @return $this
     */
    public function setServiceVouchers($serviceVouchers)
    {
        $this->container['serviceVouchers'] = $serviceVouchers;

        return $this;
    }

    /**
     * Gets electronicServiceChannelIds
     * @return string[]
     */
    public function getElectronicServiceChannelIds()
    {
        return $this->container['electronicServiceChannelIds'];
    }

    /**
     * Sets electronicServiceChannelIds
     * @param string[] $electronicServiceChannelIds
     * @return $this
     */
    public function setElectronicServiceChannelIds($electronicServiceChannelIds)
    {
        $this->container['electronicServiceChannelIds'] = $electronicServiceChannelIds;

        return $this;
    }

    /**
     * Gets phoneServiceChannelIds
     * @return string[]
     */
    public function getPhoneServiceChannelIds()
    {
        return $this->container['phoneServiceChannelIds'];
    }

    /**
     * Sets phoneServiceChannelIds
     * @param string[] $phoneServiceChannelIds
     * @return $this
     */
    public function setPhoneServiceChannelIds($phoneServiceChannelIds)
    {
        $this->container['phoneServiceChannelIds'] = $phoneServiceChannelIds;

        return $this;
    }

    /**
     * Gets printableFormServiceChannelIds
     * @return string[]
     */
    public function getPrintableFormServiceChannelIds()
    {
        return $this->container['printableFormServiceChannelIds'];
    }

    /**
     * Sets printableFormServiceChannelIds
     * @param string[] $printableFormServiceChannelIds
     * @return $this
     */
    public function setPrintableFormServiceChannelIds($printableFormServiceChannelIds)
    {
        $this->container['printableFormServiceChannelIds'] = $printableFormServiceChannelIds;

        return $this;
    }

    /**
     * Gets serviceLocationServiceChannelIds
     * @return string[]
     */
    public function getServiceLocationServiceChannelIds()
    {
        return $this->container['serviceLocationServiceChannelIds'];
    }

    /**
     * Sets serviceLocationServiceChannelIds
     * @param string[] $serviceLocationServiceChannelIds
     * @return $this
     */
    public function setServiceLocationServiceChannelIds($serviceLocationServiceChannelIds)
    {
        $this->container['serviceLocationServiceChannelIds'] = $serviceLocationServiceChannelIds;

        return $this;
    }

    /**
     * Gets webPageServiceChannelIds
     * @return string[]
     */
    public function getWebPageServiceChannelIds()
    {
        return $this->container['webPageServiceChannelIds'];
    }

    /**
     * Sets webPageServiceChannelIds
     * @param string[] $webPageServiceChannelIds
     * @return $this
     */
    public function setWebPageServiceChannelIds($webPageServiceChannelIds)
    {
        $this->container['webPageServiceChannelIds'] = $webPageServiceChannelIds;

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


