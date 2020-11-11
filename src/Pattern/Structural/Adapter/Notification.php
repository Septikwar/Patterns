<?php
declare(strict_types=1);

namespace App\Pattern\Structural\Adapter;

interface Notification
{
    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    public function send(string $title, string $message): string;
}