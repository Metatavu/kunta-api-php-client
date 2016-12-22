<?php
/**
 * FilesApi
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
 * FilesApi Class Doc Comment
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilesApi
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
     * @return FilesApi
     */
    public function setApiClient(\KuntaAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation findOrganizationFile
     *
     * Finds organizations file
     *
     * @param string $organizationId Organization id (required)
     * @param string $fileId file id (required)
     * @return \KuntaAPI\Model\FileDef
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationFile($organizationId, $fileId)
    {
        list($response) = $this->findOrganizationFileWithHttpInfo($organizationId, $fileId);
        return $response;
    }

    /**
     * Operation findOrganizationFileWithHttpInfo
     *
     * Finds organizations file
     *
     * @param string $organizationId Organization id (required)
     * @param string $fileId file id (required)
     * @return Array of \KuntaAPI\Model\FileDef, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationFileWithHttpInfo($organizationId, $fileId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling findOrganizationFile');
        }
        // verify the required parameter 'fileId' is set
        if ($fileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $fileId when calling findOrganizationFile');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/files/{fileId}";
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
        if ($fileId !== null) {
            $resourcePath = str_replace(
                "{" . "fileId" . "}",
                $this->apiClient->getSerializer()->toPathValue($fileId),
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
                '\KuntaAPI\Model\FileDef',
                '/organizations/{organizationId}/files/{fileId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\FileDef', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\FileDef', $e->getResponseHeaders());
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
     * Operation getOrganizationFileData
     *
     * Returns an organization file data
     *
     * @param string $organizationId Organization id (required)
     * @param string $fileId file id (required)
     * @return string
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function getOrganizationFileData($organizationId, $fileId)
    {
        list($response) = $this->getOrganizationFileDataWithHttpInfo($organizationId, $fileId);
        return $response;
    }

    /**
     * Operation getOrganizationFileDataWithHttpInfo
     *
     * Returns an organization file data
     *
     * @param string $organizationId Organization id (required)
     * @param string $fileId file id (required)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function getOrganizationFileDataWithHttpInfo($organizationId, $fileId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling getOrganizationFileData');
        }
        // verify the required parameter 'fileId' is set
        if ($fileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $fileId when calling getOrganizationFileData');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/files/{fileId}/data";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/octet-stream'));
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
        if ($fileId !== null) {
            $resourcePath = str_replace(
                "{" . "fileId" . "}",
                $this->apiClient->getSerializer()->toPathValue($fileId),
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
                '/organizations/{organizationId}/files/{fileId}/data'
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
     * Operation listOrganizationFiles
     *
     * Lists organizations files
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId Filter with page (optional)
     * @param string $search Search files by free-text query (optional)
     * @param int $firstResult First result (optional)
     * @param int $maxResults Max results (optional)
     * @return \KuntaAPI\Model\FileDef[]
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationFiles($organizationId, $pageId = null, $search = null, $firstResult = null, $maxResults = null)
    {
        list($response) = $this->listOrganizationFilesWithHttpInfo($organizationId, $pageId, $search, $firstResult, $maxResults);
        return $response;
    }

    /**
     * Operation listOrganizationFilesWithHttpInfo
     *
     * Lists organizations files
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId Filter with page (optional)
     * @param string $search Search files by free-text query (optional)
     * @param int $firstResult First result (optional)
     * @param int $maxResults Max results (optional)
     * @return Array of \KuntaAPI\Model\FileDef[], HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationFilesWithHttpInfo($organizationId, $pageId = null, $search = null, $firstResult = null, $maxResults = null)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling listOrganizationFiles');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/files";
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
        if ($pageId !== null) {
            $queryParams['pageId'] = $this->apiClient->getSerializer()->toQueryValue($pageId);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($search);
        }
        // query params
        if ($firstResult !== null) {
            $queryParams['firstResult'] = $this->apiClient->getSerializer()->toQueryValue($firstResult);
        }
        // query params
        if ($maxResults !== null) {
            $queryParams['maxResults'] = $this->apiClient->getSerializer()->toQueryValue($maxResults);
        }
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
                '\KuntaAPI\Model\FileDef[]',
                '/organizations/{organizationId}/files'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\FileDef[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\FileDef[]', $e->getResponseHeaders());
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
