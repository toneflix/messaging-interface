<?php

namespace  ToneflixCode\SmsInterface;

interface SendSmsInterface
{
    /**
     *  Send an otp to a number.
     *
     * @param string $to
     * @param  string $otp
     * @param  string $appnamecode
     * @param  string $templatecode
     *
     * @throws \ToneflixCode\SmsInterface\Exceptions\SmsSendingException
     * @return bool
     *
    */
    public function send(string $to, string $otp, string $appnamecode, string $templatecode): bool;
}
