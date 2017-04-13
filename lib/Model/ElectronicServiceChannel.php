<?php
/**
 * ElectronicServiceChannel
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
 * ElectronicServiceChannel Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     KuntaAPI
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ElectronicServiceChannel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ElectronicServiceChannel';

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
        'signatureQuantity' => 'int',
        'requiresSignature' => 'bool',
        'supportPhones' => '\KuntaAPI\Model\Phone[]',
        'supportEmails' => '\KuntaAPI\Model\Email[]',
        'requiresAuthentication' => 'bool',
        'urls' => '\KuntaAPI\Model\LocalizedValue[]',
        'languages' => 'string[]',
        'attachments' => '\KuntaAPI\Model\ServiceChannelAttachment[]',
        'webPages' => '\KuntaAPI\Model\WebPage[]',
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
        'signatureQuantity' => 'signatureQuantity',
        'requiresSignature' => 'requiresSignature',
        'supportPhones' => 'supportPhones',
        'supportEmails' => 'supportEmails',
        'requiresAuthentication' => 'requiresAuthentication',
        'urls' => 'urls',
        'languages' => 'languages',
        'attachments' => 'attachments',
        'webPages' => 'webPages',
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
        'signatureQuantity' => 'setSignatureQuantity',
        'requiresSignature' => 'setRequiresSignature',
        'supportPhones' => 'setSupportPhones',
        'supportEmails' => 'setSupportEmails',
        'requiresAuthentication' => 'setRequiresAuthentication',
        'urls' => 'setUrls',
        'languages' => 'setLanguages',
        'attachments' => 'setAttachments',
        'webPages' => 'setWebPages',
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
        'signatureQuantity' => 'getSignatureQuantity',
        'requiresSignature' => 'getRequiresSignature',
        'supportPhones' => 'getSupportPhones',
        'supportEmails' => 'getSupportEmails',
        'requiresAuthentication' => 'getRequiresAuthentication',
        'urls' => 'getUrls',
        'languages' => 'getLanguages',
        'attachments' => 'getAttachments',
        'webPages' => 'getWebPages',
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
        $this->container['signatureQuantity'] = isset($data['signatureQuantity']) ? $data['signatureQuantity'] : null;
        $this->container['requiresSignature'] = isset($data['requiresSignature']) ? $data['requiresSignature'] : null;
        $this->container['supportPhones'] = isset($data['supportPhones']) ? $data['supportPhones'] : null;
        $this->container['supportEmails'] = isset($data['supportEmails']) ? $data['supportEmails'] : null;
        $this->container['requiresAuthentication'] = isset($data['requiresAuthentication']) ? $data['requiresAuthentication'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['webPages'] = isset($data['webPages']) ? $data['webPages'] : null;
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
     * Gets signatureQuantity
     * @return int
     */
    public function getSignatureQuantity()
    {
        return $this->container['signatureQuantity'];
    }

    /**
     * Sets signatureQuantity
     * @param int $signatureQuantity
     * @return $this
     */
    public function setSignatureQuantity($signatureQuantity)
    {
        $this->container['signatureQuantity'] = $signatureQuantity;

        return $this;
    }

    /**
     * Gets requiresSignature
     * @return bool
     */
    public function getRequiresSignature()
    {
        return $this->container['requiresSignature'];
    }

    /**
     * Sets requiresSignature
     * @param bool $requiresSignature
     * @return $this
     */
    public function setRequiresSignature($requiresSignature)
    {
        $this->container['requiresSignature'] = $requiresSignature;

        return $this;
    }

    /**
     * Gets supportPhones
     * @return \KuntaAPI\Model\Phone[]
     */
    public function getSupportPhones()
    {
        return $this->container['supportPhones'];
    }

    /**
     * Sets supportPhones
     * @param \KuntaAPI\Model\Phone[] $supportPhones List of support phone numbers for the service channel.
     * @return $this
     */
    public function setSupportPhones($supportPhones)
    {
        $this->container['supportPhones'] = $supportPhones;

        return $this;
    }

    /**
     * Gets supportEmails
     * @return \KuntaAPI\Model\Email[]
     */
    public function getSupportEmails()
    {
        return $this->container['supportEmails'];
    }

    /**
     * Sets supportEmails
     * @param \KuntaAPI\Model\Email[] $supportEmails List of support email addresses for the service channel.
     * @return $this
     */
    public function setSupportEmails($supportEmails)
    {
        $this->container['supportEmails'] = $supportEmails;

        return $this;
    }

    /**
     * Gets requiresAuthentication
     * @return bool
     */
    public function getRequiresAuthentication()
    {
        return $this->container['requiresAuthentication'];
    }

    /**
     * Sets requiresAuthentication
     * @param bool $requiresAuthentication
     * @return $this
     */
    public function setRequiresAuthentication($requiresAuthentication)
    {
        $this->container['requiresAuthentication'] = $requiresAuthentication;

        return $this;
    }

    /**
     * Gets urls
     * @return \KuntaAPI\Model\LocalizedValue[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     * @param \KuntaAPI\Model\LocalizedValue[] $urls
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

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
     * Gets attachments
     * @return \KuntaAPI\Model\ServiceChannelAttachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     * @param \KuntaAPI\Model\ServiceChannelAttachment[] $attachments
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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


