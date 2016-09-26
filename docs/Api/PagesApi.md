# KuntaAPI\PagesApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findOrganizationPage**](PagesApi.md#findOrganizationPage) | **GET** /organizations/{organizationId}/pages/{pageId} | Finds organizations page
[**listOrganizationPages**](PagesApi.md#listOrganizationPages) | **GET** /organizations/{organizationId}/pages | Lists organizations pages


# **findOrganizationPage**
> \KuntaAPI\Model\Page findOrganizationPage($organizationId, $pageId)

Finds organizations page

Finds single organization page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\PagesApi();
$organizationId = "organizationId_example"; // string | Organization id
$pageId = "pageId_example"; // string | page id

try {
    $result = $api_instance->findOrganizationPage($organizationId, $pageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->findOrganizationPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **pageId** | **string**| page id |

### Return type

[**\KuntaAPI\Model\Page**](../Model/Page.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationPages**
> \KuntaAPI\Model\Page[] listOrganizationPages($organizationId, $parentId)

Lists organizations pages

Lists organizations pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\PagesApi();
$organizationId = "organizationId_example"; // string | Organization id
$parentId = "parentId_example"; // string | List parents child pages

try {
    $result = $api_instance->listOrganizationPages($organizationId, $parentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->listOrganizationPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **parentId** | **string**| List parents child pages | [optional]

### Return type

[**\KuntaAPI\Model\Page[]**](../Model/Page.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

