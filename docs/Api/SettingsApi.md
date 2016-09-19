# KuntaAPI\SettingsApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrganizationSetting**](SettingsApi.md#deleteOrganizationSetting) | **DELETE** /organizations/{organizationId}/settings/{settingId} | Deletes an organization setting
[**findOrganizationSetting**](SettingsApi.md#findOrganizationSetting) | **GET** /organizations/{organizationId}/settings/{settingId} | Finds organizations setting
[**listOrganizationSettings**](SettingsApi.md#listOrganizationSettings) | **GET** /organizations/{organizationId}/settings/ | Lists organizations settings
[**updateOrganizationSetting**](SettingsApi.md#updateOrganizationSetting) | **PUT** /organizations/{organizationId}/settings/{settingId} | Updates an organization setting


# **deleteOrganizationSetting**
> deleteOrganizationSetting($organizationId, $settingId)

Deletes an organization setting

Deletes an organization setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\SettingsApi();
$organizationId = "organizationId_example"; // string | Organization id
$settingId = "settingId_example"; // string | Setting id

try {
    $api_instance->deleteOrganizationSetting($organizationId, $settingId);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteOrganizationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **settingId** | **string**| Setting id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrganizationSetting**
> \KuntaAPI\Model\OrganizationSetting findOrganizationSetting($organizationId, $settingId)

Finds organizations setting

Finds single organization setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\SettingsApi();
$organizationId = "organizationId_example"; // string | Organization id
$settingId = "settingId_example"; // string | Setting id

try {
    $result = $api_instance->findOrganizationSetting($organizationId, $settingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->findOrganizationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **settingId** | **string**| Setting id |

### Return type

[**\KuntaAPI\Model\OrganizationSetting**](../Model/OrganizationSetting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationSettings**
> \KuntaAPI\Model\OrganizationSetting[] listOrganizationSettings($organizationId, $key)

Lists organizations settings

Lists organizations settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\SettingsApi();
$organizationId = "organizationId_example"; // string | Organization id
$key = "key_example"; // string | Setting key

try {
    $result = $api_instance->listOrganizationSettings($organizationId, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->listOrganizationSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **key** | **string**| Setting key | [optional]

### Return type

[**\KuntaAPI\Model\OrganizationSetting[]**](../Model/OrganizationSetting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrganizationSetting**
> \KuntaAPI\Model\OrganizationSetting updateOrganizationSetting($organizationId, $settingId)

Updates an organization setting

Updates an organization setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\SettingsApi();
$organizationId = "organizationId_example"; // string | Organization id
$settingId = "settingId_example"; // string | Setting id

try {
    $result = $api_instance->updateOrganizationSetting($organizationId, $settingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateOrganizationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **settingId** | **string**| Setting id |

### Return type

[**\KuntaAPI\Model\OrganizationSetting**](../Model/OrganizationSetting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
