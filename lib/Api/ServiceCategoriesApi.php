<?php
/**
 * ServiceCategoriesApi
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
 * ServiceCategoriesApi Class Doc Comment
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceCategoriesApi
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
     * @return ServiceCategoriesApi
     */
    public function setApiClient(\KuntaAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation listServiceClasses
     *
     * List service classes for an organization
     *
     * @param string $organizationId Organization id (required)
     * @return \KuntaAPI\Model\ServiceClass[]
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listServiceClasses($organizationId)
    {
        list($response) = $this->listServiceClassesWithHttpInfo($organizationId);
        return $response;
    }

    /**
     * Operation listServiceClassesWithHttpInfo
     *
     * List service classes for an organization
     *
     * @param string $organizationId Organization id (required)
     * @return Array of \KuntaAPI\Model\ServiceClass[], HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listServiceClassesWithHttpInfo($organizationId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling listServiceClasses');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/serviceClasses/";
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
                '\KuntaAPI\Model\ServiceClass[]',
                '/organizations/{organizationId}/serviceClasses/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\ServiceClass[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\ServiceClass[]', $e->getResponseHeaders());
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
