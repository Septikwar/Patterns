<?php
declare(strict_types=1);

namespace App\Pattern\Structural\Decorator;


class ItalicFormat extends TextFormat
{
    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);
        return "<em>$text</em>";
    }
}