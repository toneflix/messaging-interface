<?php

namespace  ToneflixCode\SmsInterface;

use ToneflixCode\SmsInterface\Exceptions\InitializationException;

trait Initializable
{
    public string $accessToken;

    public string $senderID;

    public string $gateway;

    /**
     * Load the configuration
     *
     * @param string $senderID
     * @param string $accessToken
     * @param string $gateway
     *
     * @return void
     */
    public function configure(string $senderID, string $accessToken, string $gateway = null): void
    {
        if (!$senderID) {
            throw new InitializationException("Sender ID is missing.", 1);
        }

        if (!$accessToken) {
            throw new InitializationException("No access token/Api key provided.", 1);
        }

        $this->accessToken = $accessToken;
        $this->senderID = $senderID;
        $this->senderID = $gateway;
    }
}
