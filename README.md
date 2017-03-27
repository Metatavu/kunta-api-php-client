# kunta-api-php-client
Solution to combine municipality services under single API.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.1.0
- Package version: 0.0.2-alpha1
- Build date: 2017-03-27T08:12:28.200+03:00
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
      "url": "https://github.com/metatavu/kunta-api-php-client.git"
    }
  ],
  "require": {
    "metatavu/kunta-api-php-client": "*@dev"
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

$api_instance = new KuntaAPI\Api\AnnouncementsApi();
$organizationId = "organizationId_example"; // string | Organization id
$announcementId = "announcementId_example"; // string | Announcement id

try {
    $result = $api_instance->findOrganizationAnnouncement($organizationId, $announcementId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementsApi->findOrganizationAnnouncement: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnnouncementsApi* | [**findOrganizationAnnouncement**](docs/Api/AnnouncementsApi.md#findorganizationannouncement) | **GET** /organizations/{organizationId}/announcements/{announcementId} | Finds an organizations announcement
*AnnouncementsApi* | [**listOrganizationAnnouncements**](docs/Api/AnnouncementsApi.md#listorganizationannouncements) | **GET** /organizations/{organizationId}/announcements | Lists organizations announcements
*BannersApi* | [**findOrganizationBanner**](docs/Api/BannersApi.md#findorganizationbanner) | **GET** /organizations/{organizationId}/banners/{bannerId} | Finds organizations banner
*BannersApi* | [**findOrganizationBannerImage**](docs/Api/BannersApi.md#findorganizationbannerimage) | **GET** /organizations/{organizationId}/banners/{bannerId}/images/{imageId} | Returns a single organiztion banner image
*BannersApi* | [**getOrganizationBannerImageData**](docs/Api/BannersApi.md#getorganizationbannerimagedata) | **GET** /organizations/{organizationId}/banners/{bannerId}/images/{imageId}/data | Returns an organization banner image data
*BannersApi* | [**listOrganizationBannerImages**](docs/Api/BannersApi.md#listorganizationbannerimages) | **GET** /organizations/{organizationId}/banners/{bannerId}/images | Returns a list of organization banner images
*BannersApi* | [**listOrganizationBanners**](docs/Api/BannersApi.md#listorganizationbanners) | **GET** /organizations/{organizationId}/banners | Lists organizations banners
*ContactsApi* | [**findOrganizationContact**](docs/Api/ContactsApi.md#findorganizationcontact) | **GET** /organizations/{organizationId}/contacts/{contactId} | Finds an organizations contact
*ContactsApi* | [**listOrganizationContacts**](docs/Api/ContactsApi.md#listorganizationcontacts) | **GET** /organizations/{organizationId}/contacts | Lists organizations contacts
*ElectronicChannelsApi* | [**findServiceElectronicChannel**](docs/Api/ElectronicChannelsApi.md#findserviceelectronicchannel) | **GET** /services/{serviceId}/electronicChannels/{electronicChannelId} | finds ElectronicChannel by electronicChannelId
*ElectronicChannelsApi* | [**listServiceElectronicChannels**](docs/Api/ElectronicChannelsApi.md#listserviceelectronicchannels) | **GET** /services/{serviceId}/electronicChannels | Lists ElectronicChannels by serviceId
*ElectronicServiceChannelsApi* | [**findElectronicServiceChannel**](docs/Api/ElectronicServiceChannelsApi.md#findelectronicservicechannel) | **GET** /electronicServiceChannels/{electronicServiceChannelId} | Finds an electronic service channel by id
*ElectronicServiceChannelsApi* | [**listElectronicServiceChannels**](docs/Api/ElectronicServiceChannelsApi.md#listelectronicservicechannels) | **GET** /electronicServiceChannels | Lists electronic service channels
*EventsApi* | [**findOrganizationEvent**](docs/Api/EventsApi.md#findorganizationevent) | **GET** /organizations/{organizationId}/events/{eventId} | Returns organizations event by id
*EventsApi* | [**findOrganizationEventImage**](docs/Api/EventsApi.md#findorganizationeventimage) | **GET** /organizations/{organizationId}/events/{eventId}/images/{imageId} | Returns an event image
*EventsApi* | [**getOrganizationEventImageData**](docs/Api/EventsApi.md#getorganizationeventimagedata) | **GET** /organizations/{organizationId}/events/{eventId}/images/{imageId}/data | Returns an event image data
*EventsApi* | [**listOrganizationEventImages**](docs/Api/EventsApi.md#listorganizationeventimages) | **GET** /organizations/{organizationId}/events/{eventId}/images | Returns list of event images
*EventsApi* | [**listOrganizationEvents**](docs/Api/EventsApi.md#listorganizationevents) | **GET** /organizations/{organizationId}/events | Lists organizations events
*FilesApi* | [**findOrganizationFile**](docs/Api/FilesApi.md#findorganizationfile) | **GET** /organizations/{organizationId}/files/{fileId} | Finds organizations file
*FilesApi* | [**getOrganizationFileData**](docs/Api/FilesApi.md#getorganizationfiledata) | **GET** /organizations/{organizationId}/files/{fileId}/data | Returns an organization file data
*FilesApi* | [**listOrganizationFiles**](docs/Api/FilesApi.md#listorganizationfiles) | **GET** /organizations/{organizationId}/files | Lists organizations files
*FragmentsApi* | [**findOrganizationFragment**](docs/Api/FragmentsApi.md#findorganizationfragment) | **GET** /organizations/{organizationId}/fragments/{fragmentId} | Finds organizations page fragment
*FragmentsApi* | [**listOrganizationFragments**](docs/Api/FragmentsApi.md#listorganizationfragments) | **GET** /organizations/{organizationId}/fragments | Lists organizations page fragments
*JobsApi* | [**findOrganizationJob**](docs/Api/JobsApi.md#findorganizationjob) | **GET** /organizations/{organizationId}/jobs/{jobId} | Finds organizations job
*JobsApi* | [**listOrganizationJobs**](docs/Api/JobsApi.md#listorganizationjobs) | **GET** /organizations/{organizationId}/jobs | Lists organizations jobs
*MenusApi* | [**findOrganizationMenu**](docs/Api/MenusApi.md#findorganizationmenu) | **GET** /organizations/{organizationId}/menus/{menuId} | Finds organizations menu
*MenusApi* | [**findOrganizationMenuItem**](docs/Api/MenusApi.md#findorganizationmenuitem) | **GET** /organizations/{organizationId}/menus/{menuId}/items/{menuItemId} | Finds organization menu item
*MenusApi* | [**listOrganizationMenuItems**](docs/Api/MenusApi.md#listorganizationmenuitems) | **GET** /organizations/{organizationId}/menus/{menuId}/items | Lists organizations menu items
*MenusApi* | [**listOrganizationMenus**](docs/Api/MenusApi.md#listorganizationmenus) | **GET** /organizations/{organizationId}/menus | Lists organizations menus
*NewsApi* | [**findOrganizationNewsArticle**](docs/Api/NewsApi.md#findorganizationnewsarticle) | **GET** /organizations/{organizationId}/news/{newsArticleId} | Finds organizations news article
*NewsApi* | [**findOrganizationNewsArticleImage**](docs/Api/NewsApi.md#findorganizationnewsarticleimage) | **GET** /organizations/{organizationId}/news/{newsArticleId}/images/{imageId} | Returns an news article image
*NewsApi* | [**getOrganizationNewsArticleImageData**](docs/Api/NewsApi.md#getorganizationnewsarticleimagedata) | **GET** /organizations/{organizationId}/news/{newsArticleId}/images/{imageId}/data | Returns a news article image data
*NewsApi* | [**listOrganizationNews**](docs/Api/NewsApi.md#listorganizationnews) | **GET** /organizations/{organizationId}/news | Lists organizations news
*NewsApi* | [**listOrganizationNewsArticleImages**](docs/Api/NewsApi.md#listorganizationnewsarticleimages) | **GET** /organizations/{organizationId}/news/{newsArticleId}/images | Returns list of news article images
*OrganizationServicesApi* | [**createOrganizationService**](docs/Api/OrganizationServicesApi.md#createorganizationservice) | **POST** /organizations/{organizationId}/organizationServices | Create organization service
*OrganizationServicesApi* | [**findOrganizationService**](docs/Api/OrganizationServicesApi.md#findorganizationservice) | **GET** /organizations/{organizationId}/organizationServices/{organizationServiceId} | Finds a organization service by id
*OrganizationServicesApi* | [**listOrganizationOrganizationServices**](docs/Api/OrganizationServicesApi.md#listorganizationorganizationservices) | **GET** /organizations/{organizationId}/organizationServices | Organization organization service list
*OrganizationServicesApi* | [**updateOrganizationService**](docs/Api/OrganizationServicesApi.md#updateorganizationservice) | **PUT** /organizations/{organizationId}/organizationServices/{organizationServiceId} | Updates an organization service
*OrganizationsApi* | [**createOrganizationService**](docs/Api/OrganizationsApi.md#createorganizationservice) | **POST** /organizations/{organizationId}/organizationServices | Create organization service
*OrganizationsApi* | [**findOrganization**](docs/Api/OrganizationsApi.md#findorganization) | **GET** /organizations/{organizationId} | Find organization
*OrganizationsApi* | [**findOrganizationService**](docs/Api/OrganizationsApi.md#findorganizationservice) | **GET** /organizations/{organizationId}/organizationServices/{organizationServiceId} | Finds a organization service by id
*OrganizationsApi* | [**listOrganizationOrganizationServices**](docs/Api/OrganizationsApi.md#listorganizationorganizationservices) | **GET** /organizations/{organizationId}/organizationServices | Organization organization service list
*OrganizationsApi* | [**listOrganizations**](docs/Api/OrganizationsApi.md#listorganizations) | **GET** /organizations | List organizations
*OrganizationsApi* | [**updateOrganizationService**](docs/Api/OrganizationsApi.md#updateorganizationservice) | **PUT** /organizations/{organizationId}/organizationServices/{organizationServiceId} | Updates an organization service
*PagesApi* | [**findOrganizationPage**](docs/Api/PagesApi.md#findorganizationpage) | **GET** /organizations/{organizationId}/pages/{pageId} | Finds organizations page
*PagesApi* | [**findOrganizationPageContent**](docs/Api/PagesApi.md#findorganizationpagecontent) | **GET** /organizations/{organizationId}/pages/{pageId}/content | Returns organizations page content in all available languages
*PagesApi* | [**findOrganizationPageImage**](docs/Api/PagesApi.md#findorganizationpageimage) | **GET** /organizations/{organizationId}/pages/{pageId}/images/{imageId} | Returns a single organiztion page image
*PagesApi* | [**getOrganizationPageImageData**](docs/Api/PagesApi.md#getorganizationpageimagedata) | **GET** /organizations/{organizationId}/pages/{pageId}/images/{imageId}/data | Returns an organization page image data
*PagesApi* | [**listOrganizationPageImages**](docs/Api/PagesApi.md#listorganizationpageimages) | **GET** /organizations/{organizationId}/pages/{pageId}/images | Returns a list of organization page images
*PagesApi* | [**listOrganizationPages**](docs/Api/PagesApi.md#listorganizationpages) | **GET** /organizations/{organizationId}/pages | Lists organizations pages
*PhoneChannelsApi* | [**findServicePhoneChannel**](docs/Api/PhoneChannelsApi.md#findservicephonechannel) | **GET** /services/{serviceId}/phoneChannels/{phoneChannelId} | finds PhoneChannel by phoneChannelId
*PhoneChannelsApi* | [**listServicePhoneChannels**](docs/Api/PhoneChannelsApi.md#listservicephonechannels) | **GET** /services/{serviceId}/phoneChannels | Lists PhoneChannels by serviceId
*PhoneServiceChannelsApi* | [**findPhoneServiceChannel**](docs/Api/PhoneServiceChannelsApi.md#findphoneservicechannel) | **GET** /phoneServiceChannels/{phoneServiceChannelId} | Finds a phone service channel by id
*PhoneServiceChannelsApi* | [**listPhoneServiceChannels**](docs/Api/PhoneServiceChannelsApi.md#listphoneservicechannels) | **GET** /phoneServiceChannels | Lists phone service channels
*PrintableFormChannelsApi* | [**findServicePrintableFormChannel**](docs/Api/PrintableFormChannelsApi.md#findserviceprintableformchannel) | **GET** /services/{serviceId}/printableFormChannels/{printableFormChannelId} | finds PrintableFormChannel by printableFormChannelId
*PrintableFormChannelsApi* | [**listServicePrintableFormChannels**](docs/Api/PrintableFormChannelsApi.md#listserviceprintableformchannels) | **GET** /services/{serviceId}/printableFormChannels | Lists PrintableFormChannels by serviceId
*PrintableFormServiceChannelsApi* | [**findPrintableFormServiceChannel**](docs/Api/PrintableFormServiceChannelsApi.md#findprintableformservicechannel) | **GET** /printableFormServiceChannels/{printableFormServiceChannelId} | Finds a printable form service channel
*PrintableFormServiceChannelsApi* | [**listPrintableFormServiceChannels**](docs/Api/PrintableFormServiceChannelsApi.md#listprintableformservicechannels) | **GET** /printableFormServiceChannels | Lists printable form service channels
*PublicTransportApi* | [**findOrganizationPublicTransportAgency**](docs/Api/PublicTransportApi.md#findorganizationpublictransportagency) | **GET** /organizations/{organizationId}/transportAgencies/{agencyId} | Finds an organizations public transport agency
*PublicTransportApi* | [**findOrganizationPublicTransportRoute**](docs/Api/PublicTransportApi.md#findorganizationpublictransportroute) | **GET** /organizations/{organizationId}/transportRoutes/{routeId} | Finds an organizations public transport route
*PublicTransportApi* | [**findOrganizationPublicTransportSchedule**](docs/Api/PublicTransportApi.md#findorganizationpublictransportschedule) | **GET** /organizations/{organizationId}/transportSchedules/{scheduleId} | Finds organizations public transport schedule
*PublicTransportApi* | [**findOrganizationPublicTransportStop**](docs/Api/PublicTransportApi.md#findorganizationpublictransportstop) | **GET** /organizations/{organizationId}/transportStops/{stopId} | Finds a stop of organizations public transport route
*PublicTransportApi* | [**findOrganizationPublicTransportStopTime**](docs/Api/PublicTransportApi.md#findorganizationpublictransportstoptime) | **GET** /organizations/{organizationId}/transportStopTimes/{stopTimeId} | Finds organizations public transport stopTime
*PublicTransportApi* | [**findOrganizationPublicTransportTrip**](docs/Api/PublicTransportApi.md#findorganizationpublictransporttrip) | **GET** /organizations/{organizationId}/transportTrips/{tripId} | Finds organizations public transport trip
*PublicTransportApi* | [**listOrganizationPublicTransportAgencies**](docs/Api/PublicTransportApi.md#listorganizationpublictransportagencies) | **GET** /organizations/{organizationId}/transportAgencies | Lists organizations public transport agencies
*PublicTransportApi* | [**listOrganizationPublicTransportRoutes**](docs/Api/PublicTransportApi.md#listorganizationpublictransportroutes) | **GET** /organizations/{organizationId}/transportRoutes | Lists organizations public transport routes
*PublicTransportApi* | [**listOrganizationPublicTransportSchedules**](docs/Api/PublicTransportApi.md#listorganizationpublictransportschedules) | **GET** /organizations/{organizationId}/transportSchedules | Lists schedules of organization&#39;s public transport schedules
*PublicTransportApi* | [**listOrganizationPublicTransportStopTimes**](docs/Api/PublicTransportApi.md#listorganizationpublictransportstoptimes) | **GET** /organizations/{organizationId}/transportStopTimes | Lists stopTimes of organization&#39;s public transport stopTimes
*PublicTransportApi* | [**listOrganizationPublicTransportStops**](docs/Api/PublicTransportApi.md#listorganizationpublictransportstops) | **GET** /organizations/{organizationId}/transportStops | Lists organizations public transport stops
*PublicTransportApi* | [**listOrganizationPublicTransportTrips**](docs/Api/PublicTransportApi.md#listorganizationpublictransporttrips) | **GET** /organizations/{organizationId}/transportTrips | Lists trips of organization&#39;s public transport trips
*ServiceChannelsApi* | [**findElectronicServiceChannel**](docs/Api/ServiceChannelsApi.md#findelectronicservicechannel) | **GET** /electronicServiceChannels/{electronicServiceChannelId} | Finds an electronic service channel by id
*ServiceChannelsApi* | [**findPhoneServiceChannel**](docs/Api/ServiceChannelsApi.md#findphoneservicechannel) | **GET** /phoneServiceChannels/{phoneServiceChannelId} | Finds a phone service channel by id
*ServiceChannelsApi* | [**findPrintableFormServiceChannel**](docs/Api/ServiceChannelsApi.md#findprintableformservicechannel) | **GET** /printableFormServiceChannels/{printableFormServiceChannelId} | Finds a printable form service channel
*ServiceChannelsApi* | [**findServiceLocationServiceChannel**](docs/Api/ServiceChannelsApi.md#findservicelocationservicechannel) | **GET** /serviceLocationServiceChannels/{serviceLocationServiceChannelId} | Finds a service location service by id
*ServiceChannelsApi* | [**findWebPageServiceChannel**](docs/Api/ServiceChannelsApi.md#findwebpageservicechannel) | **GET** /webPageServiceChannels/{webPageServiceChannelId} | Finds a web page service channel by id
*ServiceChannelsApi* | [**listElectronicServiceChannels**](docs/Api/ServiceChannelsApi.md#listelectronicservicechannels) | **GET** /electronicServiceChannels | Lists electronic service channels
*ServiceChannelsApi* | [**listPhoneServiceChannels**](docs/Api/ServiceChannelsApi.md#listphoneservicechannels) | **GET** /phoneServiceChannels | Lists phone service channels
*ServiceChannelsApi* | [**listPrintableFormServiceChannels**](docs/Api/ServiceChannelsApi.md#listprintableformservicechannels) | **GET** /printableFormServiceChannels | Lists printable form service channels
*ServiceChannelsApi* | [**listServiceLocationServiceChannels**](docs/Api/ServiceChannelsApi.md#listservicelocationservicechannels) | **GET** /serviceLocationServiceChannels | Lists service location service channels
*ServiceChannelsApi* | [**listWebPageServiceChannels**](docs/Api/ServiceChannelsApi.md#listwebpageservicechannels) | **GET** /webPageServiceChannels | Lists web page service channels
*ServiceLocationChannelsApi* | [**findServiceServiceLocationChannel**](docs/Api/ServiceLocationChannelsApi.md#findserviceservicelocationchannel) | **GET** /services/{serviceId}/serviceLocationChannels/{serviceLocationChannelId} | finds ServiceLocationChannel by serviceLocationChannelId
*ServiceLocationChannelsApi* | [**listServiceServiceLocationChannels**](docs/Api/ServiceLocationChannelsApi.md#listserviceservicelocationchannels) | **GET** /services/{serviceId}/serviceLocationChannels | Lists ServiceLocationChannels by serviceId
*ServiceLocationServiceChannelsApi* | [**findServiceLocationServiceChannel**](docs/Api/ServiceLocationServiceChannelsApi.md#findservicelocationservicechannel) | **GET** /serviceLocationServiceChannels/{serviceLocationServiceChannelId} | Finds a service location service by id
*ServiceLocationServiceChannelsApi* | [**listServiceLocationServiceChannels**](docs/Api/ServiceLocationServiceChannelsApi.md#listservicelocationservicechannels) | **GET** /serviceLocationServiceChannels | Lists service location service channels
*ServicesApi* | [**createService**](docs/Api/ServicesApi.md#createservice) | **POST** /services | Create service
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
*ServicesApi* | [**updateService**](docs/Api/ServicesApi.md#updateservice) | **PUT** /services/{serviceId} | Updates service
*SettingsApi* | [**createOrganizationSetting**](docs/Api/SettingsApi.md#createorganizationsetting) | **POST** /organizations/{organizationId}/settings/ | Creates organization setting
*SettingsApi* | [**deleteOrganizationSetting**](docs/Api/SettingsApi.md#deleteorganizationsetting) | **DELETE** /organizations/{organizationId}/settings/{settingId} | Deletes an organization setting
*SettingsApi* | [**findOrganizationSetting**](docs/Api/SettingsApi.md#findorganizationsetting) | **GET** /organizations/{organizationId}/settings/{settingId} | Finds organizations setting
*SettingsApi* | [**listOrganizationSettings**](docs/Api/SettingsApi.md#listorganizationsettings) | **GET** /organizations/{organizationId}/settings/ | Lists organizations settings
*SettingsApi* | [**updateOrganizationSetting**](docs/Api/SettingsApi.md#updateorganizationsetting) | **PUT** /organizations/{organizationId}/settings/{settingId} | Updates an organization setting
*ShortlinksApi* | [**findOrganizationShortlink**](docs/Api/ShortlinksApi.md#findorganizationshortlink) | **GET** /organizations/{organizationId}/shortlinks/{shortlinkId} | Finds organization shortlink
*ShortlinksApi* | [**listOrganizationShortlinks**](docs/Api/ShortlinksApi.md#listorganizationshortlinks) | **GET** /organizations/{organizationId}/shortlinks | Lists organizations shortlinks
*TilesApi* | [**findOrganizationTile**](docs/Api/TilesApi.md#findorganizationtile) | **GET** /organizations/{organizationId}/tiles/{tileId} | Finds organizations tile
*TilesApi* | [**findOrganizationTileImage**](docs/Api/TilesApi.md#findorganizationtileimage) | **GET** /organizations/{organizationId}/tiles/{tileId}/images/{imageId} | Returns a single organiztion tile image
*TilesApi* | [**getOrganizationTileImageData**](docs/Api/TilesApi.md#getorganizationtileimagedata) | **GET** /organizations/{organizationId}/tiles/{tileId}/images/{imageId}/data | Returns an organization tile image data
*TilesApi* | [**listOrganizationTileImages**](docs/Api/TilesApi.md#listorganizationtileimages) | **GET** /organizations/{organizationId}/tiles/{tileId}/images | Returns a list of organization tile images
*TilesApi* | [**listOrganizationTiles**](docs/Api/TilesApi.md#listorganizationtiles) | **GET** /organizations/{organizationId}/tiles | Lists organizations tiles
*WebPageChannelsApi* | [**findServiceWebPageChannel**](docs/Api/WebPageChannelsApi.md#findservicewebpagechannel) | **GET** /services/{serviceId}/webPageChannels/{webPageChannelId} | finds WebPageChannel by webPageChannelId
*WebPageChannelsApi* | [**listServiceWebPageChannels**](docs/Api/WebPageChannelsApi.md#listservicewebpagechannels) | **GET** /services/{serviceId}/webPageChannels | Lists WebPageChannels by serviceId
*WebPageServiceChannelsApi* | [**findWebPageServiceChannel**](docs/Api/WebPageServiceChannelsApi.md#findwebpageservicechannel) | **GET** /webPageServiceChannels/{webPageServiceChannelId} | Finds a web page service channel by id
*WebPageServiceChannelsApi* | [**listWebPageServiceChannels**](docs/Api/WebPageServiceChannelsApi.md#listwebpageservicechannels) | **GET** /webPageServiceChannels | Lists web page service channels


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Agency](docs/Model/Agency.md)
 - [Announcement](docs/Model/Announcement.md)
 - [Attachment](docs/Model/Attachment.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [Banner](docs/Model/Banner.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactPhone](docs/Model/ContactPhone.md)
 - [ContactStatus](docs/Model/ContactStatus.md)
 - [ElectronicServiceChannel](docs/Model/ElectronicServiceChannel.md)
 - [Event](docs/Model/Event.md)
 - [FileDef](docs/Model/FileDef.md)
 - [Forbidden](docs/Model/Forbidden.md)
 - [Fragment](docs/Model/Fragment.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [Job](docs/Model/Job.md)
 - [LocalizedValue](docs/Model/LocalizedValue.md)
 - [Menu](docs/Model/Menu.md)
 - [MenuItem](docs/Model/MenuItem.md)
 - [NewsArticle](docs/Model/NewsArticle.md)
 - [NotFound](docs/Model/NotFound.md)
 - [NotImplemented](docs/Model/NotImplemented.md)
 - [OntologyItem](docs/Model/OntologyItem.md)
 - [Organization](docs/Model/Organization.md)
 - [OrganizationService](docs/Model/OrganizationService.md)
 - [OrganizationSetting](docs/Model/OrganizationSetting.md)
 - [Page](docs/Model/Page.md)
 - [PageMeta](docs/Model/PageMeta.md)
 - [PhoneServiceChannel](docs/Model/PhoneServiceChannel.md)
 - [PrintableFormServiceChannel](docs/Model/PrintableFormServiceChannel.md)
 - [Route](docs/Model/Route.md)
 - [Schedule](docs/Model/Schedule.md)
 - [ScheduleException](docs/Model/ScheduleException.md)
 - [Service](docs/Model/Service.md)
 - [ServiceChannelAttachment](docs/Model/ServiceChannelAttachment.md)
 - [ServiceHour](docs/Model/ServiceHour.md)
 - [ServiceLocationServiceChannel](docs/Model/ServiceLocationServiceChannel.md)
 - [Shortlink](docs/Model/Shortlink.md)
 - [Stop](docs/Model/Stop.md)
 - [StopTime](docs/Model/StopTime.md)
 - [SupportContact](docs/Model/SupportContact.md)
 - [Tile](docs/Model/Tile.md)
 - [Trip](docs/Model/Trip.md)
 - [WebPage](docs/Model/WebPage.md)
 - [WebPageServiceChannel](docs/Model/WebPageServiceChannel.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




