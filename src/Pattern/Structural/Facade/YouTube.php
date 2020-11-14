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
     * @return void
     */
    public function fetchVideo(string $url): void
    {
        echo "Fetching video metadata from {$url}<br>";
    }

    /**
     * @param string $path
     * @param string $title
     * @return void
     */
    public function saveAs(string $path, string $title): void
    {
        echo "Saving video file \"{$title}\" to path {$path}<br>";
    }
}