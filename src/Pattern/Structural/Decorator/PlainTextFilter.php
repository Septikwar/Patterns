<?php


namespace App\Pattern\Structural\Decorator;


class PlainTextFilter extends TextFormat
{
    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);
        return strip_tags($text);
    }
}