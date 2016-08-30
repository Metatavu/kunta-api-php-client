<?php
/**
 * EventsApi
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
 * One API to rule them all. One API to find them, One API to bring them all and in the darkness bind them.
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

namespace KuntaAPI\Api;

use \KuntaAPI\Configuration;
use \KuntaAPI\ApiClient;
use \KuntaAPI\ApiException;
use \KuntaAPI\ObjectSerializer;

/**
 * EventsApi Class Doc Comment
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventsApi
{

    /**
     * API Client
     *
     * @var \KuntaAPI\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \KuntaAPI\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\KuntaAPI\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://demo.kuntaapi.fi/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \KuntaAPI\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \KuntaAPI\ApiClient $apiClient set the API client
     *
     * @return EventsApi
     */
    public function setApiClient(\KuntaAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation findOrganizationEvent
     *
     * Returns organizations event by id
     *
     * @param string $organizationId Organization id (required)
     * @param string $eventId Event id (required)
     * @return \KuntaAPI\Model\Event
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationEvent($organizationId, $eventId)
    {
        list($response) = $this->findOrganizationEventWithHttpInfo($organizationId, $eventId);
        return $response;
    }

    /**
     * Operation findOrganizationEventWithHttpInfo
     *
     * Returns organizations event by id
     *
     * @param string $organizationId Organization id (required)
     * @param string $eventId Event id (required)
     * @return Array of \KuntaAPI\Model\Event, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationEventWithHttpInfo($organizationId, $eventId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling findOrganizationEvent');
        }
        // verify the required parameter 'eventId' is set
        if ($eventId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $eventId when calling findOrganizationEvent');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/events/{eventId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
                $resourcePath
            );
        }
        // path params
        if ($eventId !== null) {
            $resourcePath = str_replace(
                "{" . "eventId" . "}",
                $this->apiClient->getSerializer()->toPathValue($eventId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\Event',
                '/organizations/{organizationId}/events/{eventId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\Event', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Event', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation findOrganizationEventImage
     *
     * Returns an event image
     *
     * @param string $organizationId Organization id (required)
     * @param string $eventId Event id (required)
     * @param string $imageId Event image id (required)
     * @return \KuntaAPI\Model\Attachment
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationEventImage($organizationId, $eventId, $imageId)
    {
        list($response) = $this->findOrganizationEventImageWithHttpInfo($organizationId, $eventId, $imageId);
        return $response;
    }

    /**
     * Operation findOrganizationEventImageWithHttpInfo
     *
     * Returns an event image
     *
     * @param string $organizationId Organization id (required)
     * @param string $eventId Event id (required)
     * @param string $imageId Event image id (required)
     * @return Array of \KuntaAPI\Model\Attachment, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationEventImageWithHttpInfo($organizationId, $eventId, $imageId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling findOrganizationEventImage');
        }
        // verify the required parameter 'eventId' is set
        if ($eventId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $eventId when calling findOrganizationEventImage');
        }
        // verify the required parameter 'imageId' is set
        if ($imageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $imageId when calling findOrganizationEventImage');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/events/{eventId}/images/{imageId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
                $resourcePath
            );
        }
        // path params
        if ($eventId !== null) {
            $resourcePath = str_replace(
                "{" . "eventId" . "}",
                $this->apiClient->getSerializer()->toPathValue($eventId),
                $resourcePath
            );
        }
        // path params
        if ($imageId !== null) {
            $resourcePath = str_replace(
                "{" . "imageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($imageId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\Attachment',
                '/organizations/{organizationId}/events/{eventId}/images/{imageId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\Attachment', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Attachment', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOrganizationEventImageData
     *
     * Returns an event image data
     *
     * @param string $organizationId Organization id (required)
     * @param string $eventId Event id (required)
     * @param string $imageId Event image id (required)
     * @param int $size Maximum width or height of image (optional)
     * @return string
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function getOrganizationEventImageData($organizationId, $eventId, $imageId, $size = null)
    {
        list($response) = $this->getOrganizationEventImageDataWithHttpInfo($organizationId, $eventId, $imageId, $size);
        return $response;
    }

    /**
     * Operation getOrganizationEventImageDataWithHttpInfo
     *
     * Returns an event image data
     *
     * @param string $organizationId Organization id (required)
     * @param string $eventId Event id (required)
     * @param string $imageId Event image id (required)
     * @param int $size Maximum width or height of image (optional)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function getOrganizationEventImageDataWithHttpInfo($organizationId, $eventId, $imageId, $size = null)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling getOrganizationEventImageData');
        }
        // verify the required parameter 'eventId' is set
        if ($eventId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $eventId when calling getOrganizationEventImageData');
        }
        // verify the required parameter 'imageId' is set
        if ($imageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $imageId when calling getOrganizationEventImageData');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/events/{eventId}/images/{imageId}/data";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/octet-stream'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // query params
        if ($size !== null) {
            $queryParams['size'] = $this->apiClient->getSerializer()->toQueryValue($size);
        }
        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
                $resourcePath
            );
        }
        // path params
        if ($eventId !== null) {
            $resourcePath = str_replace(
                "{" . "eventId" . "}",
                $this->apiClient->getSerializer()->toPathValue($eventId),
                $resourcePath
            );
        }
        // path params
        if ($imageId !== null) {
            $resourcePath = str_replace(
                "{" . "imageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($imageId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/organizations/{organizationId}/events/{eventId}/images/{imageId}/data'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listOrganizationEventImages
     *
     * Returns list of event images
     *
     * @param string $organizationId Organization id (required)
     * @param string $eventId Event id (required)
     * @return \KuntaAPI\Model\Attachment[]
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationEventImages($organizationId, $eventId)
    {
        list($response) = $this->listOrganizationEventImagesWithHttpInfo($organizationId, $eventId);
        return $response;
    }

    /**
     * Operation listOrganizationEventImagesWithHttpInfo
     *
     * Returns list of event images
     *
     * @param string $organizationId Organization id (required)
     * @param string $eventId Event id (required)
     * @return Array of \KuntaAPI\Model\Attachment[], HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationEventImagesWithHttpInfo($organizationId, $eventId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling listOrganizationEventImages');
        }
        // verify the required parameter 'eventId' is set
        if ($eventId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $eventId when calling listOrganizationEventImages');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/events/{eventId}/images";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
                $resourcePath
            );
        }
        // path params
        if ($eventId !== null) {
            $resourcePath = str_replace(
                "{" . "eventId" . "}",
                $this->apiClient->getSerializer()->toPathValue($eventId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\Attachment[]',
                '/organizations/{organizationId}/events/{eventId}/images'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\Attachment[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Attachment[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listOrganizationEvents
     *
     * Lists organizations events
     *
     * @param string $organizationId Organization id (required)
     * @return \KuntaAPI\Model\Event[]
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationEvents($organizationId)
    {
        list($response) = $this->listOrganizationEventsWithHttpInfo($organizationId);
        return $response;
    }

    /**
     * Operation listOrganizationEventsWithHttpInfo
     *
     * Lists organizations events
     *
     * @param string $organizationId Organization id (required)
     * @return Array of \KuntaAPI\Model\Event[], HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationEventsWithHttpInfo($organizationId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling listOrganizationEvents');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/events";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\Event[]',
                '/organizations/{organizationId}/events'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\Event[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Event[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
