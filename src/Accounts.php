<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gsmservice\Gateway;

use Gsmservice\Gateway\Models\Operations;
use JMS\Serializer\DeserializationContext;

class Accounts
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Get account details
     *
     * Get current account balance and other details of your account. You can check also account limit and if account is main one. Main accounts have unlimited privileges and using [User Panel](https://panel.gsmservice.pl) you can create as many subaccounts as you need.
     *  
     * This method doesn't get any parameters. As a successful result an `GetAccountDetailsResponse` object will be returned with properties describing details of current account you are logged in to using API Access Token.
     *
     * @return Operations\GetAccountDetailsResponse
     * @throws \Gsmservice\Gateway\Models\Errors\SDKException
     */
    public function get(): Operations\GetAccountDetailsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/account');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Gsmservice\Gateway\Models\Components\AccountResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetAccountDetailsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    accountResponse: $obj);

                return $response;
            } else {
                throw new \Gsmservice\Gateway\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401 || $statusCode == 403 || $statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Gsmservice\Gateway\Models\Errors\ErrorResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Gsmservice\Gateway\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Gsmservice\Gateway\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get subaccount details
     *
     * Check account balance and other details such subcredit balance of a subaccount. Subaccounts are additional users who can access your account services and the details. You can restrict access level and setup privileges to subaccounts using [user panel](https://panel.gsmservice.pl).
     *
     * This method accepts an `userLogin` parameter. You should pass the full subaccount login to access its data. 
     *
     * As a successful result a `GetSubaccountDetailsResponse` object will be returned with properties describing details of subaccount with provided login.
     *
     * @param  string  $userLogin
     * @return Operations\GetSubaccountDetailsResponse
     * @throws \Gsmservice\Gateway\Models\Errors\SDKException
     */
    public function getSubaccount(string $userLogin): Operations\GetSubaccountDetailsResponse
    {
        $request = new Operations\GetSubaccountDetailsRequest(
            userLogin: $userLogin,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/account/{user_login}', Operations\GetSubaccountDetailsRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Gsmservice\Gateway\Models\Components\AccountResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetSubaccountDetailsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    accountResponse: $obj);

                return $response;
            } else {
                throw new \Gsmservice\Gateway\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401 || $statusCode == 403 || $statusCode == 404 || $statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\Gsmservice\Gateway\Models\Errors\ErrorResponse', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                throw $obj->toException();
            } else {
                throw new \Gsmservice\Gateway\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } else {
            throw new \Gsmservice\Gateway\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}