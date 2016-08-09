# KuntaAPI\ServiceDataApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteServiceData**](ServiceDataApi.md#deleteServiceData) | **DELETE** /organizations/{organizationId}/services/{serviceId}/datas/{dataId} | Delete single service data field by id
[**findServiceData**](ServiceDataApi.md#findServiceData) | **GET** /organizations/{organizationId}/services/{serviceId}/datas/{dataId} | Find single service data field by id
[**listServiceDatas**](ServiceDataApi.md#listServiceDatas) | **GET** /organizations/{organizationId}/services/{serviceId}/datas | List service datas
[**updateServiceData**](ServiceDataApi.md#updateServiceData) | **PUT** /organizations/{organizationId}/services/{serviceId}/datas/{dataId} | Update single service data field by id


# **deleteServiceData**
> deleteServiceData($organization_id, $service_id, $data_id)

Delete single service data field by id

Delete a single service data field by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServiceDataApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id
$data_id = "data_id_example"; // string | Service data field id.

try {
    $api_instance->deleteServiceData($organization_id, $service_id, $data_id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceDataApi->deleteServiceData: ', $e->getMessage(), PHP_EOL;
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

# **findServiceData**
> \KuntaAPI\Model\ServiceData findServiceData($organization_id, $service_id, $data_id)

Find single service data field by id

Returns a single service data field by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServiceDataApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id
$data_id = "data_id_example"; // string | Service data field id.

try {
    $result = $api_instance->findServiceData($organization_id, $service_id, $data_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceDataApi->findServiceData: ', $e->getMessage(), PHP_EOL;
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

[**\KuntaAPI\Model\ServiceData**](../Model/ServiceData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServiceDatas**
> \KuntaAPI\Model\ServiceData[] listServiceDatas($organization_id, $service_id, $source_id)

List service datas

Returns list of data fields assigned to the specified service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServiceDataApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id
$source_id = "source_id_example"; // string | Service source id. When specified datas of only specified source are listed. Default is to list datas of all sources.

try {
    $result = $api_instance->listServiceDatas($organization_id, $service_id, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceDataApi->listServiceDatas: ', $e->getMessage(), PHP_EOL;
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

[**\KuntaAPI\Model\ServiceData[]**](../Model/ServiceData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateServiceData**
> \KuntaAPI\Model\ServiceData updateServiceData($organization_id, $service_id, $data_id)

Update single service data field by id

Update a single service data field by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServiceDataApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id
$data_id = "data_id_example"; // string | Service data field id.

try {
    $result = $api_instance->updateServiceData($organization_id, $service_id, $data_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceDataApi->updateServiceData: ', $e->getMessage(), PHP_EOL;
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

[**\KuntaAPI\Model\ServiceData**](../Model/ServiceData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

