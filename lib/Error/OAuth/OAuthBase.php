<?php

namespace Stripe\Error\OAuth;

class OAuthBase extends \Stripe\Error\Base
{
    protected $errorCode;

    public function __construct(
        $code,
        $description,
        $httpStatus = null,
        $httpBody = null,
        $jsonBody = null,
        $httpHeaders = null
    ) {
        parent::__construct($description, $httpStatus, $httpBody, $jsonBody, $httpHeaders, null);
        $this->errorCode = $code;
    }

    public function getErrorCode()
    {
        return $this->errorCode;
    }
}
