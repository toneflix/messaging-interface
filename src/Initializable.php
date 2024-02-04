<?php

namespace  ToneflixCode\SmsInterface;

trait Initializable
{
    public string $accessToken;

    public string $senderID;

    public function configure(string $accessToken, string $senderID)
    {
        $this->accessToken = $accessToken;
        $this->senderID = $senderID;

        if (!$this->senderID) {
            throw new InitializationException("Sender ID is missing.", 1);
        }

        if (!$this->accessToken) {
            throw new InitializationException("No access token/Api key provided.", 1);
        }
    }
}
