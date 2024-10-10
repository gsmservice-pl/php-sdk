<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gsmservice\Gateway\Utils;

class MultipartMetadata
{
    private function __construct(
        public string $name,
        public bool $file,
        public bool $content,
        public bool $json,
        public string $dateTimeFormat,
        public bool $serializeToString
    ) {
    }

    public static function parse(string $metadata): ?MultipartMetadata
    {
        if (! str_starts_with($metadata, 'multipartForm:')) {
            return null;
        }

        $metadata = removePrefix($metadata, 'multipartForm:');

        $name = '';
        $file = false;
        $content = false;
        $json = false;
        $dateTimeFormat = '';
        $serializeToString = false;

        $options = explode(',', $metadata);

        foreach ($options as $opt) {
            $parts = explode('=', $opt);
            if (count($parts) < 1 || count($parts) > 2) { /** @phpstan-ignore-line */
                continue;
            }

            match ($parts[0]) {
                'name' => $name = $parts[1],
                'file' => $file = $parts[1] === 'true',
                'content' => $content = $parts[1] === 'true',
                'json' => $json = $parts[1] === 'true',
                'dateTimeFormat' => $dateTimeFormat = $parts[1],
                'serializeToString' => $serializeToString = $parts[1] === 'true',
                default => throw new \RuntimeException('Failed to parse options.'),
            };
        }

        return new MultipartMetadata(
            name: $name,
            file: $file,
            content: $content,
            json: $json,
            dateTimeFormat: $dateTimeFormat,
            serializeToString: $serializeToString
        );
    }
}
