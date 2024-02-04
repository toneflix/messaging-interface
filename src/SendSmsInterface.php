<?php

namespace  ToneflixCode\SmsInterface;

interface SendSmsInterface
{
    /**
     *  Send an SMS to a single recipient.
     *
     * @param string $to
     * @param  string $message
     *
     * @throws SmsSendingException
     * @return bool
     *
    */
    public function send(string $to, string $message): bool;

    /**
     *  Send an SMS to multiple recipients
     *
     * @param array $to
     * @param  string $message
     *
     * @throws SmsSendingException
     * @return bool
     *
    */
    public function sendBulk(array $to, string $message): bool;
}
