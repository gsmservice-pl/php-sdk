<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Gsmservice\Gateway\Models\Operations;

use Gsmservice\Gateway\Utils\SpeakeasyMetadata;
class GetSubaccountDetailsRequest
{
    /**
     * Login of the subaccount (user) to get the data for
     *
     * @var string $userLogin
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=true,name=user_login')]
    public string $userLogin;

    /**
     * @param  string  $userLogin
     */
    public function __construct(string $userLogin)
    {
        $this->userLogin = $userLogin;
    }
}