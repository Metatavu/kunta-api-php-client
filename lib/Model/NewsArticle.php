<?php
/**
 * NewsArticle
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
 * NewsArticle Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     KuntaAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NewsArticle implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NewsArticle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'title' => 'string',
        'abstract' => 'string',
        'slug' => 'string',
        'contents' => 'string',
        'published' => '\DateTime',
        'tags' => 'string[]'
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
        'abstract' => 'abstract',
        'slug' => 'slug',
        'contents' => 'contents',
        'published' => 'published',
        'tags' => 'tags'
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
        'abstract' => 'setAbstract',
        'slug' => 'setSlug',
        'contents' => 'setContents',
        'published' => 'setPublished',
        'tags' => 'setTags'
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
        'abstract' => 'getAbstract',
        'slug' => 'getSlug',
        'contents' => 'getContents',
        'published' => 'getPublished',
        'tags' => 'getTags'
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
        $this->container['abstract'] = isset($data['abstract']) ? $data['abstract'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
     * Gets abstract
     * @return string
     */
    public function getAbstract()
    {
        return $this->container['abstract'];
    }

    /**
     * Sets abstract
     * @param string $abstract
     * @return $this
     */
    public function setAbstract($abstract)
    {
        $this->container['abstract'] = $abstract;

        return $this;
    }

    /**
     * Gets slug
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets contents
     * @return string
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     * @param string $contents
     * @return $this
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets published
     * @return \DateTime
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     * @param \DateTime $published
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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


