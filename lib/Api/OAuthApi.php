<?php
/**
 * OAuthApi
 * PHP version 5
 *
 * @category Class
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API Transition Swagger
 *
 * This is used to help Criteo clients transition from MAPI to Criteo API
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Criteo\Marketing\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Criteo\Marketing\ApiException;
use Criteo\Marketing\Configuration;
use Criteo\Marketing\HeaderSelector;
use Criteo\Marketing\ObjectSerializer;

/**
 * OAuthApi Class Doc Comment
 *
 * @category Class
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OAuthApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createToken
     *
     * @param  string $client_id API Client-Id or Username (optional)
     * @param  string $client_secret API Client secret or password (optional)
     * @param  string $grant_type Other grant types are not available (optional, default to 'client_credentials')
     *
     * @throws \Criteo\Marketing\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Criteo\Marketing\Model\JwtModel|\Criteo\Marketing\Model\OAuth2Error
     */
    public function createToken($client_id = null, $client_secret = null, $grant_type = 'client_credentials')
    {
        list($response) = $this->createTokenWithHttpInfo($client_id, $client_secret, $grant_type);
        return $response;
    }

    /**
     * Operation createTokenWithHttpInfo
     *
     * @param  string $client_id API Client-Id or Username (optional)
     * @param  string $client_secret API Client secret or password (optional)
     * @param  string $grant_type Other grant types are not available (optional, default to 'client_credentials')
     *
     * @throws \Criteo\Marketing\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Criteo\Marketing\Model\JwtModel|\Criteo\Marketing\Model\OAuth2Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTokenWithHttpInfo($client_id = null, $client_secret = null, $grant_type = 'client_credentials')
    {
        $request = $this->createTokenRequest($client_id, $client_secret, $grant_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Criteo\Marketing\Model\JwtModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Criteo\Marketing\Model\JwtModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Criteo\Marketing\Model\OAuth2Error' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Criteo\Marketing\Model\OAuth2Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Criteo\Marketing\Model\JwtModel';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Criteo\Marketing\Model\JwtModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Criteo\Marketing\Model\OAuth2Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createTokenAsync
     *
     * 
     *
     * @param  string $client_id API Client-Id or Username (optional)
     * @param  string $client_secret API Client secret or password (optional)
     * @param  string $grant_type Other grant types are not available (optional, default to 'client_credentials')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTokenAsync($client_id = null, $client_secret = null, $grant_type = 'client_credentials')
    {
        return $this->createTokenAsyncWithHttpInfo($client_id, $client_secret, $grant_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTokenAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $client_id API Client-Id or Username (optional)
     * @param  string $client_secret API Client secret or password (optional)
     * @param  string $grant_type Other grant types are not available (optional, default to 'client_credentials')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTokenAsyncWithHttpInfo($client_id = null, $client_secret = null, $grant_type = 'client_credentials')
    {
        $returnType = '\Criteo\Marketing\Model\JwtModel';
        $request = $this->createTokenRequest($client_id, $client_secret, $grant_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createToken'
     *
     * @param  string $client_id API Client-Id or Username (optional)
     * @param  string $client_secret API Client secret or password (optional)
     * @param  string $grant_type Other grant types are not available (optional, default to 'client_credentials')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createTokenRequest($client_id = null, $client_secret = null, $grant_type = 'client_credentials')
    {

        $resourcePath = '/oauth2/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        }
        // form params
        if ($client_secret !== null) {
            $formParams['client_secret'] = ObjectSerializer::toFormValue($client_secret);
        }
        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
