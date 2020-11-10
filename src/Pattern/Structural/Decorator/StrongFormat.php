<?php


namespace App\Pattern\Structural\Decorator;


class StrongFormat extends TextFormat
{
    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);
        return "<strong>$text</strong>";
    }
}