<?php


namespace App\Pattern\Structural\Decorator;


interface InputFormat
{
    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string;
}