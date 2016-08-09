# Swagger\Client\ServicesApi

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
> \Swagger\Client\Model\Service[] createService($organization_id, $body)

Create a service

Creates new service for the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id
$body = new \Swagger\Client\Model\Service(); // \Swagger\Client\Model\Service | Service definition

try {
    $result = $api_instance->createService($organization_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->createService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |
 **body** | [**\Swagger\Client\Model\Service**](../Model/\Swagger\Client\Model\Service.md)| Service definition |

### Return type

[**\Swagger\Client\Model\Service[]**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteService**
> deleteService($organization_id, $service_id)

Delete a service

Delete a single municipal service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id

try {
    $api_instance->deleteService($organization_id, $service_id);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->deleteService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |
 **service_id** | **string**| Service id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteServiceData**
> deleteServiceData($organization_id, $service_id, $data_id)

Delete single service data field by id

Delete a single service data field by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id
$data_id = "data_id_example"; // string | Service data field id.

try {
    $api_instance->deleteServiceData($organization_id, $service_id, $data_id);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->deleteServiceData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |
 **service_id** | **string**| Service id |
 **data_id** | **string**| Service data field id. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findService**
> \Swagger\Client\Model\Service findService($organization_id, $service_id)

Find a service by id

Returns single service by it's unique id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id

try {
    $result = $api_instance->findService($organization_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->findService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |
 **service_id** | **string**| Service id |

### Return type

[**\Swagger\Client\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findServiceData**
> \Swagger\Client\Model\ServiceData findServiceData($organization_id, $service_id, $data_id)

Find single service data field by id

Returns a single service data field by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id
$data_id = "data_id_example"; // string | Service data field id.

try {
    $result = $api_instance->findServiceData($organization_id, $service_id, $data_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->findServiceData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |
 **service_id** | **string**| Service id |
 **data_id** | **string**| Service data field id. |

### Return type

[**\Swagger\Client\Model\ServiceData**](../Model/ServiceData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findServiceSource**
> \Swagger\Client\Model\ServiceSource findServiceSource($service_source_id)

Find a service by id

Returns single service by it's unique id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$service_source_id = "service_source_id_example"; // string | Service source id

try {
    $result = $api_instance->findServiceSource($service_source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->findServiceSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_source_id** | **string**| Service source id |

### Return type

[**\Swagger\Client\Model\ServiceSource**](../Model/ServiceSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServiceClasses**
> \Swagger\Client\Model\ServiceClass[] listServiceClasses($organization_id)

List service classes for an organization

Returns list of organization's service classes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id

try {
    $result = $api_instance->listServiceClasses($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listServiceClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |

### Return type

[**\Swagger\Client\Model\ServiceClass[]**](../Model/ServiceClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServiceDatas**
> \Swagger\Client\Model\ServiceData[] listServiceDatas($organization_id, $service_id, $source_id)

List service datas

Returns list of data fields assigned to the specified service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id
$source_id = "source_id_example"; // string | Service source id. When specified datas of only specified source are listed. Default is to list datas of all sources.

try {
    $result = $api_instance->listServiceDatas($organization_id, $service_id, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listServiceDatas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |
 **service_id** | **string**| Service id |
 **source_id** | **string**| Service source id. When specified datas of only specified source are listed. Default is to list datas of all sources. | [optional]

### Return type

[**\Swagger\Client\Model\ServiceData[]**](../Model/ServiceData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServiceElectornicChannels**
> \Swagger\Client\Model\ServiceElectronicChannel listServiceElectornicChannels($organization_id, $service_id)

List service electornic channels

Lists service electronic channels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id

try {
    $result = $api_instance->listServiceElectornicChannels($organization_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listServiceElectornicChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |
 **service_id** | **string**| Service id |

### Return type

[**\Swagger\Client\Model\ServiceElectronicChannel**](../Model/ServiceElectronicChannel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServiceSources**
> \Swagger\Client\Model\ServiceSource[] listServiceSources()

List service sources

Returns list of service sources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();

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

[**\Swagger\Client\Model\ServiceSource[]**](../Model/ServiceSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServices**
> \Swagger\Client\Model\Service[] listServices($organization_id, $service_class_id)

List services

Lists organization's services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_class_id = "service_class_id_example"; // string | Filter services by service class id

try {
    $result = $api_instance->listServices($organization_id, $service_class_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |
 **service_class_id** | **string**| Filter services by service class id | [optional]

### Return type

[**\Swagger\Client\Model\Service[]**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateService**
> \Swagger\Client\Model\Service updateService($organization_id, $service_id)

Update a service

Updates a single municipal service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id

try {
    $result = $api_instance->updateService($organization_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->updateService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |
 **service_id** | **string**| Service id |

### Return type

[**\Swagger\Client\Model\Service**](../Model/Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateServiceData**
> \Swagger\Client\Model\ServiceData updateServiceData($organization_id, $service_id, $data_id)

Update single service data field by id

Update a single service data field by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServicesApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id
$data_id = "data_id_example"; // string | Service data field id.

try {
    $result = $api_instance->updateServiceData($organization_id, $service_id, $data_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->updateServiceData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Organization id |
 **service_id** | **string**| Service id |
 **data_id** | **string**| Service data field id. |

### Return type

[**\Swagger\Client\Model\ServiceData**](../Model/ServiceData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

