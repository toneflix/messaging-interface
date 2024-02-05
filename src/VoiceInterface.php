<?php

namespace  ToneflixCode\MessagingInterface;

interface VoiceInterface
{
    /**
     *  Send a voice message
     *
     * @param string $to
     * @param  string $url
     *
     * @throws \ToneflixCode\MessagingInterface\Exceptions\VoiceSendingException
     * @return bool
     *
    */
    public function send(string $to, string $url): bool;

    /**
     *  Send a text to speach voice message
     *
     * @param string $to
     * @param  string $message
     *
     * @throws \ToneflixCode\MessagingInterface\Exceptions\VoiceSendingException
     * @return bool
     *
    */
    public function tts(string $to, string $message): bool;
}
