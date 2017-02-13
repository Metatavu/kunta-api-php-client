# KuntaAPI\PublicTransportApi

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findOrganizationPublicTransportAgency**](PublicTransportApi.md#findOrganizationPublicTransportAgency) | **GET** /organizations/{organizationId}/transportAgencies/{agencyId} | Finds an organizations public transport agency
[**findOrganizationPublicTransportRoute**](PublicTransportApi.md#findOrganizationPublicTransportRoute) | **GET** /organizations/{organizationId}/transportRoutes/{routeId} | Finds an organizations public transport route
[**findOrganizationPublicTransportRouteStop**](PublicTransportApi.md#findOrganizationPublicTransportRouteStop) | **GET** /organizations/{organizationId}/transportRoutes/{routeId}/stops/{stopId} | Finds a stop of organizations public transport route
[**findOrganizationPublicTransportSchedule**](PublicTransportApi.md#findOrganizationPublicTransportSchedule) | **GET** /organizations/{organizationId}/transportSchedules/{scheduleId} | Finds organizations public transport schedule
[**listOrganizationPublicTransportAgencies**](PublicTransportApi.md#listOrganizationPublicTransportAgencies) | **GET** /organizations/{organizationId}/transportAgencies | Lists organizations public transport agencies
[**listOrganizationPublicTransportRouteStops**](PublicTransportApi.md#listOrganizationPublicTransportRouteStops) | **GET** /organizations/{organizationId}/transportRoutes/{routeId}/stops | Lists stops of organizations public transport route
[**listOrganizationPublicTransportRoutes**](PublicTransportApi.md#listOrganizationPublicTransportRoutes) | **GET** /organizations/{organizationId}/transportRoutes | Lists organizations public transport routes
[**listOrganizationPublicTransportSchedules**](PublicTransportApi.md#listOrganizationPublicTransportSchedules) | **GET** /organizations/{organizationId}/transportSchedules | Lists schedules of organization&#39;s public transport schedules


# **findOrganizationPublicTransportAgency**
> \KuntaAPI\Model\Agency findOrganizationPublicTransportAgency($organizationId, $agencyId)

Finds an organizations public transport agency

Finds organization's single public transport agency

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\PublicTransportApi();
$organizationId = "organizationId_example"; // string | Organization id
$agencyId = "agencyId_example"; // string | Agency id

try {
    $result = $api_instance->findOrganizationPublicTransportAgency($organizationId, $agencyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicTransportApi->findOrganizationPublicTransportAgency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **agencyId** | **string**| Agency id |

### Return type

[**\KuntaAPI\Model\Agency**](../Model/Agency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrganizationPublicTransportRoute**
> \KuntaAPI\Model\Route findOrganizationPublicTransportRoute($organizationId, $routeId)

Finds an organizations public transport route

Finds organization's single public transport route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\PublicTransportApi();
$organizationId = "organizationId_example"; // string | Organization id
$routeId = "routeId_example"; // string | Route id

try {
    $result = $api_instance->findOrganizationPublicTransportRoute($organizationId, $routeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicTransportApi->findOrganizationPublicTransportRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **routeId** | **string**| Route id |

### Return type

[**\KuntaAPI\Model\Route**](../Model/Route.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrganizationPublicTransportRouteStop**
> \KuntaAPI\Model\Stop findOrganizationPublicTransportRouteStop($organizationId, $routeId, $stopId)

Finds a stop of organizations public transport route

Finds a stop of organizations public transport route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\PublicTransportApi();
$organizationId = "organizationId_example"; // string | Organization id
$routeId = "routeId_example"; // string | Route id
$stopId = "stopId_example"; // string | Stop id

try {
    $result = $api_instance->findOrganizationPublicTransportRouteStop($organizationId, $routeId, $stopId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicTransportApi->findOrganizationPublicTransportRouteStop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **routeId** | **string**| Route id |
 **stopId** | **string**| Stop id |

### Return type

[**\KuntaAPI\Model\Stop**](../Model/Stop.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOrganizationPublicTransportSchedule**
> \KuntaAPI\Model\Schedule findOrganizationPublicTransportSchedule($organizationId, $scheduleId)

Finds organizations public transport schedule

Finds organizations public transport schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\PublicTransportApi();
$organizationId = "organizationId_example"; // string | Organization id
$scheduleId = "scheduleId_example"; // string | Schedule id

try {
    $result = $api_instance->findOrganizationPublicTransportSchedule($organizationId, $scheduleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicTransportApi->findOrganizationPublicTransportSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **scheduleId** | **string**| Schedule id |

### Return type

[**\KuntaAPI\Model\Schedule**](../Model/Schedule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationPublicTransportAgencies**
> \KuntaAPI\Model\Agency[] listOrganizationPublicTransportAgencies($organizationId)

Lists organizations public transport agencies

Lists organizations public transport agencies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\PublicTransportApi();
$organizationId = "organizationId_example"; // string | Organization id

try {
    $result = $api_instance->listOrganizationPublicTransportAgencies($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicTransportApi->listOrganizationPublicTransportAgencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |

### Return type

[**\KuntaAPI\Model\Agency[]**](../Model/Agency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationPublicTransportRouteStops**
> \KuntaAPI\Model\Stop[] listOrganizationPublicTransportRouteStops($organizationId, $routeId)

Lists stops of organizations public transport route

Lists stops of organizations public transport route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\PublicTransportApi();
$organizationId = "organizationId_example"; // string | Organization id
$routeId = "routeId_example"; // string | Route id

try {
    $result = $api_instance->listOrganizationPublicTransportRouteStops($organizationId, $routeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicTransportApi->listOrganizationPublicTransportRouteStops: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |
 **routeId** | **string**| Route id |

### Return type

[**\KuntaAPI\Model\Stop[]**](../Model/Stop.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationPublicTransportRoutes**
> \KuntaAPI\Model\Route[] listOrganizationPublicTransportRoutes($organizationId)

Lists organizations public transport routes

Lists organizations public transport routes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\PublicTransportApi();
$organizationId = "organizationId_example"; // string | Organization id

try {
    $result = $api_instance->listOrganizationPublicTransportRoutes($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicTransportApi->listOrganizationPublicTransportRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |

### Return type

[**\KuntaAPI\Model\Route[]**](../Model/Route.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrganizationPublicTransportSchedules**
> \KuntaAPI\Model\Schedule[] listOrganizationPublicTransportSchedules($organizationId)

Lists schedules of organization's public transport schedules

Lists schedules of organization's public transport schedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\PublicTransportApi();
$organizationId = "organizationId_example"; // string | Organization id

try {
    $result = $api_instance->listOrganizationPublicTransportSchedules($organizationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicTransportApi->listOrganizationPublicTransportSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization id |

### Return type

[**\KuntaAPI\Model\Schedule[]**](../Model/Schedule.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

