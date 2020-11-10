<?php

namespace App\Pattern\Structural\Decorator;

class TextFormat implements InputFormat
{
    /**
     * @var InputFormat
     */
    protected $inputFormat;

    /**
     * TextFormat constructor.
     * @param InputFormat $inputFormat
     */
    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    /**
     * @param string $text
     * @return string
     */
    public function formatText(string $text): string
    {
        return $this->inputFormat->formatText($text);
    }
}