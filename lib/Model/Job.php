<?php
/**
 * Job
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
 * Job Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     KuntaAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Job implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Job';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'title' => 'string',
        'employmentType' => 'string',
        'description' => 'string',
        'location' => 'string',
        'organisationalUnit' => 'string',
        'duration' => 'string',
        'taskArea' => 'string',
        'publicationStart' => '\DateTime',
        'publicationEnd' => '\DateTime',
        'link' => 'string'
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
        'title' => 'title',
        'employmentType' => 'employmentType',
        'description' => 'description',
        'location' => 'location',
        'organisationalUnit' => 'organisationalUnit',
        'duration' => 'duration',
        'taskArea' => 'taskArea',
        'publicationStart' => 'publicationStart',
        'publicationEnd' => 'publicationEnd',
        'link' => 'link'
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
        'title' => 'setTitle',
        'employmentType' => 'setEmploymentType',
        'description' => 'setDescription',
        'location' => 'setLocation',
        'organisationalUnit' => 'setOrganisationalUnit',
        'duration' => 'setDuration',
        'taskArea' => 'setTaskArea',
        'publicationStart' => 'setPublicationStart',
        'publicationEnd' => 'setPublicationEnd',
        'link' => 'setLink'
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
        'title' => 'getTitle',
        'employmentType' => 'getEmploymentType',
        'description' => 'getDescription',
        'location' => 'getLocation',
        'organisationalUnit' => 'getOrganisationalUnit',
        'duration' => 'getDuration',
        'taskArea' => 'getTaskArea',
        'publicationStart' => 'getPublicationStart',
        'publicationEnd' => 'getPublicationEnd',
        'link' => 'getLink'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['employmentType'] = isset($data['employmentType']) ? $data['employmentType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['organisationalUnit'] = isset($data['organisationalUnit']) ? $data['organisationalUnit'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['taskArea'] = isset($data['taskArea']) ? $data['taskArea'] : null;
        $this->container['publicationStart'] = isset($data['publicationStart']) ? $data['publicationStart'] : null;
        $this->container['publicationEnd'] = isset($data['publicationEnd']) ? $data['publicationEnd'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
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
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets employmentType
     * @return string
     */
    public function getEmploymentType()
    {
        return $this->container['employmentType'];
    }

    /**
     * Sets employmentType
     * @param string $employmentType
     * @return $this
     */
    public function setEmploymentType($employmentType)
    {
        $this->container['employmentType'] = $employmentType;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets organisationalUnit
     * @return string
     */
    public function getOrganisationalUnit()
    {
        return $this->container['organisationalUnit'];
    }

    /**
     * Sets organisationalUnit
     * @param string $organisationalUnit
     * @return $this
     */
    public function setOrganisationalUnit($organisationalUnit)
    {
        $this->container['organisationalUnit'] = $organisationalUnit;

        return $this;
    }

    /**
     * Gets duration
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param string $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets taskArea
     * @return string
     */
    public function getTaskArea()
    {
        return $this->container['taskArea'];
    }

    /**
     * Sets taskArea
     * @param string $taskArea
     * @return $this
     */
    public function setTaskArea($taskArea)
    {
        $this->container['taskArea'] = $taskArea;

        return $this;
    }

    /**
     * Gets publicationStart
     * @return \DateTime
     */
    public function getPublicationStart()
    {
        return $this->container['publicationStart'];
    }

    /**
     * Sets publicationStart
     * @param \DateTime $publicationStart
     * @return $this
     */
    public function setPublicationStart($publicationStart)
    {
        $this->container['publicationStart'] = $publicationStart;

        return $this;
    }

    /**
     * Gets publicationEnd
     * @return \DateTime
     */
    public function getPublicationEnd()
    {
        return $this->container['publicationEnd'];
    }

    /**
     * Sets publicationEnd
     * @param \DateTime $publicationEnd
     * @return $this
     */
    public function setPublicationEnd($publicationEnd)
    {
        $this->container['publicationEnd'] = $publicationEnd;

        return $this;
    }

    /**
     * Gets link
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     * @param string $link
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

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


