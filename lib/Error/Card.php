<?php

namespace Stripe\Error;

class Card extends Base
{
    protected $declineCode;
    protected $stripeParam;

    public function __construct(
        $message,
        $stripeParam,
        $stripeCode,
        $httpStatus,
        $httpBody,
        $jsonBody,
        $httpHeaders = null,
        $declineCode = null
    ) {
        parent::__construct($message, $httpStatus, $httpBody, $jsonBody, $httpHeaders, $stripeCode);
        $this->declineCode = $declineCode;
        $this->stripeParam = $stripeParam;
    }

    public function getDeclineCode()
    {
        return $this->declineCode;
    }

    public function getStripeParam()
    {
        return $this->stripeParam;
    }
}
