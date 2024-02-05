<?php

namespace  ToneflixCode\SmsInterface;

use ToneflixCode\SmsInterface\Exceptions\InitializationException;

trait Initializable
{
    public string $apiKey;

    public string $senderID;

    public string $gateway;

    /**
     * Load the configuration
     *
     * @param string $senderID
     * @param string $apiKey
     * @param string $gateway
     *
     * @return void
     */
    public function configure(string $senderID, string $apiKey, string $gateway = null): void
    {
        if (!$senderID) {
            throw new InitializationException("Sender ID is missing.", 1);
        }

        if (!$apiKey) {
            throw new InitializationException("No access token/Api key provided.", 1);
        }

        $this->apiKey = $apiKey;
        $this->senderID = $senderID;
        $this->gateway = $gateway;
    }
}
