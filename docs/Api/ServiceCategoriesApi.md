# Swagger\Client\ServiceCategoriesApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listServiceClasses**](ServiceCategoriesApi.md#listServiceClasses) | **GET** /organizations/{organizationId}/serviceClasses/ | List service classes for an organization


# **listServiceClasses**
> \Swagger\Client\Model\ServiceClass[] listServiceClasses($organization_id)

List service classes for an organization

Returns list of organization's service classes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ServiceCategoriesApi();
$organization_id = "organization_id_example"; // string | Organization id

try {
    $result = $api_instance->listServiceClasses($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCategoriesApi->listServiceClasses: ', $e->getMessage(), PHP_EOL;
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

