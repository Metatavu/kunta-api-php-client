# KuntaAPI\ServicesApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createService**](ServicesApi.md#createService) | **POST** /organizations/{organizationId}/services | Create a service
[**deleteService**](ServicesApi.md#deleteService) | **DELETE** /organizations/{organizationId}/services/{serviceId} | Delete a service
[**deleteServiceData**](ServicesApi.md#deleteServiceData) | **DELETE** /organizations/{organizationId}/services/{serviceId}/datas/{dataId} | Delete single service data field by id
[**findService**](ServicesApi.md#findService) | **GET** /organizations/{organizationId}/services/{serviceId} | Find a service by id
[**findServiceData**](ServicesApi.md#findServiceData) | **GET** /organizations/{organizationId}/services/{serviceId}/datas/{dataId} | Find single service data field by id
[**findServiceSource**](ServicesApi.md#findServiceSource) | **GET** /serviceSources/{serviceSourceId} | Find a service by id
[**listServiceClasses**](ServicesApi.md#listServiceClasses) | **GET** /organizations/{organizationId}/serviceClasses/ | List service classes for an organization
[**listServiceDatas**](ServicesApi.md#listServiceDatas) | **GET** /organizations/{organizationId}/services/{serviceId}/datas | List service datas
[**listServiceElectornicChannels**](ServicesApi.md#listServiceElectornicChannels) | **GET** /organizations/{organizationId}/services/{serviceId}/electronicChannels | List service electornic channels
[**listServiceSources**](ServicesApi.md#listServiceSources) | **GET** /serviceSources | List service sources
[**listServices**](ServicesApi.md#listServices) | **GET** /organizations/{organizationId}/services | List services
[**updateService**](ServicesApi.md#updateService) | **PUT** /organizations/{organizationId}/services/{serviceId} | Update a service
[**updateServiceData**](ServicesApi.md#updateServiceData) | **PUT** /organizations/{organizationId}/services/{serviceId}/datas/{dataId} | Update single service data field by id


# **createService**
> \KuntaAPI\Model\Service[] createService($organizationId, $body)

Create a service

Creates new service for the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id
$body = new \KuntaAPI\Model\Service(); // \KuntaAPI\Model\Service | Service definition

try {
    $result = $api_instance->createService($organizationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->createService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **body** | [**\KuntaAPI\Model\Service**](../Model/\KuntaAPI\Model\Service.md)| Service definition |

### Return type

[**\KuntaAPI\Model\Service[]**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteService**
> deleteService($organizationId, $serviceId)

Delete a service

Delete a single municipal service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id
$serviceId = "serviceId_example"; // string | Service id

try {
    $api_instance->deleteService($organizationId, $serviceId);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->deleteService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **serviceId** | **string**| Service id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteServiceData**
> deleteServiceData($organizationId, $serviceId, $dataId)

Delete single service data field by id

Delete a single service data field by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id
$serviceId = "serviceId_example"; // string | Service id
$dataId = "dataId_example"; // string | Service data field id.

try {
    $api_instance->deleteServiceData($organizationId, $serviceId, $dataId);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->deleteServiceData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **serviceId** | **string**| Service id |
 **dataId** | **string**| Service data field id. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findService**
> \KuntaAPI\Model\Service findService($organizationId, $serviceId)

Find a service by id

Returns single service by it's unique id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id
$serviceId = "serviceId_example"; // string | Service id

try {
    $result = $api_instance->findService($organizationId, $serviceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->findService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **serviceId** | **string**| Service id |

### Return type

[**\KuntaAPI\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findServiceData**
> \KuntaAPI\Model\ServiceData findServiceData($organizationId, $serviceId, $dataId)

Find single service data field by id

Returns a single service data field by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id
$serviceId = "serviceId_example"; // string | Service id
$dataId = "dataId_example"; // string | Service data field id.

try {
    $result = $api_instance->findServiceData($organizationId, $serviceId, $dataId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->findServiceData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **serviceId** | **string**| Service id |
 **dataId** | **string**| Service data field id. |

### Return type

[**\KuntaAPI\Model\ServiceData**](../Model/ServiceData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findServiceSource**
> \KuntaAPI\Model\ServiceSource findServiceSource($serviceSourceId)

Find a service by id

Returns single service by it's unique id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$serviceSourceId = "serviceSourceId_example"; // string | Service source id

try {
    $result = $api_instance->findServiceSource($serviceSourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->findServiceSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceSourceId** | **string**| Service source id |

### Return type

[**\KuntaAPI\Model\ServiceSource**](../Model/ServiceSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServiceClasses**
> \KuntaAPI\Model\ServiceClass[] listServiceClasses($organizationId)

List service classes for an organization

Returns list of organization's service classes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id

try {
    $result = $api_instance->listServiceClasses($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listServiceClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |

### Return type

[**\KuntaAPI\Model\ServiceClass[]**](../Model/ServiceClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServiceDatas**
> \KuntaAPI\Model\ServiceData[] listServiceDatas($organizationId, $serviceId, $sourceId)

List service datas

Returns list of data fields assigned to the specified service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id
$serviceId = "serviceId_example"; // string | Service id
$sourceId = "sourceId_example"; // string | Service source id. When specified datas of only specified source are listed. Default is to list datas of all sources.

try {
    $result = $api_instance->listServiceDatas($organizationId, $serviceId, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listServiceDatas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **serviceId** | **string**| Service id |
 **sourceId** | **string**| Service source id. When specified datas of only specified source are listed. Default is to list datas of all sources. | [optional]

### Return type

[**\KuntaAPI\Model\ServiceData[]**](../Model/ServiceData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServiceElectornicChannels**
> \KuntaAPI\Model\ServiceElectronicChannel listServiceElectornicChannels($organizationId, $serviceId)

List service electornic channels

Lists service electronic channels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id
$serviceId = "serviceId_example"; // string | Service id

try {
    $result = $api_instance->listServiceElectornicChannels($organizationId, $serviceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listServiceElectornicChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **serviceId** | **string**| Service id |

### Return type

[**\KuntaAPI\Model\ServiceElectronicChannel**](../Model/ServiceElectronicChannel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServiceSources**
> \KuntaAPI\Model\ServiceSource[] listServiceSources()

List service sources

Returns list of service sources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();

try {
    $result = $api_instance->listServiceSources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listServiceSources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\KuntaAPI\Model\ServiceSource[]**](../Model/ServiceSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServices**
> \KuntaAPI\Model\Service[] listServices($organizationId, $serviceClassId)

List services

Lists organization's services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id
$serviceClassId = "serviceClassId_example"; // string | Filter services by service class id

try {
    $result = $api_instance->listServices($organizationId, $serviceClassId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **serviceClassId** | **string**| Filter services by service class id | [optional]

### Return type

[**\KuntaAPI\Model\Service[]**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateService**
> \KuntaAPI\Model\Service updateService($organizationId, $serviceId)

Update a service

Updates a single municipal service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id
$serviceId = "serviceId_example"; // string | Service id

try {
    $result = $api_instance->updateService($organizationId, $serviceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->updateService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **serviceId** | **string**| Service id |

### Return type

[**\KuntaAPI\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateServiceData**
> \KuntaAPI\Model\ServiceData updateServiceData($organizationId, $serviceId, $dataId)

Update single service data field by id

Update a single service data field by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServicesApi();
$organizationId = "organizationId_example"; // string | Organization id
$serviceId = "serviceId_example"; // string | Service id
$dataId = "dataId_example"; // string | Service data field id.

try {
    $result = $api_instance->updateServiceData($organizationId, $serviceId, $dataId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->updateServiceData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **serviceId** | **string**| Service id |
 **dataId** | **string**| Service data field id. |

### Return type

[**\KuntaAPI\Model\ServiceData**](../Model/ServiceData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

