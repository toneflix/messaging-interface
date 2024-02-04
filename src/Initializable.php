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
    }
}