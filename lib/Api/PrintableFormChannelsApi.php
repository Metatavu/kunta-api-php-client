<?php
/**
 * PrintableFormChannelsApi
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

namespace KuntaAPI\Api;

use \KuntaAPI\Configuration;
use \KuntaAPI\ApiClient;
use \KuntaAPI\ApiException;
use \KuntaAPI\ObjectSerializer;

/**
 * PrintableFormChannelsApi Class Doc Comment
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrintableFormChannelsApi
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
     * @return PrintableFormChannelsApi
     */
    public function setApiClient(\KuntaAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createServicePrintableFormChannel
     *
     * creates PrintableFormChannel
     *
     * @param string $serviceId service id (required)
     * @param \KuntaAPI\Model\PrintableFormChannel $body Payload (required)
     * @return \KuntaAPI\Model\PrintableFormChannel
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function createServicePrintableFormChannel($serviceId, $body)
    {
        list($response) = $this->createServicePrintableFormChannelWithHttpInfo($serviceId, $body);
        return $response;
    }

    /**
     * Operation createServicePrintableFormChannelWithHttpInfo
     *
     * creates PrintableFormChannel
     *
     * @param string $serviceId service id (required)
     * @param \KuntaAPI\Model\PrintableFormChannel $body Payload (required)
     * @return Array of \KuntaAPI\Model\PrintableFormChannel, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function createServicePrintableFormChannelWithHttpInfo($serviceId, $body)
    {
        // verify the required parameter 'serviceId' is set
        if ($serviceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serviceId when calling createServicePrintableFormChannel');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createServicePrintableFormChannel');
        }
        // parse inputs
        $resourcePath = "/services/{serviceId}/printableFormChannels";
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
        if ($serviceId !== null) {
            $resourcePath = str_replace(
                "{" . "serviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($serviceId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\PrintableFormChannel',
                '/services/{serviceId}/printableFormChannels'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\PrintableFormChannel', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\PrintableFormChannel', $e->getResponseHeaders());
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
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\NotFound', $e->getResponseHeaders());
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
     * Operation findServicePrintableFormChannel
     *
     * finds PrintableFormChannel by printableFormChannelId
     *
     * @param string $serviceId Service id (required)
     * @param string $printableFormChannelId printableFormChannel id (required)
     * @return \KuntaAPI\Model\PrintableFormChannel
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findServicePrintableFormChannel($serviceId, $printableFormChannelId)
    {
        list($response) = $this->findServicePrintableFormChannelWithHttpInfo($serviceId, $printableFormChannelId);
        return $response;
    }

    /**
     * Operation findServicePrintableFormChannelWithHttpInfo
     *
     * finds PrintableFormChannel by printableFormChannelId
     *
     * @param string $serviceId Service id (required)
     * @param string $printableFormChannelId printableFormChannel id (required)
     * @return Array of \KuntaAPI\Model\PrintableFormChannel, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findServicePrintableFormChannelWithHttpInfo($serviceId, $printableFormChannelId)
    {
        // verify the required parameter 'serviceId' is set
        if ($serviceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serviceId when calling findServicePrintableFormChannel');
        }
        // verify the required parameter 'printableFormChannelId' is set
        if ($printableFormChannelId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $printableFormChannelId when calling findServicePrintableFormChannel');
        }
        // parse inputs
        $resourcePath = "/services/{serviceId}/printableFormChannels/{printableFormChannelId}";
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
        if ($serviceId !== null) {
            $resourcePath = str_replace(
                "{" . "serviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($serviceId),
                $resourcePath
            );
        }
        // path params
        if ($printableFormChannelId !== null) {
            $resourcePath = str_replace(
                "{" . "printableFormChannelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($printableFormChannelId),
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
                '\KuntaAPI\Model\PrintableFormChannel',
                '/services/{serviceId}/printableFormChannels/{printableFormChannelId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\PrintableFormChannel', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\PrintableFormChannel', $e->getResponseHeaders());
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
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\NotFound', $e->getResponseHeaders());
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
     * Operation listServicePrintableFormChannels
     *
     * Lists PrintableFormChannels by serviceId
     *
     * @param string $serviceId Service id (required)
     * @param int $firstResult First result (optional)
     * @param int $maxResults Max results (optional)
     * @return \KuntaAPI\Model\PrintableFormChannel[]
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listServicePrintableFormChannels($serviceId, $firstResult = null, $maxResults = null)
    {
        list($response) = $this->listServicePrintableFormChannelsWithHttpInfo($serviceId, $firstResult, $maxResults);
        return $response;
    }

    /**
     * Operation listServicePrintableFormChannelsWithHttpInfo
     *
     * Lists PrintableFormChannels by serviceId
     *
     * @param string $serviceId Service id (required)
     * @param int $firstResult First result (optional)
     * @param int $maxResults Max results (optional)
     * @return Array of \KuntaAPI\Model\PrintableFormChannel[], HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listServicePrintableFormChannelsWithHttpInfo($serviceId, $firstResult = null, $maxResults = null)
    {
        // verify the required parameter 'serviceId' is set
        if ($serviceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serviceId when calling listServicePrintableFormChannels');
        }
        // parse inputs
        $resourcePath = "/services/{serviceId}/printableFormChannels";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // query params
        if ($firstResult !== null) {
            $queryParams['firstResult'] = $this->apiClient->getSerializer()->toQueryValue($firstResult);
        }
        // query params
        if ($maxResults !== null) {
            $queryParams['maxResults'] = $this->apiClient->getSerializer()->toQueryValue($maxResults);
        }
        // path params
        if ($serviceId !== null) {
            $resourcePath = str_replace(
                "{" . "serviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($serviceId),
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
                '\KuntaAPI\Model\PrintableFormChannel[]',
                '/services/{serviceId}/printableFormChannels'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\PrintableFormChannel[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\PrintableFormChannel[]', $e->getResponseHeaders());
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
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\NotFound', $e->getResponseHeaders());
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
     * Operation updatePrintableFormChannel
     *
     * Updates PrintableFormChannel
     *
     * @param string $serviceId service id (required)
     * @param string $printableFormChannelId printableFormChannel id (required)
     * @param \KuntaAPI\Model\PrintableFormChannel $body Payload (required)
     * @return \KuntaAPI\Model\PrintableFormChannel
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function updatePrintableFormChannel($serviceId, $printableFormChannelId, $body)
    {
        list($response) = $this->updatePrintableFormChannelWithHttpInfo($serviceId, $printableFormChannelId, $body);
        return $response;
    }

    /**
     * Operation updatePrintableFormChannelWithHttpInfo
     *
     * Updates PrintableFormChannel
     *
     * @param string $serviceId service id (required)
     * @param string $printableFormChannelId printableFormChannel id (required)
     * @param \KuntaAPI\Model\PrintableFormChannel $body Payload (required)
     * @return Array of \KuntaAPI\Model\PrintableFormChannel, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function updatePrintableFormChannelWithHttpInfo($serviceId, $printableFormChannelId, $body)
    {
        // verify the required parameter 'serviceId' is set
        if ($serviceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serviceId when calling updatePrintableFormChannel');
        }
        // verify the required parameter 'printableFormChannelId' is set
        if ($printableFormChannelId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $printableFormChannelId when calling updatePrintableFormChannel');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updatePrintableFormChannel');
        }
        // parse inputs
        $resourcePath = "/services/{serviceId}/printableFormChannels/{printableFormChannelId}";
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
        if ($serviceId !== null) {
            $resourcePath = str_replace(
                "{" . "serviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($serviceId),
                $resourcePath
            );
        }
        // path params
        if ($printableFormChannelId !== null) {
            $resourcePath = str_replace(
                "{" . "printableFormChannelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($printableFormChannelId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\PrintableFormChannel',
                '/services/{serviceId}/printableFormChannels/{printableFormChannelId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\PrintableFormChannel', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\PrintableFormChannel', $e->getResponseHeaders());
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
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\NotFound', $e->getResponseHeaders());
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
