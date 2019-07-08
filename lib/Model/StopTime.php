<?php
/**
 * StopTime
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
 * StopTime Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     KuntaAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StopTime implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'StopTime';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'tripId' => 'string',
        'stopId' => 'string',
        'arrivalTime' => 'int',
        'departureTime' => 'int',
        'sequency' => 'int',
        'distanceTraveled' => 'double'
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
        'tripId' => 'tripId',
        'stopId' => 'stopId',
        'arrivalTime' => 'arrivalTime',
        'departureTime' => 'departureTime',
        'sequency' => 'sequency',
        'distanceTraveled' => 'distanceTraveled'
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
        'tripId' => 'setTripId',
        'stopId' => 'setStopId',
        'arrivalTime' => 'setArrivalTime',
        'departureTime' => 'setDepartureTime',
        'sequency' => 'setSequency',
        'distanceTraveled' => 'setDistanceTraveled'
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
        'tripId' => 'getTripId',
        'stopId' => 'getStopId',
        'arrivalTime' => 'getArrivalTime',
        'departureTime' => 'getDepartureTime',
        'sequency' => 'getSequency',
        'distanceTraveled' => 'getDistanceTraveled'
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
        $this->container['tripId'] = isset($data['tripId']) ? $data['tripId'] : null;
        $this->container['stopId'] = isset($data['stopId']) ? $data['stopId'] : null;
        $this->container['arrivalTime'] = isset($data['arrivalTime']) ? $data['arrivalTime'] : null;
        $this->container['departureTime'] = isset($data['departureTime']) ? $data['departureTime'] : null;
        $this->container['sequency'] = isset($data['sequency']) ? $data['sequency'] : null;
        $this->container['distanceTraveled'] = isset($data['distanceTraveled']) ? $data['distanceTraveled'] : null;
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
     * Gets tripId
     * @return string
     */
    public function getTripId()
    {
        return $this->container['tripId'];
    }

    /**
     * Sets tripId
     * @param string $tripId
     * @return $this
     */
    public function setTripId($tripId)
    {
        $this->container['tripId'] = $tripId;

        return $this;
    }

    /**
     * Gets stopId
     * @return string
     */
    public function getStopId()
    {
        return $this->container['stopId'];
    }

    /**
     * Sets stopId
     * @param string $stopId
     * @return $this
     */
    public function setStopId($stopId)
    {
        $this->container['stopId'] = $stopId;

        return $this;
    }

    /**
     * Gets arrivalTime
     * @return int
     */
    public function getArrivalTime()
    {
        return $this->container['arrivalTime'];
    }

    /**
     * Sets arrivalTime
     * @param int $arrivalTime
     * @return $this
     */
    public function setArrivalTime($arrivalTime)
    {
        $this->container['arrivalTime'] = $arrivalTime;

        return $this;
    }

    /**
     * Gets departureTime
     * @return int
     */
    public function getDepartureTime()
    {
        return $this->container['departureTime'];
    }

    /**
     * Sets departureTime
     * @param int $departureTime
     * @return $this
     */
    public function setDepartureTime($departureTime)
    {
        $this->container['departureTime'] = $departureTime;

        return $this;
    }

    /**
     * Gets sequency
     * @return int
     */
    public function getSequency()
    {
        return $this->container['sequency'];
    }

    /**
     * Sets sequency
     * @param int $sequency
     * @return $this
     */
    public function setSequency($sequency)
    {
        $this->container['sequency'] = $sequency;

        return $this;
    }

    /**
     * Gets distanceTraveled
     * @return double
     */
    public function getDistanceTraveled()
    {
        return $this->container['distanceTraveled'];
    }

    /**
     * Sets distanceTraveled
     * @param double $distanceTraveled
     * @return $this
     */
    public function setDistanceTraveled($distanceTraveled)
    {
        $this->container['distanceTraveled'] = $distanceTraveled;

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


