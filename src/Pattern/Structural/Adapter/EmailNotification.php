<?php
declare(strict_types=1);

namespace App\Pattern\Structural\Adapter;

class EmailNotification implements Notification
{
    private $adminEmail;

    /**
     * @param string $adminEmail
     */
    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    public function send(string $title, string $message): string
    {
        return "Send Email with title \"{$title}\" to {$this->adminEmail} that says \"{$message}\".";
    }
}