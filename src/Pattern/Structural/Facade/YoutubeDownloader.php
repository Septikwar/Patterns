<?php
declare(strict_types=1);

namespace App\Pattern\Structural\Facade;

class YoutubeDownloader
{
    protected $youtube;

    protected $ffmpeg;

    public function __construct(string $youtubeApiKey)
    {
        $this->youtube = new YouTube($youtubeApiKey);
        $this->ffmpeg = new FFMpeg();
    }

    /**
     * @param string $url
     */
    public function downloadVideo(string $url)
    {
        $this->youtube->fetchVideo('https://youtube.com');
        $this->youtube->saveAs("/path", "title video");

        $video = $this->ffmpeg->open("/path");
        $video->filters();
    }
}