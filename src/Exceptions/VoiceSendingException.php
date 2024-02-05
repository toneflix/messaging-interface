<?php

namespace  ToneflixCode\MessagingInterface\Exceptions;

class VoiceSendingException extends \Exception
{
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        if ($message) {
            $message = "Unable to send voice message: {$message}";
        } else {
            $message = "Unable to send voice message.";
        }

        parent::__construct($message, $code, $previous);
    }
}
