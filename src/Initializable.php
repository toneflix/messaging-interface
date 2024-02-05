<?php

namespace  ToneflixCode\MessagingInterface;

use ToneflixCode\MessagingInterface\Exceptions\InitializationException;
use ToneflixCode\MessagingInterface\Exceptions\SmsSendingException;

trait Initializable
{
    public string $apiKey;

    public string $senderID;

    public string $gateway;

    public string $baseUrl;

    public string $endpoint;

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

    /**
     * Indicate that this message should be sent using the coporate endpoint
     *
     */
    public function corporate(): self
    {
        $this->endpoint = 'corporate';
        return $this;
    }


    /**
     * Build the multipart parameters
     *
     * @param string $recipients
     * @param ?string $message
     *
     * @return array
     */
    public function params(string $recipients, ?string $message = null, array $options = [], $voice = false): array
    {
        $params = [
            [
                'name' => 'token',
                'contents' => $this->apiKey,
            ],
            [
                'name' => !$voice ? 'senderID' : 'callerID',
                'contents' => $this->senderID,
            ],
            [
                'name' => 'recipients',
                'contents' => $recipients
            ],
            [
                'name' => 'gateway',
                'contents' => $this->gateway,
            ]
        ];

        if (count($options)) {
            foreach ($options as $option) {
                $params[] = $option;
            }
        } else {
            if (!$message) {
                throw new SmsSendingException("Cannot send Empty Message.", 1);
            }

            $params[] = [
                'name' => 'message',
                'contents' => $message
            ];
        }

        return $params;
    }
}
