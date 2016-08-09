# KuntaAPI\ServiceChannelsApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listServiceElectornicChannels**](ServiceChannelsApi.md#listServiceElectornicChannels) | **GET** /organizations/{organizationId}/services/{serviceId}/electronicChannels | List service electornic channels


# **listServiceElectornicChannels**
> \Swagger\Client\Model\ServiceElectronicChannel listServiceElectornicChannels($organization_id, $service_id)

List service electornic channels

Lists service electronic channels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\ServiceChannelsApi();
$organization_id = "organization_id_example"; // string | Organization id
$service_id = "service_id_example"; // string | Service id

try {
    $result = $api_instance->listServiceElectornicChannels($organization_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelsApi->listServiceElectornicChannels: ', $e->getMessage(), PHP_EOL;
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

