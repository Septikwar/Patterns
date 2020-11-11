<?php
declare(strict_types=1);

namespace App\Pattern\Structural\Adapter;

class SlackNotification implements Notification
{
    private $slack;

    private $chatId;

    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }
    public function send(string $title, string $message): string
    {
        $slackMessage = "#{$title} #{$message}";
        $this->slack->login();
        return $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}