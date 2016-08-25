# KuntaAPI\OrganizationsApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listOrganizations**](OrganizationsApi.md#listOrganizations) | **GET** /organizations | List organizations


# **listOrganizations**
> \KuntaAPI\Model\Organization[] listOrganizations($businessName, $businessCode)

List organizations

List organizations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\OrganizationsApi();
$businessName = "businessName_example"; // string | Filter by organization's business name
$businessCode = "businessCode_example"; // string | Filter by organization's business code

try {
    $result = $api_instance->listOrganizations($businessName, $businessCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->listOrganizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **businessName** | **string**| Filter by organization&#39;s business name | [optional]
 **businessCode** | **string**| Filter by organization&#39;s business code | [optional]

### Return type

[**\KuntaAPI\Model\Organization[]**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

