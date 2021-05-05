# Criteo\Marketing\AnalyticsApi

All URIs are relative to *https://api.criteo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdsetReport**](AnalyticsApi.md#getAdsetReport) | **POST** /2021-04/statistics/report | 
[**getTransactionsReport**](AnalyticsApi.md#getTransactionsReport) | **POST** /2021-04/transactions/report | 



## getAdsetReport

> string getAdsetReport($statistics_report_query_message)



This Statistics endpoint provides adset related data. It is an upgrade of our previous Statistics endpoint, and includes new metrics and customization capabilities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Criteo\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Criteo\Marketing\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statistics_report_query_message = new \Criteo\Marketing\Model\StatisticsReportQueryMessage(); // \Criteo\Marketing\Model\StatisticsReportQueryMessage | 

try {
    $result = $apiInstance->getAdsetReport($statistics_report_query_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAdsetReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statistics_report_query_message** | [**\Criteo\Marketing\Model\StatisticsReportQueryMessage**](../Model/StatisticsReportQueryMessage.md)|  | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTransactionsReport

> string getTransactionsReport($transactions_report_query_data_message)



This Transactions endpoint provides transactions id related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Authorization
$config = Criteo\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Criteo\Marketing\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactions_report_query_data_message = new \Criteo\Marketing\Model\TransactionsReportQueryDataMessage(); // \Criteo\Marketing\Model\TransactionsReportQueryDataMessage | 

try {
    $result = $apiInstance->getTransactionsReport($transactions_report_query_data_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getTransactionsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactions_report_query_data_message** | [**\Criteo\Marketing\Model\TransactionsReportQueryDataMessage**](../Model/TransactionsReportQueryDataMessage.md)|  | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

