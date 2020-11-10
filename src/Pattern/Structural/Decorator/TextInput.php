<?php


namespace App\Pattern\Structural\Decorator;


class TextInput implements InputFormat
{
    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        return $text;
    }
}