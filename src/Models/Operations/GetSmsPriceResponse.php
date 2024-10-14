<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gsmservice\Gateway\Models\Operations;

use Gsmservice\Gateway\Models\Components;
class GetSmsPriceResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * The request was processed successfully. Please check the price and the details of particular messages in `$prices`
     *
     * @var ?array<Components\Price> $prices
     */
    public ?array $prices = null;

    /**
     * $headers
     *
     * @var array<string, array<string>> $headers
     */
    public array $headers;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  array<string, array<string>>  $headers
     * @param  ?array<Components\Price>  $prices
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?array $prices = null, ?array $headers = [])
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->headers = $headers;
        $this->prices = $prices;
    }
}