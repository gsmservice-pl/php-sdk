<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gsmservice\Gateway\Models\Components;


/** Price - An object with the properties and price of a single message */
class Price
{
    /**
     * Information about a possible error
     *
     * @var ?string $error
     */
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $error = null;

    /**
     * Custom message ID assigned by the User
     *
     * @var ?string $cid
     */
    #[\JMS\Serializer\Annotation\SerializedName('cid')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $cid = null;

    /**
     * Message type according to the table:
     *
     *
     * |type|Description|
     * |----|-----------|
     * |  SmsType::SmsPro | SMS PRO   |
     * |  SmsType::SmsEco | SMS ECO   |
     * |  SmsType::SmsTwoWay | SMS 2WAY  |
     * | SmsType::Mms | MMS       |
     *
     * @var ?MessageType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Gsmservice\Gateway\Models\Components\MessageType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?MessageType $type = null;

    /**
     *
     * @var ?string $recipient
     */
    #[\JMS\Serializer\Annotation\SerializedName('recipient')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $recipient = null;

    /**
     * Message sender name
     *
     * @var ?string $sender
     */
    #[\JMS\Serializer\Annotation\SerializedName('sender')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $sender = null;

    /**
     * The count of parts that message consists of
     *
     * @var ?int $parts
     */
    #[\JMS\Serializer\Annotation\SerializedName('parts')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $parts = null;

    /**
     * Did the message contain special characters, e.g. Polish diacritics?
     *
     * @var ?bool $unicode
     */
    #[\JMS\Serializer\Annotation\SerializedName('unicode')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $unicode = null;

    /**
     * Was the message sent with class 0 (FLASH)?
     *
     * @var ?bool $flash
     */
    #[\JMS\Serializer\Annotation\SerializedName('flash')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $flash = null;

    /**
     * The price of message (in PLN)
     *
     * @var ?float $price
     */
    #[\JMS\Serializer\Annotation\SerializedName('price')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $price = null;

    /**
     * @param  ?MessageType  $type
     * @param  ?bool  $unicode
     * @param  ?bool  $flash
     * @param  ?float  $price
     * @param  ?string  $error
     * @param  ?string  $cid
     * @param  ?string  $recipient
     * @param  ?string  $sender
     * @param  ?int  $parts
     */
    public function __construct(?MessageType $type = null, ?bool $unicode = null, ?bool $flash = null, ?float $price = null, ?string $error = null, ?string $cid = null, ?string $recipient = null, ?string $sender = null, ?int $parts = null)
    {
        $this->type = $type;
        $this->unicode = $unicode;
        $this->flash = $flash;
        $this->price = $price;
        $this->error = $error;
        $this->cid = $cid;
        $this->recipient = $recipient;
        $this->sender = $sender;
        $this->parts = $parts;
    }
}