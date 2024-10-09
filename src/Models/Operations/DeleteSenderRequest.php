<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gsmservice\Gateway\Models\Operations;

use Gsmservice\Gateway\Utils\SpeakeasyMetadata;
class DeleteSenderRequest
{
    /**
     * Sender name to be removed
     *
     * @var string $sender
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=sender')]
    public string $sender;

    /**
     * @param  string  $sender
     */
    public function __construct(string $sender)
    {
        $this->sender = $sender;
    }
}