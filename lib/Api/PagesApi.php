<?php
/**
 * PagesApi
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

namespace KuntaAPI\Api;

use \KuntaAPI\Configuration;
use \KuntaAPI\ApiClient;
use \KuntaAPI\ApiException;
use \KuntaAPI\ObjectSerializer;

/**
 * PagesApi Class Doc Comment
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PagesApi
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
     * @return PagesApi
     */
    public function setApiClient(\KuntaAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation findOrganizationPage
     *
     * Finds organizations page
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId page id (required)
     * @return \KuntaAPI\Model\Page
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationPage($organizationId, $pageId)
    {
        list($response) = $this->findOrganizationPageWithHttpInfo($organizationId, $pageId);
        return $response;
    }

    /**
     * Operation findOrganizationPageWithHttpInfo
     *
     * Finds organizations page
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId page id (required)
     * @return Array of \KuntaAPI\Model\Page, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationPageWithHttpInfo($organizationId, $pageId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling findOrganizationPage');
        }
        // verify the required parameter 'pageId' is set
        if ($pageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pageId when calling findOrganizationPage');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/pages/{pageId}";
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
        if ($pageId !== null) {
            $resourcePath = str_replace(
                "{" . "pageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pageId),
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
                '\KuntaAPI\Model\Page',
                '/organizations/{organizationId}/pages/{pageId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\Page', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Page', $e->getResponseHeaders());
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
     * Operation findOrganizationPageContent
     *
     * Returns organizations page content in all available languages
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId page id (required)
     * @return \KuntaAPI\Model\LocalizedValue[]
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationPageContent($organizationId, $pageId)
    {
        list($response) = $this->findOrganizationPageContentWithHttpInfo($organizationId, $pageId);
        return $response;
    }

    /**
     * Operation findOrganizationPageContentWithHttpInfo
     *
     * Returns organizations page content in all available languages
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId page id (required)
     * @return Array of \KuntaAPI\Model\LocalizedValue[], HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationPageContentWithHttpInfo($organizationId, $pageId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling findOrganizationPageContent');
        }
        // verify the required parameter 'pageId' is set
        if ($pageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pageId when calling findOrganizationPageContent');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/pages/{pageId}/content";
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
        if ($pageId !== null) {
            $resourcePath = str_replace(
                "{" . "pageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pageId),
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
                '\KuntaAPI\Model\LocalizedValue[]',
                '/organizations/{organizationId}/pages/{pageId}/content'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\LocalizedValue[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\LocalizedValue[]', $e->getResponseHeaders());
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
     * Operation findOrganizationPageImage
     *
     * Returns a single organiztion page image
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId Page Id (required)
     * @param string $imageId Page image id (required)
     * @return \KuntaAPI\Model\Attachment
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationPageImage($organizationId, $pageId, $imageId)
    {
        list($response) = $this->findOrganizationPageImageWithHttpInfo($organizationId, $pageId, $imageId);
        return $response;
    }

    /**
     * Operation findOrganizationPageImageWithHttpInfo
     *
     * Returns a single organiztion page image
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId Page Id (required)
     * @param string $imageId Page image id (required)
     * @return Array of \KuntaAPI\Model\Attachment, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationPageImageWithHttpInfo($organizationId, $pageId, $imageId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling findOrganizationPageImage');
        }
        // verify the required parameter 'pageId' is set
        if ($pageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pageId when calling findOrganizationPageImage');
        }
        // verify the required parameter 'imageId' is set
        if ($imageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $imageId when calling findOrganizationPageImage');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/pages/{pageId}/images/{imageId}";
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
        if ($pageId !== null) {
            $resourcePath = str_replace(
                "{" . "pageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pageId),
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
                '/organizations/{organizationId}/pages/{pageId}/images/{imageId}'
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
     * Operation getOrganizationPageImageData
     *
     * Returns an organization page image data
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId Page id (required)
     * @param string $imageId Page image id (required)
     * @param int $size Maximum width or height of image (optional)
     * @return string
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function getOrganizationPageImageData($organizationId, $pageId, $imageId, $size = null)
    {
        list($response) = $this->getOrganizationPageImageDataWithHttpInfo($organizationId, $pageId, $imageId, $size);
        return $response;
    }

    /**
     * Operation getOrganizationPageImageDataWithHttpInfo
     *
     * Returns an organization page image data
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId Page id (required)
     * @param string $imageId Page image id (required)
     * @param int $size Maximum width or height of image (optional)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function getOrganizationPageImageDataWithHttpInfo($organizationId, $pageId, $imageId, $size = null)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling getOrganizationPageImageData');
        }
        // verify the required parameter 'pageId' is set
        if ($pageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pageId when calling getOrganizationPageImageData');
        }
        // verify the required parameter 'imageId' is set
        if ($imageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $imageId when calling getOrganizationPageImageData');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/pages/{pageId}/images/{imageId}/data";
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
        if ($pageId !== null) {
            $resourcePath = str_replace(
                "{" . "pageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pageId),
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
                '/organizations/{organizationId}/pages/{pageId}/images/{imageId}/data'
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
     * Operation listOrganizationPageImages
     *
     * Returns a list of organization page images
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId Page id (required)
     * @return \KuntaAPI\Model\Attachment[]
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationPageImages($organizationId, $pageId)
    {
        list($response) = $this->listOrganizationPageImagesWithHttpInfo($organizationId, $pageId);
        return $response;
    }

    /**
     * Operation listOrganizationPageImagesWithHttpInfo
     *
     * Returns a list of organization page images
     *
     * @param string $organizationId Organization id (required)
     * @param string $pageId Page id (required)
     * @return Array of \KuntaAPI\Model\Attachment[], HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationPageImagesWithHttpInfo($organizationId, $pageId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling listOrganizationPageImages');
        }
        // verify the required parameter 'pageId' is set
        if ($pageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pageId when calling listOrganizationPageImages');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/pages/{pageId}/images";
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
        if ($pageId !== null) {
            $resourcePath = str_replace(
                "{" . "pageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pageId),
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
                '/organizations/{organizationId}/pages/{pageId}/images'
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
     * Operation listOrganizationPages
     *
     * Lists organizations pages
     *
     * @param string $organizationId Organization id (required)
     * @param string $parentId Filter results by parent id (optional)
     * @param string $path Filter results by page path (optional)
     * @param string $search Search pages by free-text query (optional)
     * @param int $firstResult First result (optional)
     * @param int $maxResults Max results (optional)
     * @return \KuntaAPI\Model\Page[]
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationPages($organizationId, $parentId = null, $path = null, $search = null, $firstResult = null, $maxResults = null)
    {
        list($response) = $this->listOrganizationPagesWithHttpInfo($organizationId, $parentId, $path, $search, $firstResult, $maxResults);
        return $response;
    }

    /**
     * Operation listOrganizationPagesWithHttpInfo
     *
     * Lists organizations pages
     *
     * @param string $organizationId Organization id (required)
     * @param string $parentId Filter results by parent id (optional)
     * @param string $path Filter results by page path (optional)
     * @param string $search Search pages by free-text query (optional)
     * @param int $firstResult First result (optional)
     * @param int $maxResults Max results (optional)
     * @return Array of \KuntaAPI\Model\Page[], HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationPagesWithHttpInfo($organizationId, $parentId = null, $path = null, $search = null, $firstResult = null, $maxResults = null)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling listOrganizationPages');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/pages";
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
        if ($parentId !== null) {
            $queryParams['parentId'] = $this->apiClient->getSerializer()->toQueryValue($parentId);
        }
        // query params
        if ($path !== null) {
            $queryParams['path'] = $this->apiClient->getSerializer()->toQueryValue($path);
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
                '\KuntaAPI\Model\Page[]',
                '/organizations/{organizationId}/pages'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\Page[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Page[]', $e->getResponseHeaders());
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
