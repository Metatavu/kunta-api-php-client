# KuntaAPI\CodesApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCodes**](CodesApi.md#listCodes) | **GET** /codes | Lists codes


# **listCodes**
> \KuntaAPI\Model\Code listCodes($types, $search, $firstResult, $maxResults)

Lists codes

Lists codes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
KuntaAPI\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
KuntaAPI\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new KuntaAPI\Api\CodesApi();
$types = array("types_example"); // string[] | Filter results by types
$search = "search_example"; // string | Search codes by free-text query
$firstResult = 56; // int | first index of results
$maxResults = 56; // int | maximum number of results. If not defined, default 50 is used

try {
    $result = $api_instance->listCodes($types, $search, $firstResult, $maxResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodesApi->listCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **types** | [**string[]**](../Model/string.md)| Filter results by types | [optional]
 **search** | **string**| Search codes by free-text query | [optional]
 **firstResult** | **int**| first index of results | [optional]
 **maxResults** | **int**| maximum number of results. If not defined, default 50 is used | [optional]

### Return type

[**\KuntaAPI\Model\Code**](../Model/Code.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

