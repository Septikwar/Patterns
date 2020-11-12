<?php
declare(strict_types=1);


namespace App\Pattern\Structural\Facade;


class YouTube
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param string $url
     * @return string
     */
    public function fetchVideo(string $url): string
    {
        return "Fetching video metadata from {$url}";
    }

    /**
     * @param string $path
     * @param string $title
     * @return string
     */
    public function saveAs(string $path, string $title): string
    {
        return "Saving video file \"{$title}\" to path {$path}";
    }
}