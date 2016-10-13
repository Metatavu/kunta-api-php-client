# kunta-api-php-client
One API to rule them all. One API to find them, One API to bring them all and in the darkness bind them.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.1
- Package version: 0.0.2-alpha1
- Build date: 2016-10-13T15:10:37.818+03:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/otavanopisto/kunta-api-php-client.git"
    }
  ],
  "require": {
    "otavanopisto/kunta-api-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/kunta-api-php-client/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\BannersApi();
$organizationId = "organizationId_example"; // string | Organization id
$bannerId = "bannerId_example"; // string | banner id

try {
    $result = $api_instance->findOrganizationBanner($organizationId, $bannerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannersApi->findOrganizationBanner: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BannersApi* | [**findOrganizationBanner**](docs/Api/BannersApi.md#findorganizationbanner) | **GET** /organizations/{organizationId}/banners/{bannerId} | Finds organizations banner
*BannersApi* | [**listOrganizationBannerImages**](docs/Api/BannersApi.md#listorganizationbannerimages) | **GET** /organizations/{organizationId}/banners/{bannerId}/images | Returns a list of organization banner images
*BannersApi* | [**listOrganizationBanners**](docs/Api/BannersApi.md#listorganizationbanners) | **GET** /organizations/{organizationId}/banners | Lists organizations banners
*ElectronicChannelsApi* | [**createServiceElectronicChannel**](docs/Api/ElectronicChannelsApi.md#createserviceelectronicchannel) | **POST** /services/{serviceId}/electronicChannels | creates ElectronicChannel
*ElectronicChannelsApi* | [**findServiceElectronicChannel**](docs/Api/ElectronicChannelsApi.md#findserviceelectronicchannel) | **GET** /services/{serviceId}/electronicChannels/{electronicChannelId} | finds ElectronicChannel by electronicChannelId
*ElectronicChannelsApi* | [**listServiceElectronicChannels**](docs/Api/ElectronicChannelsApi.md#listserviceelectronicchannels) | **GET** /services/{serviceId}/electronicChannels | Lists ElectronicChannels by serviceId
*ElectronicChannelsApi* | [**updateServiceElectronicChannel**](docs/Api/ElectronicChannelsApi.md#updateserviceelectronicchannel) | **PUT** /services/{serviceId}/electronicChannels/{electronicChannelId} | Updates ElectronicChannel
*EventsApi* | [**findOrganizationEvent**](docs/Api/EventsApi.md#findorganizationevent) | **GET** /organizations/{organizationId}/events/{eventId} | Returns organizations event by id
*EventsApi* | [**findOrganizationEventImage**](docs/Api/EventsApi.md#findorganizationeventimage) | **GET** /organizations/{organizationId}/events/{eventId}/images/{imageId} | Returns an event image
*EventsApi* | [**getOrganizationEventImageData**](docs/Api/EventsApi.md#getorganizationeventimagedata) | **GET** /organizations/{organizationId}/events/{eventId}/images/{imageId}/data | Returns an event image data
*EventsApi* | [**listOrganizationEventImages**](docs/Api/EventsApi.md#listorganizationeventimages) | **GET** /organizations/{organizationId}/events/{eventId}/images | Returns list of event images
*EventsApi* | [**listOrganizationEvents**](docs/Api/EventsApi.md#listorganizationevents) | **GET** /organizations/{organizationId}/events | Lists organizations events
*NewsApi* | [**findOrganizationBannerImage**](docs/Api/NewsApi.md#findorganizationbannerimage) | **GET** /organizations/{organizationId}/banners/{bannerId}/images/{imageId} | Returns a single organiztion banner image
*NewsApi* | [**findOrganizationNewsArticle**](docs/Api/NewsApi.md#findorganizationnewsarticle) | **GET** /organizations/{organizationId}/news/{newsArticleId} | Finds organizations news article
*NewsApi* | [**findOrganizationNewsArticleImage**](docs/Api/NewsApi.md#findorganizationnewsarticleimage) | **GET** /organizations/{organizationId}/news/{newsArticleId}/images/{imageId} | Returns an news article image
*NewsApi* | [**getOrganizationBannerImageData**](docs/Api/NewsApi.md#getorganizationbannerimagedata) | **GET** /organizations/{organizationId}/banners/{bannerId}/images/{imageId}/data | Returns an organization banner image data
*NewsApi* | [**getOrganizationNewsArticleImageData**](docs/Api/NewsApi.md#getorganizationnewsarticleimagedata) | **GET** /organizations/{organizationId}/news/{newsArticleId}/images/{imageId}/data | Returns a news article image data
*NewsApi* | [**listOrganizationNews**](docs/Api/NewsApi.md#listorganizationnews) | **GET** /organizations/{organizationId}/news | Lists organizations news
*NewsApi* | [**listOrganizationNewsArticleImages**](docs/Api/NewsApi.md#listorganizationnewsarticleimages) | **GET** /organizations/{organizationId}/news/{newsArticleId}/images | Returns list of news article images
*OrganizationServicesApi* | [**createOrganizationService**](docs/Api/OrganizationServicesApi.md#createorganizationservice) | **POST** /organizations/{organizationId}/organizationServices | Create organization service
*OrganizationServicesApi* | [**findOrganizationService**](docs/Api/OrganizationServicesApi.md#findorganizationservice) | **GET** /organizations/{organizationId}/organizationServices/{organizationServiceId} | Finds a organization service by id
*OrganizationServicesApi* | [**listOrganizationOrganizationServices**](docs/Api/OrganizationServicesApi.md#listorganizationorganizationservices) | **GET** /organizations/{organizationId}/organizationServices | Organization organization service list
*OrganizationServicesApi* | [**updateOrganizationService**](docs/Api/OrganizationServicesApi.md#updateorganizationservice) | **PUT** /organizations/{organizationId}/organizationServices/{organizationServiceId} | Updates an organization service
*OrganizationsApi* | [**createOrganizationService**](docs/Api/OrganizationsApi.md#createorganizationservice) | **POST** /organizations/{organizationId}/organizationServices | Create organization service
*OrganizationsApi* | [**findOrganizationService**](docs/Api/OrganizationsApi.md#findorganizationservice) | **GET** /organizations/{organizationId}/organizationServices/{organizationServiceId} | Finds a organization service by id
*OrganizationsApi* | [**listOrganizationOrganizationServices**](docs/Api/OrganizationsApi.md#listorganizationorganizationservices) | **GET** /organizations/{organizationId}/organizationServices | Organization organization service list
*OrganizationsApi* | [**listOrganizations**](docs/Api/OrganizationsApi.md#listorganizations) | **GET** /organizations | List organizations
*OrganizationsApi* | [**updateOrganizationService**](docs/Api/OrganizationsApi.md#updateorganizationservice) | **PUT** /organizations/{organizationId}/organizationServices/{organizationServiceId} | Updates an organization service
*PhoneChannelsApi* | [**createServicePhoneChannel**](docs/Api/PhoneChannelsApi.md#createservicephonechannel) | **POST** /services/{serviceId}/phoneChannels | creates PhoneChannel
*PhoneChannelsApi* | [**findServicePhoneChannel**](docs/Api/PhoneChannelsApi.md#findservicephonechannel) | **GET** /services/{serviceId}/phoneChannels/{phoneChannelId} | finds PhoneChannel by phoneChannelId
*PhoneChannelsApi* | [**listServicePhoneChannels**](docs/Api/PhoneChannelsApi.md#listservicephonechannels) | **GET** /services/{serviceId}/phoneChannels | Lists PhoneChannels by serviceId
*PhoneChannelsApi* | [**updatePhoneChannel**](docs/Api/PhoneChannelsApi.md#updatephonechannel) | **PUT** /services/{serviceId}/phoneChannels/{phoneChannelId} | Updates PhoneChannel
*PrintableFormChannelsApi* | [**createServicePrintableFormChannel**](docs/Api/PrintableFormChannelsApi.md#createserviceprintableformchannel) | **POST** /services/{serviceId}/printableFormChannels | creates PrintableFormChannel
*PrintableFormChannelsApi* | [**findServicePrintableFormChannel**](docs/Api/PrintableFormChannelsApi.md#findserviceprintableformchannel) | **GET** /services/{serviceId}/printableFormChannels/{printableFormChannelId} | finds PrintableFormChannel by printableFormChannelId
*PrintableFormChannelsApi* | [**listServicePrintableFormChannels**](docs/Api/PrintableFormChannelsApi.md#listserviceprintableformchannels) | **GET** /services/{serviceId}/printableFormChannels | Lists PrintableFormChannels by serviceId
*PrintableFormChannelsApi* | [**updatePrintableFormChannel**](docs/Api/PrintableFormChannelsApi.md#updateprintableformchannel) | **PUT** /services/{serviceId}/printableFormChannels/{printableFormChannelId} | Updates PrintableFormChannel
*ServiceLocationChannelsApi* | [**createServiceServiceLocationChannel**](docs/Api/ServiceLocationChannelsApi.md#createserviceservicelocationchannel) | **POST** /services/{serviceId}/serviceLocationChannels | creates ServiceLocationChannel
*ServiceLocationChannelsApi* | [**findServiceServiceLocationChannel**](docs/Api/ServiceLocationChannelsApi.md#findserviceservicelocationchannel) | **GET** /services/{serviceId}/serviceLocationChannels/{serviceLocationChannelId} | finds ServiceLocationChannel by serviceLocationChannelId
*ServiceLocationChannelsApi* | [**listServiceServiceLocationChannels**](docs/Api/ServiceLocationChannelsApi.md#listserviceservicelocationchannels) | **GET** /services/{serviceId}/serviceLocationChannels | Lists ServiceLocationChannels by serviceId
*ServiceLocationChannelsApi* | [**updateServiceLocationChannel**](docs/Api/ServiceLocationChannelsApi.md#updateservicelocationchannel) | **PUT** /services/{serviceId}/serviceLocationChannels/{serviceLocationChannelId} | Updates ServiceLocationChannel
*ServicesApi* | [**createService**](docs/Api/ServicesApi.md#createservice) | **POST** /services | Create service
*ServicesApi* | [**createServiceElectronicChannel**](docs/Api/ServicesApi.md#createserviceelectronicchannel) | **POST** /services/{serviceId}/electronicChannels | creates ElectronicChannel
*ServicesApi* | [**createServicePhoneChannel**](docs/Api/ServicesApi.md#createservicephonechannel) | **POST** /services/{serviceId}/phoneChannels | creates PhoneChannel
*ServicesApi* | [**createServicePrintableFormChannel**](docs/Api/ServicesApi.md#createserviceprintableformchannel) | **POST** /services/{serviceId}/printableFormChannels | creates PrintableFormChannel
*ServicesApi* | [**createServiceServiceLocationChannel**](docs/Api/ServicesApi.md#createserviceservicelocationchannel) | **POST** /services/{serviceId}/serviceLocationChannels | creates ServiceLocationChannel
*ServicesApi* | [**createServiceWebPageChannel**](docs/Api/ServicesApi.md#createservicewebpagechannel) | **POST** /services/{serviceId}/webPageChannels | creates WebPageChannel
*ServicesApi* | [**findService**](docs/Api/ServicesApi.md#findservice) | **GET** /services/{serviceId} | Finds a service by id
*ServicesApi* | [**findServiceElectronicChannel**](docs/Api/ServicesApi.md#findserviceelectronicchannel) | **GET** /services/{serviceId}/electronicChannels/{electronicChannelId} | finds ElectronicChannel by electronicChannelId
*ServicesApi* | [**findServicePhoneChannel**](docs/Api/ServicesApi.md#findservicephonechannel) | **GET** /services/{serviceId}/phoneChannels/{phoneChannelId} | finds PhoneChannel by phoneChannelId
*ServicesApi* | [**findServicePrintableFormChannel**](docs/Api/ServicesApi.md#findserviceprintableformchannel) | **GET** /services/{serviceId}/printableFormChannels/{printableFormChannelId} | finds PrintableFormChannel by printableFormChannelId
*ServicesApi* | [**findServiceServiceLocationChannel**](docs/Api/ServicesApi.md#findserviceservicelocationchannel) | **GET** /services/{serviceId}/serviceLocationChannels/{serviceLocationChannelId} | finds ServiceLocationChannel by serviceLocationChannelId
*ServicesApi* | [**findServiceWebPageChannel**](docs/Api/ServicesApi.md#findservicewebpagechannel) | **GET** /services/{serviceId}/webPageChannels/{webPageChannelId} | finds WebPageChannel by webPageChannelId
*ServicesApi* | [**listServiceElectronicChannels**](docs/Api/ServicesApi.md#listserviceelectronicchannels) | **GET** /services/{serviceId}/electronicChannels | Lists ElectronicChannels by serviceId
*ServicesApi* | [**listServicePhoneChannels**](docs/Api/ServicesApi.md#listservicephonechannels) | **GET** /services/{serviceId}/phoneChannels | Lists PhoneChannels by serviceId
*ServicesApi* | [**listServicePrintableFormChannels**](docs/Api/ServicesApi.md#listserviceprintableformchannels) | **GET** /services/{serviceId}/printableFormChannels | Lists PrintableFormChannels by serviceId
*ServicesApi* | [**listServiceServiceLocationChannels**](docs/Api/ServicesApi.md#listserviceservicelocationchannels) | **GET** /services/{serviceId}/serviceLocationChannels | Lists ServiceLocationChannels by serviceId
*ServicesApi* | [**listServiceWebPageChannels**](docs/Api/ServicesApi.md#listservicewebpagechannels) | **GET** /services/{serviceId}/webPageChannels | Lists WebPageChannels by serviceId
*ServicesApi* | [**listServices**](docs/Api/ServicesApi.md#listservices) | **GET** /services | Service list
*ServicesApi* | [**updatePhoneChannel**](docs/Api/ServicesApi.md#updatephonechannel) | **PUT** /services/{serviceId}/phoneChannels/{phoneChannelId} | Updates PhoneChannel
*ServicesApi* | [**updatePrintableFormChannel**](docs/Api/ServicesApi.md#updateprintableformchannel) | **PUT** /services/{serviceId}/printableFormChannels/{printableFormChannelId} | Updates PrintableFormChannel
*ServicesApi* | [**updateService**](docs/Api/ServicesApi.md#updateservice) | **PUT** /services/{serviceId} | Updates service
*ServicesApi* | [**updateServiceElectronicChannel**](docs/Api/ServicesApi.md#updateserviceelectronicchannel) | **PUT** /services/{serviceId}/electronicChannels/{electronicChannelId} | Updates ElectronicChannel
*ServicesApi* | [**updateServiceLocationChannel**](docs/Api/ServicesApi.md#updateservicelocationchannel) | **PUT** /services/{serviceId}/serviceLocationChannels/{serviceLocationChannelId} | Updates ServiceLocationChannel
*ServicesApi* | [**updateWebPageChannel**](docs/Api/ServicesApi.md#updatewebpagechannel) | **PUT** /services/{serviceId}/webPageChannels/{webPageChannelId} | Updates WebPageChannel
*TilesApi* | [**findOrganizationTile**](docs/Api/TilesApi.md#findorganizationtile) | **GET** /organizations/{organizationId}/tiles/{tileId} | Finds organizations tile
*TilesApi* | [**findOrganizationTileImage**](docs/Api/TilesApi.md#findorganizationtileimage) | **GET** /organizations/{organizationId}/tiles/{tileId}/images/{imageId} | Returns a single organiztion tile image
*TilesApi* | [**getOrganizationTileImageData**](docs/Api/TilesApi.md#getorganizationtileimagedata) | **GET** /organizations/{organizationId}/tiles/{tileId}/images/{imageId}/data | Returns an organization tile image data
*TilesApi* | [**listOrganizationTileImages**](docs/Api/TilesApi.md#listorganizationtileimages) | **GET** /organizations/{organizationId}/tiles/{tileId}/images | Returns a list of organization tile images
*TilesApi* | [**listOrganizationTiles**](docs/Api/TilesApi.md#listorganizationtiles) | **GET** /organizations/{organizationId}/tiles | Lists organizations tiles
*WebPageChannelsApi* | [**createServiceWebPageChannel**](docs/Api/WebPageChannelsApi.md#createservicewebpagechannel) | **POST** /services/{serviceId}/webPageChannels | creates WebPageChannel
*WebPageChannelsApi* | [**findServiceWebPageChannel**](docs/Api/WebPageChannelsApi.md#findservicewebpagechannel) | **GET** /services/{serviceId}/webPageChannels/{webPageChannelId} | finds WebPageChannel by webPageChannelId
*WebPageChannelsApi* | [**listServiceWebPageChannels**](docs/Api/WebPageChannelsApi.md#listservicewebpagechannels) | **GET** /services/{serviceId}/webPageChannels | Lists WebPageChannels by serviceId
*WebPageChannelsApi* | [**updateWebPageChannel**](docs/Api/WebPageChannelsApi.md#updatewebpagechannel) | **PUT** /services/{serviceId}/webPageChannels/{webPageChannelId} | Updates WebPageChannel


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Attachment](docs/Model/Attachment.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [Banner](docs/Model/Banner.md)
 - [ElectronicChannel](docs/Model/ElectronicChannel.md)
 - [Event](docs/Model/Event.md)
 - [Forbidden](docs/Model/Forbidden.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [LocalizedValue](docs/Model/LocalizedValue.md)
 - [NewsArticle](docs/Model/NewsArticle.md)
 - [NotFound](docs/Model/NotFound.md)
 - [NotImplemented](docs/Model/NotImplemented.md)
 - [OntologyItem](docs/Model/OntologyItem.md)
 - [Organization](docs/Model/Organization.md)
 - [OrganizationService](docs/Model/OrganizationService.md)
 - [PhoneChannel](docs/Model/PhoneChannel.md)
 - [PrintableFormChannel](docs/Model/PrintableFormChannel.md)
 - [Service](docs/Model/Service.md)
 - [ServiceChannelAttachment](docs/Model/ServiceChannelAttachment.md)
 - [ServiceHour](docs/Model/ServiceHour.md)
 - [ServiceLocationChannel](docs/Model/ServiceLocationChannel.md)
 - [SupportContact](docs/Model/SupportContact.md)
 - [Tile](docs/Model/Tile.md)
 - [WebPage](docs/Model/WebPage.md)
 - [WebPageChannel](docs/Model/WebPageChannel.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




