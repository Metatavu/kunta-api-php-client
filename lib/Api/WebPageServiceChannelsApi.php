<?php
/**
 * WebPageServiceChannelsApi
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
 * WebPageServiceChannelsApi Class Doc Comment
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebPageServiceChannelsApi
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
     * @return WebPageServiceChannelsApi
     */
    public function setApiClient(\KuntaAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation findWebPageServiceChannel
     *
     * Finds a web page service channel by id
     *
     * @param string $webPageServiceChannelId webPageChannel id (required)
     * @return \KuntaAPI\Model\WebPageServiceChannel
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findWebPageServiceChannel($webPageServiceChannelId)
    {
        list($response) = $this->findWebPageServiceChannelWithHttpInfo($webPageServiceChannelId);
        return $response;
    }

    /**
     * Operation findWebPageServiceChannelWithHttpInfo
     *
     * Finds a web page service channel by id
     *
     * @param string $webPageServiceChannelId webPageChannel id (required)
     * @return Array of \KuntaAPI\Model\WebPageServiceChannel, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findWebPageServiceChannelWithHttpInfo($webPageServiceChannelId)
    {
        // verify the required parameter 'webPageServiceChannelId' is set
        if ($webPageServiceChannelId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $webPageServiceChannelId when calling findWebPageServiceChannel');
        }
        // parse inputs
        $resourcePath = "/webPageServiceChannels/{webPageServiceChannelId}";
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
        if ($webPageServiceChannelId !== null) {
            $resourcePath = str_replace(
                "{" . "webPageServiceChannelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($webPageServiceChannelId),
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
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\WebPageServiceChannel',
                '/webPageServiceChannels/{webPageServiceChannelId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\WebPageServiceChannel', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\WebPageServiceChannel', $e->getResponseHeaders());
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
     * Operation listWebPageServiceChannels
     *
     * Lists web page service channels
     *
     * @param string $organizationId Organization id (optional)
     * @param string $search Search channels by free-text query (optional)
     * @param string $sortBy define order (NATURAL or SCORE). Default is NATURAL (optional)
     * @param string $sortDir ASC or DESC. Default is ASC (optional)
     * @param int $firstResult First result (optional)
     * @param int $maxResults Max results (optional)
     * @return \KuntaAPI\Model\WebPageServiceChannel[]
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listWebPageServiceChannels($organizationId = null, $search = null, $sortBy = null, $sortDir = null, $firstResult = null, $maxResults = null)
    {
        list($response) = $this->listWebPageServiceChannelsWithHttpInfo($organizationId, $search, $sortBy, $sortDir, $firstResult, $maxResults);
        return $response;
    }

    /**
     * Operation listWebPageServiceChannelsWithHttpInfo
     *
     * Lists web page service channels
     *
     * @param string $organizationId Organization id (optional)
     * @param string $search Search channels by free-text query (optional)
     * @param string $sortBy define order (NATURAL or SCORE). Default is NATURAL (optional)
     * @param string $sortDir ASC or DESC. Default is ASC (optional)
     * @param int $firstResult First result (optional)
     * @param int $maxResults Max results (optional)
     * @return Array of \KuntaAPI\Model\WebPageServiceChannel[], HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listWebPageServiceChannelsWithHttpInfo($organizationId = null, $search = null, $sortBy = null, $sortDir = null, $firstResult = null, $maxResults = null)
    {
        // parse inputs
        $resourcePath = "/webPageServiceChannels";
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
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($search);
        }
        // query params
        if ($sortBy !== null) {
            $queryParams['sortBy'] = $this->apiClient->getSerializer()->toQueryValue($sortBy);
        }
        // query params
        if ($sortDir !== null) {
            $queryParams['sortDir'] = $this->apiClient->getSerializer()->toQueryValue($sortDir);
        }
        // query params
        if ($firstResult !== null) {
            $queryParams['firstResult'] = $this->apiClient->getSerializer()->toQueryValue($firstResult);
        }
        // query params
        if ($maxResults !== null) {
            $queryParams['maxResults'] = $this->apiClient->getSerializer()->toQueryValue($maxResults);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\WebPageServiceChannel[]',
                '/webPageServiceChannels'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\WebPageServiceChannel[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\WebPageServiceChannel[]', $e->getResponseHeaders());
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
