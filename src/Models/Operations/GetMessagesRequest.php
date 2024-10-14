<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gsmservice\Gateway\Models\Operations;

use Gsmservice\Gateway\Utils\SpeakeasyMetadata;
class GetMessagesRequest
{
    /**
     * Array of Message IDs assigned by the system. The system will accept a maximum of 50 identifiers in one call.
     *
     * @var array<int> $ids
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=true,name=ids')]
    public array $ids;

    /**
     * @param  array<int>  $ids
     */
    public function __construct(array $ids)
    {
        $this->ids = $ids;
    }
}