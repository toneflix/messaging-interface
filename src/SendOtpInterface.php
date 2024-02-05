<?php

namespace  ToneflixCode\MessagingInterface;

interface SendOtpInterface
{
    /**
     *  Send an otp to a number.
     *
     * @param string $to
     * @param  string $otp
     * @param  string $appnamecode
     * @param  string $templatecode
     *
     * @throws \ToneflixCode\MessagingInterface\Exceptions\SmsSendingException
     * @return bool
     *
    */
    public function sendOtp(string $to, string $otp, string $appnamecode, string $templatecode): bool;
}
