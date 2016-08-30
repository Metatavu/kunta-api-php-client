# KuntaAPI\EventsApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findOrganizationEvent**](EventsApi.md#findOrganizationEvent) | **GET** /organizations/{organizationId}/events/{eventId} | Returns organizations event by id
[**findOrganizationEventImage**](EventsApi.md#findOrganizationEventImage) | **GET** /organizations/{organizationId}/events/{eventId}/images/{imageId} | Returns an event image
[**getOrganizationEventImageData**](EventsApi.md#getOrganizationEventImageData) | **GET** /organizations/{organizationId}/events/{eventId}/images/{imageId}/data | Returns an event image data
[**listOrganizationEventImages**](EventsApi.md#listOrganizationEventImages) | **GET** /organizations/{organizationId}/events/{eventId}/images | Returns list of event images
[**listOrganizationEvents**](EventsApi.md#listOrganizationEvents) | **GET** /organizations/{organizationId}/events | Lists organizations events


# **findOrganizationEvent**
> \KuntaAPI\Model\Event findOrganizationEvent($organizationId, $eventId)

Returns organizations event by id

Returns organizations event by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\EventsApi();
$organizationId = "organizationId_example"; // string | Organization id
$eventId = "eventId_example"; // string | Event id

try {
    $result = $api_instance->findOrganizationEvent($organizationId, $eventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->findOrganizationEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **eventId** | **string**| Event id |

### Return type

[**\KuntaAPI\Model\Event**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrganizationEventImage**
> \KuntaAPI\Model\Attachment findOrganizationEventImage($organizationId, $eventId, $imageId)

Returns an event image

Returns an event image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\EventsApi();
$organizationId = "organizationId_example"; // string | Organization id
$eventId = "eventId_example"; // string | Event id
$imageId = "imageId_example"; // string | Event image id

try {
    $result = $api_instance->findOrganizationEventImage($organizationId, $eventId, $imageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->findOrganizationEventImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **eventId** | **string**| Event id |
 **imageId** | **string**| Event image id |

### Return type

[**\KuntaAPI\Model\Attachment**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationEventImageData**
> string getOrganizationEventImageData($organizationId, $eventId, $imageId, $size)

Returns an event image data

Returns an event image data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\EventsApi();
$organizationId = "organizationId_example"; // string | Organization id
$eventId = "eventId_example"; // string | Event id
$imageId = "imageId_example"; // string | Event image id
$size = 56; // int | Maximum width or height of image

try {
    $result = $api_instance->getOrganizationEventImageData($organizationId, $eventId, $imageId, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getOrganizationEventImageData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **eventId** | **string**| Event id |
 **imageId** | **string**| Event image id |
 **size** | **int**| Maximum width or height of image | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationEventImages**
> \KuntaAPI\Model\Attachment[] listOrganizationEventImages($organizationId, $eventId)

Returns list of event images

Returns list of event images

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\EventsApi();
$organizationId = "organizationId_example"; // string | Organization id
$eventId = "eventId_example"; // string | Event id

try {
    $result = $api_instance->listOrganizationEventImages($organizationId, $eventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->listOrganizationEventImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **eventId** | **string**| Event id |

### Return type

[**\KuntaAPI\Model\Attachment[]**](../Model/Attachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationEvents**
> \KuntaAPI\Model\Event[] listOrganizationEvents($organizationId)

Lists organizations events

Lists organizations events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\EventsApi();
$organizationId = "organizationId_example"; // string | Organization id

try {
    $result = $api_instance->listOrganizationEvents($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->listOrganizationEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |

### Return type

[**\KuntaAPI\Model\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
