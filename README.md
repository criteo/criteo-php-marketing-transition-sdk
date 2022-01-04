# This project is deprecated
We've built a new set of SDKs to help you use our [Criteo's API](https://developers.criteo.com/).

You can find the new PHP SDKs repositories here : https://github.com/criteo/criteo-api-marketingsolutions-php-sdk and https://github.com/criteo/criteo-api-retailmedia-php-sdk

# Criteo Marketing Transition SDK for PHP

## Introduction
API Client Libraries can facilitate your use of the Criteo API allowing you to build unique and customized solutions to serve your businesses and clients.
These libraries can reduce the amount of code you need to write in order to start accessing Criteo programmatically. They also can help expedite troubleshooting, should you encounter any issues.
This Transition SDK will help you migrate from MAPI to Criteo API. We will support it until end of 2021 when we will decommission the /legacy endpoints. After that date we will only support our official versioned Client Libraries available in Q3 2021.

More information: [https://developers.criteo.com/marketing-solutions/docs/php-api-client-library](https://developers.criteo.com/marketing-solutions/docs/php-api-client-library)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 2021-04
- Package version: 1.0.3
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 7.1 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/):

either run the following command: `composer require criteo/criteo-php-marketing-transition-sdk`

or add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/criteo/criteo-php-marketing-transition-sdk.git"
    }
  ],
  "require": {
    "criteo/criteo-php-marketing-transition-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/CriteoMarketingTransition/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$clientId = 'YOUR_CLIENT_ID';
$clientCredentials = 'YOUR_PASSWORD';

// Automatic token refresh
$apiInstance = new Criteo\Marketing\Api\AdvertiserApi(new TokenAutoRefreshClient($clientId, $clientCredentials));


try {
    $result = $apiInstance->apiPortfolioGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->apiPortfolioGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

You can find the full example [here](examples/).

## Documentation for API Endpoints

All URIs are relative to *https://api.criteo.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvertiserApi* | [**apiPortfolioGet**](docs/Api/AdvertiserApi.md#apiportfolioget) | **GET** /2021-04/advertisers/me | 
*AdvertiserApi* | [**getCategories**](docs/Api/AdvertiserApi.md#getcategories) | **GET** /legacy/marketing/v1/advertisers/{advertiserId}/categories | Gets all advertiser&#39;s categories
*AdvertiserApi* | [**getCategory**](docs/Api/AdvertiserApi.md#getcategory) | **GET** /legacy/marketing/v1/advertisers/{advertiserId}/categories/{categoryHashCode} | Gets a specific advertiser&#39;s category
*AnalyticsApi* | [**getAdsetReport**](docs/Api/AnalyticsApi.md#getadsetreport) | **POST** /2021-04/statistics/report | 
*AnalyticsApi* | [**getTransactionsReport**](docs/Api/AnalyticsApi.md#gettransactionsreport) | **POST** /2021-04/transactions/report | 
*AudienceApi* | [**createAudience**](docs/Api/AudienceApi.md#createaudience) | **POST** /2021-04/audiences | 
*AudienceApi* | [**deleteIdentifiers**](docs/Api/AudienceApi.md#deleteidentifiers) | **DELETE** /2021-04/audiences/{audience-id}/contactlist | 
*AudienceApi* | [**getAudiences**](docs/Api/AudienceApi.md#getaudiences) | **GET** /2021-04/audiences | 
*AudienceApi* | [**modifyAudience**](docs/Api/AudienceApi.md#modifyaudience) | **PATCH** /2021-04/audiences/{audience-id} | 
*AudienceApi* | [**modifyAudienceUsers**](docs/Api/AudienceApi.md#modifyaudienceusers) | **PATCH** /2021-04/audiences/{audience-id}/contactlist | 
*AudienceApi* | [**removeAudience**](docs/Api/AudienceApi.md#removeaudience) | **DELETE** /2021-04/audiences/{audience-id} | 
*CampaignApi* | [**getAdSet**](docs/Api/CampaignApi.md#getadset) | **GET** /2021-04/marketing-solutions/ad-sets/{adSetId} | 
*CampaignApi* | [**getBids**](docs/Api/CampaignApi.md#getbids) | **GET** /legacy/marketing/v1/campaigns/bids | Gets a the bids for campaigns and their categories
*CampaignApi* | [**getCategories**](docs/Api/CampaignApi.md#getcategories) | **GET** /legacy/marketing/v1/campaigns/{campaignId}/categories | Gets categories
*CampaignApi* | [**getCategory**](docs/Api/CampaignApi.md#getcategory) | **GET** /legacy/marketing/v1/campaigns/{campaignId}/categories/{categoryHashCode} | Gets a specific category
*CampaignApi* | [**patchAdSets**](docs/Api/CampaignApi.md#patchadsets) | **PATCH** /2021-04/marketing-solutions/ad-sets | 
*CampaignApi* | [**searchAdSets**](docs/Api/CampaignApi.md#searchadsets) | **POST** /2021-04/marketing-solutions/ad-sets/search | 
*CampaignApi* | [**startAdSets**](docs/Api/CampaignApi.md#startadsets) | **POST** /2021-04/marketing-solutions/ad-sets/start | 
*CampaignApi* | [**stopAdSets**](docs/Api/CampaignApi.md#stopadsets) | **POST** /2021-04/marketing-solutions/ad-sets/stop | 
*CampaignApi* | [**updateBids**](docs/Api/CampaignApi.md#updatebids) | **PUT** /legacy/marketing/v1/campaigns/bids | Update bids for campaigns and their categories
*CategoryApi* | [**getCategories**](docs/Api/CategoryApi.md#getcategories) | **GET** /legacy/marketing/v1/categories | Gets categories
*CategoryApi* | [**updateCategories**](docs/Api/CategoryApi.md#updatecategories) | **PUT** /legacy/marketing/v1/categories | Enables/disables categories
*OAuthApi* | [**createToken**](docs/Api/OAuthApi.md#createtoken) | **POST** /oauth2/token | 


## Documentation For Models

 - [AdSetDeliveryLimitations](docs/Model/AdSetDeliveryLimitations.md)
 - [AdSetFrequencyCapping](docs/Model/AdSetFrequencyCapping.md)
 - [AdSetGeoLocation](docs/Model/AdSetGeoLocation.md)
 - [AdSetSearchFilter](docs/Model/AdSetSearchFilter.md)
 - [AdSetTargeting](docs/Model/AdSetTargeting.md)
 - [AdSetTargetingRule](docs/Model/AdSetTargetingRule.md)
 - [Audience](docs/Model/Audience.md)
 - [AudienceAttributes](docs/Model/AudienceAttributes.md)
 - [AudienceError](docs/Model/AudienceError.md)
 - [AudienceNameDescription](docs/Model/AudienceNameDescription.md)
 - [AudienceWarning](docs/Model/AudienceWarning.md)
 - [BasicAudienceDefinition](docs/Model/BasicAudienceDefinition.md)
 - [BidMessage](docs/Model/BidMessage.md)
 - [CampaignBidChangeRequest](docs/Model/CampaignBidChangeRequest.md)
 - [CampaignBidChangeResponse](docs/Model/CampaignBidChangeResponse.md)
 - [CampaignBidChangeResponseMessageWithDetails](docs/Model/CampaignBidChangeResponseMessageWithDetails.md)
 - [CampaignBidMessage](docs/Model/CampaignBidMessage.md)
 - [CampaignMessage](docs/Model/CampaignMessage.md)
 - [CategoryBidChangeRequest](docs/Model/CategoryBidChangeRequest.md)
 - [CategoryBidMessage](docs/Model/CategoryBidMessage.md)
 - [CategoryMessage](docs/Model/CategoryMessage.md)
 - [CategoryUpdateError](docs/Model/CategoryUpdateError.md)
 - [CategoryUpdateInput](docs/Model/CategoryUpdateInput.md)
 - [CategoryUpdatesPerCatalog](docs/Model/CategoryUpdatesPerCatalog.md)
 - [CategoryUpdatesPerCatalogError](docs/Model/CategoryUpdatesPerCatalogError.md)
 - [CategoryUpdatesPerCatalogErrorMessageWithDetails](docs/Model/CategoryUpdatesPerCatalogErrorMessageWithDetails.md)
 - [ContactlistAmendment](docs/Model/ContactlistAmendment.md)
 - [ContactlistAmendmentAttributes](docs/Model/ContactlistAmendmentAttributes.md)
 - [ContactlistAmendmentRequest](docs/Model/ContactlistAmendmentRequest.md)
 - [ContactlistOperation](docs/Model/ContactlistOperation.md)
 - [ContactlistOperationAttributes](docs/Model/ContactlistOperationAttributes.md)
 - [CriteoApiDataOfPortfolioMessage](docs/Model/CriteoApiDataOfPortfolioMessage.md)
 - [CriteoApiError](docs/Model/CriteoApiError.md)
 - [CriteoApiWarning](docs/Model/CriteoApiWarning.md)
 - [DeleteAudienceContactListResponse](docs/Model/DeleteAudienceContactListResponse.md)
 - [DeleteAudienceResponse](docs/Model/DeleteAudienceResponse.md)
 - [ErrorCodeResponse](docs/Model/ErrorCodeResponse.md)
 - [ErrorMessage](docs/Model/ErrorMessage.md)
 - [GetAudiencesResponse](docs/Model/GetAudiencesResponse.md)
 - [GetPortfolioResponse](docs/Model/GetPortfolioResponse.md)
 - [InlineObject](docs/Model/InlineObject.md)
 - [JwtModel](docs/Model/JwtModel.md)
 - [ModifyAudienceResponse](docs/Model/ModifyAudienceResponse.md)
 - [NewAudience](docs/Model/NewAudience.md)
 - [NewAudienceAttributes](docs/Model/NewAudienceAttributes.md)
 - [NewAudienceRequest](docs/Model/NewAudienceRequest.md)
 - [NewAudienceResponse](docs/Model/NewAudienceResponse.md)
 - [NillableAdSetTargetingRule](docs/Model/NillableAdSetTargetingRule.md)
 - [NillableDateTime](docs/Model/NillableDateTime.md)
 - [NillableDecimal](docs/Model/NillableDecimal.md)
 - [OAuth2Error](docs/Model/OAuth2Error.md)
 - [PatchAdSet](docs/Model/PatchAdSet.md)
 - [PatchAdSetBidding](docs/Model/PatchAdSetBidding.md)
 - [PatchAdSetBudget](docs/Model/PatchAdSetBudget.md)
 - [PatchAdSetScheduling](docs/Model/PatchAdSetScheduling.md)
 - [PortfolioMessage](docs/Model/PortfolioMessage.md)
 - [ProblemDetails](docs/Model/ProblemDetails.md)
 - [ReadAdSet](docs/Model/ReadAdSet.md)
 - [ReadAdSetBidding](docs/Model/ReadAdSetBidding.md)
 - [ReadAdSetBudget](docs/Model/ReadAdSetBudget.md)
 - [ReadAdSetSchedule](docs/Model/ReadAdSetSchedule.md)
 - [ReadModelAdSetId](docs/Model/ReadModelAdSetId.md)
 - [ReadModelReadAdSet](docs/Model/ReadModelReadAdSet.md)
 - [ReplaceAudience](docs/Model/ReplaceAudience.md)
 - [ReplaceAudienceRequest](docs/Model/ReplaceAudienceRequest.md)
 - [ReplaceAudienceResponse](docs/Model/ReplaceAudienceResponse.md)
 - [RequestAdSetSearch](docs/Model/RequestAdSetSearch.md)
 - [RequestsAdSetId](docs/Model/RequestsAdSetId.md)
 - [RequestsPatchAdSet](docs/Model/RequestsPatchAdSet.md)
 - [ResponseAdSetId](docs/Model/ResponseAdSetId.md)
 - [ResponseReadAdSet](docs/Model/ResponseReadAdSet.md)
 - [ResponsesAdSetId](docs/Model/ResponsesAdSetId.md)
 - [ResponsesReadAdSet](docs/Model/ResponsesReadAdSet.md)
 - [StatisticsReportQueryMessage](docs/Model/StatisticsReportQueryMessage.md)
 - [TransactionsReportQueryDataMessage](docs/Model/TransactionsReportQueryDataMessage.md)
 - [TransactionsReportQueryEntityMessage](docs/Model/TransactionsReportQueryEntityMessage.md)
 - [TransactionsReportQueryMessage](docs/Model/TransactionsReportQueryMessage.md)
 - [WriteModelAdSetId](docs/Model/WriteModelAdSetId.md)
 - [WriteModelPatchAdSet](docs/Model/WriteModelPatchAdSet.md)


## Documentation For Authorization

In order to ease usage of this client library, you might want to use the TokenAutoRefreshClient
as explained in the [example](examples/).




### Authorization


- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: N/A


## Author
[Criteo](https://www.criteo.com/)

## Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

