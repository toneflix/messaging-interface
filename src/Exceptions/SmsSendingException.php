<?php

namespace  ToneflixCode\MessagingInterface\Exceptions;

class SmsSendingException extends \Exception
{
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        if ($message) {
            $message = "Unable to send sms: {$message}";
        } else {
            $message = "Unable to send sms.";
        }

        parent::__construct($message, $code, $previous);
    }
}
