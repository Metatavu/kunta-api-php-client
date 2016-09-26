# KuntaAPI\FilesApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findOrganizationFile**](FilesApi.md#findOrganizationFile) | **GET** /organizations/{organizationId}/files/{fileId} | Finds organizations file
[**getOrganizationFileData**](FilesApi.md#getOrganizationFileData) | **GET** /organizations/{organizationId}/files/{fileId}/data | Returns an organization file data
[**listOrganizationFiles**](FilesApi.md#listOrganizationFiles) | **GET** /organizations/{organizationId}/files | Lists organizations files


# **findOrganizationFile**
> \KuntaAPI\Model\Page findOrganizationFile($organizationId, $fileId)

Finds organizations file

Finds single organization file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\FilesApi();
$organizationId = "organizationId_example"; // string | Organization id
$fileId = "fileId_example"; // string | file id

try {
    $result = $api_instance->findOrganizationFile($organizationId, $fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->findOrganizationFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **fileId** | **string**| file id |

### Return type

[**\KuntaAPI\Model\Page**](../Model/Page.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationFileData**
> string getOrganizationFileData($organizationId, $fileId)

Returns an organization file data

Returns an organization file data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\FilesApi();
$organizationId = "organizationId_example"; // string | Organization id
$fileId = "fileId_example"; // string | file id

try {
    $result = $api_instance->getOrganizationFileData($organizationId, $fileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getOrganizationFileData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **fileId** | **string**| file id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationFiles**
> \KuntaAPI\Model\File[] listOrganizationFiles($organizationId, $pageId)

Lists organizations files

Lists organizations files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\FilesApi();
$organizationId = "organizationId_example"; // string | Organization id
$pageId = "pageId_example"; // string | Filter with page

try {
    $result = $api_instance->listOrganizationFiles($organizationId, $pageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->listOrganizationFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **pageId** | **string**| Filter with page | [optional]

### Return type

[**\KuntaAPI\Model\File[]**](../Model/File.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

