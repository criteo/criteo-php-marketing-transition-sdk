# Criteo\Marketing\AdvertiserApi

All URIs are relative to *https://api.criteo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiPortfolioGet**](AdvertiserApi.md#apiPortfolioGet) | **GET** /2021-04/advertisers/me | 
[**getCategories**](AdvertiserApi.md#getCategories) | **GET** /legacy/marketing/v1/advertisers/{advertiserId}/categories | Gets all advertiser&#39;s categories
[**getCategory**](AdvertiserApi.md#getCategory) | **GET** /legacy/marketing/v1/advertisers/{advertiserId}/categories/{categoryHashCode} | Gets a specific advertiser&#39;s category



## apiPortfolioGet

> \Criteo\Marketing\Model\GetPortfolioResponse apiPortfolioGet()



Use this call to fetch a list of all advertisers in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Criteo\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Criteo\Marketing\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiPortfolioGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->apiPortfolioGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Criteo\Marketing\Model\GetPortfolioResponse**](../Model/GetPortfolioResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCategories

> \Criteo\Marketing\Model\CategoryMessage[] getCategories($advertiser_id, $enabled_only)

Gets all advertiser's categories

Get the list of all the categories linked to the requested advertiser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Criteo\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Criteo\Marketing\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | Mandatory. The id of the advertiser to return.
$enabled_only = True; // bool | Optional. Returns only categories you can bid on. Defaults to false.

try {
    $result = $apiInstance->getCategories($advertiser_id, $enabled_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**| Mandatory. The id of the advertiser to return. |
 **enabled_only** | **bool**| Optional. Returns only categories you can bid on. Defaults to false. | [optional]

### Return type

[**\Criteo\Marketing\Model\CategoryMessage[]**](../Model/CategoryMessage.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCategory

> \Criteo\Marketing\Model\CategoryMessage[] getCategory($advertiser_id, $category_hash_code)

Gets a specific advertiser's category

Get a specific category linked to the requested advertiser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Criteo\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Criteo\Marketing\Api\AdvertiserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | Mandatory. The id of the advertiser to return.
$category_hash_code = 56; // int | Mandatory. The id of the category to return.

try {
    $result = $apiInstance->getCategory($advertiser_id, $category_hash_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertiserApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advertiser_id** | **int**| Mandatory. The id of the advertiser to return. |
 **category_hash_code** | **int**| Mandatory. The id of the category to return. |

### Return type

[**\Criteo\Marketing\Model\CategoryMessage[]**](../Model/CategoryMessage.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/json, application/xml, text/xml, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

