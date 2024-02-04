<?php

namespace  ToneflixCode\SmsInterface\Exceptions;

class InitializationException extends \Exception
{
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        if ($message) {
            $message = "Configuration Error: {$message}";
        } else {
            $message = "Configuration Error.";
        }

        parent::__construct($message, $code, $previous);
    }
}
