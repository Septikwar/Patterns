<?php

namespace App\Pattern\Structural\Adapter;

class SlackApi
{
    private $login;
    private $apiKey;

    /**
     * @param string $login
     * @param string $apiKey
     */
    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function login(): string
    {
        return "Logged in to a slack account {$this->login}.";
    }

    /**
     * @param string $chatId
     * @param string $message
     * @return string
     */
    public function sendMessage(string $chatId, string $message): string
    {
        return "Posted followed message into the {$chatId} chat: {$message}.";
    }
}