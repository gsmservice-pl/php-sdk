<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gsmservice\Gateway\Utils;

use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

class DefaultRequest implements RequestInterface
{

    public function getRequestTarget(): string
    {
        return '';
    }

    public function withRequestTarget($requestTarget): RequestInterface
    {
        return $this;
    }

    public function getMethod(): string
    {
        return '';
    }

    public function withMethod($method): RequestInterface
    {
        return $this;
    }

    public function getUri(): UriInterface
    {
        return new DefaultUri();
    }

    public function withUri($uri, $preserveHost = false): RequestInterface
    {
        return $this;
    }

    public function getProtocolVersion(): string
    {
        return '';
    }

    public function withProtocolVersion($version): RequestInterface
    {
        return $this;
    }


    public function getHeaderLine($name): string
    {
        return '';
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function hasHeader($name): bool
    {
        return false;
    }

    public function getHeader($name): array
    {
        return [];
    }

    public function withHeader($name, $value): MessageInterface
    {
        return $this;
    }

    public function withAddedHeader($name, $value): MessageInterface
    {
        return $this;
    }

    public function withBody(StreamInterface $body): MessageInterface
    {
        return $this;
    }


    public function getBody(): StreamInterface
    {
        return new DefaultStream();
    }

    public function withoutHeader($name): MessageInterface
    {
        return $this;
    }

}
